<?php
// Enter your Host, username, password, database below.
// I left password empty because i do not set password on localhost.
$con = mysqli_connect("exz.h.filess.io","EmergencyDB_cottonwind","9788e03af92da66a15846e459125cb88fa45b393","EmergencyDB_cottonwind");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>
