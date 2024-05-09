<?php


class Database{
 
    private $host;
    private $fdb;
    private $sdb;
    private $user;
    private $password;
    private $charset;

    public function __construct(){
        $this->host = constant('HOST');
        $this->fdb = constant('FDB');
        $this->sdb = constant('SDB');
        $this->user = constant('USER');
        $this->password = constant('PASSWORD');
        $this->charset = constant('CHARSET');
    }


    function connect(){
        try{
        $connection = "mysql:host=". $this->host . ";dbname=". $this->fdb. ";charset=". $this->charset;
        $options = [
            PDO::ATTR_ERRMODE   => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_EMULATE_PREPARES => false,
        ];

        $pdo = new PDO($connection, $this->user, $this->password, $options);

        return $pdo;

        }catch(PDOException $e){

            try{
            
            $connection = "mysql:host=". $this->host . ";dbname=". $this->sdb. ";charset=". $this->charset;
            
            $options = [
                PDO::ATTR_ERRMODE   => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => false,
            ];

                    $pdo = new PDO($connection, $this->user, $this->password, $options);

                    return $pdo;

            }
            catch(PDOException $e){
                print_r('Error connection: '.$e->getMessage());
            }
        }
    }

    
    public function connectDatabases($dbName) {
    $connection = "mysql:host=". $this->host . ";dbname=". $dbName . ";charset=". $this->charset;
    $options = [
        PDO::ATTR_ERRMODE   => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_EMULATE_PREPARES => false,
    ];
    return new PDO($connection, $this->user, $this->password, $options);
    }
}
?>