<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nspproject";

$connect = mysqli_connect($servername, $username, $password, $dbname);
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Australia</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body class="text-bg-dark">

  <div class="container">

    <h1 class="text-center myy-3">Australia</h1>
    <div class="d-flex justify-content-center align-items-center">
      <img src="Images/australia.jpg" class="h-50" alt="">
    </div>
    <div class="my-4 text-center px-3">
      <?php
      $sql = "select description from places where title = 'Australia';";
      $result = mysqli_query($connect, $sql);

      while ($row = mysqli_fetch_assoc($result)) {
        $desc = $row['description'];
        echo "<p> $desc
      </p>";
      }
      ?>
    </div>

  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
  
</body>

</html>