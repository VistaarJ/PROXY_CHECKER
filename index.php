
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Proxy Checker</title>

	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">

  <!-- <link rel="stylesheet" href="AdminLTE/css/AdminLTE.min.css"> -->
  <!-- <link rel="stylesheet" href="AdminLTE/css/skins/_all-skins.min.css"> -->
  <script src="bootstrap/js/jquery.min.js"></script>
  <script src="bootstrap/js/jquery-ui.js"></script>
  <script src="bootstrap/js/bootstrap.js"></script>
</head>
<body>

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
<br> ----Running full system scan every 24 hours----
<br>

<br> To prevent too much load on any particular proxy, only a few proxies are listed below: <br> 
<br> Top recommended Proxies: <br><br> 

<?php

if($cnt>=1)
{
  echo "1) " . $lines[0] . "<br><br>";
}

if($cnt>=2)
{
  echo "2) " . $lines[1] . "<br><br>" ;
}


?>
<div class="row">
    <nav class="navbar navbar-default navbar-fixed-bottom">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="https://docs.google.com/forms/d/e/1FAIpQLSf6E3__fQg2XTO6JiPhrtgjdAT7GcwudYql5HdxJt1We2elQQ/viewform" style="font-size: xx-small"><b>  Problems? Contact Vistaar Juneja</b></a>
            </div>
        </div>
    </nav>
</div>

</body>

</html>
