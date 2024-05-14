<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <div class="box form-box">
            <?php
            include("student_data_account.php");
            if(isset($_POST['submit'])){
                $rollno=$_POST["rollno"];
                $name=$_POST["name"];
                $email=$_POST["email"];
                $password=$_POST["password"];
                $verify_unique=mysqli_query($con,"select Email from student_data where Email='$email'");
                if(mysqli_num_rows($verify_unique)!=0)
                {
                    echo "<div class='message'>
                            <p> This email already exists , Please try again with new email!</p>
                            </div> <br>";
                    echo "<a href='javascript:self.history.back()'><button class='btn'>Go Back</button></a>";
                }
                else{
                    mysqli_query($con,"INSERT INTO student_data(Roll_No,Name,Email,Password) VALUES('$rollno','$name','$email','$password')");
                    echo "<div class='message'>
                    <p> Registration Successful</p>
                    </div> <br>";
            echo    "<a href='login.php'><button class='btn'>Login Now</button></a>";
                }
            }
            else
            {

            
            ?>

            <h1>Signup</h1>
            <form action="" method="post">
                <div class="field input">
                    <label for="rollno">Roll No</label>
                    <input type="text" name="rollno" id="rollno" required >
                </div>
                <div class="field input">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" required >
                </div>
                <div class="field input">
                    <label for="email">Mail Id</label>
                    <input type="text" name="email" id="email" required >
                </div>
                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" required>
                </div>
                <div class="field ">
                <input type="submit" class="btn" name="submit" value="Signup" >
                </div>
                <div class="links">
                    Already have an account? <a href="login.php">Login</a>
                </div>
            </form>
        </div>
        <?php } ?>
    </div>
</body>
</html>