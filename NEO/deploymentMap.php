<?php
/* when we finish implementing the php page
if(!isset($_SESSION['username'])){
    header("Location: login.html");
}
*/
session_start();

?>

<!DOCTYPE html>
<html>
<?php require "header.php";?>

<body>
<h1 style = "text-align:center;">Deployment Map</h1></div>
<br>
<div align="center">
    <div id="googleMap" style="width:700px;height:380px;border:4px solid black;"></div>


</div>

</body>
<?php require "footer.php"; ?>
<script src="http://maps.googleapis.com/maps/api/js"> </script>
<script src="js/map.js" type="text/javascript"></script>
</html>

