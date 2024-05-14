<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                Add
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#searchdata">
                search
            </button>
        </div>
            
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Enroll a Student</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <?php
                            include ('student_data_account.php');
                            if (isset($_POST['enroll'])) {
                                $rollno = $_POST["rollno"];
                                $name = $_POST["name"];
                                $email = $_POST["email"];
                                $branch = $_POST['branch'];
                                $year = $_POST["year"];
                                $section = $_POST["section"];
                                $course = $_POST['course'];
                                if (mysqli_query($con, "INSERT INTO enroll_data(Roll_No,Name,Email,Branch,Year,Section,Course) VALUES('$rollno','$name','$email','$branch','$year','$section','$course')")) {

                                    echo "<div>
                           
                                <a href='admin_Board.php'><button class='btn'>Record Added Succesfully</button></a></div>";
                                } else {
                                    echo "data not inserted";
                                }
                            } else {
                                ?>

                                <form action="" method="post">
                                    <div class="field input">
                                        <label for="rollno">Roll No</label>
                                        <input type="text" name="rollno" id="rollno" required>
                                    </div>
                                    <div class="field input">
                                        <label for="name">Name</label>
                                        <input type="text" name="name" id="name" required>
                                    </div>
                                    <div class="field input">
                                        <label for="email">Mail Id</label>
                                        <input type="text" name="email" id="email" required>
                                    </div>
                                    <div class="field input">
                                        <label for="branch">Branch</label>
                                        <input type="text" name="branch" id="branch" required>
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
                                        <input type="submit" class="btn" name="enroll" value="enroll">
                                    </div>

                                </form>

                            <?php } ?>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Button trigger modal -->


            <!-- Modal -->
            <div class="modal fade" id="searchdata" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Search a record</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="" method="post">
                                <div class="field input">
                                    <label for="rollno">Roll No</label>
                                    <input type="text" name="rollno" id="rollno">
                                </div>
                                <div class="field">
                                    <input type="submit" class="btn" name="search" value="search">
                                </div>

                            </form>

                        </div>

                    </div>
                </div>
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
                        include ('student_data_account.php');

                        if (isset($_POST['search'])) {
                            $rollno=$_POST['rollno'];
                            $sql = "SELECT * from enroll_data where Roll_No='$rollno' ";

                            $result = mysqli_query($con, $sql);
                            while ($data = mysqli_fetch_array($result)) {
                                echo "<tr>
        <td >" . $data['Roll_No'] . "</td>" .
                                    "<td >" . $data['Name'] . "</td>" .
                                    "<td >" . $data['Email'] . "</td>" .
                                    "<td >" . $data['Branch'] . "</td>" .
                                    "<td >" . $data['Year'] . "</td>" .
                                    "<td >" . $data['Section'] . "</td>" .
                                    "<td >" . $data['Course'] . "</td>
      </tr>";
                            }
                            ?>


                        </tbody>
                    </table>
                </div>
            <?php } ?>
        
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>




</body>

</html>