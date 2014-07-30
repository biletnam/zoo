<?php

/**
 * This is the model class for table "priv".
 *
 * The followings are the available columns in table 'priv':
 * @property integer $id_priv
 * @property string $date
 * @property string $description
 * @property integer $id_animal
 * @property integer $complete
 *
 * The followings are the available model relations:
 * @property Animals $idAnimal
 */
class Priv extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'priv';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		return array(
			array('date, description, id_animal', 'required'),
			array('id_animal', 'numerical', 'integerOnly'=>true),
			array('description', 'length', 'max'=>255),
			array('id_priv, date, description, id_animal, complete, crazy', 'safe', /*'on'=>'search | save | insert'*/),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		return array(
			'animal' => array(self::BELONGS_TO, 'Animal', 'id_animal'),
			//'master' => array(self::BELONGS_TO, 'Master', 'id_animal'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_priv' => 'Id',
			'date' => 'Дата прививки',
			'description' => 'Описание',
			'id_animal' => 'Id Animal',
			'complete' => 'Состояние',
			'crazy' => 'Бешенство',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_priv',$this->id_priv);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('id_animal',$this->id_animal);
		$criteria->compare('complete',$this->complete);
		$criteria->compare('ecrazy',$this->crazy);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Priv the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	protected function beforeSave() 
	{
   		if (parent::beforeSave()) {
   			if ($this->date) {
   				$this->date = date('Y-m-d', strtotime($this->date));   				
   				return true;
   			}
       	} else {
       		return false;
       	}	
	}
	
	protected function afterFind() 
	{
	   $date = date('d-m-Y', strtotime($this->date));
	   $date = ($date === '01-01-1970') ? '00-00-0000' : $date;
	   $this->date = $date;
	   parent::afterFind();
	}
}
