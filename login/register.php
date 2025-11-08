<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="../css/index.css?v=<?php echo time(); ?>">
    <title>Document</title>
   
</head>
<body>
<?php include ('connect.php');?>
    <div class="background"></div>
    <header>
        <div class="logo">
            <img src="../image/council_logo.png" width="100">
        </div>
        <div class="title-container">
            <h1 class="f-title">Laguna Council Merchandise</h1>
        </div>
    </header>

    <div class="container" id="signup"> 
        <h1 class="form-title">Register</h1>
        <form method="post" action="" enctype="multipart/form-data">
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="fName" id="fName" placeholder="First Name" maxlength="50" required class="box">
                <label for="fName">First Name</label>
            </div>
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="lName" id="lName" placeholder="Last Name" maxlength="50" required class="box">
                <label for="lName">Last Name</label>
            </div>

            <div class="input-group">
                <i class="fas fa-house"></i>
                <input type="text" name="address" id="address" placeholder="Address" maxlength="50" required class="box">
                <label for="address">Address</label>
            </div>

            <div class="input-group">
                <i class="fas fa-phone"></i>
                <input type="number" name="pnumber" id="pnumber" placeholder="Phone Number" maxlength="11" required class="box">
                <label for="pnumber">Phone Number</label>
            </div>

            <div class="input-group">
                <i class="fas fa-child"></i>
                <input type="number" name="age" id="age" placeholder="Age" maxlength="50" required class="box">
                <label for="age">Age</label>
            </div>

            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" id="email" placeholder="Email" required class="box">
                <label for="email">Email</label>
            </div>
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" id="password" placeholder="Password" required class="box">
                <label for="password">Password</label>
            </div>

            <input type="submit" class="btn" value="Sign up" name="register">
            <div class="links">
                <p>Already have account?</p>
                <button id="loginButton">Log In</button>
            </div>
        </form>
    </div>

    <?php
    if(isset($_POST['submit'])){

        $fname = $_POST['fname'];
        $lname = $_POST['lname'];

        $address = $_POST['address'];
        $pnumber = $_POST['pnumber'];
        
        $age = $_POST['age'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        

        $sqlInsert = "INSERT INTO cs2a_tbl (fname,lname,address,pnumber,age,email,password) VALUES ('$fname','$lname','$address','$pnumber','$age','$email','$password')";

        $insert_query = mysqli_query($conn,$sqlInsert);
            if(!$insert_query){
                echo "Nyare Beh?" .mysqli_error($conn);
            }
            else{
                
            }
    }
?>

</body>    
</html>
