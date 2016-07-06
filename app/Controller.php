<?php

class Controller {

  protected $db;

	function afterroute() {
		echo Template::instance()->render('layout.htm');
	}

	function __construct($f3) {
    $db = new \DB\SQL($f3->get('db'), $f3->get('username'), $f3->get('password'));
    new DB\SQL\Session($db);
    $this->db = $db;
	}

}
