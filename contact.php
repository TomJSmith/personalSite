<?php
// ob_start();
$name = "";
$email_from = "";
$message = "";
$subject = "";
$email_to = "me@tomjohnsmith.com";
function cleanInput($data){
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = cleanInput($_POST["name"]);
  $email_from = cleanInput($_POST["email"]);
  $subject = cleanInput($_POST["subject"]);
  $message = cleanInput($_POST["message"]);
  $headers = 'From: '."postmaster@tomjohnsmith.com"."\r\n".
  'Reply-To: '.$email_from."\r\n";
  $email_to."<br/>";
  $subject."<br/>";
  $message."<br/>";
  $headers."<br/>";
  mail($email_to, $subject, $message, $headers);
  header("Location: thanks.html");
  // ob_end_flush();
}
?>
<!DOCTYPE html>
<html>
<head>
  <script type="text/javascript" src="js\contact.js">
  </script>
<title>Thomas Smith</title>
<link rel="stylesheet" href="css/mainPage.css">
<link rel="stylesheet" href="css/contact.css">
</head>
<body>
<div class="mainFrame">
  <div class="menuBar">
  <ul>
    <li><a href="mainPage.php">Home</a></li>
    <li><a href="photography.php">Photography</a></li>
    <li><a href="projects.php">Projects</a></li>
    <li><a href="contact.php" style="background-color: #0F5959">Contact</a></li>
  </ul>
  </div>
  <div class="contentFrame">
    <div class="contactFormFrame">
      <form class="contactForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <input class="contactInput" type="text" name="name" value="Name" onfocus="fieldGetFocus(this, 'Name')" onblur="fieldLoseFocus(this, 'Name')">
        <input class="contactInput" type="email" name="email" value="Email" onfocus="fieldGetFocus(this, 'Email')" onblur="fieldLoseFocus(this, 'Email')">
        <input class="contactInput" type="text" name="subject" value="Subject" onfocus="fieldGetFocus(this, 'Subject')" onblur="fieldLoseFocus(this, 'Subject')">
        <textarea class="contactInput" name="message" rows="8" cols="40" onfocus="fieldGetFocus(this, 'Message')" onblur="fieldLoseFocus(this, 'Message')">Message</textarea>
        <button type="submit" name="submit">Send</button>
      </form>
    </div>
  </div>
</div>
<div class="socialLinks">
  <a href="https://www.instagram.com/thom_john/"><img src="instagram.png" class="socialIcon" height="30px" width="30px"/></a>
  <a href="https://www.facebook.com/profile.php?id=1081272861"><img src="facebook-black.png" class="socialIcon" height="30px" width="30px"/></a>
  <a href="https://github.com/TomJSmith"><img src="github.png" class="socialIcon" height="30px" width="30px"/></a>
  <a href="https://ca.linkedin.com/in/thomas-smith-39686289"><img src="linkedin.png" class="socialIcon" height="30px" width="38px"/></a>
</div>
</body>
</html>
