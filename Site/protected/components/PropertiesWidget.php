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
        
       /* $model=new PropertyForm('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['INMUEBLE']))
			$model->attributes=$_GET['INMUEBLE'];

		$this->render('admin',array(
			'model'=>$model,
		));
*/                
        $models = NEW PropertyForm('serch');

        $this->render('properties', array(
            'models'=>$models   
        ));
    }
}