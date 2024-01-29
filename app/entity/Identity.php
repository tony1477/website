<?php

namespace WPG\IT\Website\entity;

class Identity
{
    private string $id;
    private string $username;
    private string $password;
    private int $isactive;
    private string $hash;

    public function __construct(string $username, string $password)
    {
        $this->username = $username;
        $this->password = $password;
    }

    public function setId(string $id) :void
    {
        $this->id = $id;
    }

    public function getId() :string
    {
        return $this->id;
    }

    public function getUsername() :string
    {
        return $this->username;
    }

    public function getPassword() :string
    {
        return $this->password;
    }

    public function setHash(string $hash)
    {
        $this->hash = $hash;
    }

    public function getHash() :string
    {
        return $this->hash;
    }
}
