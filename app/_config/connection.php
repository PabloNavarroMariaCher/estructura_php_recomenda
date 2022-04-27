<?php
class Connection
{
    protected $connection_db;
    public function connection()
    {
        if ($_SERVER["SERVER_NAME"] == "localhost") {

            try {
                $this->connection_db = new PDO("sqlsrv:server=mchersql01\BAS;database=Datos_Para_Reportes", "sa", "Mcher2015");
                $this->connection_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $this->connection_db->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, "SET NAMES utf8");
                return $this->connection_db;
            } catch (PDOException $e) {
                echo 'Fallo la conexion sql :  ' . $e->getLine();
            }
        } else {
            try {
                $this->connection_db = new PDO(DB_HOST, DB_USER, DB_PASSWORD);
                $this->connection_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $this->connection_db->exec("SET CHARTER SET utf8");
                return $this->connection_db;
            } catch (PDOException $e) {
                echo 'Falló la conexión SQL: ' . $e->getLine();
                exit();
            }
        }
    }
}
$conn = new Connection;
$conn->connection();
var_dump($conn);
