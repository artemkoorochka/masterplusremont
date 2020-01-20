<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "О компании \"Ремонтный центр \"Мастер Плюс\": виды услуг, основные преимущества.");
$APPLICATION->SetPageProperty("keywords", "Мастер Плюс, сервисный центр, ремонтный центр");
$APPLICATION->SetPageProperty("title", "О ремонтном центре Мастер Плюс в  Санкт-Петербурге");
$APPLICATION->SetTitle("О нашем ремонтном центре");
?><p>
</p>
<!--h1>Ремонт синтезаторов, стабилизаторов, ноутбуков, фотоаппаратов, квадрокоптеров </h1-->
 ... Эти и многие другие услуги Ремонтный центр «Мастер Плюс» оказывает с 1997 года. Основные преимущества  компании "Ремонтный центр "Мастер Плюс" это то что, благодаря большому практическому опыту работы квалифицированные специалисты нашего сервисного центра предоставляют различные виды услуг, независимо от типа устройства и степени сложности поломки.&nbsp;
<p>
</p>
<h2>
Мы производим диагностику и ремонт: </h2>
<ul>
	<li>Телевизоров и мониторов ЖК, проекционных, плазменных) и сопутствующего кинооборудования (проекторы, плееры, дом.кинотеатры);&nbsp;</li>
	<li>Ноутбуков;</li>
	<li>Музыкальных центров и усилителей;</li>
	<li>Ресиверов, стабилизаторов, устройств бесперебойного питания,<br>
 </li>
	<li>Цифровых фотоаппаратов и видеокамер (любительских и профессиональных);</li>
	<li>DVD-плееров, MP3-плееров;</li>
	<li>Микроволновых печей;</li>
	<li>Оргтехники: принтеров, сканеров, МФУ, шредеров и др.;</li>
	<li>Радиотелефонов и факсов, раций, мини-АТС и других средств связи;</li>
	<li>Автомобильной акустики, навигаторов, головных устройств;</li>
	<li>Кофемашин;</li>
	<li>Игровых приставок (стационарных и портативных);</li>
	<li>Климатической техники;</li>
	<li>Метеостанций, роботов-пылесосов, мультиварок;</li>
	<li>Квадракоптеров, роботов и радиоуправляемых игрушек;</li>
	<li>Планшетов, в том числе детских планшетов;</li>
	<li>Синтезаторов, микшеров, наушников и концертного оборудования;</li>
	<li>Ремонт GoPro камер, ресиверов триколор, проигрывателей винила и многой-многой другой техники.<br>
 </li>
</ul>





<p>
</p>
<h2>У нас простые и понятные условия ремонта.<br>
 </h2>
<p>
	 Когда вам надо отремонтировать свою аудио видео цифровую аппаратуру - все диагностические и ремонтные работы выполняются надежно, качественно и в срок благодаря применению самого современного оборудования, качественных материалов и оригинальных комплектующих.&nbsp;
</p>
<p>
	 Ремонтный центр «Мастер Плюс» предоставляет гарантию на все виды производимых работа и предлагает своим клиентам высокий уровень качества, отличный сервис и приемлемые цены.
</p>
<p>
	 «Мастер Плюс»»&nbsp;- это надежность, качество и своевременность исполнения ремонтных работ.
</p>
 <br>
  <?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"about-images",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "N",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "N",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "N",
		"DISPLAY_PICTURE" => "N",
		"DISPLAY_PREVIEW_TEXT" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(0=>"DETAIL_PICTURE",1=>"",),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "20",
		"IBLOCK_TYPE" => "content",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "Y",
		"NEWS_COUNT" => "100",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(0=>"",1=>"",),
		"SET_BROWSER_TITLE" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SORT_BY1" => "SORT",
		"SORT_BY2" => "ID",
		"SORT_ORDER1" => "ASC",
		"SORT_ORDER2" => "ASC"
	),
false,
Array(
	'ACTIVE_COMPONENT' => 'Y'
)
);?>
<?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"brands",
	Array(
		"AREA_FILE_SHOW" => "file",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/includes/brands.php"
	)
);?>
<?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"profioffice",
	Array(
		"AREA_FILE_SHOW" => "file",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/includes/profioffice.php"
	)
);?>
<?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"vacancy",
	Array(
		"AREA_FILE_SHOW" => "file",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/includes/vacancy.php"
	)
);?> 
<?/*$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"android",
	Array(
		"AREA_FILE_SHOW" => "file",
		"EDIT_TEMPLATE" => "",
		"PATH" => "/includes/android-tv.php"
	)
);*/?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>