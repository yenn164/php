<?php

/**
 * This is the model class for table "UBICACION".
 *
 * The followings are the available columns in table 'UBICACION':
 * @property integer $idubicacion
 * @property integer $latitud
 * @property integer $longitud
 * @property string $zona
 * @property string $barrio
 * @property string $ciudad
 * @property string $departamento
 * @property string $descripcion
 */
class UBICACION extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return UBICACION the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'UBICACION';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('latitud, longitud, zona, barrio, ciudad, departamento, descripcion', 'required'),
			array('latitud, longitud', 'numerical', 'integerOnly'=>true),
			array('zona, barrio, ciudad, departamento, descripcion', 'length', 'max'=>40),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idubicacion, latitud, longitud, zona, barrio, ciudad, departamento, descripcion', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idubicacion' => 'Idubicacion',
			'latitud' => 'Latitud',
			'longitud' => 'Longitud',
			'zona' => 'Zona',
			'barrio' => 'Barrio',
			'ciudad' => 'Ciudad',
			'departamento' => 'Departamento',
			'descripcion' => 'Descripcion',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('idubicacion',$this->idubicacion);
		$criteria->compare('latitud',$this->latitud);
		$criteria->compare('longitud',$this->longitud);
		$criteria->compare('zona',$this->zona,true);
		$criteria->compare('barrio',$this->barrio,true);
		$criteria->compare('ciudad',$this->ciudad,true);
		$criteria->compare('departamento',$this->departamento,true);
		$criteria->compare('descripcion',$this->descripcion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}