<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PropertiesWidget
 *
 * @author php
 */
class PropertiesWidget extends CWidget {

    public function run() {
        $models = Yii::app()->db->createCommand()
        ->select('idinmueble, fechaPublicacion, foto, descripcion, tipo')
        ->from('INMUEBLE')
        ->queryAll();

        $this->render('properties', array(
            'models'=>$models   
        ));
    }
}