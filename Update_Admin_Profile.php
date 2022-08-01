<?php
    include 'php.php';
    session_start();
    $admin_id = $_SESSION['admin_id'];
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Update Profile</title>
        <link rel="stylesheet" href="update_background.css">
    </head>
    <body>
        <div class="back">
            <span><a href="Admin_Account.php"><button class="b">Back</button></a></span>
        </div>
        <?php
            $sql = mysqli_query($conn, "SELECT * FROM admin WHERE id = '$admin_id'");

            if (mysqli_num_rows($sql)){
                $fetch = mysqli_fetch_assoc($sql);
            }
            
        ?>
        <?php
            include 'php.php';
            
            if (isset($_POST['update'])){
                if (isset($_POST['curpass'])){
                    $fullname = $_POST['fullname'];
                    $username = $_POST['username'];
                    $curpass = $_POST['curpass'];
                    $newpass = $_POST['newpass'];
                    $conpass = $_POST['conpass'];
                    $email = $_POST['email'];
                    $phone_number = $_POST['phone_number'];
                    /*$image = $_FILES['image']['name'];
                    $image_size = $_FILES['image']['size'];
                    $image_tmp_name = $_FILES['image'] ['tmp_name'];
                    $image_folder = 'images/'.$image;*/

                    if ($newpass != $conpass){
                        echo "<script>alert('New password and confirm password did not match');</script>";
                    }
                    else{
                        /*if (!empty($image)){
                            if ($image_size > 2000000){
                                //image is too large
                            }
                            else{*/
                        $sql = "SELECT * FROM admin WHERE password='$curpass'";
                        $result = $conn->query($sql);

                        if (mysqli_num_rows($result)>0){
                            $sql = "UPDATE admin SET password = '$newpass' , fullname = '$fullname', username = '$username', email = '$email', phone_number = '$phone_number' WHERE id = '$admin_id'";
                                    
                            if ($conn->query($sql)){
                                //echo "<script>alert('Successfully Updated');</script>";
                                header("Location: Admin_Account.php");
                            }
                            else{
                                echo "<script>alert('Error');</script>";
                            }
                        }
                        else{
                            echo "<script>alert('Invalid Current Password');</script>";
                        }
                            /*}
                        }
                        else{
                            echo '<img src = "images/default_avatar.png>';
                        }*/
                        
                    }
                }
            }
        ?>
        

        <div class="Add">
            <form action="" method="POST">
                <div class="update">Update Profile</div><br>
                <div class="field">
                    
                    <input type="hidden" name="curpass" value="<?php echo $fetch['password'];?>">
                    <label for="">Full Name</label>
                    <input type="text" placeholder="Full Name" value="<?php echo $fetch['fullname'];?>" name="fullname" class="name" required><br><br>
                    <label for="">Username</label>
                    <input type="text" placeholder="User Name" name="username" value="<?php echo $fetch['username'];?>" class="username" required><br><br>
                    <label for="">Current Password</label>
                    <input type="password" placeholder="Current Password" name="curpass" class="curpass" required><br><br>
                    <label for="">New Password</label>
                    <input type="password" placeholder="New Password" name="newpass" class="newpass" required><br><br>
                    <label for="">Confirm Password</label>
                    <input type="password" placeholder="Confirm Password" name="conpass" class="conpass" required><br><br>
                    <label for="">Email</label>
                    <input type="email" placeholder="@gmail.com" value="<?php echo $fetch['email'];?>" name="email" class="email" required><br><br>
                    <label for="">Phone Number</label>
                    <input type="number" placeholder="+63........." value="<?php echo $fetch['phone_number'];?>" name="phone_number" class="phone" required><br><br>
                    <div class="picture">
                    <label for="">Upload Picture</label>
                        <input type="file" name="image" id="" class="pic" accept="image/jpg, image/jpeg, image/png" ><br><br>
                    </div>
                </div>
                <div class="click">
                    <input type="submit" value="Update" name="update" class="submit">
                </div>
            </form>
        </div>
    </body>
</html>