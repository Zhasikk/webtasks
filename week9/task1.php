<?php
echo "sdfsadf"
$connection = mysqli_connect("localhost","root","12345678","task1")
or die("Error connection");

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
 ?>

<html>
<head>
  <meta charset="utf-8">
  <title>task1</title>
</head>
<body>
<?php

$query="SELECT * FROM string ";
mysqli_query($connection,$query) or die("Error queryung database");
$result=mysqli_query($connection,$query);
$row = mysqli_fetch_assoc($result);
mysqli_set_charset("utf8");

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    echo "asdasd";
    for($i = 0 ; $i<1001 ;$i++){
      echo $row['name'];
    }

    }
} else {
    echo "0 results";
}


mysqli_close($connection);

 ?>
</body>
</html>
