<?php

namespace controllers;

use repositories\RecordRepository;

require_once 'AppController.php';
require_once __DIR__.'/../repositories/RecordRepository.php';

class RecordController extends AppController {
    public function records() {
        $repo = new RecordRepository();

        $repo->getRecords();
        $this->render('records');
    }
}