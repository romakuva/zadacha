<?php

include_once __DIR__ . "/../Model/User.php";

class UserController
{
    private $conn;

    public function __construct ()
    {
        $this->conn = mysqli_connect ("localhost", "root", "root", "user");
    }

    public function save ()
    {
        if (!empty ($_POST)) {
            $product = new User (
                intval($_POST ['id']), 
                htmlspecialchars ($_POST ['user']), 
                htmlspecialchars ($_POST ['phone']), 
                htmlspecialchars ($_POST ['email']));
            $product->save ();
        }

        return $this->read ();
    }

    public function create ()
    {
        include_once __DIR__ . "/../views/form.php";
    }

    public function read ()
    {
        $all = (new User())->all ();

        include_once __DIR__ . "/../views/all.php";
    }

    public function update ()
    {
		$id = (int) $_GET ['id'];
        if (empty ($id)) die ('Undefined ID');
		$one = (new User ())->getById ($id);
        if (empty ($one)) die ('User not found');
        include_once __DIR__ . "/../views/form.php";
    }

    public function delete ()
    {
		$id = (int) $_GET ['id'];
		(new User ())->deleteById ($id);
        
        return $this->read ();
    }
}