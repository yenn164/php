<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PropertyForm
 *
 * @author php
 */
class PropertyForm extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return INMUEBLE the static model class
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
		return 'INMUEBLE';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fechaPublicacion, gastosComunes, superEdif, anioConst, dormitorios, banios, cocina, living, comedor, terraza, piso, equipado, padron, mejoras, nivelado, agreste, tipo, idubicacion', 'required'),
			array('anioConst, dormitorios, banios, cocina, living, comedor, terraza, piso, equipado, padron, mejoras, nivelado, agreste, idubicacion', 'numerical', 'integerOnly'=>true),
			array('gastosComunes, superEdif', 'length', 'max'=>6),
			array('tipo', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idinmueble, fechaPublicacion, gastosComunes, superEdif, anioConst, dormitorios, banios, cocina, living, comedor, terraza, piso, equipado, padron, mejoras, nivelado, agreste, tipo, idubicacion', 'safe', 'on'=>'search'),
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
			'idinmueble' => 'Idinmueble',
			'fechaPublicacion' => 'Fecha Publicacion',
			'gastosComunes' => 'Gastos Comunes',
			'superEdif' => 'Super Edif',
			'anioConst' => 'Anio Const',
			'dormitorios' => 'Dormitorios',
			'banios' => 'Banios',
			'cocina' => 'Cocina',
			'living' => 'Living',
			'comedor' => 'Comedor',
			'terraza' => 'Terraza',
			'piso' => 'Piso',
			'equipado' => 'Equipado',
			'padron' => 'Padron',
			'mejoras' => 'Mejoras',
			'nivelado' => 'Nivelado',
			'agreste' => 'Agreste',
			'tipo' => 'Tipo',
			'idubicacion' => 'Idubicacion',
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

		$criteria->compare('idinmueble',$this->idinmueble);
		$criteria->compare('fechaPublicacion',$this->fechaPublicacion,true);
		$criteria->compare('gastosComunes',$this->gastosComunes,true);
		$criteria->compare('superEdif',$this->superEdif,true);
		$criteria->compare('anioConst',$this->anioConst);
		$criteria->compare('dormitorios',$this->dormitorios);
		$criteria->compare('banios',$this->banios);
		$criteria->compare('cocina',$this->cocina);
		$criteria->compare('living',$this->living);
		$criteria->compare('comedor',$this->comedor);
		$criteria->compare('terraza',$this->terraza);
		$criteria->compare('piso',$this->piso);
		$criteria->compare('equipado',$this->equipado);
		$criteria->compare('padron',$this->padron);
		$criteria->compare('mejoras',$this->mejoras);
		$criteria->compare('nivelado',$this->nivelado);
		$criteria->compare('agreste',$this->agreste);
		$criteria->compare('tipo',$this->tipo,true);
		$criteria->compare('idubicacion',$this->idubicacion);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}