<?include($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");?>
<html>
<head>
	<title>R-Shop Line Player</title>
	<?$APPLICATION->ShowHeadScripts()?>
	<?$APPLICATION->ShowHeadStrings()?>
	<style>
		html{color:#000;background:#FFF}
		body,div,dl,dt,dd,ul,ol,li,h1,h2,h3,h4,h5,h6,pre,code,form,fieldset,legend,input,textarea,p,blockquote,th,td{margin:0;padding:0}
		table{border-collapse:collapse;border-spacing:0}
		fieldset,img{border:0}
		address,caption,cite,code,dfn,em,strong,th,var{font-style:normal;font-weight:normal}
		ol,ul{list-style:none}
		caption,th{text-align:left}
		h1,h2,h3,h4,h5,h6{font-size:100%;font-weight:normal}
		q:before,q:after{content:''}
		abbr,acronym{border:0;font-variant:normal}
		sup{vertical-align:text-top}
		sub{vertical-align:text-bottom}
		input,textarea,select{font-family:inherit;font-size:inherit;font-weight:inherit}
		input,textarea,select{*font-size:100%}
		legend{color:#000}
		#yui3-css-stamp.cssreset{display:none}
		#panel { position: absolute; }
		/* end of YUI CSS Reset */

		/* Record Global */
		* { margin: 0; padding: 0; border: none; outline: none; zoom: 1; }

		body{font-size:12px;font-family:Arial,serif;color:#000;}
		h1,h2,h3,h4,h5,h6{font-family:Arial,serif;font-size:100%;font-weight:bold;color:#676767;margin-bottom:15px;}
		h1{font-size:14px;}
		h2{font-size:14px;}
		h3, h4{font-size:13px;}
		h5, h6{font-size:13px;}
		a { color: #000; outline: none; }
		.index-wrap { position: relative; background-position: top center; background-repeat: no-repeat; overflow: hidden; }
		.index-wrap .container .header .player { top: 0px; width: 100%; height: 59px; overflow: hidden; z-index: 450; background-color: #313131; }
		.index-wrap .container .header .player.fix { position: fixed; box-shadow: #333 -2px 1px 12px; left: 0; width: 100%; }
		.index-wrap .container .header .player .wrapper { width: 995px; height: 59px; margin: 0 auto; position: relative; overflow: hidden; }
		.index-wrap .container .header .player .wrapper_3px { position: relative; width: 980px; height: 3px; margin: 0 auto; overflow: hidden; background-image: url(/bitrix/templates/flat/img/3px.png); margin-top: -3px; background-repeat: repeat; }
		.index-wrap .container .header .topblock { background-color: white; }
		.index-wrap .container .header .topblock .news_slider { overflow: hidden; }

		html, body { height: 59px; overflow: hidden; }
	</style>
	<link rel="stylesheet" href="/bitrix/templates/flat/components/record/system.empty/line_player/style.css">
	<link rel="stylesheet" href="/bitrix/templates/flat/components/record/system.empty/nowtrack/style.css">
	<script src="<?=$BX_SSL_URL?>/js/jquery-1.8.3.min.js"></script>
	<script src="<?=$BX_SSL_URL?>/js/jquery-ui.min.js"></script>
	<script src="<?=$BX_SSL_URL?>/js/jquery.Storage.js"></script>
</head>
<body>
<div class="index-wrap">
	<div class="container">
		<div class="header">
			<div class="player">
				<div class="wrapper">
					<?$APPLICATION->IncludeComponent(
						"record:system.empty",
						"line_player",
						Array(
							"CACHE_TYPE" => "A",
							"CACHE_TIME" => "86400", // 1 äåíü
						),
					false
					);?>
					<?$APPLICATION->IncludeComponent(
						"record:system.empty",
						"nowtrack",
						Array(
							"CACHE_TYPE" => "A",
							"CACHE_TIME" => "86400", // 1 äåíü
						),
					false
					);?>
				</div>
				<div class="wrapper_3px"></div>
			</div>
		</div>
	</div>
</div>
<script src="//i.radiorecord.ru/js/cufon.js"></script>
<script src="//i.radiorecord.ru/js/PF_DinText_Pro_400-PF_DinText_Pro_700-PF_DinText_Pro_italic_400-PF_DinText_Pro_italic_700.font.js"></script>
<script>
	Cufon.replace('.dintext-font', { fontFamily: 'PF DinText Pro' }); 
</script>
</body>
<?include($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php");?>