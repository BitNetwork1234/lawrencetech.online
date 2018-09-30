<?php
// Initialize the session
session_start();

// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: login.php");
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link href="/css/stylesphp.css" rel="stylesheet" type="text/css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <div class="page-header">
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION['username']); ?></b>. Welcome.</h1>
    </div>
    <center><iframe src="https://winsford.showmyhomework.co.uk/school/homeworks/calendar?year=Year%2011" style="width: 100% ; height:850px ; border:0;"></iframe></center>
    <center><iframe src="https://drive.google.com/embeddedfolderview?id=1QS1ee6qYZScmbIpGj21pV3Uuox_6q_mG#list" style="width:100%; height:600px; border:0;"></iframe></center>

    <p><a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a></p>
</body>
</html>
