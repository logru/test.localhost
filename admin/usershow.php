<?//if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true)die();
/*global $DB;
$strSql = "SELECT LOGIN FROM b_user";
$results = $DB->Query("SELECT `LOGIN` FROM `b_user`");
echo $results;*/
$db = mysqli_connect("127.0.0.1","root","asdrtegf12");
mysqli_select_db("bitrix1",$db);
$result = mysqli_query("SELECT LOGIN FROM b_user",$db);
echo $result; 
?>