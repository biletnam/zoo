<?php

/**
 * This is the model class for table "users".
 *
 * The followings are the available columns in table 'users':
 * @property integer $id_user
 * @property string $login
 * @property string $firstname
 * @property string $surname
 * @property string $lastname
 * @property string $password
 * @property string $description
 * @property integer $id_medic
 */
class User extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	private $_identity;

	public function tableName()
	{
		return 'users';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('login, password', 'required'),
			array('login, password', 'length', 'max'=>100, 'min' => 3),
			array('firstname, surname, lastname', 'length', 'max'=>50),
			array('description', 'length', 'max'=>255),
			array('id_medic, role', 'numerical', 'integerOnly'=>true),
			array('login', 'unique', 'caseSensitive'=>true, 'on'=>'registration'),
			array('login', 'match', 'pattern' => '/^[A-Za-z0-9А-Яа-я\s,]+$/u','message' => 'Логин содержит недопустимые символы.'),
			array('login, password', 'authenticate', 'on' => 'login'),
			//array('login, password', 'authenticate'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('login, firstname, surname, lastname, password, description, id_medic, role', 'safe', 'on'=>'search, save'),
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
			'medic' => array(self::HAS_ONE, 'Medic', 'id_medic'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_user' => 'Id',
			'login' => 'Логин',
			'firstname' => 'Имя',
			'surname' => 'Отчество',
			'lastname' => 'Фамилия',
			'password' => 'Пароль',
			'description' => 'Описание',
			'id_medic' => 'Доктор',
			'role' => 'Доступ',
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

		$criteria->compare('id_user',$this->id_user);
		$criteria->compare('login',$this->login,true);
		$criteria->compare('firstname',$this->firstname,true);
		$criteria->compare('surname',$this->surname,true);
		$criteria->compare('lastname',$this->lastname,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('id_medic',$this->id_medic,true);
		$criteria->compare('role',$this->role,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Users the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function validatePassword($password)
    {

        return CPasswordHelper::verifyPassword($password, $this->password);
    }
 
    public function hashPassword($password)
    {
        return CPasswordHelper::hashPassword($password);
    }

    public function authenticate($attribute,$params)
    {
    	//var_dump($this);
    	//if ($this->isNewRecord) return true;
    	if(!$this->hasErrors())
		{
			$this->_identity = new UserIdentity($this->login, $this->password);
			
			if(!$this->_identity->authenticate()) {
				$this->addError('password','Неверный логин или пароль.');				
			} else {
				Yii::app()->user->login($this->_identity, 0);
			}
		}
    }
}
