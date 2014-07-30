<?php

/**
 * This is the model class for table "recomendations".
 *
 * The followings are the available columns in table 'recomendations':
 * @property integer $id_recomendation
 * @property integer $id_anemnes
 * @property string $rp
 * @property string $ds
 *
 * The followings are the available model relations:
 * @property Anemneses $idAnemnes
 */
class Recomendation extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'recomendations';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_anemnes', 'numerical', 'integerOnly'=>true),
			array('rp, ds', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_recomendation, id_anemnes, rp, ds', 'safe', 'on'=>'search'),
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
			'anemnes' => array(self::BELONGS_TO, 'Anemnes', 'id_anemnes'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_recomendation' => 'Id Recomendation',
			'id_anemnes' => 'Id Anemnes',
			'rp' => 'R.P.',
			'ds' => 'D.S.',
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

		$criteria->compare('id_recomendation',$this->id_recomendation);
		$criteria->compare('id_anemnes',$this->id_anemnes);
		$criteria->compare('rp',$this->rp,true);
		$criteria->compare('ds',$this->ds,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Recomendation the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
