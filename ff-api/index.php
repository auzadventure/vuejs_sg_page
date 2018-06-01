<?php
require 'vendor/autoload.php';

$f3 = \Base::instance();

require 'inc/config.php';




$f3->route('GET /',
    function() {
		$view=\View::instance();
        echo $view->render('templates/home.html');
    }
);


$f3->route('GET /init', function ($f3) {
	
	$model= $f3->get('ContrTbl');
	$model->name = "Lionel";
	$model->save();

});



$f3->route('GET /contributors/all',
    function($f3) {
	   $model= $f3->get('ContrTbl');
	   $data = $model->cast();
	   print_r($data);
	
	}
);





$f3->run();