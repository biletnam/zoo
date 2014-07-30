<?php

/**
 * This is the model class for table "anemneses".
 *
 * The followings are the available columns in table 'anemneses':
 * @property integer $id_anemnes
 * @property string $date
 * @property string $description
 * @property double $summ
 * @property integer $id_animal
 * @property integer $id_medic
 * @property double $temperature
 * @property string $color_sl
 * @property string $skin
 *
 * The followings are the available model relations:
 * @property Animals $idAnimal
 * @property Medics $idMedic
 */
class Anemnes extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'anemneses';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('date, description, id_animal, id_medic', 'required'),
			array('id_animal, id_medic', 'numerical','integerOnly'=>true),
			array('summ, temperature', 'numerical'),
			array('color_sl, skin', 'length', 'max'=>255),
			//array('summ', 'match', 'pattern'=>'(/^\d*\.?\d*[0-9]+\d*$)|(^[0-9]+\d*\.\d*$)/'),
			//array('temperature', 'match', 'pattern'=>'(/^\d*\.?\d*[0-9]+\d*$)|(^[0-9]+\d*\.\d*$)/'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_anemnes, date, description, summ, id_animal, id_medic, temperature, color_sl, skin','safe', 'on'=>'search | save'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'animal' => array(self::BELONGS_TO, 'Animal', 'id_animal'),
			'medic' => array(self::BELONGS_TO, 'Medic', 'id_medic'),
			'cure' => array(self::HAS_MANY, 'Cure', 'id_anemnes'),
			'recomendation' => array(self::HAS_MANY, 'Recomendation', 'id_anemnes'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_anemnes' => 'Id',
			'date' => 'Дата',
			'description' => 'Описание',
			'summ' => 'Сумма (грн.)',
			'id_animal' => 'Животное',
			'id_medic' => 'Доктор',			
			'temperature' => 'Температура',			
			'color_sl' => 'Цвет слизистой',			
			'skin' => 'Состояние кожи',			
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

		$criteria->compare('id_anemnes',$this->id_anemnes);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('summ',$this->summ);
		$criteria->compare('id_animal',$this->id_animal);
		$criteria->compare('id_medic',$this->id_medic);
		$criteria->compare('temperature',$this->temperature);
		$criteria->compare('color_sl',$this->color_sl);
		$criteria->compare('skin',$this->skin);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Anemnes the static model class
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
