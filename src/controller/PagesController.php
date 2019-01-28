<?php

require_once __DIR__ . '/Controller.php';

<<<<<<< HEAD
require_once __DIR__ . '/../dao/ActDAO.php';
require_once __DIR__ . '/../dao/ActDatumDAO.php';

class PagesController extends Controller {

  function __construct() {
    $this->actDAO = new ActDAO();
  }

  public function index() {
    $actDAO = new ActDAO();
    $acts = $actDAO->selectAll();
    $this->set('acts', $acts);
    $this->set('title', 'Home');
    $this->set('currentPage', 'home');
  }

  public function programma() {
    $actDAO = new ActDAO();

    if (!empty($_GET['action']) && $_GET['action'] == 'filter') {
      $acts = $this->actDAO->search(25, $_GET['soort']);
      $this->set('soort',$_GET['soort']);
    }else{
      // $acts = $actDAO->selectAll();
      $acts = $this->actDAO->search();
      $this->set('acts', $acts);
      $this->set('title', 'Programma');
      $this->set('currentPage', 'programma');
      $this->set('soort','');
    }

    $this->set('acts', $acts);

    $this->set('soorten', $this->actDAO->selectSoorten());
    if (strtolower($_SERVER['HTTP_ACCEPT']) == 'application/json') {

      header('Content-Type: application/json');
      echo json_encode($acts);
      exit();
    }
  }
=======
// require_once __DIR__ . '/../dao/SpeakerDAO.php';

class PagesController extends Controller {

  public function index() {
    // $speakerDAO = new SpeakerDAO();
    // $speakers = $speakerDAO->selectAll();
    // $this->set('speakers', $speakers);
    // $this->set('title', 'Home');
    // $this->set('currentPage', 'home');
  }

  // public function partners() {
  //   $this->set('title', 'Partners');
  //   $this->set('currentPage', 'partners');
  // }

  // public function practical() {
  //   $this->set('title', 'Practical');
  //   $this->set('currentPage', 'practical');
  // }

  // public function tickets() {
  //   $this->set('title', 'Tickets');
  //   $this->set('currentPage', 'tickets');
  // }
>>>>>>> 04db903dac7f57ffae58305ad266edef35b1c35a

}
