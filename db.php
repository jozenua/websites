<?php 

class Server{
   /* private static $dbserver = "localhost";
    private static $dbuser = "root";
    private static $dbpassword = "yUQhzB1zRLZHpekr";
    private static $db = "userinfo";*/

   
    function __construct($dbserver,$dbuser,$dbpassword,$db){

        $this->dbserver = $dbserver;
        $this->dbuser = $dbuser;
        $this->dbpassword = $dbpassword;
        $this->db = $db;
    }

    function validate() {
        $conn = mysqli_connect($this->dbserver, $this->dbuser, $this->dbpassword, $this->db);
        if (mysqli_connect_errno()) {
            echo 'DB connection error: ' . mysqli_connect_error();
        }else {
            return $conn;
        }
       
        //echo "validated";
        //return mysqli_select_db($validate,"$this->db" ) or die("Couldn't select the database.");
  
    }
}

//$test = new Server("localhost", "root", "yUQhzB1zRLZHpekr", "userinfo");
//$test->validate(); 

?>