<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Web Development</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <!-- <img src="die.jpg" alt="Nahi hai"> -->
    <nav id="navbar">
      <ul>
        <li><a href="#"> Home</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="#">Contact Us</a></li>
      </ul>
    </nav>
    <div class="container">
      <form action="index.php" method="post">
        <div class="form-group">
        <label for="name">Enter your name:</label>
        <input type="text" name="name" id="name" required /> <br /><br />
    </div>
    <div class="form-group">
        <label for="age">Enter your age:</label>
        <input type="text" name="age" id="age" required /> <br /><br />
    </div>
    <div class="form-group">
        <label for="mobile">Enter your mobile number:</label>
        <input type="number" name="mobile" id="mobile" required /> <br /><br />
    </div>
    
        <label for="gender">Select your Gender</label> <br>
        <input type="radio" name="gender" id="gender" />
        <label for="Male">Male</label><br />
        <input type="radio" name="gender" id="gender" />
        <label for="Female">Female</label><br />
        <input type="radio" name="gender" id="gender" />
        <label for="Others">Others</label> <br /><br />
    
    <div class="form-group">
        <label for="country">Select your country</label>
        <select name="country" id="country">
          <option value="">----Select----</option>
          <option value="India">India</option>
          <option value="USA">USA</option>
          <option value="Russia">Russia</option>
          <option value="Australia">Australia</option>
          <option value="New Zealand">New Zealand</option>
        </select>
        <br /><br />
    </div>
    <div class="form-group">
        <label for="desc">Describe yourself</label>
        <textarea name="desc" id="desc" cols="30" rows="10">Description of yourself</textarea>
        <br /><br />
    </div>
    <div class="form-group">
        <button id="btn" type="submit" onclick="validateForm()">Submit</button>
    </div>
      </form>
    </div>

    <script src="index.js"></script>
  </body>
</html>


<?php
if(isset($_POST['name'])){
    $con = mysqli_connect('localhost', 'root', '','details');

    if(!$con)
    {
        die("Connection Failed: ".mysqli_connect_error());
    }

    $name = $_POST['name'];
    $age = $_POST['age'];
    $phone = $_POST['mobile'];
    $gender = $_POST['gender'];
    $country = $_POST['country'];
    $desc = $_POST['desc'];

    // $sql = "INSERT INTO `details1` (`name`,`age`,`phone`,`gender`,`country`,`desc`) VALUES ('$name','$age','$phone','$gender','$country','$desc');";

    // if($con->query($sql) == true){
    //     echo "Successfully inserted";
    // }
    // else{
    //     echo "ERROR: $sql <br> $con->error";
    // }

    $sql = "SELECT * from details1;";
    $result = $con->query($sql);

    if($result->num_rows>0){
        while($row = $result->fetch_assoc()){
            echo " Id: ". $row['id']." Name: " .$row['name']." Age: ".$row['age'];
        }
    }
    else {
        echo "0 results";
    }

    $con->close();
}
else{
    echo "Kuch gadbad hai";
}
?>

