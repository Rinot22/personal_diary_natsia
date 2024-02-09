<?php

namespace repositories;

use models\Record;
use PDO;

require_once __DIR__.'/../models/Record.php';
require_once 'Repository.php';

class RecordRepository extends Repository {
    public function getRecords() {
        $stmt = $this->database->connect()->prepare('
            select id, date, well_being from public.records;
        ');
        $stmt->execute();

        while ($res = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $records[] = array(
                'date' => $res['date'],
                'body_temperature' => $res['body_temperature']
            );

            $encodedData = json_encode($records, JSON_UNESCAPED_UNICODE || JSON_PRETTY_PRINT);
            file_put_contents('public/mock/records.json', $encodedData);
        }

//        $records = $stmt->fetch(PDO::FETCH_ASSOC);
//        if (!$records) return null;
//
//        foreach ($records as $record) {
//            $result[] = new Record(
//                $record['id'],
//                $record['title']
//            );
//        }
//
//        return $result;
    }
}