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
		$form = new User;

		if (!Yii::app()->user->isGuest) {
            $this->redirect(Yii::app()->createUrl('master/index'));
         } else {
            if (!empty($_POST['User'])) {
                $form->attributes = $_POST['User'];
                $form->scenario = 'login';
 				  if($form->validate()) {
                        $this->redirect(Yii::app()->createUrl('master/index'));
                  }
            } 
            $this->render('login', array('model' => $form));
        }
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
             //throw new CException('Вы уже зарегистрированны!');
			$this->redirect(Yii::app()->createUrl('master/index'));
        } else {
        	if (!empty($_POST['User'])) {

        		$form->attributes = $_POST['User'];
                $form->scenario = 'registration';
                 if($form->validate()) {
                 	 if ($form->model()->count("login = :login", array(':login' => $form->login))) {
                 	 	$form->addError('login', 'Логин уже занят');
                        $this->render("registration", array('model' => $form));
                 	 } else {
                 	 	$form->password = $form->hashPassword($form->password);
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