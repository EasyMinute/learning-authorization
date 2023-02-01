<?php

namespace App\Models;

class User
{
    protected $id;
    protected $user_name;
    protected $password;
    protected $role;

    // GET METHODS
    public function getId()
    {
        return $this->id;
    }
    public function getUsername()
    {
        return $this->user_name;
    }
    public function getPassword()
    {
        return $this->password;
    }
    public function getRole()
    {
        return $this->role;
    }



    // SET METHODS
    public function setUsername(string $user_name)
    {
        $this->user_name = $user_name;
    }
    public function setPassword(string $password)
    {
        $this->password = $password;
    }
    public function setRole(string $role)
    {
        $this->role = $role;
    }


    // CRUD OPERATIONS
    public function create(array $data)
    {

    }

    public function read(int $id)
    {

    }

    public function update(int $id, array $data)
    {

    }

    public function delete(int $id)
    {

    }
}