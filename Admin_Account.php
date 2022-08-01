
<?php
    include 'php.php';
    session_start();
    $admin_id = $_SESSION['admin_id'];

    if (!isset($admin_id)){
        header("Location: Login_Admin_Account.php");
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Admin Account</title>
        <link rel="stylesheet" href="Author_Background_Design.css">
    </head>
    <link rel="stylesheet" href="s.css">
    
    <body>
        
        <div class="wrapper">
            <ul>
                <br>
                <li>= Admin
                    <ul>
                        
                        <li>My Profile
                            <ul>
                                <li>View Profile</li>
                                <li><a href="update_Admin_profile.php">Update Profile</a></li>
                            </ul>
                        </li>
                        <li>Author Account
                            <ul>
                                <li><span><a href="Manage_Account.html" class="author">Manage Account</a></span></li>
                                
                            </ul>
                        </li>
                        <li>Secretary Account
                            <ul>
                                <li><span><a href="Add_Secretary.php" class="secretary">Add Account</a></span></li>
                                <li><span><a href="">Manage Account</a></span></li>
                            </ul>
                        </li>
                        <li><span><a href="admin_logout.php">Logout</a></span></li>
                        
    
                    </ul>
                </li>
    
            </ul>
        </div>
    </body>

    <body>
        
        <h1 class="welcome"><?php
                                $sql = mysqli_query($conn, "SELECT * FROM admin WHERE id = '$admin_id'");
                    
                                if (mysqli_num_rows($sql)){
                                    $fetch = mysqli_fetch_assoc($sql);
                                    
                                }

                            ?> Welcome <?php echo $fetch['fullname']; ?></h1>
        <div class="container">
            <br>
            <h2 class="header2">Research Works</h2>
            
        </div>
        <div class="Table">
            <hr>
            <br>
            <div class="List-of-Accounts">
                <input placeholder = "Search Research Title/Author" type="" class="search">
                <span><a href="Admin_Adding_Secretary_Account.php"><button class="add">Add</button></a></span>
                <span><a href=""><button class="update">Update</button></a></span>
                <span><a href=""><button class="delete">Delete</button></a></span>
                
            </div>
            <div class="data">
                <br>
                <div class="table">
                    <table>
                        <thead>
                            <tr>
                                <th>Research Title</th>
                                <th>Authors</th>
                                <th>Status</th>
                                <th>Proposed Date</th>
                                <th>Started</th>
                                <th>Completed</th>
                                <th>Campus</th>
                            </tr>
                            <tbody>
                                <?php
                                    include 'php.php';
                                    if ($conn->connect_error){
                                        die("Connection Failed:" .$conn->connect_error);
                                    }
                                    $sql = "SELECT research, authors, status, proposed, started, completed, campus FROM dapitan_campus_data" ;
                                    $result = $conn->query($sql);
                                        
                                    if ($result->num_rows>0){
                                        while ($row = $result->fetch_assoc()){
                                            echo "<tr><td>" .$row["research"] ."</td><td>" .$row["authors"] ."</td><td>" .$row["status"] ."</td><td>" .$row["proposed"] ."</td><td>" .$row["started"] ."</td><td>" .$row["completed"] ."</td><td>" .$row["campus"] ."</td></tr>";
                                        }
                                        echo "</table>";
                                    }
                                    $conn->close();
                                ?>
                                    
                            </tbody>
                            
                        </thead>
                        
                    </table><br>
                    <h1>Admin Encoded</h1><br>
                    <table>
                        <thead>
                            <tr>
                                <th>Research Title</th>
                                <th>Authors</th>
                                <th>Status</th>
                                <th>Proposed Date</th>
                                <th>Started</th>
                                <th>Completed</th>
                            </tr>
                            <tbody>
                                <?php
                                    include 'php.php';
                                    if ($conn->connect_error){
                                        die("Connection Failed:" .$conn->connect_error);
                                    }
                                    $sql = "SELECT research, authors, status, proposed, started, completed FROM admin_data" ;
                                    $result = $conn->query($sql);
                                        
                                    if ($result->num_rows>0){
                                        while ($row = $result->fetch_assoc()){
                                            echo "<tr><td>" .$row["research"] ."</td><td>" .$row["authors"] ."</td><td>" .$row["status"] ."</td><td>" .$row["proposed"] ."</td><td>" .$row["started"] ."</td><td>" .$row["completed"] ."</td></tr>";
                                        }
                                        echo "</table>";
                                    }
                                    $conn->close();
                                ?>
                                    
                            </tbody>
                            
                        </thead>
                        
                    </table>
                    
                </div>
            </div>
        </div>
    </body>
    
</html>