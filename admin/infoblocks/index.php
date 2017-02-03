<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("инфоблоки");
?>
<?
CModule::IncludeModule("iblock");
$arSelect = Array("ID", "NAME");
$arFilter = Array("IBLOCK_ID"=>7);  
$res = CIBlockElement::GetList(Array("SORT"=>"ASC"), $arFilter, false, false, $arSelect);
//print '<table border="1">';
while($ob = $res->GetNextElement())
{
	$arFields = $ob->GetFields();
	print $arFields["ID"].'</br>';
    print $arFields["NAME"].'</br>';
	/*print '<tr>';
    print '<td>'.$arFields["ID"].'</td>';
    print '<td>'.$arFields["NAME"].'</td>';
    print '</tr>';*/
	
}?>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>