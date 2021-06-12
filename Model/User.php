<?php

class User
{
    public $id;
    public $user;
    public $phone;
    public $email;

    private $conn;

    public function __construct ($id = null, $user = null, $phone = null, $email = null)
    {
        $this->conn = mysqli_connect ("localhost", "root", "root", "user");
        $this->id = $id;
        $this->user = $user;
        $this->phone = $phone;
        $this->email = $email;
    }

    public function save ()
    {
        if ($this->id > 0) {
            $query = "UPDATE user SET 
                user = '" . $this->user . "', 
                phone = '" . $this->phone . "', 
                email = '" . $this->email . "' 
            WHERE id = $this->id LIMIT 1";
        } 
        else {$query = "INSERT INTO user VALUES (null,
            '" . $this->user . "',
            '" . $this->phone . "',
            '" . $this->email . "')";
        }

        mysqli_query ($this->conn, $query);
    }
	
	public function all ()
	{
		$result = mysqli_query ($this->conn , "SELECT * FROM user ORDER BY id DESC");

        return mysqli_fetch_all ($result, MYSQLI_ASSOC);
	}

	public function getById($id)
	{
		$result = mysqli_query($this->conn , "SELECT * FROM user WHERE id = $id LIMIT 1");
        $one = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return reset($one);
	}

	public function deleteById($id)
	{
        mysqli_query($this->conn , "DELETE FROM user WHERE id = $id LIMIT 1");
	}
}