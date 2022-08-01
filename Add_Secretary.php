<?php
    session_start();
    include 'php.php';

    if (isset($_POST['add'])){
        //$campus = $_POST['category'];
            //dapitan
        //if ($campus = "dapitan"){
        $campus = $_POST['category'];
        $fullname = $_POST["fullname"];
        $username = $_POST["username"];
        $password = $_POST["password"];

        //if ($campus == "dapitan"){
        if ($campus == "none"){
            echo "<h1 style = color:red>Please Choose the Campus</h1>";
            //echo "<script>alert('choose campus where you wan't to add');</script>";
            
        }
        else{
            $checkusername = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM dapitan_secretary WHERE username='$username' AND campus='$campus'"));

            if ($checkusername==0){
                $sql = "INSERT INTO dapitan_secretary (fullname, username, password, campus) VALUES ('$fullname','$username','$password','$campus')";
                    
                if ($conn->query($sql)){
                    //echo "<script>alert('Success!');</script>";
                    //$message[]="Successfully Added!";
                    header("Location: Admin_Account.php");
                }else{
                    echo "<script>alert('Error!');</script>";
                    
                }
            }
            else{
                
                //echo "<h1 style = color:red>Username already Exist</h1>";
                $message[] = "Username Already Exist";
                //header("Location: Add_Secretary.php");
            }
        }
        /*}
        elseif ($campus == "dipolog"){
            $checkusername = mysqli_num_rows(mysqli_query($conn, "SELECT username FROM dapitan_secretary WHERE username='$username'"));

            if ($checkusername==0){
                $sql = "INSERT INTO dapitan_secretary (fullname, username, password, campus) VALUES ('$fullname','$username','$password','$campus')";
                    
                if ($conn->query($sql)){
                    echo "<script>alert('Success!');</script>";
                    header("Location: Admin_Account.php");
                }else{
                    echo "<script>alert('Error!');</script>";
                }
            }
            else{
                    
                echo "<h1 style = color:red>Username already Exist</h1>";
                //header("Location: Add_Secretary.php");
            }
        }

        }
        elseif ($campus == "dipolog"){
            //dipolog
            $campus = $_POST['category'];
            $fullname = $_POST["fullname"];
            $username = $_POST["username"];
            $password = $_POST["password"];

            $checkusername = mysqli_num_rows(mysqli_query($conn, "SELECT username FROM dapitan_secretary WHERE username='$username'"));

            if ($checkusername==0){
                $sql = "INSERT INTO dapitan_secretary (fullname, username, password, campus) VALUES ('$fullname','$username','$password','$campus')";
                
                if ($conn->query($sql)){
                    echo "<script>alert('Success!');</script>";
                    header("Location: Admin_Account.php");
                }else{
                    echo "<script>alert('Error!');</script>";
                }
            }
            else{
                
                echo "<h1 style = color:red>Username already Exist</h1>";
                //header("Location: Add_Secretary.php");
            }

            *//*$campus = $_POST['category'];
            $fullname = $_POST["fullname"];
            $username = $_POST["username"];
            $password = $_POST["password"];

            $checkusername = mysqli_num_rows(mysqli_query($conn, "SELECT username FROM dipolog_secretary WHERE username='$username'"));

            if ($checkusername==0){
                $sql = "INSERT INTO dipolog_secretary (fullname, username, password, campus) VALUES ('$fullname','$username','$password','$campus')";
                
                if ($conn->query($sql)){
                    echo "<script>alert('Success!');</script>";
                    header("Location: Admin_Account.php");
                }else{
                    echo "<script>alert('Error!');</script>";
                }
            }
            else{
                header("Location: Add_Secretary.php");
            }
        }
        elseif ($campus == "katipunan"){
            //katipunan
            $campus = $_POST['category'];
            $fullname = $_POST["fullname"];
            $username = $_POST["username"];
            $password = $_POST["password"];

            $checkusername = mysqli_num_rows(mysqli_query($conn, "SELECT username FROM dapitan_secretary WHERE username='$username'"));

            if ($checkusername==0){
                $sql = "INSERT INTO dapitan_secretary (fullname, username, password, campus) VALUES ('$fullname','$username','$password','$campus')";
                
                if ($conn->query($sql)){
                    echo "<script>alert('Success!');</script>";
                    header("Location: Admin_Account.php");
                }else{
                    echo "<script>alert('Error!');</script>";
                }
            }
            else{
                
                echo "<h1 style = color:red>Username already Exist</h1>";
                //header("Location: Add_Secretary.php");
            }
            /*
            $campus = $_POST['category'];
            $fullname = $_POST["fullname"];
            $username = $_POST["username"];
            $password = $_POST["password"];

            $checkusername = mysqli_num_rows(mysqli_query($conn, "SELECT username FROM katipunan_secretary WHERE username='$username'"));

            if ($checkusername==0){
                $sql = "INSERT INTO katipunan_secretary (fullname, username, password, campus) VALUES ('$fullname','$username','$password','$campus')";
                
                if ($conn->query($sql)){
                    echo "<script>alert('Success!');</script>";
                    header("Location: Admin_Account.php");
                }else{
                    echo "<script>alert('Error!');</script>";
                }
            }
            else{
                header("Location: Add_Secretary.php");
            }
        }
        elseif ($campus == "siocon"){
            //siocon
            $campus = $_POST['category'];
            $fullname = $_POST["fullname"];
            $username = $_POST["username"];
            $password = $_POST["password"];

            $checkusername = mysqli_num_rows(mysqli_query($conn, "SELECT username FROM siocon_secretary WHERE username='$username'"));

            if ($checkusername==0){
                $sql = "INSERT INTO siocon_secretary (fullname, username, password, campus) VALUES ('$fullname','$username','$password','$campus')";
                
                if ($conn->query($sql)){
                    echo "<script>alert('Success!');</script>";
                    header("Location: Admin_Account.php");
                }else{
                    echo "<script>alert('Error!');</script>";
                }
            }
            else{
                header("Location: Add_Secretary.php");
            }
        }
        elseif ($campus == "sibuco"){
            //sibuco
            $campus = $_POST['category'];
            $fullname = $_POST["fullname"];
            $username = $_POST["username"];
            $password = $_POST["password"];

            $checkusername = mysqli_num_rows(mysqli_query($conn, "SELECT username FROM sibuco_secretary WHERE username='$username'"));

            if ($checkusername==0){
                $sql = "INSERT INTO sibuco_secretary (fullname, username, password, campus) VALUES ('$fullname','$username','$password','$campus')";
                
                if ($conn->query($sql)){
                    echo "<script>alert('Success!');</script>";
                    $_SESSION['message'] ="<script>alert('Successfully Added')</script>";
                    header("Location: Admin_Account.php");
                }else{
                    echo "<script>alert('Error!');</script>";
                }
            }
            else{
                header("Location: Add_Secretary.php");
            }
        }
        elseif ($campus == "tampilisan"){
            //tampilisan
            $campus = $_POST['category'];
            $fullname = $_POST["fullname"];
            $username = $_POST["username"];
            $password = $_POST["password"];

            $checkusername = mysqli_num_rows(mysqli_query($conn, "SELECT username FROM tampilisan_secretary WHERE username='$username'"));

            if ($checkusername==0){
                $sql = "INSERT INTO tampilisan_secretary (fullname, username, password, campus) VALUES ('$fullname','$username','$password','$campus')";
                
                if ($conn->query($sql)){
                    echo "<script>alert('Success!');</script>";
                    header("Location: Admin_Account.php");
                }else{
                    echo "<script>alert('Error!');</script>";
                }
            }
            else{
                header("Location: Add_Secretary.php");
            }
        }
        elseif ($campus == "none"){
            echo "<h1 style = 'color:red'>Select Campus</h1>";
        }*/
        
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Add Account</title>
        <link rel = "stylesheet" href="Adding_secretary.css">
    </head>
    <body>
        
        <div class="cantain">
            <div class="log">
                    <div class="back">
                        <span><a href="Admin_Account.php"><button>Back</button></a></span>
                    </div>
                <form action="" method="post">
                    
                    <div class="add_secretary">
                        <div class="adde">
                            <label for="" class="add">Add Secretary Account</label>
                        </div>
                        <?php
                            if (isset($message)){
                                foreach ($message as $message){
                                    echo '<br><div class "messag">'.$message.'</div>';
                                }
                            }
                        ?>

                        <br><br>
                        <div class="add_secretarys">
                            <label for="">Campus</label>
                            <select name="category" id="" class="category">
                                <option value="none">--Campus--</option>
                                <option value="dapitan">Dapitan Campus</option>
                                <option value="dipolog">Dipolog Campus</option>
                                <option value="katipunan">Katipunan Campus</option>
                                <option value="siocon">Siocon Campus</option>
                                <option value="sibuco">Sibuco Campus</option>
                                <option value="tampilisan">Tampilisan Campus</option>
                            </select><br><br>
                            <label for="">Full Name</label>
                            <input type="text" name="fullname" placeholder="Full Name" required><br><br>
                            <label for="">Username </label>
                            <input type="text" name="username" placeholder="Username" required><br><br>
                            <label for="">Password </label>
                            <input type="password" class="password" name="password" placeholder="Password" required><br><br>
                        </div>
                        <div class="a">
                            <input type="submit" value="Add" name="add">
                            <span><a href="Admin_Account.html"><button>Cancel</button></a></span>
                        </div>
                    </div>  
                </form>
            </div>
        </div>
    </body>
</html>