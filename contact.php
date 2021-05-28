<?php



// get posted data into local variables

$EmailFrom = Trim(stripslashes($_POST['EmailFrom'])); 

$EmailTo = "godfreysammut@gmail.com";

$Subject = "Website Form Enquiry";

$Name = Trim(stripslashes($_POST['Name'])); 

$Phone = Trim(stripslashes($_POST['Phone'])); 

$Message = Trim(stripslashes($_POST['Message'])); 



// validation

$validationOK=true;

if (Trim($EmailFrom)=="") $validationOK=false;

if (!$validationOK) {

  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";

  exit;

}



// prepare email body text

$Body .= "";

$Body .= "Name: ";

$Body .= $Name;

$Body .= "\n";

$Body .= "E-Mail: ";

$Body .= $EmailFrom;

$Body .= "\n";

$Body .= "Phone: ";

$Body .= $Phone;

$Body .= "\n";

$Body .= "Message: ";

$Body .= $Message;

$Body .= "\n";



// send email 

$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");



// redirect to success page 

if ($success){

  print "<meta http-equiv=\"refresh\" content=\"0;URL=ok.htm\">";

}

else{

  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";

}

?>