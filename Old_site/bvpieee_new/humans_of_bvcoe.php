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
		<h1>Humans Of BVCOE</h1>
		<h4 style="text-align:right;"> - Dharvi Verma </h4>
		<p>Read what the Humans of BVCOE have to say about their experiences in college, their favourite moments and what they’d like to say to the freshers! </p><br>
		
		<hr>
		<p><center><img src="img/humans/priyansh_singh.png" height=150 width=150 align="top"><br><br><b>Priyansh Singh </b><br> Class of 2016<br></center>
		<br><b>Hi Priyansh! Would you describe college life in three words for our readers? </b><br>
		<i>“Life as usual.”</i><br><br>
		<b>Heart or mind. Who do you listen to when in dilemma? <br></b>
		<i>“Mind. It is only logical to do a quick analysis of the situation and viable options before acting on it.“<br></i><br>
		<b>They say you find people in college who would stand by you throughout your life. Do you agree with that view? <br></b>
		<i>“I disagree, college is just another phase and there are many more to come. In my personal experience no one stays with you or stands by you. everything works on self interest and once that is gone whats the need really? ” <br></i><br>
		<b>Any piece of advice for the readers of this column? <br></b>
		<i>“Keep your head up, stay confident and seize every opportunity you get.” <br></i><br>
		<b>Lastly, for the freshers who would be joining college this semester, which food item do you suggest they try from our college's canteen? Must-eat dishes! <br></b>
		<i>“The fries obviously. When you are hooked in to your programming or gaming session, what other food can you eat without looking up from the screen.” <br></i><br>
		</p>
		<hr>
		
		<p><center><img src="img/humans/dheera_singhla.jpg" height=150 width=150 align="top"><br><br><b>Dheera Singhla </b><br> Class of 2017<br></center>
		<br><i>“My experience at BVCOE has been amazing so far. The students, seniors and faculty are just so helpful, which makes it far better than other colleges. BVCOE has added so much to my knowledge. I’ m sure the juniors are going to have a great time too.”</i>
		</p>
		<hr>
		
		<p><center><img src="img/humans/divyanshu_sharma.jpg" height=150 width=150 align="top"><br><br><b>Divyanshu Sharma </b><br> Class of 2016<br></center>
		<br><b>College. How’d you define it?</b><br>
		<i>“College is the first proper chance you have at learning to be an adult.”</i><br><br>
		<b>What has college taught you so far?<br></b>
		<i>“People aren't what they seem.”<br></i><br>
		<b>What's your favourite thing about your friends?<br></b>
		<i>“Their ability to transform a crappy day into a memorable one.”<br></i><br>
		<b>Anything you’d like to say to the freshers? Any tip or advice? <br></b>
		<i>“Life is as complicated as you choose to make it. Stay hungry, stay foolish! Happiness comes from the little things.”<br></i>
		</p>
		<hr>
		
		<p><center><img src="img/humans/niharika_singh.jpg" height=150 width=150 align="top"><br><br><b>Niharika Singh </b><br> Class of 2015<br></center>
		<br><b>What is the one thing that you await the most at BVCOE?</b><br>
		<i>“The thing I await the most in BVCOE is Fervour, the technical cum cultural fest of the IEEE student branch of our college. It's one event of fun frolic and excitement.”</i><br><br>
		<b>What is the one college life experience you haven't had that you wish to have this year?<br></b>
		<i>“And the one experience I didn't have and would like to have this year is being in the organising committee for the cultural fest (Xtasy) of the college and making everything happen!”<br></i>
		</p>
		<hr>
		
		<p><center><img src="img/humans/haresh_singh.jpg" height=150 width=150 align="top"><br><br><b>Haresh Singh </b><br> Class of 2014<br></center>
		<br><b>What would qualify as the best moment of your college life?</b><br>
		<i>“Ummm....college life is special. One moment wouldn't qualify as best. But the whole journey with its ups and downs and the cherished memories it brought along certainly made it the best ‘moment’.”</i><br><br>
		<b>What do you miss the most about it?<br></b>
		<i>“I guess the fact that life is very easy, you always have friends to support you and there's always a chance to undo what you did. “<br></i>
		<b>Aw. Sounds right. If you could change one thing about it, what would it be?<br></b>
		<i>“Umm, nothing! It wasn't perfect but then it was my college life. Unique and mine in its own way.”<br></i>
		</p>
		<hr>
		
		<p><center><img src="img/humans/anurag_garg.jpg" height=150 width=150 align="top"><br><br><b>Anurag Garg </b><br> Class of 2014<br></center>
		<br><b>Describe in one word how you felt on your first and last working day in BVCOE?</b><br>
		<i>“Well, to be very honest, I felt a bit jumpy on the first day of my college like a cat on a hot tin roof. College life has always been considered fascinating so it was a quiet wistful day for me. And if I talk about the last day, then I guess it was supposed to be emotional but on the whole, I was grateful to have witnessed such an amazing college life with some of most wonderful people on this sphere.”</i><br><br>
		<b> What was the best moment of your college life?<br></b>
		<i>“For me there are two best moments, the one when around two hundred people stood in front of A Block, waiting for TCSL’S HR to announce their name late evening, that was the time when we had a sense of achievement for the first time in college, the feeling of having your first job. The other one is when I was awarded with MR.ICE title. I was so contented to be considered for the same. Otherwise each moment you spent inside your campus will turn out to be the best moment once you leave it. “<br></i><br>
		<b>What will you miss the most? <br></b>
		<i>“What I am going to miss the most? I think the answer to this question is quiet obvious. Ask anyone and they’d say – Friends! There are a few reasons and a few people who make living beautiful amidst all the uncertainties you face in life. They are the sole motivation and inspiration behind everything big you do, they actually make you forget all the outcomes and encourage you to go on and make it on the cards. So I’d miss each one of them.” <br></i><br>
		</p>
		<hr>
		
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