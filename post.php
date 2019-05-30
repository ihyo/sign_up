<?php
    include 'https://github.com/ihyo/sign_up/dbconnection.php';
    $connect=dbconn();

    $userid=$_POST['custom_id'];
    $username=$_POST['custom_name'];
    $userage=$_POST['custom_age'];

    $query="INSERT into info(custom_id, custom_name, custom_age) values('$userid','$username','$userage')";
    mysql_query("set names utf8", $connect);
    mysql_query($query, $connect);
 ?>

 <script>
 windows.alert('DB로 전송 완료 !');
 location.href='https://github.com/ihyo/sign_up/main.html'
 </script>
