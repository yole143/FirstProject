
<?php
    session_start();
    include 'php.php';
    $user_id = $_SESSION['user_id'];

    if (isset($_POST['add'])){
        //$campus = $_POST['category'];
            //dapitan
        //if ($campus = "dapitan"){
        $campus = $_POST['campus'];
        $fullname = $_POST["fullname"];
        $username = $_POST["username"];
        $password = $_POST["password"];
        //if ($campus == "dapitan"){
        if ($campus == "none"){
            echo "<h1 style = color:red>Please Choose the Campus</h1>";
            //echo "<script>alert('choose campus where you wan't to add');</script>";
            
        }
        else{
            $checkusername = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM author_account WHERE username='$username' AND campus='$campus'"));

            if ($checkusername==0){
                $sql = "INSERT INTO author_account (fullname, username, password, campus) VALUES ('$fullname','$username','$password','$campus')";
                    
                if ($conn->query($sql)){
                    //echo "<script>alert('Success!');</script>";
                    //$message[]="Successfully Added!";
                    header("Location: Secretary_Account.php");
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
                        <span><a href="Secretary_Account.php"><button>Back</button></a></span>
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
                        <div class="add_secretarys"><br>
                            <?php
                                //$sql = mysqli_query($conn, "SELECT * FROM dapitan_secretary WHERE id = $")
                                $sql = mysqli_query($conn, "SELECT * FROM dapitan_secretary WHERE id = '$user_id'");
                    
                                if (mysqli_num_rows($sql)){
                                    $fetch = mysqli_fetch_assoc($sql);
                                    
                                }
                            ?>
                            <input type="hidden" name="campus" value="<?php echo $fetch['campus'];?>">
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