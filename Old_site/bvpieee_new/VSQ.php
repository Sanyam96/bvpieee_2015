<html style="overflow-x:hidden;">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1""> 
		<title>BVPIEEE | Passion To Perfection</title>
		<link rel="stylesheet" href="http://www.bvpieee.com/css/body.css" type="text/css">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
		<script src="http://www.bvpieee.com/js/jquery.fittext.js"></script>
		<script>
			jQuery("#responsive_headline").fitText();
		</script>
	</head>
<?php include ("header/header.php"); ?>
  <script>
			//  The function to change the class
			var changeClass = function (r,className1,className2) {
				var regex = new RegExp("(?:^|\\s+)" + className1 + "(?:\\s+|$)");
				if( regex.test(r.className) ) {
					r.className = r.className.replace(regex,' '+className2+' ');
			    }
			    else{
					r.className = r.className.replace(new RegExp("(?:^|\\s+)" + className2 + "(?:\\s+|$)"),' '+className1+' ');
			    }
			    return r.className;
			};	

			//  Creating our button in JS for smaller screens
			var menuElements = document.getElementById('menu');
			menuElements.insertAdjacentHTML('afterBegin','<button type="button" id="menutoggle" class="navtoogle" aria-hidden="true"><i aria-hidden="true" class="icon-menu"> </i> Menu</button>');

			//  Toggle the class on click to show / hide the menu
			document.getElementById('menutoggle').onclick = function() {
				changeClass(this, 'navtoogle active', 'navtoogle');
			}

			// http://tympanus.net/codrops/2013/05/08/responsive-retina-ready-menu/comment-page-2/#comment-438918
			document.onclick = function(e) {
				var mobileButton = document.getElementById('menutoggle'),
					buttonStyle =  mobileButton.currentStyle ? mobileButton.currentStyle.display : getComputedStyle(mobileButton, null).display;

				if(buttonStyle === 'block' && e.target !== mobileButton && new RegExp(' ' + 'active' + ' ').test(' ' + mobileButton.className + ' ')) {
					changeClass(mobileButton, 'navtoogle active', 'navtoogle');
				}
			}
		</script>
<?php include ("Nav_Bar/nav_bar.php"); ?>
<script type="text/javascript">	
			$(function() {
			
				var Page = (function() {

					var $nav = $( '#nav-dots > span' ),
						slitslider = $( '#slider' ).slitslider( {
							onBeforeChange : function( slide, pos ) {

								$nav.removeClass( 'nav-dot-current' );
								$nav.eq( pos ).addClass( 'nav-dot-current' );

							}
						} ),

						init = function() {

							initEvents();
							
						},
						initEvents = function() {

							$nav.each( function( i ) {
							
								$( this ).on( 'click', function( event ) {
									
									var $dot = $( this );
									
									if( !slitslider.isActive() ) {

										$nav.removeClass( 'nav-dot-current' );
										$dot.addClass( 'nav-dot-current' );
									
									}
									
									slitslider.jump( i + 1 );
									return false;
								
								} );
								
							} );

						};

						return { init : init };

				})();

				Page.init();

				/**
				 * Notes: 
				 * 
				 * example how to add items:
				 */

				/*
				
				var $items  = $('<div class="sl-slide sl-slide-color-2" data-orientation="horizontal" data-slice1-rotation="-5" data-slice2-rotation="10" data-slice1-scale="2" data-slice2-scale="1"><div class="sl-slide-inner bg-1"><div class="sl-deco" data-icon="t"></div><h2>some text</h2><blockquote><p>bla bla</p><cite>Margi Clarke</cite></blockquote></div></div>');
				
				// call the plugin's add method
				ss.add($items);

				*/
			
			});
		</script>

<div id="wrapper" >
	<div id="container">
		<div id="left">
		<img src="http://bvpieee.com/img/vsq.jpg" width="500"/>
		<h1> 
Dr. Vikram Sarabhai Rotating Shield Quiz 2015</h1>
		<p>VSQ is back! 
It is the 8th Edition. :D
<br/><br/>
The IEEE Student Branch of BVCOE will be conducting the 8th edition of The Dr. Vikram Sarabhai Rotating Shield inter-college quiz in January 2015. 
<br/><br/>
It is a GENERAL QUIZ.
<br/><br/>
The Quiz is open to all College and School students.
It is an engrossing and stimulating event that lives up to its billing as one of Delhi's top inter-college quizzes.
<br/><br/>
Potential topics : Current affairs, history, sports, entertainment (Game of Thrones too, yes), pop culture (no One Direction, no worries!). Basically life, the universe and everything that makes it. 
<br/><br/>
Teams of maximum two members; lone wolves also welcome. 
Cheating will be VERY strictly dealt with (I am ok, but the other guy loves guns!)
Cross-college and cross-school teams are not allowed.
As there is no arrangement for teachers, we request all school teams to come on their own.
<br/><br/>
There is NO registration fee. 
<br/><br/>
We will announce details about the format very soon.
<br/><br/><br/><br/>

Quizmaster: Aryaman Nath 
<br/><br/>
23rd January, 2015
<br/><br/>
Location, location, location! :
<br/><br/>
BVCOEND, A-4 block, Paschim Vihar.
Adjacent to Paschim Vihar (East) Metro station (Green Line)
<br/><br/>
Register yourself fast! Here :
http://goo.gl/mhA7OO
<br/><br/>
Here's the teaser of VSQ '15! 
https://www.youtube.com/watch?v=yyKzL2mnRj0
<br/><br/>
You can also visit the official page of BVPIEEE on Facebook for more information on the IEEE Student Branch of BVCOE: https://www.facebook.com/bvpieee
<br/><br/>
The General Quiz is one of our showpiece events!
Let’s get your brain buzzing, your head excited and your heart filled with joy! Come and pit your brains against Delhi's finest in our General Quiz to find out how good you are! 
<br/><br/>
Come and enjoy an afternoon (and morning!) of quizzical fun! 
P.S. We're two years close to a decade of VSQ, you know (yeah, not tough to work that out) ?! 
<br/><br/>
For further details, feel free to bug these people:
Sanchit Guglani (9999052800)
Udit Khanna (9810585370)
Aman Garg (9711606449)
<br/><br/><br/><br/>

Let’s get your brain buzzing, your head excited and your heart filled with joy! Come and pit your brains against Delhi's finest in our General Quiz to find out how good you are!
<br/><br/>
Come and enjoy a day full of quizzical fun!</p>
		</div>
		<?php include("right.php");?>
	</div>
	<?php include ("Footer/footer.php"); ?>
</div>
<script>
$("#slideshow > div:gt(0)").hide();

setInterval(function() { 
  $('#slideshow > div:first')
    .fadeOut(1000)
    .next()
    .fadeIn(1000)
    .end()
    .appendTo('#slideshow');
},  3000);
</script>
</html>