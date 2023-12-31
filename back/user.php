<?php
class User
{
    public $username;
    public $mail;
    public $password;
    public $house;
    public $terrain;
    public $apartment;

    // Constructor
    public function __construct(
        $username,
        $mail,
        $password,
        $house,
        $terrain,
        $apartment,
    ) {
        $this->username = $username;
        $this->mail = $mail;
        $this->password = $password;
        $this->house = $house;
        $this->terrain = $terrain;
        $this->apartment = $apartment;
    }
    public function getUsername()
    {
        return $this->username;
    }
    public function setUsername($username): self
    {
        $this->username = $username;

        return $this;
    }
    public function getMail()
    {
        return $this->mail;
    }
    public function setMail($mail): self
    {
        $this->mail = $mail;

        return $this;
    }
    public function getPassword()
    {
        return $this->password;
    }
    public function setPassword($password): self
    {
        $this->password = $password;

        return $this;
    }
    public function getHouse()
    {
        return $this->house;
    }
    public function setHouse($house): self
    {
        $this->house = $house;

        return $this;
    }
    public function getTerrain()
    {
        return $this->terrain;
    }
    public function setTerrain($terrain): self
    {
        $this->terrain = $terrain;

        return $this;
    }
    public function getApartment()
    {
        return $this->apartment;
    }
    public function setApartment($apartment): self
    {
        $this->apartment = $apartment;

        return $this;
    }
}
