<?php

/**
 * This is the model class for table "TRANSACCION".
 *
 * The followings are the available columns in table 'TRANSACCION':
 * @property integer $idTrans
 * @property integer $tipoTrans
 * @property string $fechaTrans
 * @property integer $idCliente
 * @property integer $idInmueble
 *
 * The followings are the available model relations:
 * @property CLIENTE $idCliente0
 * @property INMUEBLE $idInmueble0
 */
class TRANSACCION extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return TRANSACCION the static model class
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
		return 'TRANSACCION';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tipoTrans, fechaTrans, idCliente, idInmueble', 'required'),
			array('tipoTrans, idCliente, idInmueble', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idTrans, tipoTrans, fechaTrans, idCliente, idInmueble', 'safe', 'on'=>'search'),
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
			'idCliente0' => array(self::BELONGS_TO, 'CLIENTE', 'idCliente'),
			'idInmueble0' => array(self::BELONGS_TO, 'INMUEBLE', 'idInmueble'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idTrans' => 'Id Trans',
			'tipoTrans' => 'Tipo Trans',
			'fechaTrans' => 'Fecha Trans',
			'idCliente' => 'Id Cliente',
			'idInmueble' => 'Id Inmueble',
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

		$criteria->compare('idTrans',$this->idTrans);
		$criteria->compare('tipoTrans',$this->tipoTrans);
		$criteria->compare('fechaTrans',$this->fechaTrans,true);
		$criteria->compare('idCliente',$this->idCliente);
		$criteria->compare('idInmueble',$this->idInmueble);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}