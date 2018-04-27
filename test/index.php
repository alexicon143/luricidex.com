<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 <?php
  $servername = "localhost";
  $username = "web";
  $password = "password";
  $dbname = "website";

  // Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
  }

  //query the database
  $sql = "SELECT * FROM test";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "row " . $row["id"]. ") Text: " . $row["text"]. "<br>";
    }
  } else {
      echo "0 results";
  }

  echo $result->fetch_assoc(2);

  $conn->close();

 ?>
 </body>
</html>
