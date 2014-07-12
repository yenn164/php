<?php

/**
 * This is the model class for table "CLIENTE".
 *
 * The followings are the available columns in table 'CLIENTE':
 * @property integer $idCliente
 * @property string $nombre
 * @property integer $documento
 * @property integer $telefono
 * @property integer $celular
 * @property string $email
 * @property string $direccion
 *
 * The followings are the available model relations:
 * @property TRANSACCION[] $tRANSACCIONs
 * @property TRANSACCION[] $tRANSACCIONs1
 */
class CLIENTE extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return CLIENTE the static model class
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
		return 'CLIENTE';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre, documento, telefono, celular, email, direccion', 'required'),
			array('documento, telefono, celular', 'numerical', 'integerOnly'=>true),
			array('nombre', 'length', 'max'=>30),
			array('email, direccion', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idCliente, nombre, documento, telefono, celular, email, direccion', 'safe', 'on'=>'search'),
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
			'tRANSACCIONs' => array(self::HAS_MANY, 'TRANSACCION', 'idClienteInteres'),
			'tRANSACCIONs1' => array(self::HAS_MANY, 'TRANSACCION', 'idClientePropietario'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idCliente' => 'Id Cliente',
			'nombre' => 'Nombre',
			'documento' => 'Documento',
			'telefono' => 'Telefono',
			'celular' => 'Celular',
			'email' => 'Email',
			'direccion' => 'Direccion',
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

		$criteria->compare('idCliente',$this->idCliente);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('documento',$this->documento);
		$criteria->compare('telefono',$this->telefono);
		$criteria->compare('celular',$this->celular);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('direccion',$this->direccion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}