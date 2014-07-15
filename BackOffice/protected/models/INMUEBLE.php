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
 */
class INMUEBLE extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return INMUEBLE the static model class
	 */
    
        public $picture;
        public $picture2;
        public $picture3;
        public $picture4; 
        public $picture5;
            
           
        
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
//			array('fechaPublicacion, gastosComunes, superEdif, anioConst, dormitorios, banios, cocina, living, comedor, terraza, piso, equipado, padron, mejoras, nivelado, agreste, tipo', 'required'),
			array('anioConst, dormitorios, banios, cocina, living, comedor, terraza, piso, equipado, padron, mejoras, nivelado, agreste, precio, numero, apto', 'numerical', 'integerOnly'=>true),
                        array('latitud, longitud', 'numerical'),	
                        array('gastosComunes, superEdif', 'length', 'max'=>6),
			array('tipo', 'length', 'max'=>10),
                        array('foto, foto2, foto3, foto4, foto5', 'length', 'max'=>200),
			array('fechaPublicacion', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
                        array('departamento, ciudad, barrio, calle', 'length', 'max'=>50),
			array('descripcion', 'length', 'max'=>100),
			array('idinmueble,  fechaPublicacion, gastosComunes, superEdif, anioConst, dormitorios, banios, cocina, living, comedor, terraza, piso, equipado, padron, mejoras, nivelado, agreste, tipo, destacado', 'safe', 'on'=>'search'),
                        array('picture', 'file','types'=>'jpg, gif, png','allowEmpty'=>true),
                        array('picture2', 'file','types'=>'jpg, gif, png','allowEmpty'=>true),
                        array('picture3', 'file','types'=>'jpg, gif, png','allowEmpty'=>true),
                        array('picture4', 'file','types'=>'jpg, gif, png','allowEmpty'=>true),
                        array('picture5', 'file','types'=>'jpg, gif, png','allowEmpty'=>true),
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
		    'tRANSACCIONS' => array(self::HAS_MANY, 'TRANSACCION', 'idInmueble'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idinmueble' => 'Idinmueble',
			'fechaPublicacion' => 'Fecha Publicación',
			'gastosComunes' => 'Gastos Comunes',
			'superEdif' => 'Superficie Edificada',
			'anioConst' => 'Año de Construcción',
			'dormitorios' => 'Cantidad de Dormitorios',
			'banios' => 'Cantidad de Baños',
			'cocina' => 'Cocina',
			'living' => 'Living',
			'comedor' => 'Comedor',
			'terraza' => 'Terraza',
			'piso' => 'Piso',
			'equipado' => 'Está Equipado?',
			'padron' => 'Padrón',
			'mejoras' => 'Tiene Mejoras?',
			'nivelado' => 'Nivelado',
			'agreste' => 'Agreste',
			'tipo' => 'Tipo',
                        'foto' => 'Foto 1',
			'foto2' => 'Foto 2',
			'foto3' => 'Foto 3',
			'foto4' => 'Foto 4',
			'foto5' => 'Foto 5',
                        'departamento' => 'Departamento',
			'ciudad' => 'Ciudad',
			'barrio' => 'Barrio',
			'calle' => 'Calle',
			'numero' => 'Numero',
			'apto' => 'Apto',
			'descripcion' => 'Descripción',
			'latitud' => 'Latitud',
			'longitud' => 'Longitud',
                        'precio' => 'Precio',
			'destacado' => 'Destacado',
			'moneda' => 'Moneda',
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
		//$criteria->compare('gastosComunes',$this->gastosComunes,true);
		$criteria->compare('superEdif',$this->superEdif,true);
		//$criteria->compare('anioConst',$this->anioConst);
		$criteria->compare('dormitorios',$this->dormitorios);
		$criteria->compare('banios',$this->banios);
		//$criteria->compare('cocina',$this->cocina);
		//$criteria->compare('living',$this->living);
		//$criteria->compare('comedor',$this->comedor);
		$criteria->compare('terraza',$this->terraza);
		//$criteria->compare('piso',$this->piso);
		$criteria->compare('equipado',$this->equipado);
		//$criteria->compare('padron',$this->padron);
		//$criteria->compare('mejoras',$this->mejoras);
		//$criteria->compare('nivelado',$this->nivelado);
		//$criteria->compare('agreste',$this->agreste);
		$criteria->compare('tipo',$this->tipo,true);
                //$criteria->compare('foto',$this->foto,true);
		//$criteria->compare('foto2',$this->foto2,true);
		//$criteria->compare('foto3',$this->foto3,true);
		//$criteria->compare('foto4',$this->foto4,true);
		//$criteria->compare('foto5',$this->foto5,true);
                $criteria->compare('departamento',$this->departamento,true);
		$criteria->compare('ciudad',$this->ciudad,true);
		$criteria->compare('barrio',$this->barrio,true);
		//$criteria->compare('calle',$this->calle,true);
		//$criteria->compare('numero',$this->numero);
		//$criteria->compare('apto',$this->apto);
		//$criteria->compare('descripcion',$this->descripcion,true);
		//$criteria->compare('latitud',$this->latitud);
		//$criteria->compare('longitud',$this->longitud);
                $criteria->compare('precio',$this->precio);
		$criteria->compare('destacado',$this->destacado);
		//$criteria->compare('moneda',$this->moneda);
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}