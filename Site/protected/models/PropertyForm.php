<?php
/**
 * This is the model class for table "INMUEBLE".
 *
 * The followings are the available columns in table 'INMUEBLE':
 * @property integer $idinmueble
 * @property string $fechaPublicacion
 * @property string $gastosComunes
 * @property string $superEdif
 * @property integer $anioConst
 * @property integer $dormitorios
 * @property integer $banios
 * @property integer $cocina
 * @property integer $living
 * @property integer $comedor
 * @property integer $terraza
 * @property integer $piso
 * @property integer $equipado
 * @property integer $padron
 * @property integer $mejoras
 * @property integer $nivelado
 * @property integer $agreste
 * @property string $tipo
 * @property integer $idubicacion
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

	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
                    'idubicacion0' => array(self::BELONGS_TO, 'UBICACION', 'idubicacion'),
		    'tRANSACIONs' => array(self::HAS_MANY, 'TRANSACION', 'idInmueble'),
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

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
