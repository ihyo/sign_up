<?
function dbconn(){
$host_name="user";
$db_user_id ="mdp";
$db_name="custom";
$db_pw="4team";
$connect=@mysql_connect($host_name, $db_user_id, $db_pw);
mysql_query("set names utf8", $connect);
mysql_select_db($db_name, $connect);
if(!$connect)die("연결에 실패".mysql_error());
return $connect;
}

//에러메세지 출력
function Error($msg)
{
  echo"
  <script>
  window.alert('$msg');
  history.back(1);
  </script>
  ";
  exit; //위 에러 메세지만 띄우기
}
?>
