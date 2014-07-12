<?/* Not need, if we haven't generated content: require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");*/
$from = true;
if(isset($_GET['from'])) {
	switch ($_GET['from']) {
		case 'index': { $from = true; break; }
		default: { $from = false; }
	}
}
?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<?if(isset($_GET['from']) && ($_GET['from']!='index')):?><script type="text/javascript">var _sf_startpt=(new Date()).getTime()</script><?endif;?>
		<title>Record Online Player</title>
		<meta name="keywords" content="радио рекорд, рекорд онлайн, слушать рекорд, слушать онлайн, музыка онлайн" />
		<meta name="description" content="Онлайн-плеер Радио Рекорд - 19 радиостанций танцевальной музыки! Более 500 лучших мировых диджеев, топ-чарты станций, история эфира!" />
		<meta name="google" value="notranslate">
		<meta name="apple-itunes-app" content="app-id=396869519">
		<meta name="viewport" content="width=680">
		
		<meta property="og:title" content="Record Online Player" />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="http://www.radiorecord.ru/player/" />
		<meta property="og:image" content="http://www.radiorecord.ru/player/pl_logo.jpg" />
		
		<link rel="stylesheet" href="/i/css/jquery-ui.overcast/top100.css" />
		<link rel="stylesheet" href="style.css" />
		<link rel="stylesheet" href="jquery.jscrollpane.css" />
		<link rel="stylesheet" href="/i/css/font-awesome/css/font-awesome.min.css">
		
		<script src="js/jquery-2.1.1.min.js"></script>
		<script src="js/jquery-ui.min.js"></script>
		<script src="js/jquery.Storage.js"></script>
		<script src="js/jquery.mousewheel.js"></script>
		<script src="js/jquery.jscrollpane.min.49px.js"></script>
		<script src="js/jquery.easing.1.3.js"></script>
		
		<script src="js/openapi.js"></script>
		<script>VK.init({apiId: 3733168, onlyWidgets: true});</script>
		<script src="js/date.js"></script>
		<script src="js/waveform.js"></script>
		
		<script src="js/SoundManager2/script/soundmanager2.js"></script>
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		  ga('create', 'UA-1041705-7', 'radiorecord.ru');
		  ga('send', 'pageview');
		</script>
	</head>
	<body>
		<h2 class="block-header dintext-font">Record Online<?if($from):?><span class="icon-player-block-undock"></span><?endif;?></h2>
		<table class="wrapper">
			<tr>
				<td class="pole_content">
					<div class="vkla radio">
						<div class="station" itemscope itemtype="http://schema.org/BroadcastService" id="rr"><div class="station-img"></div><div class="station-text"><div itemprop="name" class="station-name">Radio Record</div><div class="station-track"></div></div><div class="hidden" itemprop="url">http://air.radiorecord.ru:8101/rr_320</div></div>
						<div class="station" itemscope itemtype="http://schema.org/BroadcastService" id="sd90"><div class="station-img"></div><div class="station-text"><div itemprop="name" class="station-name">Супердискотека 90-х</div><div class="station-track"></div></div><div class="hidden" itemprop="url">http://air.radiorecord.ru:8102/sd90_320</div></div>
						<div class="station" itemscope itemtype="http://schema.org/BroadcastService" id="tm"><div class="station-img"></div><div class="station-text"><div itemprop="name" class="station-name">Trancemission</div><div class="station-track"></div></div><div class="hidden" itemprop="url">http://air.radiorecord.ru:8102/tm_320</div></div>
						<div class="station" itemscope itemtype="http://schema.org/BroadcastService" id="rus"><div class="station-img"></div><div class="station-text"><div itemprop="name" class="station-name">Russian Mix</div><div class="station-track"></div></div><div class="hidden" itemprop="url">http://air.radiorecord.ru:8102/rus_320</div></div>
						<div class="station" itemscope itemtype="http://schema.org/BroadcastService" id="mdl"><div class="station-img"></div><div class="station-text"><div itemprop="name" class="station-name">Медляк FM</div><div class="station-track"></div></div><div class="hidden" itemprop="url">http://air.radiorecord.ru:8102/mdl_320</div></div>
						<div class="station" itemscope itemtype="http://schema.org/BroadcastService" id="chil"><div class="station-img"></div><div class="station-text"><div itemprop="name" class="station-name">Record Chill-Out</div><div class="station-track"></div></div><div class="hidden" itemprop="url">http://air.radiorecord.ru:8102/chil_320</div></div>
						<div class="station" itemscope itemtype="http://schema.org/BroadcastService" id="club"><div class="station-img"></div><div class="station-text"><div itemprop="name" class="station-name">Record Club</div><div class="station-track"></div></div><div class="hidden" itemprop="url">http://air.radiorecord.ru:8102/club_320</div></div>
						<div class="station" itemscope itemtype="http://schema.org/BroadcastService" id="gop"><div class="station-img"></div><div class="station-text"><div itemprop="name" class="station-name">Гоп FM</div><div class="station-track"></div></div><div class="hidden" itemprop="url">http://air.radiorecord.ru:8102/gop_320</div></div>
						<div class="station" itemscope itemtype="http://schema.org/BroadcastService" id="vip"><div class="station-img"></div><div class="station-text"><div itemprop="name" class="station-name">Vip Mix</div><div class="station-track"></div></div><div class="hidden" itemprop="url">http://air.radiorecord.ru:8102/vip_320</div></div>
						<div class="station" itemscope itemtype="http://schema.org/BroadcastService" id="ps"><div class="station-img"></div><div class="station-text"><div itemprop="name" class="station-name">Pirate Station</div><div class="station-track"></div></div><div class="hidden" itemprop="url">http://air.radiorecord.ru:8102/ps_320</div></div>
						<div class="station" itemscope itemtype="http://schema.org/BroadcastService" id="deep"><div class="station-img"></div><div class="station-text"><div itemprop="name" class="station-name">Record Deep</div><div class="station-track"></div></div><div class="hidden" itemprop="url">http://air.radiorecord.ru:8102/deep_320</div></div>
						<div class="station" itemscope itemtype="http://schema.org/BroadcastService" id="brks"><div class="station-img"></div><div class="station-text"><div itemprop="name" class="station-name">Record Breaks</div><div class="station-track"></div></div><div class="hidden" itemprop="url">http://air.radiorecord.ru:8102/brks_320</div></div>
						<div class="station" itemscope itemtype="http://schema.org/BroadcastService" id="dc"><div class="station-img"></div><div class="station-text"><div itemprop="name" class="station-name">Record Dancecore</div><div class="station-track"></div></div><div class="hidden" itemprop="url">http://air.radiorecord.ru:8102/dc_320</div></div>
						<div class="station" itemscope itemtype="http://schema.org/BroadcastService" id="dub"><div class="station-img"></div><div class="station-text"><div itemprop="name" class="station-name">Record Dubstep</div><div class="station-track"></div></div><div class="hidden" itemprop="url">http://air.radiorecord.ru:8102/dub_320</div></div>
						<div class="station" itemscope itemtype="http://schema.org/BroadcastService" id="trap"><div class="station-img"></div><div class="station-text"><div itemprop="name" class="station-name">Record Trap</div><div class="station-track"></div></div><div class="hidden" itemprop="url">http://air.radiorecord.ru:8102/trap_320</div></div>
						<div class="station" itemscope itemtype="http://schema.org/BroadcastService" id="teo"><div class="station-img"></div><div class="station-text"><div itemprop="name" class="station-name">Record Hardstyle</div><div class="station-track"></div></div><div class="hidden" itemprop="url">http://air.radiorecord.ru:8102/teo_320</div></div>
						<div class="station" itemscope itemtype="http://schema.org/BroadcastService" id="yo"><div class="station-img"></div><div class="station-text"><div itemprop="name" class="station-name">Yo! FM</div><div class="station-track"></div></div><div class="hidden" itemprop="url">http://air.radiorecord.ru:8102/yo_320</div></div>
						<div class="station" itemscope itemtype="http://schema.org/BroadcastService" id="pump"><div class="station-img"></div><div class="station-text"><div itemprop="name" class="station-name">Pump'n'Klubb</div><div class="station-track"></div></div><div class="hidden" itemprop="url">http://air.radiorecord.ru:8102/pump_320</div></div>
						<div style="display:none;" class="station" itemscope itemtype="http://schema.org/BroadcastService" id="rock"><div class="station-img"></div><div class="station-text"><div itemprop="name" class="station-name">Rock Radio</div><div class="station-track"></div></div><div class="hidden" itemprop="url">http://air.radiorecord.ru:8102/rock_320</div></div>
						
					</div>
				</td>
			</tr>
		</table>
		<?if((isset($_GET['from'])) && ($_GET['from']!='index')):?>
		<style>
			.reklama { text-decoration: none; font-size: 13px; color: black; font-weight: bold; display: none; background-color: yellow; top: 464px; height: 32px; line-height: 32px; padding-left: 10px; width: 670px; z-index: 20; }
			.reklama .right_arrow { float: right; font-size: 17px; margin-right: 9px; }
		</style>
		<a class="reklama" target="_blank" href=""><span class="text"></span><span class="right_arrow"></span></a>
		<script>
			$(function() {
				get_reklama();
				setInterval(function() {
					get_reklama();
				}, 20000);
			});
			
			function get_reklama() {
				$.ajax({
					dataType: "json",
					type: "GET",
					url: "//www.radiorecord.ru/xml/reklama.txt?v="+new Date().getTime()
				})
				.done(function( msg ) {
					console.log(msg);
					$('.reklama').animate({height: '0'}, 500, function() {
						$('.reklama').children('.text').html(msg.NAME);
						$('.reklama').attr('href', msg.DETAIL_TEXT).css('display', 'block');
						$('.reklama').animate({height: '32px'}, 500, function() { });
					});
				});
			}
			
			$('.right_arrow').on('click', function(e) {
				e.preventDefault();
				$('.reklama').toggle();
				window.resizeBy(0,-32);
			});
		</script>
		<?endif;?>
		<div class="inner_pl">
			<div class="bigimage">
				<div class="imgcontent"></div>
			</div>
			<div class="right_pl">
				<div class="tabs">
					<div id="tabtop100" class="tab_click tab_top100 active"><span class="dintext-font">top 100 tracks</span></div>
					<div id="tabhistor" class="tab_click tab_histor"><span class="dintext-font">history</span></div>
				</div>
				<div class="tab_content"></div>
			</div>
			<div class="pl_bot">
				<div class="pl_controlls">
					<div class="play_pause playing"></div>
					<div class="volume">
						<div class="vol_zapo"></div>
						<div id="vol_razd" class="vol_razd" style="height: 25.080000000000002px;"></div>
						<div id="vol_clickable" class="vol_clickable"></div>
					</div>
					<div class="bitrate">
						<div id="l32" class="l32"></div>
						<div id="l64" class="l64"></div>
						<div id="l128" class="l128 active"></div>
					</div>
				</div>
				
				<div class="nowtrack_line">
					<div class="nowtrack" id="nowtrack">
						<div class="back" id="nowtrack_back"></div>
						<span class="artist">Record Dance Radio</span>
						<span class="title"></span>
					</div>
					<div class="line_buttons">
						<div class="vk_add"></div>
					</div>
				</div>
			</div>
		</div>
		<script>
			if (!$.Storage.get('record_volume')) { $.Storage.set('record_volume', '60'); }	// проверяем наличие сохраненного уровня громкости, если нет - создаем
			var sm_volume = parseInt($.Storage.get('record_volume'));	// заполняем глобальную переменную громкости
			var sm_err_counter = 0;	// счетчик ошибок
			var url = 'http://air.radiorecord.ru:8101/rr_320';	// стандартная ссылка на поток, необходима для корректной инициализации плеера
			soundManager.setup({	// инициализируем плеер
				url: 'js/SoundManager2/swf/',	// адрес флеш-файлов
				flashVersion: 9,	// версия флеш
				preferFlash: true,	// предпочитаем использовать именно флеш
				useHighPerformance: true,	// включаем повышенный приоритет flash для улучшения whileplaying и EQ
				onready: function() {	// после успешной инициализации плеера
					$('.pl_controlls').children('.play_pause').removeClass('noready');	// убираем класс отсутсвия готовности у кнопки плей
				}
			});
			soundManager.onerror = function() {	// если СМ2 глобально выдаст ошибку в загрузке
				sm_err_counter++;	// считаем какая эта ошибка по счету
				if (sm_err_counter<10) {	// если ошибка повторилась менее, чем 10 раз
					setTimeout(function() { soundManager.reboot(); }, 10000);	// пытаемся инициализироваться заного с 10 сек тайм-аутом - хорошо работает на нестабильных коннектах
				}
			};
			
			now_pos_id = '';	// переменная для Топ100 и Хистори - содержит ID тега текущего трека
			histogram_id = '';	// переменная для Топ100 и Хистори - содержит адрес тега для гистограммы
			
			function start_play(url) {	// функция запуска станции, Топ100 или Хистори. Параметр url = адрес потока или файла для проигрывания
				stop_play();	// если мы пытаемся что-то запустить, если уже что-то играем, то надо предварительно остановить что-то прошлое
				
					// переинициация эквалайзера при каждом новом звучании
				var data = [];
				var waveform = new Waveform({
					container: document.getElementById("nowtrack_back"),
					interpolate: false
				});
				var ctx = waveform.context;
				var gradient = ctx.createLinearGradient(0, 0, 0, waveform.height);
				gradient.addColorStop(0.0, "#797979");
				gradient.addColorStop(1.0, "#3e3e3e");
				waveform.innerColor = gradient;
					// эквалайзер иницииарован

				soundObject = soundManager.createSound({	// создаем звук
					id: 'record',	// ид стандартный
					url: url,	// полученный адрес звука
					autoLoad: false,	// не нужно заранее загружать поток, особенно бесконечный
					autoPlay: true,		// включаем звучание сразу, как появится возможность
					volume: sm_volume,	// уровень звука полученный ранее из стораджа
					useFastPolling: true,	// включаем 10 мс таймер, взамен обычного 50 мс
					useEQData: true,	// включаем EQ
					onfinish: function() {	// когда трек закончится (радиопоток не заканчивается никогда)
						$(document).find('.sm2_link.playing').each(function() {	// перебираем все аудиоссылки
							console.info($(this));
							now_id = $(this).attr('id');
							if(now_id.indexOf('history')==0) {	// проверяем к чему относится аудиоссылка. если к хистори
								new_id = parseInt(now_id.substr(7)) + 1;	// то вычленяем цифру текущего трека, следующий будет на 1 больше
								$('a#history'+new_id).trigger('click');	// ну и запускаем следующий трек эмуляцией клика на него
							}
							else {	// если же аудиоссылка не в истории, то это явно топ100
								new_id = parseInt(now_id.substr(3)) + 1;	// следующий трек из топ100 будет на 1 меньше
								$('a#top'+new_id).trigger('click');	// эмулируем запуск следующего трека в топ100
							}
						});
					},
					onload: function(bSuccess) { // триггер успешной загрузки трека
						if(!bSuccess) { restart_connection(); }	// если не загрузились, пытаемся снова
					},
					whileplaying: function() { // во время проигрывания
						//console.log(this.durationEstimate - this.position);
						waveform.update({data: soundObject.eqData.right}); // обновляем эквалайзер
						if (histogram_id) {
							histogram_id.css('width', this.position*323/this.durationEstimate+'px');
							histogram_id_load.css('width', this.duration*323/this.durationEstimate+'px');
						} // увеличиваем ширину блока гистограммы (у радио нет валидного histogram_id и this.duration=Infinity
					},
					onid3: function() { } // возможно будущий функционал
				});
				$('.pl_controlls').children('.play_pause').addClass('playing');	// ну после старта звучания не грех кнопке плей сделать статус играбельной
				$.Storage.set('play_from', 'playerindex');	// и расскажем всем вкладкам открытого сайта, что звучание пошло с playerindex. другие плееры наверное даже остановятся при обнаружении этого
			}
			
			function stop_play() {	// функция остановки любого звучания - радио, топ100 или хистори
				$('.pl_controlls').children('.play_pause').removeClass('playing');	// убираем статус играбельности у кнопки плей
				$('.sm2_link').removeClass('playing');	// убираем статус играбельной у всех аудиоссылок
				soundManager.destroySound('record');	// и грохаем звуковой объект с id='record'
				$('#nowtrack_back').html('');	// убираем/очищаем эквалайзер
				$('.histogram_top').css('display', 'none');	// выключаем кликабельный слой
				$('.histogram_back').css('width', '0px');	// выключаем фон-подложку текущей позиции
				$('.top100_media, .history_media').removeClass('active');	// выключаем активность всех позиций топ100 и хистори
				oldartist = '1';
			}
			
			function restart_connection() {
				stop_play();
				setTimeout(start_play(url), 1000);
			}
		
			$('.pl_controlls').children('.play_pause').bind('click', function() {	// вешаем событие по нажатию на кнопку плея/паузы
				if($(this).hasClass('playing')) { stop_play(); }	// если сейчас кнопка играбельная, то останавливаем звучания
				else { start_play(url); }	// иначе - запускаем звучание с последним url
			});

			$(function() {	// когда старница будет полностью загружена
				$('#vol_razd').css('height', 57-sm_volume*0.57);	// нужно выставить уровень громкости на сохраненное ранее значение
				$('#vol_clickable').slider({	// запускаем возможность таскать слайдер мышкой
					orientation: "vertical",	// по вертикали, ага
					range: "min",
					min: 0,	// допустимые значения от 0
					max: 100,	// до 100 (% в СМ2)
					value: sm_volume,	// текущее значение давно известно, выставляем в мозг слайдеру
					slide: function( event, ui ) {	// если пользователь слайдит громкость
						$('#vol_razd').css('height', 57-ui.value*0.57);	// то тащим наш слайдящийся элемент по формуле
						sm_volume=ui.value;	// применяем нашей переменной с глобальной громкостью новое значение
						soundManager.setVolume('record',ui.value);	// и применяем для аудиообъекта новое значение громкости
						$.Storage.set('record_volume', ui.value+'');	// записываем новую громоксть в сторадж
					}
				});
				
				function music_check() {	// функция проверки источника звучания
					if (($.Storage.get('play_from') != 'playerindex') && ($('.pl_controlls').children('.play_pause').hasClass('playing'))) {	// если в сторадже не плеер и статус плеера играбельно
						stop_play();	// то останавливаем звук
					}
				}
				var mchk = setInterval(function() { music_check(); }, 500);	// проверяем внезапное наличие звукового потока с других мест сайта каждые полсекунды
			});
			
			$('.bitrate').children('div').bind('click', function() {	// если пользователь тыкает на один из битрейтов
				bitrate = $(this).attr('id');	// берем id нового битрейта
/*@@@*/				//if(radio!='rr' && bitrate == 'l128') { bitrate = 'l64'; $('.bitrate').children('div').removeClass('active'); $('.l64').addClass('active'); }
				$('.bitrate').children('div').removeClass('active');	// убираем статус активности всем битрейтам
				$('#'+bitrate).addClass('active');	// текущему задаем активный статус
				stop_play();	// нежно останавливаем звучание
				
				url = st[radio][bitrate];	// задаем новую аудиоссылку с новым битрейтом
				start_play(url);	// запускаем звучание
			});
			
			$(document).on('click', '.histogram_top', function(e) {	// клик на область смены позиции трека
				if (e.offsetX==undefined) { xpos = e.pageX-$(this).offset().left; }	// костыль для Firefox
				else { xpos = e.offsetX; }	// нормально для Chrome
				soundManager.setPosition('record',soundObject.durationEstimate*xpos/323);
			});
			$(document).on('mousemove', '.histogram_top', function(e) {	// во время движения по кликабельной области рисуем вертикальную палку места тыка
				if (e.offsetX==undefined) { xpos = e.pageX-$(this).offset().left; }	// костыль для Firefox
				else { xpos = e.offsetX; }	// нормально для Chrome
				$(this).css('backgroundPosition', xpos+'px 0px');	// задаем координаты вертикальной палки от позиции курсора
			});
			$(document).on('mouseleave', '.histogram_top', function(e) {	// если мышь ушла за пределы кликабельной области
				$(this).css('backgroundPosition', '-1px 0px');	// выключаем палку
			});
			
			var radiof = 'record';	// глобальная переменная с префиксом станции
			
			
			var oldartist = '1';
			
			
			function update_nowtrack(json) {
				var data = JSON.parse(json);
				if(typeof(data)!='undefined') {
					$.each(data, function(key, val) {	// берем каждое поле из JSON-ответа
						switch (key) {	// смотрим ключ
							case 'ARTIST': { $('.nowtrack').children('.artist').html(val); break; }	// артисту заполняем поле артиста
							case 'NAME': { $('.nowtrack').children('.title').html(val); break; }	// треку заполняем поле названия трека
							case 'image': {	// а если картинка
								if(oldartist!=val) {	// если новая картинка отличается от прошлой
									if(val=='false' || val=='null' || val.length<10) {
										$('.imgcontent').animate({opacity: 0},500, function() {	// плавно меняем прозрачность в 0
											$(this).css("background-image", "none").animate({opacity: 1}, 1000);	// меняем фон на новую картинку и плавно ее показываем
										});
									}
									else {
										$('.imgcontent').animate({opacity: 0},500, function() {	// плавно меняем прозрачность в 0
											$(this).css("background-image", "url("+val+")").animate({opacity: 1}, 1000);	// меняем фон на новую картинку и плавно ее показываем
										});
									}
									oldartist=val;	// запоминаем вставленную картинку, чтобы она не мерцала каждый раз при проверке трека
									//console.log(val);
								}
								break;
							}
						}
					});
				}
			}

			function start_socket() {
				if("WebSocket" in window) {
					var timer;
					var ws=new WebSocket("ws://stat.radiorecord.ru:8047/record");
					ws.onopen=function() {
						timer=window.setInterval(function() {
							var date = new Date();
							var message='{"msg": "ping", "data: "'+date.getSeconds()+'"}';
							ws.send(message);
						}, 10000);
					};

					ws.onmessage=function(evt) {
						update_nowtrack(evt.data);
					};
					
					ws.onclose=function() {
						window.clearTimeout(timer);
						console.log("Switch from websocket, because browser close websocket connection.");
						update_track_inline();
						setInterval("update_track_inline();",25000);
					};
					
					$(document).on("stationChange", function() {
						console.log('{"msg": "switch", "data": "'+radiof+'"}');
						if(("WebSocket" in window) && ws.readyState == 1) {	ws.send('{"msg": "switch", "data": "'+radiof+'"}'); }
					});
				} else {
					console.log("Switch from websocket, because browser does not support websocket.");
					update_track_inline();
					setInterval("update_track_inline();",5000);
				}
			}

			function update_track_inline() {
				$.getJSON('/xml/'+radiof+'_online_v6.txt', function(data) {
					var items = [];
					$.each(data, function(key, val) {	// берем каждое поле из JSON-ответа
						switch (key) {	// смотрим ключ
							case 'ARTIST': { $('.nowtrack').children('.artist').html(val); break; }	// артисту заполняем поле артиста
							case 'NAME': { $('.nowtrack').children('.title').html(val); break; }	// треку заполняем поле названия трека
							case 'image': {	// а если картинка
								if(oldartist!=val) {	// если новая картинка отличается от прошлой
									if(val=='false' || val=='null' || val.length<10) {
										$('.imgcontent').animate({opacity: 0},500, function() {	// плавно меняем прозрачность в 0
											$(this).css("background-image", "none").animate({opacity: 1}, 1000);	// меняем фон на новую картинку и плавно ее показываем
										});
									}
									else {
										$('.imgcontent').animate({opacity: 0},500, function() {	// плавно меняем прозрачность в 0
											$(this).css("background-image", "url("+val+")").animate({opacity: 1}, 1000);	// меняем фон на новую картинку и плавно ее показываем
										});
									}
									oldartist=val;	// запоминаем вставленную картинку, чтобы она не мерцала каждый раз при проверке трека
									//console.log(val);
								}
								break;
							}
						}
					});
				});
			}
			
			$(function() {
				start_socket();
			});

			$('.line_buttons').children('.vk_add').bind('click', function() {	// если тык на лайкокнопку
				var artist = $('.nowtrack').children('.artist').text();
				var name = $('.nowtrack').children('.title').text();
				if(artist!='Record Dance Radio') { 
					ga('send', 'event', 'LikeAudio', radiof, artist+' - '+name);
				}
				artist = encodeURIComponent(artist);
				name = encodeURIComponent(name);
				var ttt = "http://vkontakte.ru/share.php?url=http://vk.com/audio?q=";	
				var ttt2 = encodeURIComponent(" - ");
				var ttt3 = encodeURIComponent("Мне нравится ");
				var ttt4 = encodeURIComponent(" на РАДИО РЕКОРД!");
				var ttt5 = encodeURIComponent("Кликайте и добавляйте!");
				var link_text = ttt+artist+ttt2+name+"&title="+ttt3+artist+ttt2+name+ttt4+"&description="+ttt5+"&image=http://radiorecord.ru/vk_pic.jpg&noparse=1";
				window.open(link_text,'popup', 'width=640,height=520');	// показываем вконтактовское окошко добавления записи на страницу
			});
			
			
			var st = Array();	// массив содержит кучу данных о каждой станции
			st['rr']	= Array();	st['rr']['name']='record';	st['rr']['l32']	= 'http://air.radiorecord.ru:8100/rr_aac?type=.flv';			st['rr']['l64']		= 'http://air.radiorecord.ru:8101/rr_128';	st['rr']['l128']	= 'http://air.radiorecord.ru:8101/rr_320';
			st['tm']	= Array();	st['tm']['name']='trancemission';	st['tm']['l32']	= 'http://air.radiorecord.ru:8102/tm_aac?type=.flv';	st['tm']['l64']		= 'http://air.radiorecord.ru:8102/tm_128';	st['tm']['l128']	= 'http://air.radiorecord.ru:8102/tm_320';
			st['ps']	= Array();	st['ps']['name']='pirate';	st['ps']['l32']	= 'http://air.radiorecord.ru:8102/ps_aac?type=.flv';			st['ps']['l64']		= 'http://air.radiorecord.ru:8102/ps_128';	st['ps']['l128']	= 'http://air.radiorecord.ru:8102/ps_320';
			st['vip']	= Array();	st['vip']['name']='vip';	st['vip']['l32']	= 'http://air.radiorecord.ru:8102/vip_aac?type=.flv';		st['vip']['l64']	= 'http://air.radiorecord.ru:8102/vip_128';	st['vip']['l128']	= 'http://air.radiorecord.ru:8102/vip_320';
			st['teo']	= Array();	st['teo']['name']='theodor';	st['teo']['l32']	= 'http://air.radiorecord.ru:8102/teo_aac?type=.flv';	st['teo']['l64']	= 'http://air.radiorecord.ru:8102/teo_128';	st['teo']['l128']	= 'http://air.radiorecord.ru:8102/teo_320';
			st['dc']	= Array();	st['dc']['name']='dancecore';	st['dc']['l32']	= 'http://air.radiorecord.ru:8102/dc_aac?type=.flv';		st['dc']['l64']		= 'http://air.radiorecord.ru:8102/dc_128';	st['dc']['l128']	= 'http://air.radiorecord.ru:8102/dc_320';
			st['brks']	= Array();	st['brks']['name']='brks';	st['brks']['l32']	= 'http://air.radiorecord.ru:8102/brks_aac?type=.flv';		st['brks']['l64']	= 'http://air.radiorecord.ru:8102/brks_128';	st['brks']['l128']	= 'http://air.radiorecord.ru:8102/brks_320';
			st['chil']	= Array();	st['chil']['name']='chil';	st['chil']['l32']	= 'http://air.radiorecord.ru:8102/chil_aac?type=.flv';		st['chil']['l64']	= 'http://air.radiorecord.ru:8102/chil_128';	st['chil']['l128']	= 'http://air.radiorecord.ru:8102/chil_320';
			st['dub']	= Array();	st['dub']['name']='dub';	st['dub']['l32']	= 'http://air.radiorecord.ru:8102/dub_aac?type=.flv';		st['dub']['l64']	= 'http://air.radiorecord.ru:8102/dub_128';	st['dub']['l128']	= 'http://air.radiorecord.ru:8102/dub_320';
			st['sd90']	= Array();	st['sd90']['name']='sd90';	st['sd90']['l32']	= 'http://air.radiorecord.ru:8102/sd90_aac?type=.flv';		st['sd90']['l64']	= 'http://air.radiorecord.ru:8102/sd90_128';	st['sd90']['l128']	= 'http://air.radiorecord.ru:8102/sd90_320';
			st['club']	= Array();	st['club']['name']='club';	st['club']['l32']	= 'http://air.radiorecord.ru:8102/club_aac?type=.flv';		st['club']['l64']	= 'http://air.radiorecord.ru:8102/club_128';	st['club']['l128']	= 'http://air.radiorecord.ru:8102/club_320';
			st['mdl']	= Array();	st['mdl']['name']='mdl';	st['mdl']['l32']	= 'http://air.radiorecord.ru:8102/mdl_aac?type=.flv';		st['mdl']['l64']	= 'http://air.radiorecord.ru:8102/mdl_128';	st['mdl']['l128']	= 'http://air.radiorecord.ru:8102/mdl_320';
			st['gop']	= Array();	st['gop']['name']='gopfm';	st['gop']['l32']	= 'http://air.radiorecord.ru:8102/gop_aac?type=.flv';		st['gop']['l64']	= 'http://air.radiorecord.ru:8102/gop_128';	st['gop']['l128']	= 'http://air.radiorecord.ru:8102/gop_320';
			st['pump']	= Array();	st['pump']['name']='pump';	st['pump']['l32']	= 'http://air.radiorecord.ru:8102/pump_aac?type=.flv';		st['pump']['l64']	= 'http://air.radiorecord.ru:8102/pump_128';	st['pump']['l128']	= 'http://air.radiorecord.ru:8102/pump_320';
			st['rus']	= Array();	st['rus']['name']='rus';	st['rus']['l32']	= 'http://air.radiorecord.ru:8102/rus_aac?type=.flv';		st['rus']['l64']	= 'http://air.radiorecord.ru:8102/rus_128';	st['rus']['l128']	= 'http://air.radiorecord.ru:8102/rus_320';
			st['yo']	= Array();	st['yo']['name']='yo';	st['yo']['l32']	= 'http://air.radiorecord.ru:8102/yo_aac?type=.flv';				st['yo']['l64']		= 'http://air.radiorecord.ru:8102/yo_128';	st['yo']['l128']	= 'http://air.radiorecord.ru:8102/yo_320';
			st['deep']	= Array();	st['deep']['name']='deep';	st['deep']['l32']	= 'http://air.radiorecord.ru:8102/deep_aac?type=.flv';		st['deep']['l64']	= 'http://air.radiorecord.ru:8102/deep_128';	st['deep']['l128']	= 'http://air.radiorecord.ru:8102/deep_320';
			st['trap']	= Array();	st['trap']['name']='trap';	st['trap']['l32']	= 'http://air.radiorecord.ru:8102/trap_aac?type=.flv';		st['trap']['l64']	= 'http://air.radiorecord.ru:8102/trap_128';	st['trap']['l128']	= 'http://air.radiorecord.ru:8102/trap_320';
			st['rock']	= Array();	st['rock']['name']='rock';	st['rock']['l32']	= 'http://air.radiorecord.ru:8102/rock_aac?type=.flv';		st['rock']['l64']	= 'http://air.radiorecord.ru:8102/rock_128';	st['rock']['l128']	= 'http://air.radiorecord.ru:8102/rock_320';
			
			var radio = 'rr';	// по дефолту префикс Радио Рекорд
			var radiof = 'record';	// с полным id Радио Рекорд
			var bitrate = 'l128';	// битрейт по-умолчанию
			$('.station').bind('click', function() {	// по клику на таб станции
				if($(this).hasClass('active')) {
					$('.inner_pl').animate({left: "0"},550,	function() { // мягко открываем поле с детальной страницей радио и по концу анимации
						//update_track_inline();	// запускаем обновление текущего трека вне таймаута
					});
				}
				else {
					// заполняем глобальные переменные
					$('.station').removeClass('active');	// убираем активность всем другим табам
					$(this).addClass('active');	// делаем текущий таб активным
					radio = $(this).attr('id');	// заполняем глобальную переменную текущего радио
					radiof = st[radio]['name'];	// заполняем глобальный id радио для обновлятора треков
					$.event.trigger({
						type: "stationChange",
						message: radiof,
						time: new Date()
					});
					url = st[radio][bitrate];	// заполняем ссылку на поток текущего радио
					//if(radio!='rr') { $('.l128').css('display', 'none'); }	// скрываем 320 поток если станция не рекорд
					//else { $('.l128').css('display', 'block'); }
					//if(radio!='rr' && bitrate == 'l128') { bitrate = 'l64'; $('.bitrate').children('div').removeClass('active'); $('.l64').addClass('active'); $('#l32').css('marginTop', '12px'); }
					//if(radio=='rr') { $('#l32').css('marginTop', '3px'); }
					
					// открываем блок плеера
					$('.imgcontent').css("background-image", "none");	// старая картинка явно не актуальна
					$('.bigimage').css('background-image', 'url(img/logos/'+radio+'.jpg)');	// задаем (расово)правильный фон текущей станции
					$('.inner_pl').animate({left: "0"},550,	function() { // мягко открываем поле с детальной страницей радио и по концу анимации
						//update_track_inline();	// запускаем обновление текущего трека вне таймаута
					});
					start_play(url);	// не грех даже радио запустить
					$('#tabtop100').trigger('click');	// показываем топ100 по-умолчанию эмуляций клика на него
					
					$('.block-header').html('<i class="fa fa-arrow-left"></i>'+$(this).find('.station-name').html()+'<?if($from):?><span class="icon-player-block-undock"></span><?endif;?>');
				}
			});
		
		
				// плагин скроллинга
			var settings = { autoReinitialise: true, maintainPosition: false }; // массив настроек скроллера
			var pane = $('.tab_content');	// переменная с id слоя, который надо скроллить
			pane.jScrollPane(settings);	// запускаем плагин скроллинга к id с настройками
			var api = pane.data('jsp');	// делаем привязку API
				// конец плагина скроллинга
			
			history_day = 'today'; // для истории показываем по-умолчанию текущий день
			
			$(document).on('click', '.aday', function() {	// если кликаем на какой-то день
				history_day = $(this).attr('value');	// то выбранный день берется из value кликнутого дня
				$.ajax({url: 'http://history.radiorecord.ru/index-flat.php?station='+radio+'&day='+history_day}).done(function(histordata) {	// делаем нежный ajax-Запрос
					var pane = $('.tab_content');	// чтоб не забыть)
					var api = pane.data('jsp');	// привязываем снова api
					api.getContentPane().html(histordata);	// и через магию плагина обновляем содержимое блока на ответ ajax'а
					api.reinitialise();	// ренеициализируем скроллер
				});
				$('.aday').removeClass('active');	// убираем всем другим дням класс активности
				$(this).addClass('active');	// задаем текущему. на самом деле бред, но если вдруг коннект пропадет и ajax не сработает, то даты будут кликабельны :)
			});
			
			$('.tab_click').bind('click', function() {	// если кликаем на таб (топ100 или хистори)
				$('.tab_click').removeClass('active');	// убираем всем статус активности
				$(this).addClass('active');	// задаем активным кликнутый таб
				
				switch ($(this).attr('id')) {	// выбираем что тыкнули
					case 'tabtop100': {	// если топ100
						$.ajax({url: '//www.radiorecord.ru/radio/top100/detail-flat.php?station='+radio}).done(function(top100data) {	// делаем аякс... все тоже самое, что и раньше
							var pane = $('.tab_content');
							var api = pane.data('jsp');
							api.getContentPane().html(top100data)
							api.reinitialise();
						});
						break;
					}
					case 'tabhistor': {	// если хистори
						$.ajax({url: 'http://history.radiorecord.ru/index-flat.php?station='+radio+'&day=today'}).done(function(histordata) {	// ну и так понятно... см. выше
							var pane = $('.tab_content');
							var api = pane.data('jsp');
							api.getContentPane().html(histordata);
							api.reinitialise();
						});
						break;
					}
				}
				
			});
			
			$('.block-header').bind('click', function() {	// заголовок у нас работает как возврат к списку радиостанций - нативно только айфонщикам. у руководство айоны, поэтому возврат вот такой...
				$('.inner_pl').animate({left: "680"},550,function() {});	// мягко убираем детальную страницу вправо
				$(this).html('Record Online<?if($from):?><span class="icon-player-block-undock"></span><?endif;?>');
			});
			
			$(document).on('click', '.sm2_link', function(e) {	// если тыкаем на аудиоссылку
				console.log($(this));
				e.preventDefault();
				if($(this).hasClass('playing')) {	// если мы уже тыкали на нее до этого, то
					stop_play();	// останавливаем звучание
					$(this).removeClass('playing');	// убираем класс плейэбельности
				}
				else {	// если не тыкали до этого
					start_play($(this).attr('href'));	// запускаем звучание ссылки
					$('.sm2_link').removeClass('playing');	// у всех убираем статус плейнутости
					$(this).addClass('playing');	// даем класс плейнутости текущему
					now_pos_id = $('.tab_content').find('.playing').attr('id');	// получаем id тега аудиозаписи, проигрываемой в данный момент
					//console.log(now_pos_id);
					$('.top100_media, .history_media').removeClass('active');
					
					if(now_pos_id.indexOf('history')==0) {	// если это история
						$('div[hid='+now_pos_id+']').addClass('active');
						histogram_id = $('div[hid='+now_pos_id+']').children('.histogram_back');	// то адрес гистограммы заполняем для атрибута hid
						histogram_id_load = $('div[hid='+now_pos_id+']').children('.histogram_back_load');	// то адрес гистограммы заполняем для атрибута hid
						$('div[hid='+now_pos_id+']').children('.histogram_top').css('display', 'block');	// включаем кликабельный слой
					}
					else { // иначе мы в топ1000
						$('div[mid='+now_pos_id+']').addClass('active');
						histogram_id = $('div[mid='+now_pos_id+']').children('.histogram_back');	// то адрес гистограммы заполняем для атрибута mid
						histogram_id_load = $('div[mid='+now_pos_id+']').children('.histogram_back_load');	// то адрес гистограммы заполняем для атрибута mid
						$('div[mid='+now_pos_id+']').children('.histogram_top').css('display', 'block');	// включаем кликабельный слой
					}
					
					
				}
				return false;	// и останавливаем безудержное желание браузера проследовать по ссылке
			});
			
			$('.icon-player-block-undock').bind('click', function() {
				$.Storage.set('play_from', 'stopall');
				playerWin = window.open('/player/tab8/?from=undock', 'Player', 'location,width=680,height=496');
				playerWin.focus();
				return false;
			});
			
			$('body').on('keypress', function(e) {
				if (e.charCode == 114 || e.charCode == 1082) { $('#rock').trigger('click'); }
			});
		
		</script>
<div style="position: absolute; left: -10000px; top: -10000px; width: 1px; height: 1px; overflow: hidden;">
	<!-- Rating@Mail.ru counter -->
	<script type="text/javascript">//<![CDATA[
	var _tmr = _tmr || [];
	_tmr.push({id: "650785", type: "pageView", start: (new Date()).getTime()});
	(function (d, w) {
	   var ts = d.createElement("script"); ts.type = "text/javascript"; ts.async = true;
	   ts.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//top-fwz1.mail.ru/js/code.js";
	   var f = function () {var s = d.getElementsByTagName("script")[0]; s.parentNode.insertBefore(ts, s);};
	   if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); }
	})(document, window);
	//]]></script><noscript><div style="position:absolute;left:-10000px;">
	<img src="//top-fwz1.mail.ru/counter?id=650785;js=na" style="border:0;" height="1" width="1" alt="Рейтинг@Mail.ru" />
	</div></noscript>
	<!-- //Rating@Mail.ru counter -->
	<!-- Rating@Mail.ru logo -->
	<a href="http://top.mail.ru/jump?from=650785">
	<img src="//top-fwz1.mail.ru/counter?id=650785;t=433;l=1" 
	style="border:0;" height="31" width="88" alt="Рейтинг@Mail.ru" /></a>
	<!-- //Rating@Mail.ru logo -->
	<!--LiveInternet counter-->
	<script>document.write("<a href='http://www.liveinternet.ru/click' "+"target=_blank><img src='//counter.yadro.ru/hit?t22.4;r"+escape(document.referrer)+((typeof(screen)=="undefined")?"":";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?screen.colorDepth:screen.pixelDepth))+";u"+escape(document.URL)+";"+Math.random()+"' alt='' title='LiveInternet: показано число просмотров за 24"+" часа, посетителей за 24 часа и за сегодня' "+"border='0' width='88' height='31'/><\/a>")</script>
	<!--/LiveInternet-->
	<!-- begin of Top100 code -->
	<script id="top100Counter" type="text/javascript" src="//counter.rambler.ru/top100.jcn?2283994"></script>
	<noscript>
	<a href="//top100.rambler.ru/navi/2283994/">
	<img src="//counter.rambler.ru/top100.cnt?2283994" alt="Rambler's Top100" />
	</a>
	</noscript>
	<!-- end of Top100 code -->
	<!-- Yandex.Metrika informer -->
	<a href="http://metrika.yandex.ru/stat/?id=176199&amp;from=informer" target="_blank" rel="nofollow"><img src="//bs.yandex.ru/informer/176199/3_0_4458E0FF_2438C0FF_1_pageviews" style="width:88px; height:31px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры, визиты и уникальные посетители)" /></a><!-- /Yandex.Metrika informer --><!-- Yandex.Metrika counter --><script type="text/javascript">(function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter176199 = new Ya.Metrika({id:176199, webvisor:false, clickmap:false, trackLinks:true, accurateTrackBounce:true}); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks");</script><noscript><div><img src="//mc.yandex.ru/watch/176199" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
	<!-- /Yandex.Metrika counter -->
	<a href="https://plus.google.com/115145545973978318825?rel=author">Google</a>
</div>
<?if(isset($_GET['from']) && ($_GET['from']!='index')):?>
<script type="text/javascript">
  var _sf_async_config = { uid: 28407, domain: 'radiorecord.ru', path: '/player/', title: 'Record Online Player' };
  (function() {
    function loadChartbeat() {
      window._sf_endpt = (new Date()).getTime();
      var e = document.createElement('script');
	  e.setAttribute("async", true); 
      e.setAttribute('language', 'javascript');
      e.setAttribute('type', 'text/javascript');
      e.setAttribute('src','//static.chartbeat.com/js/chartbeat.js');
      document.body.appendChild(e);
    };
    var oldonload = window.onload;
    window.onload = (typeof window.onload != 'function') ?
      loadChartbeat : function() { oldonload(); loadChartbeat(); };
  })();
</script>
<?endif;?>
	</body>
</html>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");?>
