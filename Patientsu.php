<?php

$fname =filter_input(INPUT_POST,'fname');
$lname=filter_input(INPUT_POST,'lname');
$email=filter_input(INPUT_POST,'email');
$password=filter_input(INPUT_POST,'password');
$NID=filter_input(INPUT_POST,'NID');
$gender=filter_input(INPUT_POST,'gender');
$blood=filter_input(INPUT_POST,'blood');
$Location=filter_input(INPUT_POST,'Location');
$age=filter_input(INPUT_POST,'age');
$Acc_Num=filter_input(INPUT_POST,'Acc_Num');
$Bank_Name=filter_input(INPUT_POST,'Bank_Name');
$Bank_Branch=filter_input(INPUT_POST,'Bank_Branch');
$bkash=filter_input(INPUT_POST,'bkash');



$conn= mysqli_connect('localhost', 'root', '', 'proyash');

if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}

else{ 
$sql = "INSERT INTO patient (EMAIL,PASSWORD,FIRST_NAME,LAST_NAME,NID,AGE,BLOOD_GROUP,GENDER,AREA_LOCATION,BANK_AC,BANK_BRANCH,BANK_NAME,BKASH) 
VALUES ('$email', MD5('$password'), '$fname', '$lname', '$NID', '$age', '$blood', '$gender','$Location', '$Acc_Num', '$Bank_Branch', '$Bank_Name', '$bkash')";

if ($conn->query($sql)){
    
    header('location:PatientSuccess.html');
    
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
?>
