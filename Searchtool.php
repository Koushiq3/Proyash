<?php

$conn= mysqli_connect('localhost', 'root', '', 'proyash');

$specialisation = $_POST['Specialization'];
$locate= $_POST['location'];
 $sql = "Select ID From doctor  Where SPECIALISATION='$specialisation' AND AREA_LOCATION='$locate'";

$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$num = mysqli_num_rows($result);

if($num == 1){
    //header('location:DocHome.html');
    header('Location: DrList.html?eid='.$row['ID'].'');
}else{
   
}
?>