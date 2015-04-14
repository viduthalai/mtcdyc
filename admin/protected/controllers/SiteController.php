<?php
 
class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */ 
	public $metaDescription;
	public $metaKeywords;

	public function getMetaDescription() {
		if(!$this->metaDescription)
		return Yii::app()->settings->getValue('meta_description'); //return default description
		return $this->metaDescription;
	}

	public function getMetaKeywords() {
		if(!$this->metaKeywords)
		return Yii::app()->settings->getValue('meta_keywords'); //return default keywords
		return $this->metaKeywords;
	}
	public function actions()
	{
	return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		$user = Yii::app()->session['churchDetails'];
		if($user['id']){
			$this->render('register', array());
		}else{
			$this->redirect('login');
		}
	}
	

		public function actionRegister()
	{
		echo "string";
		$this->render('register', array());
	}

		public function actionChurchRegister()
	{
		 $sql = "SELECT * FROM chruch_list where email ='".$_GET['email']."'";
		 $dataReader =  Yii::app()->db->createCommand($sql)->queryRow();
		 if(isset($dataReader['id'])){
		 	echo 1;exit();
		 }else{
		 	 $updateSql = "INSERT INTO chruch_list (email,church_name,pass) VALUES('".$_GET['email']."','".$_GET['parish']."','".$_GET['pass']."')";
			 $updateSql = Yii::app()->db->createCommand($updateSql)->execute();
			 echo 2;exit();
		 }
        }
	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}


	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		 
		$login =0;
		// if it is ajax validation request
		if(isset($_POST['username']) && isset($_POST['password']))
		{
			$sql = "SELECT * FROM chruch_list where email ='".$_POST['username']."' and pass='".$_POST['password']."'";
			$dataReader =  Yii::app()->db->createCommand($sql)->queryRow();
			// validate user input and redirect to the previous page if valid
			if(isset($dataReader['id'])){
				Yii::app()->session['churchDetails'] = $dataReader;
				$this->redirect(Yii::app()->user->returnUrl);
			}else{
				$login =1;
			}
		}
		// display the login form
		$this->render('login',array('login' => $login));
	}
	
	public function actionLogout()
	{
		unset(Yii::app()->session['churchDetails']);
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
}