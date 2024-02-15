<?php

use repositories\UserRepository;

require_once 'AppController.php';
require_once __DIR__.'/../models/User.php';
require_once __DIR__.'/../repositories/UserRepository.php';

class SecurityController extends AppController {
    private $repo;

    public function __construct() {
        parent::__construct();
        $this->repo = new UserRepository();
    }

    public function login() {
        if (!$this->isPost()) return $this->render('login');

        $email = $_POST['email'];
        $password = $_POST['password'];

        $user = $this->repo->getUser($email);


        if (!$user) {
            return $this->render('login', ['messages' => ["User doesn't exist"]]);
        }

        if ($user->getEmail() !== $email) {
            return $this->render('login', ['messages' => ["Email or password is incorrect"]]);
        }

        if (!password_verify($password, $user->getPassword())) {
            return $this->render('login', ['messages' => ["Email or password is incorrect"]]);
        }

        setcookie('id', $user->getId(), time() + (86400 * 30), '/');
        $_SESSION['id'] = $user->getId();

        $url = "http://$_SERVER[HTTP_HOST]";
        header("Location: $url/calendar");

    }

    public function registration() {
        if (!$this->isPost()) return $this->render('registration');

        $email = $_POST['email'];
        $password = $_POST['password'];
        $confPassword = $_POST['confirm_password'];
        $name = $_POST['name'];
        $id = time() + (86400 * 30);

        $user = $this->repo->getUser($email);

        if ($password !== $confPassword) {
            return $this->render('registration', ['messages' => ['Passwords don\'t match']]);
        }

        if ($user) {
            return $this->render('registration', ['messages' => ['This email is already exist']]);
        }

        $this->repo->addUser($id, $email, password_hash($password, PASSWORD_BCRYPT), $name);
        $user = $this->repo->getUser($email);

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