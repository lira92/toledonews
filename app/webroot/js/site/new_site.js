//esse script assima é para funcionar o menu não deletar  
var timeout         = 500;
var closetimer		= 0;
var ddmenuitem      = 0;

function jsddm_open()
{	jsddm_canceltimer();
	jsddm_close();
	ddmenuitem = $(this).find('ul').eq(0).css('visibility', 'visible');}

function jsddm_close()
{	if(ddmenuitem) ddmenuitem.css('visibility', 'hidden');}

function jsddm_timer()
{	closetimer = window.setTimeout(jsddm_close, timeout);}

function jsddm_canceltimer()
{	if(closetimer)
	{	window.clearTimeout(closetimer);
		closetimer = null;}}

$(document).ready(function()
{	$('#jsddm > li').bind('mouseover', jsddm_open);
	$('#jsddm > li').bind('mouseout',  jsddm_timer);});

document.onclick = jsddm_close;


// script abaixo e para funcionar o slidshow,  não sei pq não esta funcionando qualquer coisa usar outro pegar na net
$(function() {
	var $imgs = $('#imagesbanner .carouselbanner'),
		$capt = $('#captionsbanner .carouselbanner'),
		$timr = $('#timerbanner');
 
	$imgs.carouFredSel({
		circular: false,
		scroll: {
			easing: 'quadratic',
			duration: 2,
			timeoutDuration: 3000,
			onBefore: function( data ) {
				$capt.trigger( 'slideTo', [ '.' + data.items.visible.first().attr( 'alt' ) ] );
				$timr.stop().animate({
					opacity: 0
				}, data.scroll.duration);
			},
			onAfter: function() {
				$timr.stop().animate({
					opacity: 1
				}, 150);
			}
		},
		auto: {
			progress: '#timerbanner'
		},
		pagination: {
			container: '.pagerbannerr',
			anchorBuilder: function( i ) {
				return '<a class="p' + i + '" href="#"></a>';
			}
		}
	});
	$capt.carouFredSel({
		circular: false,
		auto: false,
		scroll: {
			easing: 'quadratic',
			duration: 2
		}
	});
});

      $(function() {

        var $c = $('#carousel'),
          $w = $(window);

        $c.carouFredSel({
         
          items: 5,
          width: 1000,
          scroll: {
            items: 1,
            duration: 2000,
            timeoutDuration: 0,
            easing: 'linear',
            pauseOnHover: 'immediate'
          }
        });

        
        $w.bind('resize.example', function() {
          var nw = $w.width();
          if (nw < 990) {
            nw = 990;
          }

          

        }).trigger('resize.example');

      });