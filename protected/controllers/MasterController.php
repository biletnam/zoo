<?php

class MasterController extends Controller
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
			//'postOnly + delete', // we only allow deletion via POST request
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
		if (Yii::app()->user->checkAccess('viewMaster')) {
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
		if (Yii::app()->user->checkAccess('createMaster')) {
			$model=new Master;

			if(isset($_POST['Master']))
			{
				$model->attributes=$_POST['Master'];
				if($model->save())
					$this->redirect(array('view','id'=>$model->id_master));
			}

			$this->render('create',array(
				'model'=>$model,
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
		if (Yii::app()->user->checkAccess('updateMaster')) {
			$model=$this->loadModel($id);

			if(isset($_POST['Master']))
			{
				$model->attributes=$_POST['Master'];
				if($model->save())
					$this->redirect(array('view','id'=>$model->id_master));
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
		if (Yii::app()->user->checkAccess('deleteMaster')) {
			$transaction = Yii::app()->db->beginTransaction();
			try {
				$master = $this->loadModel($id);
				$animals = $master->animal;

				if ($animals) {
					foreach ($animals as $animal) {
						$privs = $animal->priv;
						if ($privs) {
							foreach ($privs as $priv) {
								$priv->delete();
							}
						}
						$anemneses = $animal->anemnes;
						if ($anemneses) {
							foreach ($anemneses as $anemnes) {
								$cures = $anemnes->cure;
								if ($cures) {
									foreach ($cures as $cure) $cure->delete();
								}
								$recomendations = $anemnes->recomendation;
								if ($recomendations) {
									foreach ($recomendations as $recomendation) $recomendation->delete();
								}
								$anemnes->delete();
							}
						}
						$animal->delete();
					}
				}
				$master->delete();
				$transaction->commit();

			} catch(Exception $e) { 
	       		$transaction->rollback();
	       		$error = $e->getMessage();
	        }

	        $this->redirect(Yii::app()->createUrl('master/index'));

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
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
		if (Yii::app()->user->checkAccess('indexMaster')) {
			$dataProvider=new CActiveDataProvider('Master');
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
		if (Yii::app()->user->checkAccess('adminMaster')) {
			$model=new Master('search');
			$model->unsetAttributes();  // clear any default values
			if(isset($_GET['Master']))
				$model->attributes=$_GET['Master'];

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
	 * @return Master the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Master::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Master $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='master-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
