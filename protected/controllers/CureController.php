<?php

class CureController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		if (Yii::app()->user->checkAccess('viewCure')) {
			$this->render('view',array(
				'model'=>$this->loadModel($id),
			));
		} else {
			 throw new CHttpException(403, 'Нет доступа');
		}
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		if (Yii::app()->user->checkAccess('createCure')) {
			$model = new Cure;

			$id_anemnes = ($_GET['id_anemnes']);

			if(isset($_POST['Cure']))
			{
				$model->attributes=$_POST['Cure'];
				if($model->save())
					$this->redirect(array('anemnes/view','id'=>$id_anemnes));
			}

			$this->render('create',array(
				'model'=>$model,
				'anemnes'=>$id_anemnes,
			));
		} else {
			 throw new CHttpException(403, 'Нет доступа');
		}
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		if (Yii::app()->user->checkAccess('updateCure')) {
			$model=$this->loadModel($id);

			$id = ($_GET['id']);

			if(isset($_POST['Cure']))
			{
				$model->attributes=$_POST['Cure'];
				if($model->save())
					$this->redirect(array('anemnes/view','id'=>$model->id_anemnes));
			}

			$this->render('update',array(
				'model'=>$model,
			));
		} else {
			 throw new CHttpException(403, 'Нет доступа');
		}
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		if (Yii::app()->user->checkAccess('deleteCure')) {
			$this->loadModel($id)->delete();

			if(!isset($_GET['ajax']))
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
		} else {
			 throw new CHttpException(403, 'Нет доступа');
		}
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		if (Yii::app()->user->checkAccess('indexCure')) {
			$dataProvider=new CActiveDataProvider('Cure');
			$this->render('index',array(
				'dataProvider'=>$dataProvider,
			));
		} else {
			 throw new CHttpException(403, 'Нет доступа');
		}
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		if (Yii::app()->user->checkAccess('adminCure')) {
			$model=new Cure('search');
			$model->unsetAttributes();  // clear any default values
			if(isset($_GET['Cure']))
				$model->attributes=$_GET['Cure'];

			$this->render('admin',array(
				'model'=>$model,
			));
		} else {
			 throw new CHttpException(403, 'Нет доступа');
		}
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Cure the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Cure::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Cure $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='cure-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
