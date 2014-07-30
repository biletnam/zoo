<?php

class ReportController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}

	public function actionCountAnimal()
	{
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
	}

	public function actionPriv()
	{
		/*echo "<pre>";
		var_dump($_POST);
		echo "</pre>";*/

		if (!isset($_POST['report_priv'])) {
			throw new CHttpException(400,'Неверный запрос');
		}
		
		$report_priv = $_POST['report_priv'];

		$criteria = new CDbCriteria();
		$criteria->addCondition('crazy = :crazy');

		

		if ($report_priv == 'd') {			
			$criteria->params = array('crazy'=>'0');
		} elseif ($report_priv == 'crazy') {
			$criteria->params = array('crazy'=>'1');
		}

		$privs = Priv::model()->findAll($criteria);

		$dataProvider = new CArrayDataProvider($animals,
							array('keyField' => 'id_priv','pagination'=>false,));

		$this->render('priv', array('dataProvider'=>$dataProvider));
	}

	public function actionType()
	{
		$id_type = $_POST['report_type'];
		
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
	}
}