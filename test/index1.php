<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
   <?php

    $host = "localhost";
    $user = "web";
    $pass = "password";
    $db = "website";
    $charset = "utf8";

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    $opt = [
      PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
      PDO::ATTR_EMULATE_PREPARES   => false,
    ];
    $pdo = new PDO($dsn, $user, $pass, $opt);

    $stmt = $pdo->prepare('SELECT * FROM test WHERE id = ? AND text = ?');
    $stmt->execute([$id, $text]);
    while ($row = $stmt->fetch()) {
        echo $row['id'] . " " . $row['text'] . "\n";
    }

  ?>
 </body>
</html>
