<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FeaturedWidget
 *
 * @author php
 */
class RentFeaturedWidget  extends CWidget {

    public function run() {
        
        $models = Yii::app()->db->createCommand()
        ->select('i.idinmueble, i.foto, i.descripcion, i.tipo, i.ciudad, i.barrio, i.precio, i.moneda')
        ->from('INMUEBLE i, TRANSACCION t')
        ->where('i.destacado = 1 and t.idInmueble = i.idinmueble and t.tipoTrans = 2 and t.idClienteInteres is null')
        ->queryAll();
        
        $this->render('rentFeatured', array(
            'models'=>$models   
        ));
    }
}