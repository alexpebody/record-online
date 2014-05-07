<?
header("Location: http://www.radiorecord.ru/xml/reklama.txt");
exit;

$_SERVER["DOCUMENT_ROOT"] = '/home/r/record/public_html';
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
header('Content-type: application/json');
$banners = Array(); $i = 0;
if (CModule::IncludeModule("iblock")) {
	$arSelect = Array("ID", "NAME", "DETAIL_TEXT");
	$arFilter = Array("IBLOCK_ID"=>69, "SECTION_ID"=>5574);
	$res = CIBlockElement::GetList(Array(), $arFilter, false, Array("nPageSize"=>50), $arSelect);
	while($ob = $res->GetNextElement()) {
		$i++;
		$arFields = $ob->GetFields();
		$banners[$i]['ID'] = $arFields['ID'];
		$banners[$i]['NAME'] = iconv('CP1251','UTF-8',$arFields['NAME']);
		$banners[$i]['DETAIL_TEXT'] = iconv('CP1251','UTF-8',$arFields['~DETAIL_TEXT']);
	}
}
$bn = mt_rand(1,count($banners));
echo json_encode($banners[$bn]);
$fl = fopen('reklama.txt', 'w');
fwrite($fl, json_encode($banners[$bn]));
		
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php");?>