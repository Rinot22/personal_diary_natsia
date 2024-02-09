<?php

namespace models;

class User {
    private $id;
    private $email;
    private $password;
    private $name;
    private $role;

    /**
     * @param $id
     * @param $email
     * @param $password
     * @param $name
     */
    public function __construct(int $id, string $email, string $password, string $name, int $role = 1)
    {
        $this->id = $id;
        $this->email = $email;
        $this->password = $password;
        $this->name = $name;
        $this->role = $role;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getRole() {
        return $this->role;
    }
}