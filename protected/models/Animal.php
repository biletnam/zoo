<?php

/**
 * This is the model class for table "animals".
 *
 * The followings are the available columns in table 'animals':
 * @property integer $id_animal
 * @property string $name
 * @property integer $id_type
 * @property integer $sex
 * @property integer $age
 * @property string $reg_num
 * @property string $date_reg
 * @property string $date_death
 * @property integer $id_priv
 * @property integer $id_master
 * @property string $description
 *
 * The followings are the available model relations:
 * @property Anemneses[] $anemneses
 * @property Masters $idMaster
 * @property Types $idType
 * @property Priv[] $privs
 */
class Animal extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'animals';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, id_type, id_master, date_reg', 'required'),
			array('id_type, sex, age, id_priv, id_master', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>100),
			array('reg_num', 'length', 'max'=>45),
			array('description', 'length', 'max'=>255),
			array('date_reg, date_death', 'safe'),
			//array('date_reg, date_death', 'date', 'format'=>'dd.MM.yyyy'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_animal, name, id_type, sex, age, reg_num, date_reg, date_death, id_priv, id_master, description', 'safe', 'on'=>'search'),
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
			'anemnes' => array(self::HAS_MANY, 'Anemnes', 'id_animal'),
			'master' => array(self::BELONGS_TO, 'Master', 'id_master'),
			'type' => array(self::BELONGS_TO, 'Type', 'id_type'),
			'priv' => array(self::HAS_MANY, 'Priv', 'id_animal'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_animal' => 'Id',
			'name' => 'Кличка',
			'id_type' => 'Вид животного',
			'sex' => 'Пол',
			'age' => 'Возраст',
			'reg_num' => 'Регистрационный номер',
			'date_reg' => 'Дата регистрации',
			'date_death' => 'Дата падежа',
			'id_priv' => 'Прививки',
			'id_master' => 'Владелец',
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

		$criteria->compare('id_animal',$this->id_animal);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('id_type',$this->id_type);
		$criteria->compare('sex',$this->sex);
		$criteria->compare('age',$this->age);
		$criteria->compare('reg_num',$this->reg_num,true);
		$criteria->compare('date_reg',$this->date_reg,true);
		$criteria->compare('date_death',$this->date_death,true);
		$criteria->compare('id_priv',$this->id_priv);
		$criteria->compare('id_master',$this->id_master);
		$criteria->compare('description',$this->description,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Animals the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	protected function beforeSave() 
	{
   		if (parent::beforeSave()) {
   			if ($this->date_reg) {
   				$this->date_reg = date('Y-m-d', strtotime($this->date_reg));
   				//$this->age = $this->calcAge();
   				if ($this->date_death) {
   					$this->date_death = date('Y-m-d', strtotime($this->date_death));
   				}
   				return true;
   			}
       	} else {
       		return false;
       	}	
	}

	
	protected function afterFind() 
	{
	   $date_r = date('d-m-Y', strtotime($this->date_reg));
	   $date_r = ($date_r === '01-01-1970') ? '00-00-0000' : $date_r;
	   $date_d = date('d-m-Y', strtotime($this->date_death));
	   $date_d = ($date_d === '01-01-1970') ? '00-00-0000' : $date_d;
	   $this->date_reg = $date_r;
	   $this->date_death = $date_d;

	   //calculate current age
	   $this->age = $this->getCurrAge();
	   //echo "<pre>";
		//var_dump($this->age);
		//echo "</pre>";

	   parent::afterFind();
	}

	/*public function calcAge()
	{
		$age_reg = $this->age;
		$date_reg = new DateTime(date('d-m-Y',strtotime($this->date_reg)));
		$date_now = new DateTime(date('d-m-Y'));

		$interval = $date_reg->diff($date_now);

		if ($interval->m != 0) {
			return $age_now = $age_reg + $interval->m;
		} else 
		
		return false;
	}*/

	public function getAge($p = "year")
	{
		$age = $this->age;
		$year = $age/12;
		$year = (int)$year;
		$month = $age%12;
		if ($p == "year") return $year;
		elseif ($p == "month") return $month;		
	}

	private function getCurrAge()
	{
		$age_reg = $this->age;
		$date_reg = new DateTime(date('d-m-Y',strtotime($this->date_reg)));
		$date_now = new DateTime(date('d-m-Y'));
		$diff = $date_reg->diff($date_now);
		$age_now = $diff->y*12+$diff->m+$age_reg;

		$date_death = $this->date_death;
		
		if ($date_death !== '00-00-0000') {
			$date_death = new DateTime(date('d-m-Y',strtotime($this->date_death)));
			$diff_death = $date_reg->diff($date_death);
			$age_now = $age_reg+$diff_death->y*12+$diff_death->m;
		}
		
		//$age_now = $diff->m+$age_reg;
		//$y = floor($age_now/12);
		//$m = $age_now%12;

		//echo "<pre>";
		//var_dump($age_reg, $date_reg, $date_now, $y,$m,$age_now,$diff);
		//var_dump($date_death);
		//echo "</pre>";

		return $age_now;
	}
	
}
