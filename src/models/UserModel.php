<?php
class UserModel extends Model
{
    public function getFullUsers()
    {
        $sql = 'SELECT id, username, email FROM users ';
        return $this->query($sql, 'FETCHAll');
    }

    public function getUserByEmail($email)
    {
        $sql = "SELECT * FROM users WHERE email = '$email'";
        return $this->query($sql, 'FETCH');
    }

    public function addUser($username, $email, $password)
    {
        // $username = $user['username'];
        // $email = $user['email'];
        // $password = $user['password'];

        $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
        return $this->query($sql);
    }

    public function getUserbyUsername($username)
    {
        $sql = "SELECT * FROM users WHERE username = '$username'";
        return $this->query($sql, 'FETCH');
    }

    public function updateUser($id, $username, $password)
    {
        $sql = "UPDATE users SET username = '$username', password = '$password' WHERE id = $id";
        return $this->query($sql);
    }

    public function deleteUser($id)
    {
        $sql = 'DELETE FROM users WHERE id = $id';
        return $this->query($sql);
    }
}
