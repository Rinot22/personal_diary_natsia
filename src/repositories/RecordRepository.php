<?php

namespace repositories;

use models\Record;
use PDO;

require_once __DIR__.'/../models/Record.php';
require_once 'Repository.php';

class RecordRepository extends Repository {
    public function getRecords(int $user_id) {
        $stmt = $this->database->connect()->prepare('
            select * from records where user_id = :user_id;
        ');
        $stmt->bindParam('user_id', $user_id, PDO::PARAM_STR);
        $stmt->execute();

        while ($res = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $records[] = array(
                'date' => $res['date'],
                'body_temperature' => $res['body_temperature'],
                'blood_pressure' => $res['blood_pressure'],
                'well_being' => $res['well_being'],
                'comment' => $res['comment'],
                'image' => $res['image']
            );

            $encodedData = json_encode($records, JSON_UNESCAPED_UNICODE || JSON_PRETTY_PRINT);
            file_put_contents('public/json/records.json', $encodedData);
        }
    }

    public function addRecord($id, $date, $bodyTemperature, $bloodPressure, $wellBeing, $comment, $image, $user_id) {
        $stmt = $this->database->connect()->prepare('
            insert into public.records (id, date, body_temperature, blood_pressure, well_being, comment, image, user_id) 
            values (?, ?, ?, ?, ?, ?, ?, ?);
        ');

        $stmt->execute([
            $id, 
            $date, 
            $bodyTemperature, 
            $bloodPressure, 
            $wellBeing, 
            $comment, 
            $image,
            $user_id
        ]);
    }
}