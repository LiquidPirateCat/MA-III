<?php

require_once __DIR__ . '/Controller.php';

require_once __DIR__ . '/../dao/ActDAO.php';
require_once __DIR__ . '/../dao/ActTagDAO.php';
require_once __DIR__ . '/../dao/ActPortfolioItemDAO.php';
require_once __DIR__ . '/../dao/ActDatumDAO.php';


// require_once __DIR__ . '/../dao/SpeakerDAO.php';

class ActsController extends Controller {

  public function detail() {
    $actDAO = new ActDAO();
    $actTagDAO = new ActTagDAO();
    $actPortfolioItemDAO = new ActPortfolioItemDAO();
    $actDatumDAO = new ActDatumDAO();
    if (!empty($_GET['id'])) {
      $act = $actDAO->selectById($_GET['id']);
    }
    if (empty($act)) {
      header('Location: index.php');
      exit();
    }
    $this->set('act', $act);
    $this->set('actTags', $actTagDAO->selectByActId($act['id']));
    $this->set('actPortfolioItems', $actPortfolioItemDAO->selectByActId($act['id']));
    $this->set('actDatums', $actDatumDAO->selectByActId($act['id']));
    $this->set('title', $act['titel']);
    $this->set('currentPage', 'home');
  }



}
