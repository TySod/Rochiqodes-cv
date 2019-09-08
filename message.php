<?php
if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['title'];
  $message = $_POST['comment'];

$myfile = fopen('message.txt', 'a+');
fwrite($myfile, $name);
fwrite($myfile, ' ');
fwrite($myfile, $email);
fwrite($myfile, ' ');
fwrite($myfile, $subject);
fwrite($myfile, ' ');
fwrite($myfile, $message);
fclose($myfile);
  echo '<h1> Welcome: ' .$name. '</h1>
  <p>Your email is:' .$email.  '<br>
  Message Title:<strong>' .$subject. '</strong> <br>'
  .$message.
  '</p>';
}
?>