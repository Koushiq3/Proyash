<?php

$id =filter_input(INPUT_POST,'appid');
$pres=filter_input(INPUT_POST,'prescription');


$conn= mysqli_connect('localhost', 'root', '', 'proyash');

if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}

else{ 
$sql = "INSERT INTO appointment (EMAIL,PASSWORD,FIRST_NAME,LAST_NAME,NID,SPECIALISATION,CHAMBER_ADDRESS,VISITING_FEE,AREA_LOCATION,BANK_AC,BANK_BRANCH,BANK_NAME,BKASH,Phone) 
VALUES ('$email', MD5('$password'), '$fname', '$lname', '$NID', '$specialisation', '$adr', '$Visiting_Fee','$Location', '$Acc_Num', '$Bank_Branch', '$Bank_Name', '$bkash','$phone')";

if ($conn->query($sql)){
    
    header('location:SignUpSuccess.html');
    
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
?>
