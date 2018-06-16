<?php
require 'vendor/autoload.php';

$f3 = \Base::instance();

require 'inc/config.php';
require 'inc/JsonDB.php';

$f3->set('model_contr',new JsonDB('data/contr.json'));
$f3->set('model_sponser',new JsonDB('data/sponser.json'));
$f3->set('model_coy', new JsonDB('data/coy.json'));


$f3->route('GET /',
    function() {
		$view=\View::instance();
        echo $view->render('templates/home.html');
    }
);


$f3->route('GET /init', function ($f3) {
		$model = $f3->get('model_contr');

		$data = [ ['name'=>'Lionel','position'=>'scrummaster'],
				  ['name'=>'Alan', 'position'=>'systems']];
		$model->insert($data);

		$model = $f3->get('model_sponser');

		$data = [ ['name'=>'zalora'],['name'=>'sia'],['name'=>'googel']];
		$model->insert($data);		
		
		$model = $f3->get('model_coy');

		$data = [ ['name'=>'zalora'],['name'=>'sia'],['name'=>'googel']];
		$model->insert($data);				

});

$f3->route('GET /contributor/all',
    function($f3) {
		$model = $f3->get('model_contr');
		echo json_encode($model->findAll());
	}
);

$f3->route('GET /sponser/all',
    function($f3) {
		$model = $f3->get('model_sponser');
		echo json_encode($model->findAll());
	}
);

$f3->route('GET /coy/all',
    function($f3) {
		$model = $f3->get('model_coy');
		echo json_encode($model->findAll());
	}
);

$f3->copy('HEADERS.Origin','CORS.origin');

$f3->run();