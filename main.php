<html>
<head>
<title>Jake's DB TEST</title>
</head>
<body>
  <?
      include("./dbconnection.php");
      $connect=dbconn();
  ?>
  <form action='./post.php' name='review_table' method='post'>
<br>
<br>
<CENTER>DB로 전송할 값 입력받기</b></div><br>
<form action="" method="post">
<label>아 이 디 : </label><input type="text" name="custom_id" class="box"/><br>
<label>이    름 : </label><input type="text" name="custom_name" class="box"/></br>
<label>나    이 : </label><input type="text" name="custom_age" class="box"/>

<center><input type="submit" value="DB로 전송"/><br />

</form>
</body>

</html>
