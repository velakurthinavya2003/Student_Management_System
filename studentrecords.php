<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
  </head>
</head>
<body>
    <div class="nav">
        <div class="logo">
        <p><a href="studentboard.php">Logo</a></p>
        </div>
        <div class="right-links">
            <a href="profileeditstudent.php">Change Profile</a>
            <a href="index.php"><button class="btn">Log Out</button></a>
        </div>
    </div>
    <div class="table_body">
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
      $sql="SELECT * from enroll_data";
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
    </tr>"
    ?>
     <?php }?>
   
  </tbody>
</table>
</div>
    
   
    
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> 
</body>
</html>