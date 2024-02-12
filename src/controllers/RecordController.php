<?php

use repositories\RecordRepository;

require_once __DIR__.'/../repositories/RecordRepository.php';
require_once 'AppController.php';

class RecordController extends AppController {
    private $repo;

    public function __construct() {
        parent::__construct();
        $this->repo = new RecordRepository();
    }

    public function records() {
        $records = $this->repo->getRecords($_COOKIE['id']);
        $this->render('records', ['records' => $records]);
    }

    public function calendar() {
        if (!$this->isPost()) return $this->render('calendar');

        $date = date("Y-m-d");
        $bodyTemperature = $_POST['temperature'];
        $bloodPressure = $_POST['pressure'];
        $wellBeing = $_POST['wellBeing'];
        $comment = $_POST['comment'];
        $image = $_POST['image'];

        $id = time() + (86400 * 30);

        $this->repo->addRecord($id, $date, $bodyTemperature, $bloodPressure, $wellBeing, $comment, $image, $_COOKIE['id']);

        $this->render('calendar');
    }
}