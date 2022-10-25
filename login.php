<?php
  $username = $_POST['username'];
  $password = $_POST['password']; 

  if ($username == "1Ma" && $password == "4dM1n") {
    header("Location: dashboard.html");
  } else {
    header("Location: index.html");
  }
?>