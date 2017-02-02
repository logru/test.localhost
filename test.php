<?
require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("test");
?><?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true)die();
require_once($_SERVER["DOCUMENT_ROOT"]."/base_connect.php");
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

$obCache = new CPHPCache; 
$life_time = 1200; 
$cache_id = $ELEMENT_ID.$SECTION_ID.$USER->GetUserGroupString(); 

		$result = mysqli_query($db,"SELECT ID, LOGIN, DATE_REGISTER, SUBDATE(CURDATE(),1) FROM b_user");
	print '<table border="1">';
	while ($row = mysqli_fetch_array($result))
{
    print '<tr>';
	print '<td>'.$row['DATE_REGISTER'].'</td>';
	print '<td>'.$row['SUBDATE(CURDATE(),1)'].'</td>';
    print '</tr>';
}
print '</table>';



?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>