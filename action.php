<?php
$Name=$_REQUEST['Name'];
$Mobile_No=$_REQUEST['Mobile_No'];
$Email=$_REQUEST['Email'];
$Message=$_REQUEST['Message'];
$Address=$_REQUEST['Address'];
$Address2=$_REQUEST['Address2'];
$City=$_REQUEST['City'];
$State=$_REQUEST['State'];
$Zip=$_REQUEST['Zip'];


if (empty($Name)|| empty($Mobile_No) ||empty($Email)|| empty($Message) || empty($Address) || empty($Address2) || empty($City) || empty ($State) ||empty($Zip))
{
    echo "please fill all the feilds ";
}
else
{
    mail("nayan19985july@gmail.com","Query",$Message,"From:$Name<$Email><$Mobile_No><$Address><$Address2><$City><$State><$Zip>");
    
    echo "<script type='text/javascript'>alert('your message has been sent');window.history.log(-1);</script>";
  
}
?>