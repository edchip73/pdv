<?php 

class Usuarios implements Iusuarios
{
    private $host;
    private $dbname;
    private $username;
    private $password;
    private $db;

    public function __construct($host, $dbname, $username, $password)
    {
        $this->host = $host;
        $this->dbname = $dbname;
        $this->username = $username;
        $this->password = $password;

        $this->connect();
    }

    private function connect()
    {
        try {
            $this->db = new PDO('mysql:host=$host;dbname=$dbname', '$username', '$password');

        } catch (PDOException $e) {
            die("Error de conexión: " . $e->getMessage());
        }
    }


    public function getAll()
    {
        // TODO: Implement getAll() method.
        $sql = "SELECT * FROM usuarios";
        $stmt = $this->db->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function add()
    {
        // TODO: Implement add() method.
        try {
            $stmt = $this->db->prepare($sql);
            $stmt->execute($params);
            return $stmt;
        } catch (PDOException $e) {
            die("Error de consulta: " . $e->getMessage());
        }
    }

    public function edit()
    {
        // TODO: Implement edit() method.
    }

    public function delete()
    {
        // TODO: Implement delete() method.
    }

}

$host = 'localhost';
$dbname = 'pdv';
$username = 'root';
$password = '173073';

$usuarios = new Usuarios($host, $dbname, $username, $password);
$usuarios->getAll();
print_r($usuarios->getAll());