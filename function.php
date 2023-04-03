<?php
    Class crudapp{
        private $conn;
        public function __construct(){
            # database connect korta 4 ta step laga
            # database host, database user, database pass, database name,

            $dbhost = 'localhost';
            $dbuser = 'root';
            $dbpass = "";
            $dbname = 'crudapp';

            $this->conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

            if(!$this->conn){
                die("database conation error");
            }
        }
    }
?>