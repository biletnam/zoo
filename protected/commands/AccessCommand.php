<?php 

class AccessCommand extends CConsoleCommand
{
    public function actionAddRules() 
    {
    	$auth=Yii::app()->authManager;

    	$auth->createOperation('viewAnemnes','ViewAnemnes1');
    	$auth->createOperation('createAnemnes','CreateAnemnes');
    	$auth->createOperation('indexAnemnes','IndexAnemnes');
    	$auth->createOperation('viewAnimal','ViewAnimal');
    	$auth->createOperation('createAnimal','CreateAnimal');
    	$auth->createOperation('indexAnimal','IndexAnimal');
    	$auth->createOperation('viewCure','ViewCure');
    	$auth->createOperation('createCure','CreateCure');
    	$auth->createOperation('indexCure','IndexCure');
    	$auth->createOperation('viewMaster','ViewMaster');
    	$auth->createOperation('createMaster','CreateMaster');
    	$auth->createOperation('indexMaster','IndexMaster');
    	$auth->createOperation('viewPriv','ViewPriv');
    	$auth->createOperation('createPriv','CreatePriv');
    	$auth->createOperation('indexPriv','IndexPriv');
    	$auth->createOperation('viewRecomendation','ViewRecomendation');
    	$auth->createOperation('createRecomendation','CreateRecomendation');
    	$auth->createOperation('indexRecomendation','IndexRecomendation');
    	$auth->createOperation('viewType','ViewType');
    	$auth->createOperation('createType','CreateType');
    	$auth->createOperation('indexType','IndexType');
    	$auth->createOperation('viewMedic','ViewMedic');
    	$auth->createOperation('createMedic','CreateMedic');
    	$auth->createOperation('indexMedic','IndexMedic');
    	$auth->createOperation('indexSearch','IndexSearch');
    	
    	$auth->createOperation('updateAnemnes','UpdateAnemnes');
    	$auth->createOperation('deleteAnemnes','DeleteAnemnes');
    	$auth->createOperation('adminAnemnes','AdminAnemnes');
    	$auth->createOperation('updateAnimal','UpdateAnimal');
    	$auth->createOperation('deleteAnimal','DeleteAnimal');
    	$auth->createOperation('adminAnimal','AdminAnimal');
    	$auth->createOperation('updateCure','UpdateCure');
    	$auth->createOperation('deleteCure','DeleteCure');
    	$auth->createOperation('adminCure','AdminCure');
    	$auth->createOperation('updateMaster','UpdateMaster');
    	$auth->createOperation('deleteMaster','DeleteMaster');
    	$auth->createOperation('adminMaster','AdminMaster');
    	$auth->createOperation('updatePriv','UpdatePriv');
    	$auth->createOperation('deletePriv','DeletePriv');
    	$auth->createOperation('adminPriv','AdminPriv');
    	$auth->createOperation('updateRecomendation','UpdateRecomendation');
    	$auth->createOperation('deleteRecomendation','DeleteRecomendation');
    	$auth->createOperation('adminRecomendation','AdminRecomendation');
    	$auth->createOperation('updateType','UpdateType');
    	$auth->createOperation('deleteType','DeleteType');
    	$auth->createOperation('adminType','AdminType');
    	$auth->createOperation('updateMedic','UpdateMedic');
    	$auth->createOperation('deleteMedic','DeleteMedic');
    	$auth->createOperation('adminMedic','AdminMedic');
    	
    	$auth->createOperation('countAnimalReport','CountAnimalReport');
    	$auth->createOperation('privReport','PrivReport');
    	$auth->createOperation('typeReport','TypeReport');
    	$auth->createOperation('printReport','PrintReport');
    	
    	$auth->createOperation('registrationUser','RegistrationUser');

    	$task = $auth->createTask('viewDatabase', 'viewDatabase');
    	$task->addChild('viewAnemnes');
    	$task->addChild('createAnemnes');
    	$task->addChild('indexAnemnes');
    	$task->addChild('viewAnimal');
    	$task->addChild('createAnimal');
    	$task->addChild('indexAnimal');
    	$task->addChild('viewCure');
    	$task->addChild('createCure');
    	$task->addChild('indexCure');
    	$task->addChild('viewMaster');
    	$task->addChild('createMaster');
    	$task->addChild('indexMaster');
    	$task->addChild('viewPriv');
    	$task->addChild('createPriv');
    	$task->addChild('indexPriv');
    	$task->addChild('viewRecomendation');
    	$task->addChild('createRecomendation');
    	$task->addChild('indexRecomendation');
    	$task->addChild('viewType');
    	$task->addChild('createType');
    	$task->addChild('indexType');
    	$task->addChild('viewMedic');
    	$task->addChild('createMedic');
    	$task->addChild('indexMedic');
    	$task->addChild('indexSearch');

    	$task = $auth->createTask('manageDatabase', 'manageDatabase');
    	$task->addChild('viewDatabase');
    	$task->addChild('updateAnemnes');
    	$task->addChild('deleteAnemnes');
    	$task->addChild('adminAnemnes');
    	$task->addChild('updateAnimal');
    	$task->addChild('deleteAnimal');
    	$task->addChild('adminAnimal');
    	$task->addChild('updateCure');
    	$task->addChild('deleteCure');
    	$task->addChild('adminCure');
    	$task->addChild('updateMaster');
    	$task->addChild('deleteMaster');
    	$task->addChild('adminMaster');
    	$task->addChild('updatePriv');
    	$task->addChild('deletePriv');
    	$task->addChild('adminPriv');
    	$task->addChild('updateRecomendation');
    	$task->addChild('deleteRecomendation');
    	$task->addChild('adminRecomendation');
    	$task->addChild('updateType');
    	$task->addChild('deleteType');
    	$task->addChild('adminType');
    	$task->addChild('updateMedic');
    	$task->addChild('deleteMedic');
    	$task->addChild('adminMedic');

    	$task = $auth->createTask('viewReports', 'viewReports');
    	$task->addChild('countAnimalReport');
    	$task->addChild('privReport');
    	$task->addChild('typeReport');
    	$task->addChild('printReport');

    	$task = $auth->createTask('manageUser', 'manageUser');
    	$task->addChild('registrationUser');

    	$role=$auth->createRole('user');
    	$role->addChild('viewDatabase');
    	$role->addChild('viewReports');

    	$role=$auth->createRole('manager');
    	$role->addChild('user');
    	$role->addChild('manageDatabase');

    	$role=$auth->createRole('admin');
    	$role->addChild('manager');
    	$role->addChild('manageUser');

    	$auth->save();
    }
 
    public function actionAddAdminUser() 
    {
    
    }
}

?>