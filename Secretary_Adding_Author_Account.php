
<?php
    include 'php.php';
    session_start();
    $user_id = $_SESSION['user_id'];
   
    if (isset($_POST['add'])){
        $research = $_POST["research"];
        $authors = $_POST["authors"];
        $status = $_POST["category"];
        $proposed = $_POST["proposed"];
        $started = $_POST["started"];
        $completed = $_POST["completed"];
        $campus = $_POST['school'];
        
        //if ($campus = "dapitan"){
            $checktitle = mysqli_num_rows(mysqli_query($conn, "SELECT research FROM dapitan_campus_data WHERE research='$research' AND campus = '$campus'"));
            
            if ($checktitle==0){
                $sql = "INSERT INTO dapitan_campus_data (research, authors, status, proposed, started, completed, campus)
                Values ('$research','$authors','$status', '$proposed','$started','$completed','$campus')";
                
                if ($conn->query($sql)){
                    echo "<script>alert('Successfully Added!');</script>";
                    header("Location: Secretary_Account.php");
                }
                else{
                    echo "<script>alert('Error!');</script>";
                }
                $conn->close();
            }else{
                echo "<script>alert('Research Title is already Exist on the other secretary');</script>";
            }
        //}

    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Add Data</title>
        <link rel="stylesheet" href="Adding.css">
    </head>
    <body>
        <div class="Add">
        <span><a href="Secretary_Account.php"><button class="w">Back</button></a></span>
        <?php
            $sql = mysqli_query($conn, "SELECT * FROM dapitan_secretary WHERE id = '$user_id'");

            if (mysqli_num_rows($sql)){
                $fetch = mysqli_fetch_assoc($sql);
                
            }
            
        ?>
            <form action="" method="POST">
                
                <h1>Fill-up the Data</h1>
                <div class="top">
                    <label for="" class="duration">Duration</label>
                    <label for="" class="presentation">Presentation</label>
                </div>
                <div class="top1">
                    <input type="hidden" name="school" value="<?php echo $fetch['campus']; ?>">
                    <label for="" class="research-title">Research Title</label>
                    <input placeholder="Research Title" type="text" name="research" required>
                    <label for="" class="author">Author</label>
                    <input placeholder="Author" type="text" name="authors" required>
                    <label for="" class="status">Status</label>
                    <select name="category" id="">
                        <option value="status">---Status---</option>
                        <option value="proposed">Proposed</option>
                        <option value="on-going">On-Going</option>
                        <option value="completed">Completed</option>
                    </select>
                    
                    <br>
                    <label for="">Proposed Date</label>
                    <input type="date" name="proposed">
                    <label for="" class="started">Started</label>
                    <input type="date" name="started">
                    <label for="" class="completed">Completed</label>
                    <input type="date" name="completed">
                    <label for="" class="article/title">Article/Title</label>
                    <input placeholder="Article/Title" type="text" name="article_title">
                    <br>
                    <label for="" class="title-of-furom">Title of Furom</label>
                    <input placeholder="Title of Furom" type="text" name="title_of_furom" >
                    <label for="" class="venue">Venue</label>
                    <input placeholder="Venue" type="text" name="venue" >
                    <label for="" class="type">Type</label>
                    <input placeholder="National, Regional, International" type="text" name="national_regional_international">
                    <br>
                    <label for="" class="date">Date</label>
                    <input type="date" name="national_regional_internation_date">
                </div>
                <br>
                <div class="top2">
                    <label for="">Publication</label>
                    <label for="">Output</label>
                    <br>
                    <label for="">Article/Title</label>
                    <input placeholder="Article/Title" type="text">
                    <label for="">Author</label>
                    <input placeholder="Author" type="text">
                    <label for="">Date of Publication</label>
                    <input type="date">
                    <br>
                    <label for="" class="title-of-journal">Title of Journal or Publication</label>
                    <input placeholder="Title of Journal or Publication" type="text" class="">
                    <label for="">VOL. No. & Issue No.</label>
                    <input placeholder="Vol. No. & Issue No." type="number" class="">
                    <label for="">ISSN/ISBN</label>
                    <input placeholder="ISSN/ISBN" type="text">
                    <br>
                    <label for="">Index</label>
                    <input placeholder="Index" type="text">
                    <label for="">Product Name/Method Process/ Technology</label>
                    <input placeholder="Product Name/Method Process/ Technology" type="text">
                    <label for="">Proof/Description/Documentation</label>
                    <input placeholder="Proof/Description/Documentation" type="text">
                    <label for="">Beneficiary</label>
                    <input placeholder ="Partner Industry or Community" type="text">
                </div>
                
                <input type="submit" value="Add" class="A" name="add">
                
            </form>
        </div>
    </body>
</html>