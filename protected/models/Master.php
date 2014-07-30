<?php

/**
 * This is the model class for table "masters".
 *
 * The followings are the available columns in table 'masters':
 * @property integer $id_master
 * @property string $firstname
 * @property string $surname
 * @property string $lastname
 * @property string $city
 * @property string $street
 * @property string $n_home
 * @property integer $n_apart
 * @property string $telephone_1
 * @property string $telephone_2
 * @property string $telephone_3
 * @property string $description
 *
 * The followings are the available model relations:
 * @property Animals[] $animals
 */
class Master extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'masters';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('firstname, surname, lastname, city, street, n_home', 'required'),
			array('n_apart', 'numerical', 'integerOnly'=>true),
			array('firstname, surname, lastname, description', 'length', 'max'=>255),
			array('city', 'length', 'max'=>100),
			array('street, telephone_1, telephone_2, telephone_3', 'length', 'max'=>45),
			array('n_home', 'length', 'max'=>5),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_master, firstname, surname, lastname, city, street, n_home, n_apart, telephone_1, telephone_2, telephone_3, description', 'safe', 'on'=>'search'),
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
			'animal' => array(self::HAS_MANY, 'Animal', 'id_master'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_master' => 'Id',
			'firstname' => 'Имя',
			'surname' => 'Отчество',
			'lastname' => 'Фамилия',
			'city' => 'Населенный пункт',
			'street' => 'Улица',
			'n_home' => 'N дома',
			'n_apart' => 'N квартиры',
			'telephone_1' => 'Телефон 1',
			'telephone_2' => 'Телефон 2',
			'telephone_3' => 'Телефон 3',
			'description' => 'Описание',
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

		$criteria->compare('id_master',$this->id_master);
		$criteria->compare('firstname',$this->firstname,true);
		$criteria->compare('surname',$this->surname,true);
		$criteria->compare('lastname',$this->lastname,true);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('street',$this->street,true);
		$criteria->compare('n_home',$this->n_home,true);
		$criteria->compare('n_apart',$this->n_apart);
		$criteria->compare('telephone_1',$this->telephone_1,true);
		$criteria->compare('telephone_2',$this->telephone_2,true);
		$criteria->compare('telephone_3',$this->telephone_3,true);
		$criteria->compare('description',$this->description,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Master the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

}
