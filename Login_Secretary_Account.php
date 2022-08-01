<?php

    
    include 'php.php';
    session_start();
    if (isset($_POST['login'])){
        $category = $_POST['category'];

        if ($category== "dapitan" ){
            //dapitan

        
            $username = $_POST["username"];
            $password = $_POST["password"];

            $sql = "SELECT * FROM dapitan_secretary WHERE username = '$username' AND password='$password' AND campus = '$category'";
            $result = mysqli_query($conn, $sql);

            
                
            if (mysqli_num_rows($result) > 0){
                $row = mysqli_fetch_assoc($result);
                $_SESSION['user_id'] = $row['id'];
                $user_id = $_SESSION['user_id'];
                

                header("Location: Secretary_Account.php");
                
            }
            else{
                $message[] = "Username or Password is incorrect!";
            }
        }
        elseif ($category == "dipolog"){
            //dipolog
            $username = $_POST["username"];
            $password = $_POST["password"];

            $sql = "SELECT * FROM dapitan_secretary WHERE username = '$username' AND password='$password' AND campus = '$category'";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0){

                

                $row = mysqli_fetch_assoc($result);

                $_SESSION['user_id'] = $row['id'];
                $user_id = $_SESSION['user_id'];

                header("Location: Secretary_Account.php");
                        
                
                    
            }else{
                $message[] = "Username or Password is incorrect!";
            }

        }
        elseif ($category == "katipunan"){
            //katipunan
            $username = $_POST["username"];
            $password = $_POST["password"];

            $sql = "SELECT * FROM dapitan_secretary WHERE username = '$username' AND password='$password' AND campus = '$category'";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0){

                

                $row = mysqli_fetch_assoc($result);

                $_SESSION['user_id'] = $row['id'];
                $user_id = $_SESSION['user_id'];

                header("Location: Secretary_Account.php");
                        
                
                    
            }
            else{
                $message[] = "Username or Password is incorrect!";
            }

        }
        elseif ($category == "siocon"){
            //siocon
            $username = $_POST["username"];
            $password = $_POST["password"];

            $sql = "SELECT * FROM dapitan_secretary WHERE username = '$username' AND password='$password' AND campus = '$category'";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0){

                

                $row = mysqli_fetch_assoc($result);

                $_SESSION['user_id'] = $row['id'];
                $user_id = $_SESSION['user_id'];

                header("Location: Secretary_Account.php");
                        
                
                    
            }else{
                $message[] = "Username or Password is incorrect!";
            }

        }
        elseif ($category == "sibuco"){
            //sibuco
            $username = $_POST["username"];
            $password = $_POST["password"];

            $sql = "SELECT * FROM dapitan_secretary WHERE username = '$username' AND password='$password' AND campus = '$category'";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0){

                

                $row = mysqli_fetch_assoc($result);

                $_SESSION['user_id'] = $row['id'];
                $user_id = $_SESSION['user_id'];

                header("Location: Secretary_Account.php");
                        
                
                    
            }else{
                $message[] = "Username or Password is incorrect!";
            }

        }
        elseif ($category == "tampilisan"){
            //tampilisan
            $username = $_POST["username"];
            $password = $_POST["password"];

            $sql = "SELECT * FROM dapitan_secretary WHERE username = '$username' AND password='$password' AND campus = '$category'";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0){

                

                $row = mysqli_fetch_assoc($result);

                $_SESSION['user_id'] = $row['id'];
                $user_id = $_SESSION['user_id'];

                header("Location: Secretary_Account.php");
                        
                
                    
            }else{
                $message[] = "Username or Password is incorrect!";
            }

        }
       

        

            //$checkuser = mysqli_num_rows(mysqli_query($conn, "SELECT id FROM dapitan_secretary WHERE username='$username' AND password='$password'"));

            /*if ($checkuser==0){
                header("Location: Login_Secretary_Account.php");
                
            }
            else{
                //header("Location: Secretary_Account.php");
            }*/
        /*}
        elseif ($category == "dipolog"){
            //dipolog
            $username = $_POST["username"];
            $password = $_POST["password"];

            $checkuser = mysqli_num_rows(mysqli_query($conn, "SELECT id FROM dipolog_secretary WHERE username='$username' AND password='$password'"));

            if ($checkuser==0){
                header("Location: Login_Secretary_Account.php");
                
            }
            else{
                header("Location: dipolog_secretary_account.php");
            }

        }
        elseif ($category == "katipunan"){
            //katipunan
            $username = $_POST["username"];
            $password = $_POST["password"];

            $checkuser = mysqli_num_rows(mysqli_query($conn, "SELECT id FROM katipunan_secretary WHERE username='$username' AND password='$password'"));

            if ($checkuser==0){
                header("Location: Login_Secretary_Account.php");
                
            }
            else{
                header("Location: katipunan_secretary_account.php");
            }
        }
        elseif ($category == "siocon"){
            //siocon
            $username = $_POST["username"];
            $password = $_POST["password"];

            $checkuser = mysqli_num_rows(mysqli_query($conn, "SELECT id FROM siocon_secretary WHERE username='$username' AND password='$password'"));

            if ($checkuser==0){
                header("Location: Login_Secretary_Account.php");
                
            }
            else{
                header("Location: siocon_secretary_account.php");
            }
        }
        elseif ($category == "sibuco"){
            //sibuco
            $username = $_POST["username"];
            $password = $_POST["password"];

            $checkuser = mysqli_num_rows(mysqli_query($conn, "SELECT id FROM sibuco_secretary WHERE username='$username' AND password='$password'"));

            if ($checkuser==0){
                header("Location: Login_Secretary_Account.php");
                
            }
            else{
                header("Location: sibuco_secretary_account.php");
            }
        }
        elseif ($category == "tampilisan"){
            //Tampilisan
            $username = $_POST["username"];
            $password = $_POST["password"];

            $checkuser = mysqli_num_rows(mysqli_query($conn, "SELECT id FROM tampilisan_secretary WHERE username='$username' AND password='$password'"));

            if ($checkuser==0){
                header("Location: Login_Secretary_Account.php");
                
            }
            else{
                header("Location: tampilisan_secretary_account.php");
            }
        }
        else{
            echo "<script>alert('Select Campus');<script>";
        }*/
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Secretary Login</title>
        <link rel="stylesheet" href="Login_Background_Design.css">
        
    </head>
    <body>
        <div class="back">
            <span><a href="Research_Portal.html"><button class="b">Back</button></a></span>
        </div> 
        <div class="">
                <div class="container">
                    <h1>Jose Rizal Memorial State University<h1>
                    <h2>VICE PRESIDENT FOR RESEARCH DEVELOPMENT AND EXTENSION</h2>
                    <h3>Office of the Officer-In-Charge</h3>
                    <label for="" class="labelh4">Secretary Portal</label>
                    <br><br><br><br>
                </div>
                <div class = "border">
                    <form action="" method="POST">
                        <div class="form_group">
                            <label for="" class="log_acount">Login Acount</label>
                            <br>
                            <?php
                                if (isset($message)){
                                    foreach ($message as $message){
                                        echo '<br><div class = "messag">'.$message.'</div>';
                                    }
                                }
                            ?>
                            <br>
                            <label for="" class="campus">Campus</label>
                            <select name="category" id="" class="category">
                                <option value="dapitan">Dapitan Campus</option>
                                <option value="dipolog">Dipolog Campus</option>
                                <option value="katipunan">Katipunan Campus</option>
                                <option value="siocon">Siocon Campus</option>
                                <option value="sibuco">Sibuco Campus</option>
                                <option value="tampilisan">Tampilisan Campus</option>

                            </select>
                            <br>
                            <label for="" class="username">Username</label>
                            <input placeholder="Username" type="text" class="form-control" name="username" required>
                            
                        </div>
                        <div class="form_group">
                            <label class="username">Password </label>
                            <input placeholder="Password" type="password" class="form-control" name="password" required>
                        </div>
                            <input type="submit" value = "Login" class="admin_btn" name="login">
                    </form>
                </div>
        </div>>
        
    </body>

</html>