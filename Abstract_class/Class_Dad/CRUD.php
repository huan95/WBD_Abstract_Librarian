<?php
/**
 * Created by PhpStorm.
 * User: huanld
 * Date: 9/21/18
 * Time: 11:57 AM
 */

require __DIR__.'/../Database/Database.php';

abstract class CRUD
{
    protected $conn;
    protected $sql;
    protected $table;

    protected function __construct (){
        $database = new Database();
        $this->conn = $database->connect('root', '123456', 'Librarian');
    }

    public function showData($table)
    {
        $sql = "SELECT * FROM $table";
        $query = $this->conn->query($sql);
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getById($id_category)
    {
        $sql = "SELECT * FROM Category WHERE id_category = '$id_category'";
        $query = $this->conn->prepare($sql);
        $query->execute();
        $data = $query->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

}