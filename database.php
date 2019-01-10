<?php

//////////////////////////////////////////////////////////////
$host = "localhost"; //  Server Name Of Host Location Where Your Database You Can Use Ip Address Like 127.0.0.1  .
$db = "test"; // Put Here Your Database Name Where You Store And Receive Information .
$user = "root"; //Your Server Login User Name
$pass = "usbw"; // Server Login Password by Default "" for Local Pc

$db_type;





class Database
{
public $pdo;
    public $charset = "utf8mb4";// Which Unicode Use To Received And Store Data Opreation utf8mb4m give More Freture than utf8
    public $port = 3306; //port number of server
   public $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, 
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => FALSE,
        PDO::ATTR_PERSISTENT         => true,
    ];
    public function __construct($db_type,$host,$db,$user,$pass)
    {
        
        if ($db_type == "mysql") {
             $dsn  = "mysql:host=$host;dbname=$db;charset={$this->charset};{$this->charset}";
            try {
                $this->pdo = new PDO($dsn,$user,$pass,$this->options);
                // echo "connected";
            }
            catch (PDOEXCEPTION $e){
            echo $e->getMessage();
            }
        }


        elseif ($db_type == "pgsql") {
            $dsn  = "pgsql:host=$host;dbname=$db;charset={$this->charset};{$this->charset}";
            try {
                $this->pdo = new PDO($dsn,$user,$pass,$this->options);
                //$dsn = "pgsql:host=$host;port=5432;dbname=$db;user=$username;password=$password";

                echo "connected";
            }
            catch (PDOEXCEPTION $e){
            echo $e->getMessage();
            }
        }

        elseif ($db_type == "sql") {
            $dsn  = "sqlsrv:server=$host;Database=$db;";
            try {
                $this->pdo = new PDO($dsn,$user,$pass);
//PDO( "sqlsrv:server=$serverName ; Database=AdventureWorks", "", "");
                echo "connected";
            }
            catch (PDOEXCEPTION $e){
            echo $e->getMessage();
            }
        }



    }
}


$dbv = new Database("mysql","localhost","test","root","usbw");