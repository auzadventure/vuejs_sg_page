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



$f3->route('GET /contributors/all',
    function($f3) {
		$dataFolder = $f3->get('dataFolder');
		$dataFile = $dataFolder.'/contributors.json';
		
		$a = [ 0 => ['name'=>'lionel','role'=>'scrummaster'],
			   1 => ['name'=>'alan', 'role'=> 'stack build']
			   ];
		//$s = json_encode($a);
		//file_put_contents($dataFile,$s);
		
		$data = file_get_contents($dataFile);
		echo $data;
    }
);





$f3->run();