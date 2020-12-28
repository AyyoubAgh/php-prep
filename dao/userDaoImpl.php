<?php

include 'userdao.php';
include 'connection.php';

class UserDAOImpl implements UserDAO {
    private $pdo ;

    public function __construct(){
        $this->pdo = Connection::getInstance();
    }

    public function getUser(string $login) : ?User{
        $stmt = $this->pdo->prepare('SELECT * FROM user WHERE login = :login');
        $stmt->execute(['login' => $login]);
        $user = $stmt->fetch();
        return $user ? new User($user->firstName,$user->lastName,$user->login,$user->password,$user->role,$user->status) : null;
    }

    public function getAllUsers(){
        $stmt = $this->pdo->query('SELECT * FROM user');
        return $stmt->fetchAll();
    }

    public function connectUser(string $login, string $password) : ?User{
        $stmt = $this->pdo->prepare('SELECT * FROM user WHERE login = :login AND password = :password');
        $stmt->execute(['login' => $login, 'password' => $password]);
        $user = $stmt->fetch();

        return $user ? new User($user->firstName,$user->lastName,$user->login,$user->password,$user->role,$user->status) : null;
    }

    public function addUser(User $user){
        $sql = 'INSERT INTO user(firstName, lastName, login, password, role, status) VALUES(:firstName, :lastName, :login, :password, :role, :status)';
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['firstName' => $user->getFirstName(), 'lastName' => $user->getLastName(), 'login' => $user->getLogin(), 'password' => $user->getPassword(), 'role' => $user->getRole(), 'status' => $user->getStatus()]);
    }
    public function updateUser(User $user){}
    public function disableUser(User $user){}


}
?>