<?php

include_once('./models/user.php');

interface UserDAO{
    public function getUser(string $login) : ?User;
    public function getAllUsers();
    public function connectUser(string $login, string $password) : ?User; //Done
    public function addUser(User $user);
    public function updateUser(User $user);
    public function disableUser(User $user);   
}

?>