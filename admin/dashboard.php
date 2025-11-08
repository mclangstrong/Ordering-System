<?php
    include '../components/connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="../css/styleadmin.css?v=<?php echo time(); ?>">
    <title>Admin_Dashboard</title>
</head>
<body>
    
    <?php include '../components/header_admin.php';?>





    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script type="text/javascript" src="../js/adminscript.js"></script>

    <?php include '../components/alert.php';?>
</body>
</html>