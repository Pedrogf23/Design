<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Feedback data</title>
  <link rel="icon" href="../img/favicon.png" />
</head>

<body>
  <?php
    if(isset($_POST['email'])){
      echo 'Email: '.$_POST['email'];
      echo '<br />';
    }
    if(isset($_POST['name'])){
      echo 'Name: '.$_POST['name'];
      echo '<br />';
    }
    if(isset($_POST['visit'])){
      echo 'First visit: '.$_POST['visit'];
      echo '<br />';
    }
    if(isset($_POST['need'])){
      echo 'Find what you needed: '.$_POST['need'];
      echo '<br />';
    }
    if(isset($_POST['reason'])){
      echo 'Reason to visit us: '.$_POST['reason'];
      echo '<br />';
    }
    if(isset($_POST['seeking'])){
      echo 'You were seeking: '.$_POST['seeking'];
      echo '<br />';
    }
    if(isset($_POST['easy'])){
      echo 'Dificult to find info: '.$_POST['easy'];
      echo '<br />';
    }
    if(isset($_POST['return'])){
      echo 'Likelyhood to return: '.$_POST['return'];
      echo '<br />';
    }
    if(isset($_POST['comments'])){
      echo 'You were seeking: '.$_POST['comments'];
      echo '<br />';
    }
  ?>
  <button><a href="index.html">Go back</a></button>
</body>

</html>