<?php

namespace repositories;

use models\User;
use PDO;

require_once __DIR__.'/../models/User.php';
require_once 'Repository.php';

class UserRepository extends Repository {
    public function getUser(string $email): ?User {
        $stmt = $this->database->connect()->prepare('
            select * from public.users where email = :email
        ');

        $stmt->bindParam('email', $email, PDO::PARAM_STR);
        $stmt->execute();

        $user=$stmt->fetch(PDO::FETCH_ASSOC);


        if (!$user) return null;

        return new User(
            $user['id'],
            $user['email'],
            $user['password'],
            $user['name']
        );
    }

    public function addUser(int $id, string $email, string $password, string $name) {
        $stmt = $this->database->connect()->prepare('
            insert into public.users (id, email, password, name) 
            values (?, ?, ?, ?)
        ');

        $stmt->execute([
           $id,
           $email,
           $password,
           $name
        ]);
    }
}