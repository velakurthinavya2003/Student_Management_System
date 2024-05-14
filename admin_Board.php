<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="nav">
        <div class="logo">
        <p><a href="admin_Board.php">Student_Management_System</a></p>
        </div>
        <div class="right-links">
            
            <a href="index.php"><button class="btn">Log Out</button></a>
        </div>
    </div>
    <div class="sidenav">
  <a href="add.php"><button class="btn">Add</button></a>
  <a href="remove.php"><button class="btn">Remove</button></a>
  <a href="update.php"><button class="btn">Update</button></a>
  
  
</div> 
<div class="main_container">
        <div class="box form-box">
        <h1>Search here </h1>
            <form action="" method="post">
                <div class="field input">
                    <label for="rollno">Roll No</label>
                    <input type="text" name="rollno" id="rollno"  >
                </div>
                <div class="field">
                <input type="submit" class="btn" name="search" value="search" >
                </div>
               
            </form>
            <form action="" method="post">
                
                <div class="field">
                <input type="submit" class="btn" name="searchall" value="searchall" >
                </div>
               
            </form>
        </div>
        
    </div>
    <div class="table_body_admin">
    <table class="table">
  <thead>
    <tr>
      
      <th scope="col">Roll_No</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Branch</th>
      <th scope="col">Year</th>
      <th scope="col">Section</th>
      <th scope="col">Course</th>
    </tr>
  </thead>
  <tbody>
    <?php
      include('student_data_account.php');
      if(isset($_POST['search'])){
      $rollno=$_POST['rollno'];
      
      $sql="SELECT * from enroll_data where Roll_No='$rollno'";
      
      $result=mysqli_query($con,$sql);
      while($data=mysqli_fetch_array($result)){
    echo "<tr>
      <td >".$data['Roll_No']."</td>".
      "<td >".$data['Name']."</td>".
      "<td >".$data['Email']."</td>".
      "<td >".$data['Branch']."</td>".
      "<td >".$data['Year']."</td>".
      "<td >".$data['Section']."</td>".
      "<td >".$data['Course']."</td>
    </tr>";
      }
    }
     if(isset($_POST['searchall']))
      {
        $sql="SELECT * from enroll_data ";
      
        $result=mysqli_query($con,$sql);
        while($data=mysqli_fetch_array($result)){
      echo "<tr>
        <td >".$data['Roll_No']."</td>".
        "<td >".$data['Name']."</td>".
        "<td >".$data['Email']."</td>".
        "<td >".$data['Branch']."</td>".
        "<td >".$data['Year']."</td>".
        "<td >".$data['Section']."</td>".
        "<td >".$data['Course']."</td>
      </tr>";
        }
       ?>
     
   
  </tbody>
</table>
</div>
<?php  }  ?>
    
   
    
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> 

      

   
</body>
</html>


  