<?php
  if ($_POST["txtage"] < 21) {
    echo "You are under 21 years old<br/>";
  } else {
    echo "You are 21 years old or over<br/>";
  }

  if ($_POST["txtgender"] == "Male") {
    echo "You have entered Male as your gender.";
  } elseif ($_POST["txtgender"] == "Female") {
    echo "You have entered Female as your gender.";
  } else {
    echo "You have entered an unrecognized gender.";
  }
?>