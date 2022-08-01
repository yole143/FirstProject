<?php
    include 'php.php';
    session_start();
    if (isset($_POST['login'])){
        $username = $_POST["username"];
        $password = $_POST["password"];

        $adminchecker = mysqli_query($conn, "SELECT * FROM admin WHERE username = '$username' AND password='$password'");
        //$adminchecker = mysqli_num_rows(mysqli_query($conn, "SELECT id FROM admin WHERE username='$username' AND password='$password'"));

        if (mysqli_num_rows($adminchecker) > 0){
            $row = mysqli_fetch_assoc($adminchecker);
            $_SESSION['admin_id'] = $row['id'];
            header("Location: Admin_Account.php");
        }
        else{
            $message[] = "Username or Password is Incorrect!";
        }

        /*if ($adminchecker>0){
            header("Location: Admin_Account.php");
        }
        else{
            echo "<script>alert('Username or Password is Incorrect');</script>";
            header("Location: Login_Admin_Account.php");
        }*/
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Admin</title>
        <link rel="stylesheet" href="Login_Background_Design.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>
        <div class="back">
            <span><a href="First_Page.html"><button class="b">Back</button></a></span>
        </div> 
        <div class="container">
                <div class="capital">
                    <h1>Jose Rizal Memorial State University<h1>
                    <h2>Vice President for Research Development and Extention</h2>
                    
                    <label for="" class="labelh4">Admin Portal</label><br><br><br>
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
                            <label for="" class="username">Username</label>
                            <input placeholder="Username" type="text" class="form-control" name="username" required>
                            
                        </div>
                        <div class="form_group">
                            <label class="username">Password </label>
                            <input placeholder="Password" name="password" type="password" class="form-control" required>
                        </div>
                        <input type="submit" value="Login" class="admin_btn" name="login">
                    </form>
                </div>
            </div>>
        
    </body>

</html>