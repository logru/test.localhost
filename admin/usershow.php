<?//if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true)die();
$db = mysqli_connect("127.0.0.1","root","asdrtegf12");
mysqli_select_db($db,"bitrix1");
$result = mysqli_query($db,"SELECT ID, LOGIN, DATE_REGISTER FROM b_user ORDER BY DATE_REGISTER DESC LIMIT 3 ");
print '<table border="1">';
while ($row = mysqli_fetch_array($result))
{
    print '<tr>';
    print '<td>'.$row['ID'].'</td>';
    print '<td>'.$row['LOGIN'].'</td>';
	print '<td>'.$row['DATE_REGISTER'].'</td>';
    print '</tr>';
}
print '</table>';
?>