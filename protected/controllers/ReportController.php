<?php

class ReportController extends Controller
{
	public function actionIndex()
	{
		if (Yii::app()->user->checkAccess('indexReport')) {
			$this->render('index');
		} else {
			 throw new CHttpException(403, 'Нет доступа');
		}
	}

	public function actionCountAnimal()
	{
		if (Yii::app()->user->checkAccess('countAnimalReport')) {
			if (!isset($_POST['report_type'])) {
				throw new CHttpException(400,'Неверный запрос');
			}
			
			$report_type = $_POST['report_type'];

			$criteria = new CDbCriteria();

			if ($report_type == 'life') {
				$criteria->addCondition('date_death = :date_death');
				$criteria->params = array('date_death'=>'00-00-0000');
			} elseif ($report_type == 'death') {
				$criteria->addCondition('date_death <> :date_death');
				$criteria->params = array('date_death'=>'00-00-0000');
			}

			$animals = Animal::model()->findAll($criteria);

			$dataProvider = new CArrayDataProvider($animals,
								array('keyField' => 'id_animal','pagination'=>false,));

			$this->render('count_animal', array('dataProvider'=>$dataProvider));
		} else {
			 throw new CHttpException(403, 'Нет доступа');
		}
	}

	public function actionPriv()
	{
		if (Yii::app()->user->checkAccess('privReport')) {		
			$request = Yii::app()->request;
			$report_priv = $request->getParam('report_priv');
			
			if (!$report_priv) {
				throw new CHttpException(400,'Неверный запрос');
			}
			
			$criteria = new CDbCriteria(array('order'=>'date DESC'));		
			
			if ($report_priv == 'd') {			
				$criteria->addCondition('crazy = :crazy');
				$criteria->params = array('crazy'=>'0');
			} elseif ($report_priv == 'crazy') {
				$criteria->addCondition('crazy = :crazy');
				$criteria->params = array('crazy'=>'1');
			} elseif ($report_priv == 'all') {
				$criteria->addInCondition('crazy', array('0','1'),'OR');
			}

			$privs = Priv::model()->findAll($criteria);

			$dataProvider = new CArrayDataProvider($privs,
								array('keyField' => 'id_priv',
									  'pagination'=>false,));
			if ($request->requestType == 'POST') {
				$this->render('priv', array('dataProvider'=>$dataProvider));
			} else {
				$this->render('print', array('dataProvider'=>$dataProvider));
			}
		} else {
			 throw new CHttpException(403, 'Нет доступа');
		}
	}

	public function actionType()
	{
		if (Yii::app()->user->checkAccess('typeReport')) {	
			if (!isset($_POST['report_type'])) {
				$id_type = 0;
			} else {
				$id_type = $_POST['report_type'];
			}
						
			$criteria = new CDbCriteria();	

			if (!$id_type) {						
				$id_type = array();
				$id_type_array = Type::model()->findAll();
				foreach ($id_type_array as $i) {
					$id_type[] = $i->id_type;
				}
			} else {
				$id_type = array((int)$id_type);
			}

			$criteria->addInCondition('id_type', $id_type, 'OR');

			$animals = Animal::model()->findAll($criteria);

			$dataProvider = new CArrayDataProvider($animals,
								array('keyField' => 'id_animal','pagination'=>false,));

			$this->render('type', array('dataProvider'=>$dataProvider));
		} else {
			 throw new CHttpException(403, 'Нет доступа');
		}
	}

	public function actionPrint()
	{
		$this->render('print');
	}
}