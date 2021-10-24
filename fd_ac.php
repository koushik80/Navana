<?php
$conn = mysqli_connect("localhost", "root"," ", "userform");

$q_score = $_POST['quality'];
$feedback_txt = $_POST['suggestion'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$contact = $_POST['contact'];

$query ="insert into feedback (quality_score, feedback, name, email, phone, contact)
values('$q_score', '$feedback_txt', '$name', '$email', '$phone', '$contact')";
$result = mysqli_query($conn, $query);
if($result)
  echo 'Thank you for your feedback. We appreciate you!';
else
die("Something went wrong. Please try again.");
?>
