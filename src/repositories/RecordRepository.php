<?php

namespace repositories;

use models\Record;
use PDO;

require_once __DIR__.'/../models/Record.php';
require_once 'Repository.php';

class RecordRepository extends Repository {
    public function getRecords(int $user_id) {
        $stmt = $this->database->connect()->prepare('
            select * from records where user_id = :user_id order by date desc;
        ');
        $stmt->bindParam('user_id', $user_id, PDO::PARAM_STR);
        $stmt->execute();

        $articles = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($articles as $article) {
            $res[] = new Record(
                $article['id'],
                $article['date'],
                $article['bodyTemperature'],
                $article['bloodPressure'],
                $article['wellBeing'],
                $article['comment'],
                $article['image'],
                $article['user_id']
            );
        }

        return $res;
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