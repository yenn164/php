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
class PropertyForm extends CFormModel{
    public $id;
    public $fecha;
    public $gc;
    public $sup;
    public $anio;
    public $dormitorios;
    public $cocina;
    public $living;
    public $comedor;
    public $terraza;
    public $piso;
    public $equipado;
    public $padron;
    public $mejoras;
    public $nivelado;
    public $agreste;
    public $tipo;
    public $foto1;
    public $foto2;
    public $foto3;
    public $foto4;
    public $foto5;
    public $precio;
}