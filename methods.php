<?php 
//this is my first time dealing with classes and validations in php. I'll have to make a better on later
include 'db.php';


    //form submission and other form validation methods
    class formValidation{

        function authenticate($args) {
            $args = func_get_args();
            $database = new Server("localhost", "root", "yUQhzB1zRLZHpekr", "userinfo");
             
              // make an if statement for if consent is true or false

            if (empty($args[0]) || empty($args[1]) || empty($args[2]) || empty($args[4])) {
                
                header("Location:login.php?error=1");

            } else {
                $fname = mysqli_real_escape_string($database->validate(), $args[0]);
                $lname = mysqli_real_escape_string($database->validate(), $args[1]);
                $user = mysqli_real_escape_string($database->validate(), $args[2]);
                $email = mysqli_real_escape_string($database->validate(), $args[3]);
                $gender = mysqli_real_escape_string($database->validate(), $args[4]);
                $location = mysqli_real_escape_string($database->validate(), $args[5]);
                $age = mysqli_real_escape_string($database->validate(), $args[6]);

                $query = "INSERT INTO userdata(fname, lname,user,email,gender,country,age ) VALUES('$fname', '$lname', '$user', '$email', '$gender', '$location','$age')";

                    if (!mysqli_query($database->validate(), $query)) {
                        die(mysqli_error($database->validate()));
                    } else {
                        // add parameter that checks to see if this new account is the same as a previous one
                        header("Location: user.php");}}
    }

    //make a getter to grab variables

}




//$test = new formValidation;
//echo $test->testServer();
/*$test = new Server('localhost', 'root', 'yUQhzB1zRLZHpekr', 'userinfo');
echo $test->validate();*/