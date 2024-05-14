<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page </title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <div class="box form-box">
            <?php
            include('student_data_account.php');
            if(isset($_POST['submit'])){
                $rollno=$_POST['rollno'];
                $password=$_POST['password'];
                $result=mysqli_query($con,"select * from student_data where Roll_No='$rollno' and Password='$password'");
                if($result && mysqli_num_rows($result) > 0) {
                $row=mysqli_fetch_array($result);
                $dbrollno=$row['Roll_No'];
                $dbpassword=$row['Password'];
                if($rollno==$dbrollno && $password==$dbpassword)
                {
                    echo "<div class='message'>
                    <p> Login Successful</p>
                    </div> <br>";
                    echo  "<a href='studentboard.php'><button class='btn'>Open Your DashBoard</button></a>";
                }
                 else
                 {
                    echo "<div class='message'>
                            <p> Wrong credentials</p>
                            </div> <br>";
                    echo "<a href='login.php'><button class='btn'>Login</button></a>";
                 }
                }
                else
                 {
                    echo "<div class='message'>
                            <p> Wrong credentials</p>
                            </div> <br>";
                    echo "<a href='login.php'><button class='btn'>Login</button></a>";
                 }


                 
            }else{

            ?>
            <h1>Login</h1>
            <form action="" method="post">
                <div class="field input" >
                    <label for="Rollno">Roll-No</label>
                    <input type="text" name="rollno" id="rollno" required >
                </div>
                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" required >
                </div>
                <div class="field ">
                <input type="submit" class="btn" name="submit" value="Login" >
                </div>
                <div class="links">
                    Don't have an account? <a href="signup.php">Signup</a>
                </div>
            </form>
        </div>
        <?php } ?>
    </div>
</body>
</html>