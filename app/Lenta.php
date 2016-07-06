<?php

class Lenta extends Controller {

  function index($f3) {

    $db = $this->db;

    $year = $f3->get('PARAMS.year');
    $number = $f3->get('PARAMS.number');

    if($year && !$number && is_numeric($year)) {
      $condition = "WHERE YEAR(created_date) = ".$year;
    }elseif($year && $number && is_numeric($year) && is_numeric($number)) {
      $condition = "WHERE YEAR(created_date) = ".$year." AND id=".$number;
    }elseif(!$year && !$number) {
      $condition = "";
    }elseif(($year || $number) && (!is_numeric($year) || !is_numeric($number))) {
      $f3->error(404);
    }

    $news = $db->exec("SELECT text,created_date FROM news ".$condition);

    $f3->set('news',
			$news
		);

    $f3->set('content','lenta.htm');

  }

}
