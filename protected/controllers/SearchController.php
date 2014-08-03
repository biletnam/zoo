<?php

class SearchController extends Controller
{
	public function actionIndex()
	{
		if (Yii::app()->user->checkAccess('indexSearch')) {	
			$masters = $_GET["Master"];
			$animals = $_GET["Animal"];

			foreach ($masters as $k=>$v) {
				if ($v != "") {
					$master[$k] = $v;
				}
			}

			foreach ($animals as $k=>$v) {
				if ($v != "") {
					$animal[$k] = $v;
				}
			}

			if ($master) {
				$criteria_master = new CDbCriteria;
				$criteria_master->addColumnCondition($master,'AND');	
				$data_master = Master::model()->findAll($criteria_master);			
			}

			if ($animal) {
				$criteria_animal = new CDbCriteria;
				$criteria_animal->addColumnCondition($animal,'AND');	
				$data_animal = Animal::model()->findAll($criteria_animal);
			}

			$this->render('index', array(
					'data_master'=>$data_master,'data_animal'=>$data_animal)
			);
		} else {
			 throw new CHttpException(403, 'Нет доступа');
		}
	}
}