<?php
session_start();
if (isset($_POST["submit"])) {
  $_SESSION["name"] = $_POST["name"];
  header("location: ./app/views/quizz.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./assets/css/access.css">
  <title>Enter Nickname</title>
</head>

<body>
  <main>
    <h1>Quiz</h1>
    <form class="nameinput" action="" method="post">
      <input type="text" name="name" placeholder="Nickname">
      <button class="start-btn" name="submit" type="submit"><span class="text">Start Quiz</span><span>Let's Go</span></button>
    </form>
    <button class="rulesbtn">Quiz Rules</button>
  </main>
  <footer>
    <div>
      <p>
        All copy rights reserved to Aya Elrhayour - Code X
      </p>
    </div>
  </footer>
</body>

</html>