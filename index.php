
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Proxy Checker</title>

	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="AdminLTE/css/AdminLTE.min.css">
  <link rel="stylesheet" href="AdminLTE/css/skins/_all-skins.min.css">
  <script src="bootstrap/js/jquery.min.js"></script>
  <script src="bootstrap/js/jquery-ui.js"></script>
  <script src="bootstrap/js/bootstrap.js"></script>
  <script src="AdminLTE/js/app.js"></script>
</head>

<body background="hospital_photos/small_5.jpg" style="background-repeat: no-repeat; background-attachment: fixed; background-size: cover">
<div class="row">
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php" style="font-size: xx-large"><b>Tired of asking for Proxies?</b></a>
            </div>
        </div>
    </nav>
</div>
<div class="row" style="padding-top: 4%">
</div>

<?php
  $myfile = "working_proxies.txt";
  $lines = file($myfile);
  $cnt = count($lines);
?>
<br> ----Running local system scans every 2 minutes---- 
<br> 
<!--   A total of <?php echo $cnt; ?> proxies have been found! -->

<?php

shuffle($lines);

?>
<br> To prevent too much load on any particular proxy, only a few proxies are listed below: <br> 
<br> Recommended Proxies: <br><br> 

<?php
if($cnt>=1)
{
  echo "1) " . $lines[0] . "<br>";
}

if($cnt>=2)
{
  echo "2) " . $lines[1] . "<br>" ;
}

if($cnt>=3)
{
  echo "3) " . $lines[2] . "<br>" ;
}

?>


</body>
</html>