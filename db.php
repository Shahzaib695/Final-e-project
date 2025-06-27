<?php
$conn = mysqli_connect("localhost","root","","zara_clinic_data");
if(!$conn){
    echo"Not Connected";
}else{
    echo"Successfully Connected";
}
?>