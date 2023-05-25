<?php

namespace app;
use PDOException;


class User
{
    protected $username;
    protected $password;
    protected $role;
    protected $user_id;

    public function getUsername()
    {
        return $this->username;
    }
    public function getPassword()
    {
        return $this->password;
    }

    public function getID()
    {
        return $this->user_id;
    }

    public function getRole()
    {
        return $this->role;
    }
    
    public static function attemptLogin($username, $password)
{
    global $conn;

    try {
        $sql = "SELECT * FROM users WHERE username = :username AND password = :password LIMIT 1";

        $statement = $conn->prepare($sql);
        $statement->execute([
            ':username' => $username,
            ':password' => $password
        ]);

        $result = $statement->fetchObject('App\User');
        return $result;
    } catch (PDOException $e) {
        error_log($e->getMessage());
    }

    return null;
}

    public static function register($username,$password,$role)
    {
        global $conn;

        try
        {
            $sql="
                INSERT INTO users (username, password)
                VALUES ('$username','$password','$role')
            ";

            $conn->exec($sql);

            return $conn->lastInsertId();
        } catch (PDOException $e){
            error_log($e->getMessage());
        }
        return false;
    }
}

?>