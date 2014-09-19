<?
if(isset($_GET['radio'])) {
	switch ($_GET['radio']) {
		case 'brks': { $st = $_GET['radio']; break; }
		case 'chil': { $st = $_GET['radio']; break; }
		case 'club': { $st = $_GET['radio']; break; }
		case 'dc': { $st = $_GET['radio']; break; }
		case 'deep': { $st = $_GET['radio']; break; }
		case 'dub': { $st = $_GET['radio']; break; }
		case 'gop': { $st = $_GET['radio']; break; }
		case 'mdl': { $st = $_GET['radio']; break; }
		case 'ps': { $st = $_GET['radio']; break; }
		case 'pump': { $st = $_GET['radio']; break; }
		case 'rr': { $st = $_GET['radio']; break; }
		case 'rus': { $st = $_GET['radio']; break; }
		case 'sd90': { $st = $_GET['radio']; break; }
		case 'teo': { $st = $_GET['radio']; break; }
		case 'tm': { $st = $_GET['radio']; break; }
		case 'trap': { $st = $_GET['radio']; break; }
		case 'vip': { $st = $_GET['radio']; break; }
		case 'yo': { $st = $_GET['radio']; break; }
		default: { $st = 'rr'; }

	}
}
else {
	$st = 'rr';
}
?><!DOCTYPE html>
<html>
<head>
	<title>Record Online Player Mini | <?=$st?></title>
	<link rel="stylesheet" href="style.css">
	<script type="text/javascript">var _sf_startpt=(new Date()).getTime()</script>
	<script src="js/jquery-1.9.0.min.js"></script>
	<script src="js/jquery.Storage.js"></script>
	<script src="js/jquery-ui-1.10.0.custom.js"></script>
	<style>
		.pl_controlls .play_pause { background-image: url('min-buttons/<?=$st?>.png'); }
	</style>
</head>
<body>
<div class="pl_controlls">
	<div class="play_pause noready"></div>
	<div class="volume">
		<div class="vol_zapo"></div>
		<div id="vol_razd" class="vol_razd"></div>
		<div id="vol_clickable" class="vol_clickable"></div>
	</div>
	<div class="bitrate">
		<div id="l32" class="l32"></div>
		<div id="l128" class="l64"></div>
		<div id="l320" class="l128 active"></div>
	</div>
</div>

<script src="js/soundmanagerv297a-20130512/soundmanager2-nodebug-jsmin.js"></script>
<script>

	var st = Array();	// массив содержит кучу данных о каждой станции
	st['rr']	= Array();	st['rr']['name']='record';	st['rr']['l32']	= 'http://air.radiorecord.ru:8100/rr_aac?type=.flv';	st['rr']['l128']	= 'http://air.radiorecord.ru:8101/rr_128';	st['rr']['l320']	= 'http://air.radiorecord.ru:8101/rr_320';
	st['tm']	= Array();	st['tm']['name']='trancemission';	st['tm']['l32']	= 'http://air.radiorecord.ru:8102/tm_aac?type=.flv';	st['tm']['l128']	= 'http://air.radiorecord.ru:8102/tm_128';	st['tm']['l320']	= 'http://air.radiorecord.ru:8102/tm_320';
	st['ps']	= Array();	st['ps']['name']='pirate';	st['ps']['l32']	= 'http://air.radiorecord.ru:8102/ps_aac?type=.flv';	st['ps']['l128']	= 'http://air.radiorecord.ru:8102/ps_128';	st['ps']['l320']	= 'http://air.radiorecord.ru:8102/ps_320';
	st['vip']	= Array();	st['vip']['name']='vip';	st['vip']['l32']	= 'http://air.radiorecord.ru:8102/vip_aac?type=.flv';	st['vip']['l128']	= 'http://air.radiorecord.ru:8102/vip_128';	st['vip']['l320']	= 'http://air.radiorecord.ru:8102/vip_320';
	st['teo']	= Array();	st['teo']['name']='theodor';	st['teo']['l32']	= 'http://air.radiorecord.ru:8102/teo_aac?type=.flv';	st['teo']['l128']	= 'http://air.radiorecord.ru:8102/teo_128';	st['teo']['l320']	= 'http://air.radiorecord.ru:8102/teo_320';
	st['dc']	= Array();	st['dc']['name']='dancecore';	st['dc']['l32']	= 'http://air.radiorecord.ru:8102/dc_aac?type=.flv';	st['dc']['l128']	= 'http://air.radiorecord.ru:8102/dc_128';	st['dc']['l320']	= 'http://air.radiorecord.ru:8102/dc_320';
	st['brks']	= Array();	st['brks']['name']='brks';	st['brks']['l32']	= 'http://air.radiorecord.ru:8102/brks_aac?type=.flv';	st['brks']['l128']	= 'http://air.radiorecord.ru:8102/brks_128';	st['brks']['l320']	= 'http://air.radiorecord.ru:8102/brks_320';
	st['chil']	= Array();	st['chil']['name']='chil';	st['chil']['l32']	= 'http://air.radiorecord.ru:8102/chil_aac?type=.flv';	st['chil']['l128']	= 'http://air.radiorecord.ru:8102/chil_128';	st['chil']['l320']	= 'http://air.radiorecord.ru:8102/chil_320';
	st['dub']	= Array();	st['dub']['name']='dub';	st['dub']['l32']	= 'http://air.radiorecord.ru:8102/dub_aac?type=.flv';	st['dub']['l128']	= 'http://air.radiorecord.ru:8102/dub_128';	st['dub']['l320']	= 'http://air.radiorecord.ru:8102/dub_320';
	st['sd90']	= Array();	st['sd90']['name']='sd90';	st['sd90']['l32']	= 'http://air.radiorecord.ru:8102/sd90_aac?type=.flv';	st['sd90']['l128']	= 'http://air.radiorecord.ru:8102/sd90_128';	st['sd90']['l320']	= 'http://air.radiorecord.ru:8102/sd90_320';
	st['club']	= Array();	st['club']['name']='club';	st['club']['l32']	= 'http://air.radiorecord.ru:8102/club_aac?type=.flv';	st['club']['l128']	= 'http://air.radiorecord.ru:8102/club_128';	st['club']['l320']	= 'http://air.radiorecord.ru:8102/club_320';
	st['mdl']	= Array();	st['mdl']['name']='mdl';	st['mdl']['l32']	= 'http://air.radiorecord.ru:8102/mdl_aac?type=.flv';	st['mdl']['l128']	= 'http://air.radiorecord.ru:8102/mdl_128';	st['mdl']['l320']	= 'http://air.radiorecord.ru:8102/mdl_320';
	st['gop']	= Array();	st['gop']['name']='gopfm';	st['gop']['l32']	= 'http://air.radiorecord.ru:8102/gop_aac?type=.flv';	st['gop']['l128']	= 'http://air.radiorecord.ru:8102/gop_128';	st['gop']['l320']	= 'http://air.radiorecord.ru:8102/gop_320';
	st['pump']	= Array();	st['pump']['name']='pump';	st['pump']['l32']	= 'http://air.radiorecord.ru:8102/pump_aac?type=.flv';	st['pump']['l128']	= 'http://air.radiorecord.ru:8102/pump_128';	st['pump']['l320']	= 'http://air.radiorecord.ru:8102/pump_320';
	st['rus']	= Array();	st['rus']['name']='rus';	st['rus']['l32']	= 'http://air.radiorecord.ru:8102/rus_aac?type=.flv';	st['rus']['l128']	= 'http://air.radiorecord.ru:8102/rus_128';	st['rus']['l320']	= 'http://air.radiorecord.ru:8102/rus_320';
	st['yo']	= Array();	st['yo']['name']='yo';	st['yo']['l32']	= 'http://air.radiorecord.ru:8102/yo_aac?type=.flv';	st['yo']['l128']	= 'http://air.radiorecord.ru:8102/yo_128';	st['yo']['l320']	= 'http://air.radiorecord.ru:8102/yo_320';
	st['deep']	= Array();	st['deep']['name']='deep';	st['deep']['l32']	= 'http://air.radiorecord.ru:8102/deep_aac?type=.flv';	st['deep']['l128']	= 'http://air.radiorecord.ru:8102/deep_128';	st['deep']['l320']	= 'http://air.radiorecord.ru:8102/deep_320';
	st['trap']	= Array();	st['trap']['name']='trap';	st['trap']['l32']	= 'http://air.radiorecord.ru:8102/trap_aac?type=.flv';	st['trap']['l128']	= 'http://air.radiorecord.ru:8102/trap_128';	st['trap']['l320']	= 'http://air.radiorecord.ru:8102/trap_320';
			
			
			
	var radio = '<?=$st?>';	// по дефолту префикс Радио Рекорд
	var radiof = st['<?=$st?>']['name'];	// с полным id Радио Рекорд
	var bitrate = 'l320';	// битрейт по-умолчанию
	
	if (parseInt($.Storage.get('record_volume'))<1) {
		$.Storage.set('record_volume', '60');
	}
	var sm_volume = $.Storage.get('record_volume');
	var sm_err_counter = 0;
	var url = st['<?=$st?>']['l320'];
	soundManager.setup({
		url: 'js/soundmanagerv297a-20130512/swf/',
		flashVersion: 9,
		preferFlash: true,
		onready: function() {
			$('.pl_controlls').children('.play_pause').removeClass('noready');
		}
	});
	soundManager.onerror = function() {
		sm_err_counter++;
		if (sm_err_counter<10) {
			setTimeout(function() { soundManager.reboot(); }, 10000);
		}
	};
	now_pos_id = '';
	histogram_id = '';
	
	function start_play(url) {
		// TNS Counter
		$.get("http://www.tns-counter.ru/V13a****radiorecord_ru/ru/UTF8/tmsec=radiorecord_player-"+radio+"/"+ new Date().getTime(), function() {});
		stop_play();
		soundManager.createSound({
			id: 'record',
			url: url,
			autoLoad: false,
			autoPlay: true,
			volume: sm_volume,
			onfinish: function() {
				console.log('finished');
				$('.sm2_link').each(function() {
					if($(this).hasClass('playing')) {
						console.log($(this).attr('id'));
						now_id = $(this).attr('id');
						if(now_id.indexOf('history')==0) {
							new_id = parseInt(now_id.substr(7)) + 1;
							$('a#history'+new_id).trigger('click');
						}
						else {
							new_id = parseInt(now_id.substr(3)) - 1;
							$('a#top'+new_id).trigger('click');
						}
					}
				});
			},
			onload: function(e) {
				now_pos_id = $('.tab_content').find('.playing').attr('id');
				if(now_pos_id.indexOf('history')==0) {
					histogram_id = $('div[hid='+now_pos_id+']').children('.histogram_back');
				}
				else {
					histogram_id = $('div[mid='+now_pos_id+']').children('.histogram_back');
				}
			},
			whileplaying: function() {
				histogram_id.css('width', this.position*323/this.duration+'px');
			}
			
		});
		$('.pl_controlls').children('.play_pause').addClass('playing');
		$.Storage.set('play_from', 'playerindex');
		
	}
	
	function stop_play() {
		$('.pl_controlls').children('.play_pause').removeClass('playing');
		$('.sm2_link').removeClass('playing');
		$('.video_frame').html('');
		soundManager.destroySound('record');
	}

	$('.pl_controlls').children('.play_pause').bind('click', function() {
		if($(this).hasClass('playing')) { stop_play(); }
		else { start_play(url); }
	});

	$(function() {
		$('#vol_razd').css('height', 57-sm_volume*0.57);
	
		$('#vol_clickable').slider({
			orientation: "vertical",
			range: "min",
			min: 0,
			max: 100,
			value: sm_volume,
			slide: function( event, ui ) {
				$('#vol_razd').css('height', 57-ui.value*0.57);
				sm_volume=ui.value;
				soundManager.setVolume('record',ui.value);
				$.Storage.set('record_volume', ui.value+'');
			}
		});
		
		function music_check() {
			if (($.Storage.get('play_from') != 'playerindex') && ($('.pl_controlls').children('.play_pause').hasClass('playing'))) {
				stop_play();
			}
		}
		var mchk = setInterval(function() {
			music_check();
		}, 500);
	});
	
	$('.bitrate').children('div').bind('click', function() {
		bitrate = $(this).attr('id');
		$('.bitrate').children('div').removeClass('active');
		$(this).addClass('active');
		stop_play();
		url = st[radio][bitrate];
		start_play(url);
	});
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-1041705-7', 'radiorecord.ru');
  ga('send', 'pageview');

</script>
<!-- tns-counter.ru -->
<script type="text/javascript">
	(function(win, doc, cb){
		(win[cb] = win[cb] || []).push(function() {
			try {
				tnsCounterRadiorecord_ru = new TNS.TnsCounter({
				'account':'radiorecord_ru',
				'tmsec': 'radiorecord_total'
				});
			} catch(e){}
		});

		var tnsscript = doc.createElement('script');
		tnsscript.type = 'text/javascript';
		tnsscript.async = true;
		tnsscript.src = ('https:' == doc.location.protocol ? 'https:' : 'http:') + 
			'//www.tns-counter.ru/tcounter.js';
		var s = doc.getElementsByTagName('script')[0];
		s.parentNode.insertBefore(tnsscript, s);
	})(window, this.document,'tnscounter_callback');
</script>
<noscript>
	<img src="//www.tns-counter.ru/V13a****radiorecord_ru/ru/UTF-8/tmsec=radiorecord_total/" width="0" height="0" alt="" />
</noscript>
<!--/ tns-counter.ru -->
<script type="text/javascript">
  var _sf_async_config = { uid: 28407, domain: 'radiorecord.ru', path: '/player/tab8-mini/', title: 'Record Online Player Mini' };
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
</body>
</html>