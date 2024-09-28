<?php
$conn =  mysqli_connect("localhost", "root","" ,"sms_project");
if($conn) {
    echo 'Connection Successful';
}
else {
    echo 'Connection Failed';
}

?>