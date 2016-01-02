<?php

$EmailFrom = "info@buildfromzero.com";
$EmailTo = "vjtomvictor@icloud.com";
$Subject = "Message from Ad Visitor";
$Name = Trim(stripslashes($_POST['Name'])); 
$Email = Trim(stripslashes($_POST['Email'])); 
$Phone = Trim(stripslashes($_POST['Phone'])); 
$from = Trim(stripslashes($_POST['from']));
$towho = Trim(stripslashes($_POST['towho']));
$EmailFrom =$from;
$EmailTo =$towho
// validation
$validationOK=true;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
  exit;
}

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $Name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $Email;
$Body .= "\n";
$Body .= "Phone : ";
$Body .= $Phone; 
$Body .= "\n";

// send email 
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

// redirect to success page 
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=contactthanks.php\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=http://project.buildfromzero.com/_errorpages/510.html">";
}
?>