<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=1">
<title>Form Submit to Send Email</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<?php
if(!empty($_POST["send"])) {
	$userName = $_POST["userName"];
  $userEmail = $_POST["userEmail"];
	$userPhone = $_POST["userPhone"];
	$userMessage = $_POST["userMessage"];
	$toEmail = "hello.brandhackers@gmail.com";
  
	

  $mailHeaders = "
        <html>
        <head>
        <title>brandhacker - " . $userName . "</title>
        </head>
        <body>
        <p>MyWork - " . $userEmail . "</p>
        <table>
        <tr>
        <th>Name</th>
        <td>" . $userPhone . "</td>
        </tr>
        <tr>
        <th>Place</th>
        <td>" . $userMessage . "</td>
        </tr>
        <tr>
        <th>Email</th>
        <td>" . $userMessage . "</td>
        </tr>
        <tr>
        <th>Contact Number</th>
        <td>" . $userMessage . "</td>
        </tr>
        </table>
        </body>
        </html>
        ";

	if(mail($toEmail, $userName, $mailHeaders)) {
	    $message = "Your contact information is received successfully.";
	}
}
?>

<div class="form-container">
  <form name="contactFormEmail" method="post">
    <div class="input-row">
      <label>Name <em>*</em></label> 
      <input type="text" name="userName" required id="userName"> 
    </div>
    <div class="input-row">
      <label>Email <em>*</em></label> 
      <input type="email" name="userEmail" required id="userEmail"> 
    </div>
    <div class="input-row">
      <label>Phone <em>*</em></label> 
      <input type="text" name="userPhone" required id="userPhone">
    </div>
    <div class="input-row">
      <label>Message <em>*</em></label> 
     <textarea name="userMessage" required id="userMessage">
    </div>
    <div class="input-row">
      <input type="submit" name="send" value="Submit">
      <?php if (! empty($message)) {?>
      <div class='success'>
        <strong><?php echo $message; ?>	</strong>
      </div>
      <?php } ?>
    </div>
  </form>
</div>

</body>
</html>


