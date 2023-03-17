<?php
   
$voter_age = $_POST['age'];
$has_pvc = $_POST['pvc'];
$voter_ward = $_POST['ward'];

if ($voter_age < 18) {
    echo "You are not eligible to vote as you are below 18 years.";
} elseif (strtolower($has_pvc) !== "yes") {
    echo "You are not eligible to vote as you do not have a PVC.";
} elseif ($voter_ward !== "020") {
    echo "You are not eligible to vote as you are not in ward 020.";
} else {
    echo "You are eligible to vote!";
}
?>
