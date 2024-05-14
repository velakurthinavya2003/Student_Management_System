<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Updates</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="nav">
        <div class="logo">
            <p><a href="studentboard.php">Logo</a></p>
        </div>
        <div class="right-links">
            <a href="#">Change Profile</a>
            <a href="logout.php"><button class="btn">Log Out</button></a>
        </div>
    </div>
    <div class="container">
        <div class="box form-box">
            <?php
            include('student_data_account.php');
            if(isset($_POST['submit'])){
                
                $rollno=$_POST['rollno'];
                $name=$_POST['name'];
                $email=$_POST['email'];
                $password=$_POST['password'];
                if(mysqli_query($con,"UPDATE student_data set Name='$name', Email='$email', Password='$password' where Roll_No='$rollno'")){
                    echo "<div>
                           <p> Updated successfully</p>
                           </div> ";
                    
                }

            }
            else
            {
            ?>

            <h1>Change Profile</h1>
            <form action="" method="post" >
                <div class="field input">
                    <label for="rollno">Roll No</label>
                    <input type="text" name="rollno" id="rollno" required >
                </div>
                <div class="field input">
                    <label for="Name">Name</label>
                    <input type="text" name="name" id="name" required >
                </div>
                <div class="field input">
                    <label for="email">Mail Id</label>
                    <input type="text" name="email" id="email" required >
                </div>
                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" required >
                </div>
                
                <div class="field">
                    <input type="submit" class="btn" name="submit" value="Update" required>
                </div>
                
                
            </form>
        </div>
        <?php } ?>
    </div>
</body>
</html>