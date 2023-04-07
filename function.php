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
        public function add_data($data){
            $std_name = $data['std_name'];
            $std_roll = $data['std_roll'];
            $std_img = $_FILES['std_img']['name'];
            $tmp_name = $_FILES['std_img']['tmp_name'];

            $query = "INSERT INTO students(std_name,std_roll,std_img) VALUE ('$std_name',$std_roll, '$std_img')";

            if(mysqli_query($this->conn, $query)){
                move_uploaded_file($tmp_name, 'upload/'.$std_img);
                return "Information Added Successfully";
            }
            else{
                "data not insert";
            }
        }
        public function display_data(){
            $query = "SELECT * FROM students";
            if(mysqli_query($this->conn, $query)){
                $returnData = mysqli_query($this->conn, $query);
                return $returnData;
            }
        }
    }
?>