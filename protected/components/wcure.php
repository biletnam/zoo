<?php 

//Yii::import('zii.widgets.CPortlet');
class WCure extends CWidget
{
	public $data = array();
	public $name;
    public $id_anemnes;

    public function init()
    {
        // этот метод будет вызван внутри CBaseController::beginWidget()
        parent::init();
    }
 
    public function run()
    {
        // этот метод будет вызван внутри CBaseController::endWidget()
        $this->render('wcure', array('data', 'name', 'id_anemnes'));
    }    

}