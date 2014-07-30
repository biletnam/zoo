<?php

class MainController extends Controller
{
	public function actionIndex()
	{
		$model = new User;

		$this->render('index', array('model'=>$model));
	}
}