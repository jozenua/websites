<?php 

// This is to make a fully functional login page comlete with password authentication and confirmation email

include 'methods.php';

$test = new formValidation;

if(isset($_POST['submit'])) {
    return $test->authenticate($_POST['firstname'], $_POST['lastname'], $_POST['user'], $_POST['email'], $_POST['gender'], $_POST['location'], $_POST['age']);
}

?> 
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sample Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="login.css" />
    <!--<script src="src.js"></script> -->
</head>
<body class="login">

<header class="header"> 
        <h3> ANTFARM </h3>
        <nav>
            <ul>
                <div class="together">
              
                <li><a href="about.php"> About Us </a> </li>
</div>
<div>
                <li><a href="user.php"> Login </a> </li>  
</div>
                </ul>
        </nav>
</header>

<main>

 <p class="text"> <span class="exagerate">&#10077;The reasonable man </span> adapts himself to the world, <span class="exagerate">the unreasonable man</span> adapts the world to himself; <br />
        therefore all progress depends on <span class="exagerate">the  unreasonable man.&#10078; </span> </p>
        <p class="author"  align="right">--George Bernard Shaw </p>

<form method="POST" action="<?php $_SERVER['PHP_SELF'] ?>" class="form">
    
    <?php 

    if(isset($_GET['error'])) {

        //also add a way to make the input borders change colors
        echo '<p class="error"> You have one or more fields that needs to be corrected </p>';
    }

    ?>

    <div align="left" class="validate">
    <label for="first"> First Name <span class="required">(required)</span> </label>
    <input id="first" name="firstname" type="text" placeholder="John" required  class="extend">
    <br /><br />
    <label for="last"> Last Name <span class="required">(required)</span> </label>
    <input id="last" name="lastname" type="text" placeholder="Smith" required class="extend">
</div> 
<br />
<div align="left" class="validate">
    <label for="email">Email <span class="required">(required)</span> </label>
    <input type="email" name="email" id="email" required placeholder="someone@example.com" class="extend">
</div>
<br />
<div align="left" class="validate">
    <label for="user">Username <span class="required">(required)</span> </label>
    <input type="text" name="user" id="user" required placeholder="mycroftforpresident2019" class="extend">
</div>
<br />
<div align="left">
    <label for="location">Country of Origin </label >
    <input id="location" name="country" type="text" class="extend">
</div>
<br />
<div align="left">
    <label for="age"> Date of Birth </label>
    <input id="age" name="age" type="date" class="extend"> 
</div>
<br />
<div align="left" class="validate">
    <label for="password" >Password <span class="required">(required)</span> </label>
    <input id="password" name="password" type="password" required pattern=".{5,}" title="password must be greater than 5 characters" class="extend">
</div>
<br />
<div align="left" class="validate">
    <label for="confirm">Confirm Password <span class="required">(required)</span></label>
    <input id="confirm" name="confirm" type="password" onselectstart="return false" onpaste="return false;" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete=off required class="extend">
</div>
<br />
<div align="left" class="test">
    <label for="gender">Gender:</label>
    <div class="gender">
        <div>
    <label for="male">Male 
    <input type="checkbox" id="male" name="gender">
    </label>
</div>
<div>
    <label for="female">Female
    <input type="checkbox" id="female" name="gender">
    </label> 
</div>
</div>
</div>
<br />
<div align="left" class="validate">
    <input type="checkbox" id="consent" name="consent">
    <label for="consent">I agree to the <a href="terms.php">terms and conditions</a> </label> 
</div>

<button class="button" type="submit" name="submit" value="submit" align="center"> Submit </a></div>
</form>

</main>
</body>
</html>