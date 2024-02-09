<?php

use repositories\UserRepository;

require_once 'AppController.php';
require_once __DIR__.'/../models/User.php';
require_once __DIR__.'/../repositories/UserRepository.php';

class SecurityController extends AppController {
    public function login() {
        if (!$this->isPost()) return $this->render('login');

        $repo = new UserRepository();

        $email = $_POST['email'];
        $password = $_POST['password'];

        $user = $repo->getUser($email);
        $isAdmin = false;

        if ($user->getRole() === 2) $isAdmin == true;


        if (!$user) {
            return $this->render('login', ['message' => ["User doesn't exist"]]);
        }

        if ($user->getEmail() !== $email) {
            return $this->render('login', ['messages' => ["Email or password is incorrect"]]);
        }

        // TODO: поменять сообщение на общий вид
//        if ($password !== $user->getPassword()) {
//            return $this->render('login', ['messages' => ["Email or password is incorrect"]]);
//        }

        setcookie('id', $user->getId(), time() + (86400 * 30), '/');
        $_SESSION['id'] = $user->getId();

        $url = "http://$_SERVER[HTTP_HOST]";
        header("Location: $url/calendar");

    }

    public function registration() {
        if (!$this->isPost()) return $this->render('registration');

        $repo = new UserRepository();

        $email = $_POST['email'];
        $password = $_POST['password'];
        $name = $_POST['name'];

        $id = time() + (86400 * 30);



        $user = $repo->getUser($email);

        if ($user) {
            return $this->render('registration', ['message' => ['This email is already exist']]);
        }

        $repo->addUser($id, $email, $password, $name);
        $user = $repo->getUser($email);

        setcookie('id', $user->getId(), time() + (86400 * 30), '/');
        $_SESSION['id'] = $user->getId();

        $url = "http://$_SERVER[HTTP_HOST]";
        header("Location: {$url}/calendar");
    }

    public function logout() {
        unset($_SESSION['id']);
        setcookie("id", "", time() - 3600);

        $url = "http://$_SERVER[HTTP_HOST]";
        header("Location: $url");
    }
}