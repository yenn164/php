<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of saleFeaturedWidget
 *
 * @author php
 */
class SaleFeaturedWidget extends CWidget {

    public function run() {
        
        $models = Yii::app()->db->createCommand()
        ->select('i.idinmueble, i.foto, i.descripcion, i.tipo, i.ciudad, i.barrio, i.precio')
        ->from('INMUEBLE i, TRANSACION t')
        ->where('i.destacado = 1 and t.idInmueble = i.idinmueble and t.tipoTrans = 1')
        ->queryAll();
        
        $this->render('saleFeatured', array(
            'models'=>$models   
        ));
    }
}