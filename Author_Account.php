<?php
    
    include 'php.php';
    session_start();

    $user_id = $_SESSION['user_id'];

    if (!isset($user_id)){
        header("Location: Login_Author_Account.php");
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Secretary Account</title>
        <link rel="stylesheet" href="Author_Background_Design.css">
    </head>
    <body>
        <div class="profile">
            <ul>
                <li>=
                    <ul>
                        
                        <li>Profile
                            <ul>
                                <li>View Profile
                                </li>
                                <li><a href="">Update Profile</a></li>

                            </ul>
                        </li>
                        
                        <li><span><a href="author_logout.php">Logout</a></span></li>
                    </ul>
                </li>
            </ul>
        </div>
        <h4 class="welcome">Welcome <?php
                                $sql = mysqli_query($conn, "SELECT * FROM author_account WHERE id = '$user_id'");
                    
                                if (mysqli_num_rows($sql)){
                                    $fetch = mysqli_fetch_assoc($sql);
                                    
                                }

                                ?> <?php echo $fetch['fullname']; ?></h4>
        <h2 class="header2">Your Research</h2>
        
        <div class="Table">
            <hr>
            <div class="List-of-Accounts">
                <input placeholder = "Search Research Titte" type="" class="search">
                <span><a href=""><button class="add">Set Public</button></a></span>
            </div>
                <table class="table">
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
                                
                                //if ($conn->connect_error){
                                 //   die("Connection Failed:" .$conn->connect_error);
                                //}
                                
                                
                                /*$sql = mysqli_query($conn, "SELECT * FROM dapitan_secretary WHERE id = '$user_id'");

                                if (mysqli_num_rows($sql)){
                                    $fetch = mysqli_fetch_assoc($sql);
                                    
                                }

                                include 'php.php';

                                $sq ="SELECT * FROM dapitan_campus_data WHERE id = '$user_id'";
                                $result = mysqli_query($conn, $sq);
                                
                                if (mysqli_num_rows($result)){
                                    $fetch = mysqli_fetch_assoc($result);


                                }*/
                                $s = mysqli_query($conn, "SELECT * FROM author_account WHERE id = '$user_id'");

                                if (mysqli_num_rows($s)){
                                    $fetch = mysqli_fetch_assoc($s);
                                    
                                }
                                $campus = $fetch['campus'];
                                $fullname = $fetch['fullname'];

                                if ($conn->connect_error){
                                    die("Connection Failed:" .$conn->connect_error);
                                }
                                $sql = "SELECT * FROM dapitan_campus_data WHERE campus='$campus' AND authors = '$fullname'" ;
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

    </body>
</html>