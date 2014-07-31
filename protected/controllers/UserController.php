<?php

class UserController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public $layout='//layouts/login';

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
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('index');
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
		//$model = new LoginForm;
		$form = new User;

		if (!Yii::app()->user->isGuest) {
            throw new CException('Вы уже зарегистрированы!');
         } else {
            if (!empty($_POST['User'])) {
                $form->attributes = $_POST['User'];
                //var_dump($form);
                //$form->verifyCode = $_POST['User']['verifyCode'];
                //$model->scenario = 'test';
 				  if($form->validate()) {
                        $this->redirect(Yii::app()->createUrl('master/index'));
                  }
            } 
            $this->render('login', array('model' => $form));
        }

		// if it is ajax validation request
		/*if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}*/

		// collect user input data
		/*if(isset($_POST['User']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(Yii::app()->user->returnUrl);
		}
		// display the login form
		$this->render('login',array('model'=>$model));*/
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->createUrl('user/login'));
	}

	public function actionRegistration()
	{
		$form = new User();

		if (!Yii::app()->user->isGuest) {
             throw new CException('Вы уже зарегистрированны!');
        } else {
        	if (!empty($_POST['User'])) {

        		$form->attributes = $_POST['User'];
        		//svar_dump($form->attributes); 
                //$form->verifyCode = $_POST['User']['verifyCode'];
                 if($form->validate()) {
                 	 if ($form->model()->count("login = :login", array(':login' => $form->login))) {
                 	 	$form->addError('login', 'Логин уже занят');
                        $this->render("registration", array('model' => $form));
                 	 } else {
                 	 	$form->password = $form->hashPassword($form->password);
                 	 	//var_dump($form);
                 	 	$form->save();
                        $this->render("registration_success");
                 	 }
                 } else {
                 	$this->render("registration", array('model' => $form));
                 }
        	} else {
        		$this->render("registration", array('model' => $form));
        	}
        }
	
	}
}