<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");?>
<!DOCTYPE html>
<html>
	<head>
		<title>Record Online Player</title>
		<link rel="stylesheet" href="style.css?t=<?=time()?>" />
	</head>
	<body>
	<table class="wrapper">
		<tr class="pole_top">
			<td colspan="2">
				<div class="logo"><img src="logo.png" width="154" height="43" alt="Record Online Player"></div>
				<div class="controll play"></div>
				<div class="nowtrack">
					<div class="artist">Radio Record</div>
					<div class="name"></div>
				</div>
				<div class="volume_fun">
					<div class="volume_back_very_fake"></div>
					<div class="volume_back_fake"></div>
					<div class="volume_back"></div>
					<div class="volume">
						<div class="volume_slider">
							<input type="hidden" class="amount">
							<div style="width: 0%;"></div>
						</div>
					</div>
				</div>
				<div class="bitrate">
					<div id="l32" class="bit">32 kbps</div>
					<div id="l64" class="bit active">64 kbps</div>
					<div id="l128" class="bit">128 kbps</div>
				</div>
				<div class="radio-pages">
					<div class="top100"></div>
					<div class="histor"></div>
				</div>
				<div class="link"></div>
			</td>
		</tr>
		<tr>
		<td class="pole_left">
			<div class="tab radio active" for="radio"></div>
			<div class="tab history" for="history"></div>
			<div class="tab top100" for="top100"></div>
			<div class="tab rshop" for="rshop"></div>
		</td>
		<td class="pole_content">
			<div class="vkla radio">
				<div class="station" id="rr">
					<div class="station-img"></div>
					<div class="station-text">
						<div class="station-name dintext-font">Radio Record</div>
						<div class="station-prod"></div>
					</div>
				</div>
				<div class="station" id="ps">
					<div class="station-img"></div>
					<div class="station-text">
						<div class="station-name dintext-font">Pirate Station</div>
						<div class="station-prod"></div>
					</div>
				</div>
				<div class="station" id="pump">
					<div class="station-img"></div>
					<div class="station-text">
						<div class="station-name dintext-font">Pump'n'Klubb</div>
						<div class="station-prod"></div>
					</div>
				</div>
				<div class="station" id="brks">
					<div class="station-img"></div>
					<div class="station-text">
						<div class="station-name dintext-font">Record Breaks</div>
						<div class="station-prod"></div>
					</div>
				</div>
				<div class="station" id="chil">
					<div class="station-img"></div>
					<div class="station-text">
						<div class="station-name dintext-font">Record Chill-Out</div>
						<div class="station-prod"></div>
					</div>
				</div>
				<div class="station" id="club">
					<div class="station-img"></div>
					<div class="station-text">
						<div class="station-name dintext-font">Record Club</div>
						<div class="station-prod"></div>
					</div>
				</div>
				<div class="station" id="dc">
					<div class="station-img"></div>
					<div class="station-text">
						<div class="station-name dintext-font">Record Dancecore</div>
						<div class="station-prod"></div>
					</div>
				</div>
				<div class="station" id="deep">
					<div class="station-img"></div>
					<div class="station-text">
						<div class="station-name dintext-font">Record Deep</div>
						<div class="station-prod"></div>
					</div>
				</div>
				<div class="station" id="dub">
					<div class="station-img"></div>
					<div class="station-text">
						<div class="station-name dintext-font">Record Dubstep</div>
						<div class="station-prod"></div>
					</div>
				</div>
				<div class="station" id="rus">
					<div class="station-img"></div>
					<div class="station-text">
						<div class="station-name dintext-font">Russian Mix</div>
						<div class="station-prod"></div>
					</div>
				</div>
				<div class="station" id="teo">
					<div class="station-img"></div>
					<div class="station-text">
						<div class="station-name dintext-font">Teodor Hardstyle</div>
						<div class="station-prod"></div>
					</div>
				</div>
				<div class="station" id="tm">
					<div class="station-img"></div>
					<div class="station-text">
						<div class="station-name dintext-font">Trancemission</div>
						<div class="station-prod"></div>
					</div>
				</div>
				<div class="station" id="vip">
					<div class="station-img"></div>
					<div class="station-text">
						<div class="station-name dintext-font">Vip Mix</div>
						<div class="station-prod"></div>
					</div>
				</div>
				<div class="station" id="yo">
					<div class="station-img"></div>
					<div class="station-text">
						<div class="station-name dintext-font">Yo! FM</div>
						<div class="station-prod"></div>
					</div>
				</div>
				<div class="station" id="gop">
					<div class="station-img"></div>
					<div class="station-text">
						<div class="station-name dintext-font">Гоп FM</div>
						<div class="station-prod"></div>
					</div>
				</div>
				<div class="station" id="mdl">
					<div class="station-img"></div>
					<div class="station-text">
						<div class="station-name dintext-font">Медляк FM</div>
						<div class="station-prod"></div>
					</div>
				</div>
				<div class="station" id="sd90">
					<div class="station-img"></div>
					<div class="station-text">
						<div class="station-name dintext-font">Супердискотека 90-х</div>
						<div class="station-prod"></div>
					</div>
				</div>
				<div class="station" id="trap">
					<div class="station-img"></div>
					<div class="station-text">
						<div class="station-name dintext-font">Record Trap</div>
						<div class="station-prod"></div>
					</div>
				</div>
			</div>
			<div class="vkla history"></div>
			<div class="vkla top100"></div>
			<div class="vkla rshop">
				<iframe id='rshop-iframe' src="//www.radiorecord.ru/player/tab/rshop-catalog.php" width="710" height="15900" style="border: none;"></iframe>
			</div>
		</td>
		
		</table>
		<script src="//www.radiorecord.ru/i/js/openapi.js"></script>
		<script src="//www.radiorecord.ru/i/js/jquery-1.7.2.min.js"></script>
		<script src="//www.radiorecord.ru/i/js/jquery-ui.min.js"></script>
		<script src="//www.radiorecord.ru/i/js/jquery.easing.1.3.js"></script>
		<script src="//www.radiorecord.ru/i/js/cufon.js"></script>
		<script src="//www.radiorecord.ru/i/js/PF_DinText_Pro_Medium_500.font.js"></script>
		<script>Cufon.replace(['.dintext-font'], {});</script>
		<script src="//www.radiorecord.ru/i/js/jquery.Storage.js"></script>
		<script src="js/soundmanager2.js"></script>
		<script>
			soundManager.url = '//www.radiorecord.ru/player/tab/js/swf/';
			soundManager.flashVersion = 9; // optional: shiny features (default = 8)
			soundManager.useFlashBlock = false; // optionally, enable when you're ready to dive in
			soundManager.debugMode = false;
			soundManager.debugFlash = false;
			soundManager.onready(function() { });
		
			var air = new Object();
			air.status	= 'stop';
			air.bitrate	= 'l64';
			//if ($.browser.mozilla) air.bitrate	= 'moz64';
			air.station	= 1;
			if($.Storage.get("record_volume")) {
				air.volume	= $.Storage.get("record_volume");
			}
			else {
				air.volume = 80;
			}
			air.type = 'video/x-flv';
			radio = '';
			debug = 0;
			
			
			var li_vals = Array();
			li_vals['unix_stop_time'] = 0;
			var ost = Array();
			var started = Array();
			var params_a = Array();
			var params_n = Array();
			var temp_key = '';
			var temp_val = '';
			var debug = 0;
			var heightFrame = 0;
			
			var s_volume = 100;
			var volume_din_trig = 1;
			$(".volume_slider").slider({
				clearStyle: true,
				orientation: "horisontal",
				range: "min",
				min: 0,
				max: 82,
				step: 1,
				slide: function(event, ui) {
					$(".amount").val(ui.value);
					$(".amount").val(ui.value);
					//alert(ui.value);
					var temp_vol = ui.value*1.22;
					var temp_vol2 = 11+ui.value;
					if (temp_vol > 100) { temp_vol = 100; }
					s_volume = temp_vol;
					//air.volume = temp_vol;
					air.volume = temp_vol;
					$.Storage.set({"record_volume": air.volume});
					soundManager.setVolume(radio, air.volume);
					$(".volume_back_fake").css("width", temp_vol2);
					$('.volume_fun').css('opacity', '1');
					volume_din_trig = 1;
				}
			});
			
			if($.Storage.get("record_volume")) {
				$(".volume_slider").slider('value', $.Storage.get("record_volume"));
				$('.volume_back_fake').css('width', 11+parseInt($.Storage.get("record_volume")));
			}

	
			var station = new Object();
			station.link = new Object();
			station.link.rr 	= {	link:	{	l32: 'http://air.radiorecord.ru:8100/rr_aac?type=.flv', 		l64: 'http://air.radiorecord.ru:8100/rr_aac_64?type=.flv', 		l128: 'http://air.radiorecord.ru:8101/rr_128'		},	color: '#769800',	update: 'record'	};
			station.link.tm 	= {	link:	{	l32: 'http://air.radiorecord.ru:8102/tm_aac?type=.flv', 		l64: 'http://air.radiorecord.ru:8102/tm_aac_64?type=.flv', 		l128: 'http://air.radiorecord.ru:8102/tm_128'		},	color: '#0e5b74',	update: 'trancemission'	};
			station.link.ps 	= {	link:	{	l32: 'http://air.radiorecord.ru:8102/ps_aac?type=.flv', 		l64: 'http://air.radiorecord.ru:8102/ps_aac_64?type=.flv', 		l128: 'http://air.radiorecord.ru:8102/ps_128'		},	color: '#3a3a3a',	update: 'pirate'	};
			station.link.vip 	= {	link:	{	l32: 'http://air.radiorecord.ru:8102/vip_aac?type=.flv', 		l64: 'http://air.radiorecord.ru:8102/vip_aac_64?type=.flv', 	l128: 'http://air.radiorecord.ru:8102/vip_128'		},	color: '#510052',	update: 'vip'	};
			station.link.teo 	= {	link:	{	l32: 'http://air.radiorecord.ru:8102/teo_aac?type=.flv', 		l64: 'http://air.radiorecord.ru:8102/teo_aac_64?type=.flv', 	l128: 'http://air.radiorecord.ru:8102/teo_128'		},	color: '#3a3a3a',	update: 'theodor'	};
			station.link.dc 	= {	link:	{	l32: 'http://air.radiorecord.ru:8102/dc_aac?type=.flv', 		l64: 'http://air.radiorecord.ru:8102/dc_aac_64?type=.flv', 		l128: 'http://air.radiorecord.ru:8102/dc_128'		},	color: '#833100',	update: 'dancecore'	};
			station.link.brks 	= {	link:	{	l32: 'http://air.radiorecord.ru:8102/brks_aac?type=.flv', 		l64: 'http://air.radiorecord.ru:8102/brks_aac_64?type=.flv', 	l128: 'http://air.radiorecord.ru:8102/brks_128'		},	color: '#376100',	update: 'brks'	};
			station.link.chil 	= {	link:	{	l32: 'http://air.radiorecord.ru:8102/chil_aac?type=.flv', 		l64: 'http://air.radiorecord.ru:8102/chil_aac_64?type=.flv', 	l128: 'http://air.radiorecord.ru:8102/chil_128'		},	color: '#80298d',	update: 'chil'	};
			station.link.dub 	= {	link:	{	l32: 'http://air.radiorecord.ru:8102/dub_aac?type=.flv', 		l64: 'http://air.radiorecord.ru:8102/dub_aac_64?type=.flv', 	l128: 'http://air.radiorecord.ru:8102/dub_128'		},	color: '#677723',	update: 'dub'	};
			station.link.sd90 	= {	link:	{	l32: 'http://air.radiorecord.ru:8102/sd90_aac?type=.flv', 		l64: 'http://air.radiorecord.ru:8102/sd90_aac_64?type=.flv', 	l128: 'http://air.radiorecord.ru:8102/sd90_128'		},	color: '#8c8e00',	update: 'sd90'	};
			station.link.club 	= {	link:	{	l32: 'http://air.radiorecord.ru:8102/club_aac?type=.flv', 		l64: 'http://air.radiorecord.ru:8102/club_aac_64?type=.flv', 	l128: 'http://air.radiorecord.ru:8102/club_128'		},	color: '#002d70',	update: 'club'	};
			station.link.mdl 	= {	link:	{	l32: 'http://air.radiorecord.ru:8102/mdl_aac?type=.flv', 		l64: 'http://air.radiorecord.ru:8102/mdl_aac_64?type=.flv', 	l128: 'http://air.radiorecord.ru:8102/mdl_128'		},	color: '#6c4c07',	update: 'mdl'	};
			station.link.gop 	= {	link:	{	l32: 'http://air.radiorecord.ru:8102/gop_aac?type=.flv', 		l64: 'http://air.radiorecord.ru:8102/gop_aac_64?type=.flv', 	l128: 'http://air.radiorecord.ru:8102/gop_128'		},	color: '#760000',	update: 'gopfm'	};
			station.link.pump 	= {	link:	{	l32: 'http://air.radiorecord.ru:8102/pump_aac?type=.flv', 		l64: 'http://air.radiorecord.ru:8102/pump_aac_64?type=.flv', 	l128: 'http://air.radiorecord.ru:8102/pump_128'		},	color: '#760000',	update: 'pump'	};
			station.link.rus 	= {	link:	{	l32: 'http://air.radiorecord.ru:8102/rus_aac?type=.flv', 		l64: 'http://air.radiorecord.ru:8102/rus_aac_64?type=.flv', 	l128: 'http://air.radiorecord.ru:8102/rus_128'		},	color: '#760000',	update: 'rus'	};
			station.link.yo 	= {	link:	{	l32: 'http://air.radiorecord.ru:8102/yo_aac?type=.flv', 		l64: 'http://air.radiorecord.ru:8102/yo_aac_64?type=.flv', 		l128: 'http://air.radiorecord.ru:8102/yo_128'		},	color: '#760000',	update: 'yo'	};
			station.link.deep 	= {	link:	{	l32: 'http://air.radiorecord.ru:8102/deep_aac?type=.flv', 		l64: 'http://air.radiorecord.ru:8102/deep_aac_64?type=.flv', 	l128: 'http://air.radiorecord.ru:8102/deep_128'		},	color: '#760000',	update: 'deep'	};
			station.link.trap 	= {	link:	{	l32: 'http://air.radiorecord.ru:8102/trap_aac?type=.flv', 		l64: 'http://air.radiorecord.ru:8102/trap_aac_64?type=.flv', 	l128: 'http://air.radiorecord.ru:8102/trap_128'		},	color: '#760000',	update: 'trap'	};

			var curr_play = '';
			var last_station = '';
			

			
			$('.controll').click(function() {
				if(!radio) { $('#rr').trigger('click'); $(this).addClass('playing'); return true; }
				switch (air.status) {
					case 'play': { stop_air(); $(this).removeClass('playing'); break; }
					default: { start_air(); $(this).addClass('playing'); }
				}
			});
		
				// запуск эфира
			function start_air() {
				if(radio!='playlist' && radio!='history' && radio!='top100') {
					air_update = eval('station.link.'+radio+'.update');
				}
				else {
					if($('#'+playlist_id).hasClass('playing')) {
					
					}
					else {
						$('#'+playlist_id).addClass('playing');
						$('.nowtrack').children('.artist').html($('#'+playlist_id).html());
						$('.nowtrack').children('.name').html('');
						
					}
				}
				
				curr_play = radio;
				
				var air_now = soundManager.createSound({
					id: radio,
					url: air.link,
					autoLoad: true,
					autoPlay: true,
					//type: air.type,
					type: 'video/x-flv',
					onload: function() {
						// ждем старта звучания
						$('.nowstation').children('.play').css('backgroundPosition', '0 -40px');
						air.status	= 'play';
						
					},
					volume: air.volume
				});
				$('.controll').addClass('playing');
				air.status	= 'play';
				started[radio] = 0;
				update_track_json();
				$.Storage.set({"last_station": radio, "online_player": radio+"_active"});
			}
			
				// остановка эфира
			function stop_air() {
				if (debug) { alert('stop_air'); radio = ''; air.link = ''; }
				//clearTimeout(slider_time);
				if (radio=='playlist') {
					soundManager.destroySound('playlist');
					$('.playlist-detail').find('.playing').removeClass('playing');
				}
				if (radio=='history') {
					soundManager.destroySound('history');
					$('.history').find('.playing').removeClass('playing');
				}
				if (radio=='top100') {
					soundManager.destroySound('top100');
					$('.top100').find('.playing').removeClass('playing');
				}
				$('.controll').removeClass('playing');
				if (air.status	== 'play') { soundManager.stop(radio); soundManager.stopAll(); soundManager.destroySound(radio); $('#'+radio).children('.play').css('backgroundPosition', '0 0'); air.status = 'stop'; }
				$('.station_item').each(function() {
					$(this).removeClass('nowstation-else');
					$(this).children('.imgslider').children('img').remove();
				});
			}
			
			
				// изменение битрейта
			$('.bit').click(function() {
				if (!$(this).hasClass('active')) {
					$('.bit').each(function() { $(this).removeClass('active'); });
					$(this).addClass('active');
					newbitrate = $(this).attr('id');
					air.bitrate = newbitrate;
					air.link = eval('station.link.'+radio+'.link.'+newbitrate);
					stop_air();
					start_air();
				}
			});
				
			
			
			function update_track_json() {
				if(radio && radio!='playlist' && radio!='history' && radio!='top100') {
					eval('update_link = "//www.radiorecord.ru/xml/"+station.link.'+radio+'.update+"_online_v3.txt?"+new Date().getTime();');
					$.getJSON(update_link, function(data) {
						var items = [];
						$.each(data, function(key, val) {
							if ((key != 'unix_stop_time') && (val != 'null') && (key != 'null') && (key != 'id') && (key != 'mbid') && (key != 'img') && (key != 'timeleft')) {
								items.push('<span class="' + key + '">' + val + '</span>');
							}
						});
						$('.nowtrack').children('.artist').html(items[0]);
						$('.nowtrack').children('.name').html(items[1]);
					});
				}
				return true;
			}
			

			setInterval(function() {
				update_track_json();
				},
				10000
			);

		</script>
		<script>
		
			$('.station').click(function() {
				$('.station').each(function() { $(this).removeClass('active'); });
				$(this).addClass('active');
				Cufon.refresh();
				if (radio != $(this).attr('id')) {
					stop_air();
					$(this).addClass('nowstation');
					radio = $(this).attr('id');
					last_station = radio;
					air.link = eval('station.link.'+radio+'.link.'+air.bitrate);
					air.radio = eval('station.link.'+radio+'.update');
					start_air();
				}
			});
			var line = '';
			var lllink = '';
			var playlist_id = '';
			
			//$('#my-frame').load(function(){$(this).height($(this).contents().find('html').height());});
			
			$('.tab').click(function() {
				$('.tab').each(function() {
					$(this).removeClass('active');
					var cl = $(this).attr('for');
					$('.pole_content').children('.'+cl).css('display', 'none');
				});
				
				$(this).addClass('active').css('display', 'block');
				var cl = $(this).attr('for');
				$('.pole_content').children('.'+cl).css('display', 'block');

				
				if ($(this).hasClass('rshop')) {
					
				}
				
				if ($(this).hasClass('history')) {
					$('.bitrate').children('div').css('display', 'none');
					$('.vkla.history').css('height', '426');
					//VK.callMethod("resizeWindow", 800, 496);
					// resize in ajax function on has loaded
				}
				if ($(this).hasClass('top100')) {
					$('.bitrate').children('div').css('display', 'none');
					$('.vkla.top100').css('height', '426');
					//VK.callMethod("resizeWindow", 800, 496);
					// resize in ajax function on has loaded
				}
				
				if ($(this).hasClass('tickets')) {
					document.getElementById('my-frame').contentWindow.postMessage({ radarioAPI: true }, '*');
					VK.callMethod("resizeWindow", 800, $('#my-frame').height());
				}
				if ($(this).hasClass('radio')) {
					$('.bitrate').children('div').css('display', 'block');
					VK.callMethod("resizeWindow", 800, 496);
				}
				if ($(this).hasClass('playlist-detail')) {
					$('.tab.playlists').addClass('active');
					hh = 70+parseInt($('.vkla.playlist-detail').height());
					if(hh<496) { hh=496; }
					VK.callMethod("resizeWindow", 800, hh);
					
					$('.playlist-detail').children('a').click(function() {
						stop_air();
						playlist_id = $(this).attr('id');
						if (lllink == $(this).attr('href')) {
							$(this).removeClass('playing');
							soundManager.pause('playlist');
							air.status	= 'pause';
						}
						else {
							lllink = $(this).attr('href');
							air.link = $(this).attr('href');
							soundManager.destroySound('playlist');
							radio = 'playlist';
							start_air();
							$('.ARTIST').html($(this).html());
							$('.NAME').html('');
							$('.playlist-detail').children('a').each(function() { $(this).removeClass('playing'); });
							$(this).addClass('playing');
						}
						return false;
					});
				}
			});
			
			$('.playlist-detail').children('a').click(function() {
				//stop_air();
				return false;
			});
			
			$('.playlists-block-body').children('li').click(function() {
				var gid = $(this).attr('gid');
				var aid = $(this).attr('aid');
				var pl_name = $(this).attr('name');
				var pl_img = $(this).find('img').attr('src');
				show_playlist(gid, aid, pl_name, pl_img);
				return false;
			});
			
			$('.link').click(function() {
				document.location.href='//i.radiorecord.ru/m3u/all.m3u';
			});
			
			
			$('.logo').click(function() {
				$('div.tab.radio').trigger('click');
			});
			
		</script>
		<script>
			var history_id = '';
			var lllink = '';
			function sm2_history_init() {
				$('.vkla.history').find('a').click(function() {
					console.log('history a called');
					stop_air();
					playlist_id = $(this).attr('id');
					if (lllink == $(this).attr('href')) {
						$(this).removeClass('playing');
						soundManager.pause('playlist');
						soundManager.pause('history');
						soundManager.pause('top100');
						air.status	= 'pause';
					}
					else {
						lllink = $(this).attr('href');
						air.link = $(this).attr('href');
						soundManager.destroySound('playlist');
						soundManager.destroySound('history');
						soundManager.destroySound('top100');
						radio = 'history';
						start_air();
						$('.ARTIST').html($(this).html());
						$('.NAME').html('');
						$('.history').find('a').each(function() { $(this).removeClass('playing'); });
						$(this).addClass('playing');
					}
					return false;
				});
			}
			
			function sm2_top100_init() {
				$('.vkla.top100').find('a').click(function() {
					console.log('top100 a called');
					stop_air();
					playlist_id = $(this).attr('id');
					if (lllink == $(this).attr('href')) {
						$(this).removeClass('playing');
						soundManager.pause('playlist');
						soundManager.pause('history');
						soundManager.pause('top100');
						air.status	= 'pause';
					}
					else {
						lllink = $(this).attr('href');
						air.link = $(this).attr('href');
						soundManager.destroySound('playlist');
						soundManager.destroySound('history');
						soundManager.destroySound('top100');
						radio = 'top100';
						start_air();
						$('.ARTIST').html($(this).html());
						$('.NAME').html('');
						$('.top100').find('a').each(function() { $(this).removeClass('playing'); });
						$(this).addClass('playing');
					}
					return false;
				});
			}
			
			
			
			$('.radio-pages .histor').click(function() {
				$(this).addClass('active');
				$('.radio-pages .top100').removeClass('active');
				if (!last_station) {
					$.get('//www.radiorecord.ru/player/tab-facebook/get-history.php?station=rr', function(history_html) {
						var hh_img = $('#rr .station-img').css('background-image');
						hh_img = hh_img.replace('url(','').replace(')','');
						hh_name = '';
						$('#rr').find('cufontext').each(function() { hh_name = hh_name+' '+$(this).html(); });
						history_html = '<div class="playlist-zag"><div class="playlist-artist"><div class="playlist-img"><img src="'+hh_img+'" width="69" height="69"></div><div class="playlist-nazva dintext-font">'+hh_name+' History</div></div><div class="backlink_hh">&larr; Радио</div></div>'+history_html;
						$('.vkla.history').html(history_html);
						sm2_history_init();
						hist_height = $('.vkla.history').height();
						console.log(hist_height);
						//VK.callMethod("resizeWindow", 800, hist_height+64);
					});
				}
				else {
					console.log(radio);
					$.get('//www.radiorecord.ru/player/tab-facebook/get-history.php?station='+last_station, function(history_html) {
						var hh_img = $('#'+last_station+' .station-img').css('background-image');
						hh_img = hh_img.replace('url(','').replace(')','');
						hh_name = '';
						$('#'+last_station).find('cufontext').each(function() { hh_name = hh_name+' '+$(this).html(); });
						history_html = '<div class="playlist-zag"><div class="playlist-artist"><div class="playlist-img"><img src="'+hh_img+'" width="69" height="69"></div><div class="playlist-nazva dintext-font">'+hh_name+' History</div></div><div class="backlink_hh">&larr; Радио</div></div>'+history_html;
						
						$('.vkla.history').html(history_html);
						sm2_history_init();
						hist_height = $('.vkla.history').height();
						console.log(hist_height);
						//VK.callMethod("resizeWindow", 800, hist_height+64);
					});
				}
				$('div[for="history"]').trigger('click');
			});
			
			$('.radio-pages .top100').click(function() {
				$(this).addClass('active');
				$('.radio-pages .histor').removeClass('active');
				if (!last_station) {
					$.get('//www.radiorecord.ru/radio/top100/detail2-facebook-ssl.php?station=rr', function(top100_html) {
						var top100_img = $('#rr .station-img').css('background-image');
						top100_img = top100_img.replace('url(','').replace(')','');
						top100_name = '';
						$('#rr').find('cufontext').each(function() { top100_name = top100_name+' '+$(this).html(); });
						top100_html = '<div class="playlist-zag"><div class="playlist-artist"><div class="playlist-img"><img src="'+top100_img+'" width="69" height="69"></div><div class="playlist-nazva dintext-font">'+top100_name+' Top 100</div></div><div class="backlink_top100">&larr; Радио</div></div>'+top100_html;
						$('.vkla.top100').html(top100_html);
						sm2_top100_init();
						//hist_height = $('.vkla.top100').height();
						//console.log(hist_height);
						//VK.callMethod("resizeWindow", 800, hist_height+64);
					});
				}
				else {
					console.log(radio);
					$.get('//www.radiorecord.ru/radio/top100/detail2-facebook-ssl.php?station='+last_station, function(top100_html) {
						var top100_img = $('#'+last_station+' .station-img').css('background-image');
						top100_img = top100_img.replace('url(','').replace(')','');
						top100_name = '';
						$('#'+last_station).find('cufontext').each(function() { top100_name = top100_name+' '+$(this).html(); });
						top100_html = '<div class="playlist-zag"><div class="playlist-artist"><div class="playlist-img"><img src="'+top100_img+'" width="69" height="69"></div><div class="playlist-nazva dintext-font">'+top100_name+' Top 100</div></div><div class="backlink_top100">&larr; Радио</div></div>'+top100_html;
						
						$('.vkla.top100').html(top100_html);
						sm2_top100_init();
						//hist_height = $('.vkla.top100').height();
						//console.log(hist_height);
						//VK.callMethod("resizeWindow", 800, hist_height+64);
					});
				}
				$('div[for="top100"]').trigger('click');
			});
			
			$('.backlink_hh').live('click', function() {
				$('div.tab.radio').trigger('click');
			});
			$('.backlink_top100').live('click', function() {
				$('div.tab.radio').trigger('click');
			});
			
		</script>
	</body>
</html>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");?>