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

	public function actionAdmin()
    {
    	$this->layout = 'main';
        $model=new User('search');
        $model->unsetAttributes();  // clear any default values
        if(isset($_GET['User']))
            $model->attributes=$_GET['User'];

        $this->render('admin',array(
            'model'=>$model,
        ));
    }

    public function actionView($id)
    {
        $this->render('view',array(
            'model'=>$this->loadModel($id),
        ));
    }

    public function actionCreate()
    {
        $model=new User;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if(isset($_POST['User']))
        {
            $model->attributes=$_POST['User'];
            if($model->save())
                $this->redirect(array('view','id'=>$model->id_user));
        }

        $this->render('create',array(
            'model'=>$model,
        ));
    }

    public function actionUpdate($id)
    {
        $model=$this->loadModel($id);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if(isset($_POST['User']))
        {
            $model->attributes=$_POST['User'];
            if($model->save())
                $this->redirect(array('view','id'=>$model->id_user));
        }

        $this->render('update',array(
            'model'=>$model,
        ));
    }

    public function actionDelete($id)
    {
        $this->loadModel($id)->delete();

        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if(!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }

    public function loadModel($id)
    {
        $model=User::model()->findByPk($id);
        if($model===null)
            throw new CHttpException(404,'The requested page does not exist.');
        return $model;
    }

    protected function performAjaxValidation($model)
    {
        if(isset($_POST['ajax']) && $_POST['ajax']==='user-form')
        {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}