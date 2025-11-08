<?php
    include '../components/connect.php';

    if (isset($_POST['register'])){

        $id = unique_id();
        $fName = $_POST['fName'];
        $fName = filter_var($fName, FILTER_SANITIZE_STRING);

        $lName = $_POST['lName'];
        $lName = filter_var($lName, FILTER_SANITIZE_STRING);

        $email = $_POST['email'];
        $email = filter_var($email, FILTER_SANITIZE_STRING);

        $password = $_POST['password'];
        $password = filter_var($password, FILTER_SANITIZE_STRING);

        $correct_password = $_POST['correct_password'];
        $correct_password = filter_var($password, FILTER_SANITIZE_STRING);

        $select_admin = $conn->prepare("SELECT * FROM 'seller' WHERE email=?");
        $select_admin->execute([$email]);



        if($select_admin->rowCount()>0){
            $warning_message[]='Email already exist';
        }
        else{
            if($password != $correct_password){
                $warning_message[]='confirm password not matched';
            }
            else{
                $insert_admin = $conn->prepare("INSERT INTO 'seller'(id, firstname,lastname, email, password) VALUES(?,?,?,?,?)");
                $insert_admin->execute([$id,$fname,$lName,$email,$correct_password,]);
                $success_message[] = 'You are registered as admin! please login';
            }
            
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="../css/index.css?v=<?php echo time(); ?>">
    <title>Laguna Scout Merchandise</title>
</head>
<body>
    <div class="background"></div>
    <header>
    <div class="logo">
        <img src="../image/council_logo.png" width="100">
    </div>
    <div class="title-container">
        <h1 class="f-title">Laguna Council Merchandise</h1>
    </div>
    </header>
    <div class="container" id="signin"> 
        <h1 class ="form-title">Login</h1>
        <form method="post" action="">
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
            <input type="submit" class="btn" value="Sign in" name="signin">
            <p class="recover">
                <a href="#">Recover Password</a>
            </p>
            <div class="links">
                <p>Don't have account yet?</p>
                <button id="signupButton">Sign Up</button>
            </div>
           
        </form>
        
    </div>
    <?php include '../components/alert.php';?>
</body>
</html>