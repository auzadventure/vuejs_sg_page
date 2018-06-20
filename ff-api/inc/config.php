<?php 

//Set Vars
$f3->set('dataFolder','data');

$db = new \DB\Jig ('data');

$mapper = new \DB\Jig\Mapper($db, 'contri.json');
$f3->set('ContrTbl',$mapper);

$f3->set('MeetupUrl','http://api.meetup.com/Vue-JS-Singapore/events?&page=3&desc=true&status=past');
