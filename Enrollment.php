<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="nav">
        <div class="logo">
        <p><a href="studentboard.php">Student_Management_System</a></p>
        </div>
        <div class="right-links">
            <a href="profileeditstudent.php">Change Profile</a>
            <a href="index.php"><button class="btn">Log Out</button></a>
        </div>
    </div>
    
    <div class="container">
        <div class="box form-box">
            <?php
            include('student_data_account.php');
              if(isset($_POST['enroll'])){
                $rollno=$_POST["rollno"];
                $name=$_POST["name"];
                $email=$_POST["email"];
                $branch=$_POST['branch'];
                $year=$_POST["year"];
                $section=$_POST["section"];
                $course=$_POST['course'];
                if(mysqli_query($con,"INSERT INTO enroll_data(Roll_No,Name,Email,Branch,Year,Section,Course) VALUES('$rollno','$name','$email','$branch','$year','$section','$course')"))
                { 
                    
                    echo "<div>
                           
                                <a href='studentrecords.php'><button class='btn'>Record Added Succesfully</button></a></div>";
                }
                else
                {
                    echo "data not inserted";
                }
            
              
              }else{
              ?>
            <h1>Enrollment Form</h1>
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
                    <label for="branch">Branch</label>
                    <input type="text" name="branch" id="branch" required >
                </div>
                <div class="field input">
                    <label for="year">Year</label>
                    <select name="year" id="year" required>
        <option value="">Select year</option>
        <option value="I">I year</option>
        <option value="II">II year</option>
        <option value="III">III year</option>
        <option value="IV">IV year</option>
        
    </select>
                </div>
                <div class="field input">
                    <label for="section">Section</label>
                    <select name="section" id="section" required>
        <option value="">Select section</option>
        <option value="A">A</option>
        <option value="B">B</option>
        <option value="C">C</option>
        <option value="D">D</option>
        
    </select>
                </div> 
                <div class="field input">
                    <label for="course">Course</label>
                    <select name="course" id="course" required>
        <option value="">Select Course</option>
        <option value="Database Management Systems">Database Management Systems</option>
        <option value="Operating System">Operating System</option>
        <option value="Java">Java</option>
        <option value="Python ">Python</option>
        <option value="Object Oriented Programming">Object Oriented Programming</option>
        <option value="MySQL">MySQL</option>
        <option value="Computer Networks">Computer Networks</option>
        <option value="Information Security">Information Security</option>
        <option value="Python for Data Analytics">Python for Data Analytics</option>
        <option value="E-Commerce">E-Commerce</option>
        <option value="Deep Learning">Deep Learning</option>
        <option value="Data Structures">Data Structures</option>
    </select>
                </div> 
                
   
                
                <div class="field ">
                <input type="submit" class="btn" name="enroll" value="enroll" >
                </div>
                
            </form>
        </div>
        <?php } ?>
        
    </div>
    
    
    
    
</body>
</html>