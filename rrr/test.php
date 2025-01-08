<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
//$APPLICATION->SetPageProperty("title", "Тестовая страница");
$APPLICATION->SetPageProperty("keywords", "Keywords+");
$APPLICATION->SetPageProperty("description", "Description+");
$APPLICATION->SetTitle("Тест");
?>
    Тестовая страница была создана в панели администратора
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>