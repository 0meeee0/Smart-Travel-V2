<?php
class opirateur{
    private $username;
    private $password;
    private $email;
    private $isActive;

public function __constracut($username , $password , $email , $isActive )
{
    $this->username = $username;
    $this->password = $password;
    $this->email = $email ;
    $this->isActive = $isActive;   
}

public function getUsername()
{
    return $this->username;
}
public function getPassword()
{
    return $this->password;
}
public function getEmail()
{
    return $this->email;
}
public function getIsActive()
{
    return $this->isActive;
}
}

?>