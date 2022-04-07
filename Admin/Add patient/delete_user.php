<?php
require_once "db.php";
$rowCount = count($_POST["patient"]);
for($i=0;$i<$rowCount;$i++) {
$result = mysqli_query($con, "DELETE FROM patient WHERE id='" . $_POST["patient"][$i] . "'");
}
header("Location:test1.php");
?>