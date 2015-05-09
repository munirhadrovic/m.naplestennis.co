<!DOCTYPE html>
<html>
	<head>
		
		<link rel="stylesheet" href="css/jquery.mobile-1.4.5.css">
        <title>NaplesTennis</title>
		<script src="js/jquery-1.11.2.js"></script>
		<script>
		    $(document).on("mobileinit", function(evt) {
		      // Change some settings
		    	$.mobile.defaultPageTransition = "flip";
		    	$.mobile.pageLoadErrorMessage = "Whoops!";
		    	$.mobile.pageLoadErrorMessageTheme = "b";
			});
		</script>
		<script src="js/jquery.mobile-1.4.5.js"></script>
		<link rel="stylesheet" href="css/slicknav.css" />
		<script src="js/jquery.slicknav.js"></script>
		<script type="text/javascript" src="js/responsiveslides.js"></script>
		<link rel="stylesheet" href="css/style-mobile.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script>
			
			$(function(){
			   	$( "[data-role='header'], [data-role='footer']" ).toolbar();
			});	    	
		   	$(function(){
				$('#menu').slicknav({
					prependTo:'#navigation-menu'
				});
			});
			$(function(){
				$('#menu1').slicknav({
					prependTo:'#navigation-menu1'
				});
			});
			$(function(){
				$('#menu2').slicknav({
					prependTo:'#navigation-menu2'
				});
			});
			$(function(){
				$('#menu3').slicknav({
					prependTo:'#navigation-menu3'
				});
			});
			$(function(){
				$('#menu4').slicknav({
					prependTo:'#navigation-menu4'
				});
			});
			$(function(){
				$('#menu5').slicknav({
					prependTo:'#navigation-menu5'
				});
			});

			$(function(){
				$('#menu-contact').slicknav({
					prependTo:'#navigation-menu-contact'
				});
			});
			$(function(){
				$('#menu-seo').slicknav({
					prependTo:'#navigation-menu-seo'
				});
			});
			$(function () {

		      // Slideshow 4
		      	$("#slider4").responsiveSlides({
			        auto: true,
			        pager: false,
			        nav: true,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
		      	});

		    });
		    $(function () {

		      // Slideshow web
		      	$("#slider-web").responsiveSlides({
			        auto: true,
			        pager: false,
			        nav: false,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
		      	});

		    });
		   
			
			
    	</script>
    	
	</head>
	<body>
		
		<?php 
			include 'settings.php';
			
			
		?>
		<div id="header-image" data-role="header" data-theme="<?php echo $theme ?>" data-position="fixed">
		    <h1><img src="img/logo.png" alt="LOGO"></h1>
		</div>
		<div data-role="footer" data-theme="<?php echo $theme ?>" data-position="fixed">
            <h1>Powered by <a href="http://www.mobilegrows.com" rel="external">MobileGrows</a> | <a href="http://m.naplestennis.co/#2815" rel="external">Desktop Site</a></h1>

		</div>
		<!-- page 1 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
		<div data-role="page" id="page1" data-theme="<?php echo $theme ?>">
		  

		  <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
		  		<!-- Jssor Slider Begin -->
			  	<div class="callbacks_container">
				    <ul class="rslides" id="slider4">
				      <li>
				        <img src="img/slider-images/01.jpg" alt="">
				        <!-- <p class="caption">This is a caption</p> -->
				      </li>
				      <li>
				        <img src="img/slider-images/02.jpg" alt="">
				        <!-- <p class="caption">This is another caption</p> -->
				      </li>
				      <li>
				        <img src="img/slider-images/03.jpg" alt="">
				        <!-- <p class="caption">The third caption</p> -->
				      </li>
                        <li>
                            <img src="img/slider-images/04.jpg" alt="">
                            <!-- <p class="caption">The third caption</p> -->
                        </li>
                        <li>
                            <img src="img/slider-images/05.jpg" alt="">
                            <!-- <p class="caption">The third caption</p> -->
                        </li>
                    
				    </ul>
			    </div>
			    <!-- Jssor Slider End -->
				<fieldset class="ui-grid-a" data-theme="<?php echo $theme ?>">
					<!-- OVDJE SE UPISUJE BROJ TELEFONA KOJI TREBA POZVATI  -->
					<div class="ui-block-a"><a class="ui-btn callfind  ui-icon-phone ui-btn-icon-left buttons-radius" href="tel:<?php echo $telephone ?>">Call US</a></div>
					<!-- ovdje se upisuje grad i adresa iz koje  -->
					<div class="ui-block-b" id="findUS">
						<script>
							var ua = navigator.userAgent;
							if(/Android|webOS|Opera Mini/i.test(navigator.userAgent) ) {
								console.log("Android uslo");
								var prostordugme=document.getElementById('findUS');
								var dugme= document.createElement('a');
								dugme.setAttribute('class', "ui-btn callfind  ui-icon-location ui-btn-icon-right buttons-radius");
								dugme.setAttribute('href',"geo:0,0?q=<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?>");
								dugme.innerHTML="Find US";
								prostordugme.appendChild(dugme);
							}
							else if(/iPhone|iPad|iPod/i.test(navigator.userAgent)){
								console.log("Iphone ");
								var prostordugme=document.getElementById('findUS');
								var dugme= document.createElement('a');
								dugme.setAttribute('class', "ui-btn callfind  ui-icon-location ui-btn-icon-right buttons-radius");
								dugme.setAttribute('href',"http://maps.google.com/?daddr=<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?> ");
								dugme.innerHTML="Find US";
								prostordugme.appendChild(dugme);
							}
							else if (ua.indexOf("BlackBerry") >= 0) {

									console.log("Blakberu je prosao ")
									var prostordugme=document.getElementById('findUS');
									var dugme= document.createElement('a');
									dugme.setAttribute('class', "ui-btn callfind  ui-icon-location ui-btn-icon-right buttons-radius");
									dugme.setAttribute('href',"javascript:blackberry.launch.newMap({'address':{'address1':'<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?>'}});");
									dugme.innerHTML="Find US";
									prostordugme.appendChild(dugme);
									}		
							else {
								console.log("nije nigdje uslo default ")
								var prostordugme=document.getElementById('findUS');
								var dugme= document.createElement('a');
								dugme.setAttribute('class', "ui-btn callfind  ui-icon-location ui-btn-icon-right buttons-radius");
								dugme.setAttribute('href',"geo:0,0?q=<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?>");
								dugme.innerHTML="Find US";
								prostordugme.appendChild(dugme);
							}

							

							// if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
							// // some code..
							// }

						</script>
						
						

					</div>	   
				</fieldset>

			
              <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-alt-icon ui-btn-icon-right buttons-radius" href="#about" data-transition="<?php echo $transitionefect ?>">About</a></div>
				</div>
              <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-alt-icon ui-btn-icon-right buttons-radius" href="#apparel" data-transition="<?php echo $transitionefect ?>">Apparel</a></div>
				</div>
              <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-alt-icon ui-btn-icon-right buttons-radius" href="#equipment" data-transition="<?php echo $transitionefect ?>">Equipment</a></div>
				</div>
				 <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-alt-icon ui-btn-icon-right buttons-radius" href="#naples" data-transition="<?php echo $transitionefect ?>">Naples Tennis</a></div>
				</div>
              <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-alt-icon ui-btn-icon-right buttons-radius" href="#services" data-transition="<?php echo $transitionefect ?>">Services</a></div>
				</div>
              <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-alt-icon ui-btn-icon-right buttons-radius" href="#blog" data-transition="<?php echo $transitionefect ?>">Blog</a></div>
				</div>
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-mail ui-alt-icon ui-btn-icon-right buttons-radius" href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact US</a></div>
				</div>				   
		  </div>

            <p><b>Naples Tennis Shop</b></p>
         <p>JusTennisalso known as NaplesTennis.co/ has a long standing reputation as the top tennis store and tennis shop for Naples Florida.</p>
         <p>As our name implies JusTennis specializes in just tennis! Thats All We Do!</p>
         <p>Our Naples Tennis Shop carries everything a tennis enthusiast may desire including; tennis accessories, tennis apparel, tennis balls, tennis gear, tennis rackets, tennis socks, tennis shoes.</p>
         <h3>Naples Tennis Store  JusTennis</h3>
         <p>Our tennis store also specializes in, expert Tennis racket restringing services ! If you are looking for tennis stores in Naples Florida; look no further just tennis carries all the tennis equipment, tennis accessories, tennis apparel, that any tennis aficionado may desire.</p>
         <h3>NaplesTennis.co/  JusTennis</h3>
         <p>If you have any questions regarding tennis products or playing tennis in Naples Florida, please stop in or give us a call.</p>
         <h3>Driving Directions</h3>
         <p>Just tennis is conveniently located just south of Vanderbilt Beach Road on the East Side the street; please check our map for easy  Driving Directions .</p>
         <img src="img/google.png" <a href="https://plus.google.com/113555911016600043954" target="_blank" dmle_dont_remove="target" dm_dont_rewrite_url="true" duda_id="1435955903">  
</a> 
<img src="img/twiter.png" <a href="https://twitter.com/justennisnaples" target="_blank" dmle_dont_remove="target" dm_dont_rewrite_url="true" duda_id="1590222023"> <span class="dmSocialTwitter dm-icon-twitter oneIcon socialHubIcon style1" duda_id="1272882182"></span> 
</a>
         <p>Copyright 2013 / JusTennis /

            </div>
		<!-- page 1 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
		<!-- about ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		<div data-role="page" id="about" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
				<div class="ui-grid-solo ui-alt-icon" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu">
						<ul id="menu">			
							
							<li><a href="#apparel" data-transition="<?php echo $transitionefect ?>">Apparel</a></li>
							<li><a href="#equipment" data-transition="<?php echo $transitionefect ?>">Equipment</a></li>
							<li><a href="#naples" data-transition="<?php echo $transitionefect ?>">Naples Tennis</a></li>
							<li><a href="#services" data-transition="<?php echo $transitionefect ?>">Services</a></li>
							<li><a href="#blog" data-transition="<?php echo $transitionefect ?>">Blog</a></li>
							<li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact us</a></li>
						</ul>
					</section>
						<img src="img/slika1.jpg" alt="">
                    <h3>Tennis Shop  Naples Florida</h3>
                    <p>JusTennis is a family owned and operated business specializing in… just tennis! We have an extensive tennis background in racquet and footwear selection, based on over 15 years in the tennis business. The Howe family owned and operated a six court indoor tennis facility in Illinois. After selling their facility, Kay opened and managed the prestigious Atkins Tennis Center for the University of Illinois, serving the men’s and women’s tennis teams and community.</b></p>
                    <p>	The JusTennis staff have strung racquets for tennis professionals, university tennis team players and recreational players as well. All staff members are USRSA (United States Racquet Stringers Association) certified.</p>
                    <p>	JusTennis is located just south of Vanderbilt Beach Road on US 41, east of the Pelican Bay Blvd North entrance.</p>
                    <p>	Tennis was never work for me, tennis was fun. And the tougher the battle and the longer the match, the more fun I had. Jimmy Conners</p>
                    <p>	LEAVE A REPLY
						CANCEL REPLY
						You must be logged in to post a comment.</p>
						<h3>JUSTENNIS CONTACT INFO:</h3>
						<p>	7700 Tamiami Trail North
								Suite # 103
								Naples, FL 34108
								USA</p>
						<p>P: 239-514-8700
							F: 239-514-8757
						E: JusTennisNaples@gmail.com
						W: www.NaplesTennis.co/	</p>
						<p>	BUSINESS HOURS: 
						Monday  Saturday
						10:00 a.m.  6:00 p.m</p>
						    <img src="img/google.png" <a href="https://plus.google.com/113555911016600043954" target="_blank" dmle_dont_remove="target" dm_dont_rewrite_url="true" duda_id="1435955903">  
</a> 
<img src="img/twiter.png" <a href="https://twitter.com/justennisnaples" target="_blank" dmle_dont_remove="target" dm_dont_rewrite_url="true" duda_id="1590222023"> <span class="dmSocialTwitter dm-icon-twitter oneIcon socialHubIcon style1" duda_id="1272882182"></span> 
</a>
						<h3>ABOUT</h3>
						<p> Copyright 2015 <a href="http://www.marketrivals.com" rel="external">MarketRivals</a></p>
								<h3>by MOBILIZE.INFO</h3>


                </div>

			</div>	
				
				
		</div>
		
		<!-- end about ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
			<!-- apparel ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		<div data-role="page" id="apparel" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
				<div class="ui-grid-solo ui-alt-icon" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu1">
						<ul id="menu1">			
							<li><a href="#about" data-transition="<?php echo $transitionefect ?>">About</a></li>
							
							<li><a href="#equipment" data-transition="<?php echo $transitionefect ?>">Equipment</a></li>
							<li><a href="#naples" data-transition="<?php echo $transitionefect ?>">Naples Tennis</a></li>
							<li><a href="#services" data-transition="<?php echo $transitionefect ?>">Services</a></li>
							<li><a href="#blog" data-transition="<?php echo $transitionefect ?>">Blog</a></li>
							<li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact us</a></li>
						</ul>
					</section>

               
						<h3>TENNIS APPAREL.</h3>
						<img src="img/slika2.jpg" alt="">
						<h3>Tennis Apparel  Naples Tennis</h3>
                    <p>At JusTennis we know the importance of each element of your tennis game. Comfortable apparel that allows full motion and breathability, socks that provide cushion and help absorb the shock of each quick paced step and sturdy footwear that provides premium support to your foot while you are in motion. Our merchandise has been selected by tennis experts intent on improving your game. Our team members will consult with you on each item to provide you with the best overall tennis apparel.</b></p>
                    <p>	I carried through well with my tennis. I got the respect by usage of the tennis racket. Gabriela Sabatini</p>
                    <p>	LEAVE A REPLY
						CANCEL REPLY

						You must be logged in to post a comment.</p>
						<h3>JUSTENNIS CONTACT INFO:</h3>
						<p>	7700 Tamiami Trail North
							Suite # 103
						Naples, FL 34108
						USA</p>
						<p>	P: 239-514-8700
						F: 239-514-8757
						E: JusTennisNaples@gmail.com
						W: www.NaplesTennis.co/</p>
						<p>	BUSINESS HOURS: 
						Monday  Saturday
						10:00 a.m.  6:00 p.m</p>
						    <img src="img/google.png" <a href="https://plus.google.com/113555911016600043954" target="_blank" dmle_dont_remove="target" dm_dont_rewrite_url="true" duda_id="1435955903">  
</a> 
<img src="img/twiter.png" <a href="https://twitter.com/justennisnaples" target="_blank" dmle_dont_remove="target" dm_dont_rewrite_url="true" duda_id="1590222023"> <span class="dmSocialTwitter dm-icon-twitter oneIcon socialHubIcon style1" duda_id="1272882182"></span> 
</a>
							<h3>TENNIS APPAREL</h3>
						<p>Copyright 2015 <a href="http://www.marketrivals.com" rel="external">MarketRivals</a></p>
						<h3>	by MOBILIZE.INFO</h3>


                </div>

			</div>	
				
				
		</div>
		
		<!-- end apparel ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
			<!-- Equipment ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		<div data-role="page" id="equipment" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
				<div class="ui-grid-solo ui-alt-icon" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu2">
						<ul id="menu2">			
							<li><a href="#about" data-transition="<?php echo $transitionefect ?>">About</a></li>
							<li><a href="#apparel" data-transition="<?php echo $transitionefect ?>">Apparel</a></li>
							
							<li><a href="#naples" data-transition="<?php echo $transitionefect ?>">Naples Tennis</a></li>
							<li><a href="#services" data-transition="<?php echo $transitionefect ?>">Services</a></li>
							<li><a href="#blog" data-transition="<?php echo $transitionefect ?>">Blog</a></li>
							<li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact us</a></li>
						</ul>
					</section>

                    
						<h3>Equipment.</h3>
						<img src="img/slika3.jpg" alt="">
						<h3>Naples tennis  Equipment</h3>
						<p>	Every athlete knows how critical the right equipment is to their game. We take pride in our role in helping you determine which tennis equipment is right for you. Each member of our USRSA certified staff can recommend and fit a tennis racquet specific to your exact tennis playing and physical needs. We will equip you with the right gear for your level of play and as your tennis game progresses our staff will make recommendations that will continually improve your tennis play. Our expertise on the wide variety of tennis racquets, strings and even tennis shoes available will enhance your tennis performance.</p>
						<p>	I let my racquet do the talking. That’s what I am all about, really. I just go out and win tennis matches. Pete Sampras</p>
						  <p>	LEAVE A REPLY
						CANCEL REPLY

						You must be logged in to post a comment.</p>
						<h3>JUSTENNIS CONTACT INFO:</h3>
						<p>	7700 Tamiami Trail North
							Suite # 103
						Naples, FL 34108
						USA</p>
						<p>	P: 239-514-8700
						F: 239-514-8757
						E: JusTennisNaples@gmail.com
						W: www.NaplesTennis.co/</p>
						<p>	BUSINESS HOURS: 
						Monday  Saturday
						10:00 a.m.  6:00 p.m</p>
						    <img src="img/google.png" <a href="https://plus.google.com/113555911016600043954" target="_blank" dmle_dont_remove="target" dm_dont_rewrite_url="true" duda_id="1435955903">  
</a> 
<img src="img/twiter.png" <a href="https://twitter.com/justennisnaples" target="_blank" dmle_dont_remove="target" dm_dont_rewrite_url="true" duda_id="1590222023"> <span class="dmSocialTwitter dm-icon-twitter oneIcon socialHubIcon style1" duda_id="1272882182"></span> 
</a>
						<h3>Equipment</h3>
						<p>Copyright 2015 <a href="http://www.marketrivals.com" rel="external">MarketRivals</a></p>
						<h3>	by MOBILIZE.INFO</h3>




                </div>

			</div>	
				
				
		</div>
		
		<!-- end equipment ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
			<!-- naples///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		<div data-role="page" id="naples" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
				<div class="ui-grid-solo ui-alt-icon" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu3">
						<ul id="menu3">			
							<li><a href="#about" data-transition="<?php echo $transitionefect ?>">About</a></li>
							<li><a href="#apparel" data-transition="<?php echo $transitionefect ?>">Apparel</a></li>
							<li><a href="#equipment" data-transition="<?php echo $transitionefect ?>">Equipment</a></li>
							
							<li><a href="#services" data-transition="<?php echo $transitionefect ?>">Services</a></li>
							<li><a href="#blog" data-transition="<?php echo $transitionefect ?>">Blog</a></li>
							<li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact us</a></li>
						</ul>
					</section>

                    
						<h3> NAPLES TENNIS </h3>
						<img src="img/slika4.jpg" alt="">
						<h3>NAPLES TENNIS</h3>
						<p>	Whether for recreation or high level competition, Naples, Florida is abundant with tennis facilities catering to every level player. For children beginning in the sport, to club players or professionals, JusTennis will provide all your apparel and equipmentand help you navigate the best courts, facilities and programs to accommodate your tennis needs. With over 15 years in the tennis industry we want you to love to tennis as much as we do.</p>
						<p>	Public tennis centers in Naples are numerous and some of the best anywhere. The Naples Park system is remarkable with groomed soccer fields, sand volleyball, roller hockey rinks, grass infields on baseball diamonds, cloth nets on basketball courts and beautiful hard and clay tennis courts. One of the parks even has a hydrogrid or under surface watering systems enabling uninterrupted play. The local YMCA is a tremendous facility and boasts the Beckler Tennis Center with 10 har-tru courts.</p>
						<p>	Tennis tournaments are common in Naples, from the amateur level to the professional. The Nuveen Masters is held every year in Naples. John McEnroe, Jimmy Connors, Bjorn Borg, Johann Kriek and many other top senior professionals play in the event.</p>
						<p>	The YMCA holds the largest amateur tournament in Southwest Florida (The North Naples Clay Court Championships) with as many as 700 entries. Divisions from 3.0 to 5.0 to Open professionals play singles, mens, womens and mixed doubles.</p>
						<p>	The Naples City Tournament is held yearly at Cambier Park. Although it not as large as the North Naples Clay Court Championships, it is very well run and includes age divisions for seniors.</p>
						<p>	The Florida Section of the USTA is one of the largest and best in the country. Adult and junior tournaments are abundant in the Southwest Florida area. Statewide, there are adult tournaments nearly every weekend and sometimes two or three in every age division from 25 to 80+. In regard to junior tennis, Florida turns out some of the best young players in the world. It is easy to see how many opportunities there are for junior players. There are adult and junior tennis camps all over the state.</p>
						<p>	There’s also a large number of tennis leagues in the Naples area, and making tennis connections is easy. For the avid tennis player, young or old, Naples is the place to be! Please contact us with any questions about tennis in the Naples community.</p>
						  <p>	LEAVE A REPLY
						CANCEL REPLY

						You must be logged in to post a comment.</p>
						<h3>JUSTENNIS CONTACT INFO:</h3>
						<p>	7700 Tamiami Trail North
							Suite # 103
						Naples, FL 34108
						USA</p>
						<p>	P: 239-514-8700
						F: 239-514-8757
						E: JusTennisNaples@gmail.com
						W: www.NaplesTennis.co/</p>
						<p>	BUSINESS HOURS: 
						Monday  Saturday
						10:00 a.m.  6:00 p.m</p>
						    <img src="img/google.png" <a href="https://plus.google.com/113555911016600043954" target="_blank" dmle_dont_remove="target" dm_dont_rewrite_url="true" duda_id="1435955903">  
</a> 
<img src="img/twiter.png" <a href="https://twitter.com/justennisnaples" target="_blank" dmle_dont_remove="target" dm_dont_rewrite_url="true" duda_id="1590222023"> <span class="dmSocialTwitter dm-icon-twitter oneIcon socialHubIcon style1" duda_id="1272882182"></span> 
</a>
						<h3>Naples Tennis</h3>
						<p>Copyright 2015	<a href="http://www.marketrivals.com" rel="external">MarketRivals</a> </p>
						<h3>	by MOBILIZE.INFO</h3>




                </div>

			</div>	
				
				
		</div>
		
		<!-- end naples ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
			<!-- services ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		<div data-role="page" id="services" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
				<div class="ui-grid-solo ui-alt-icon" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu4">
						<ul id="menu4">			
							<li><a href="#about" data-transition="<?php echo $transitionefect ?>">About</a></li>
							<li><a href="#apparel" data-transition="<?php echo $transitionefect ?>">Apparel</a></li>
							<li><a href="#equipment" data-transition="<?php echo $transitionefect ?>">Equipment</a></li>
							<li><a href="#naples" data-transition="<?php echo $transitionefect ?>">Naples Tennis</a></li>
							
							<li><a href="#blog" data-transition="<?php echo $transitionefect ?>">Blog</a></li>
							<li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact us</a></li>
						</ul>
					</section>

                  
						<p>	SERVICES.

						TENNIS ACCESSORIES

						Need to Tennis accessories?</p>
						<p>	Don’t worry! JusTennis has you covered with a full range of Tennis Accessories! Tennis bags, balls, sweat bands, elbow braces, hats, sunglasses, grip wrap, dampeners, etc.</p>
						<h3>TENNIS ACCESSORIES</h3>
						<p>	Aircast Pneumatic Armband
							Ball Hoppers
							Band-It Forearm
							Elbow Braces
							Frog Togs
							Gamma Love Cup
							Gamma Neon Tack
							Gamma Rosin Bag
							Grip Wrap
							Hats
							Head-Bands
							KT Tape
							Need-It Knee Pain
							Oversized Grips
							Patella Strap
							Replacement Grips
							Spiro Elbow Splint
							Sunglasses
							Sunscreen
							Tacky Towels
							Tennis Caps
							Tennis Dampeners
							Tennis Gloves
							Tennis Hats
							Tennis Visors
							Tourna Grip
							Vibration Dampeners
							Water Bottles
							Wristbands</p>
							<h3>TENNIS BRANDS</h3>
							<p>	We carry top Tennis Brands

JusTennis prides itself in providing our clients with the top tennis brands names; such as Adidas, Babolat, Wilson, Head, and Prince performance racquets, shoes and apparel.</p>
				<h3>TENNIS BRANDS</h3>
				<p>	Adidas
Aircast
Babalot
Band-It
Bolle
Eliza Audley
Features
FILA
Frog Togs
Gamma
Head
K-Bell – Sports Socks
K Swiss
KT Tape
LBH
LIJA – LIJAstyle.com
Lucky In-Love
Need-It
Nike
Patella Strap
Prince
Pure Lime
Spiro
Tacky Towel
Tail
Thorlos
Tourna
Volki
Wilson</p>
<h3>TENNIS APPAREL, RACQUETS, SHOES</h3>
<p>	Do you need a new Tennis Racquet or Apparel?

JusTennis offers a diverse and current stock of men’s, women’s, boy’s and girl’s tennis apparel. JusTennis will attend to your personal style, just give us a call!</p>
<p>	TENNIS APPAREL
Bolle
Eliza Audley
FILA
LBH
LIJA
Lucky In-Love
Nike Dry Fit
Prince Italia
Pure Lime
Tail
TENNIS RACQUETS
Babalot Tennis Racquets
Head Tennis Racquets
Prince Tennis Racquets
Volki Tennis Racquets
Wilson Tennis Racquets
TENNIS SHOES
Adidas Tennis Shoes
Babalot Tennis Shoes
Head Tennis Shoes
K Swiss Tennis Shoes
Nike Tennis Shoes
Prince Tennis Shoes
Wilson Tennis Shoes
TENNIS SOCKS
Features Multi Sport
K-Bell Sports Socks
Nike Dry-Fit Tennis Socks
Thorlos Tennis Socks</p>
<p>	LEAVE A REPLY
CANCEL REPLY

You must be logged in to post a comment.</p>

<p>SERVICES</p>
    <img src="img/google.png" <a href="https://plus.google.com/113555911016600043954" target="_blank" dmle_dont_remove="target" dm_dont_rewrite_url="true" duda_id="1435955903">  
</a> 
<img src="img/twiter.png" <a href="https://twitter.com/justennisnaples" target="_blank" dmle_dont_remove="target" dm_dont_rewrite_url="true" duda_id="1590222023"> <span class="dmSocialTwitter dm-icon-twitter oneIcon socialHubIcon style1" duda_id="1272882182"></span> 
</a>

		<p>Copyright 2015 <a href="http://www.marketrivals.com" rel="external">MarketRivals</a></p>
<h3>by MOBILIZE.INFO</h3>


                </div>

			</div>	
				
				
		</div>
		
		<!-- end services ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
			<!-- blog ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		<div data-role="page" id="blog" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
				<div class="ui-grid-solo ui-alt-icon" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu5">
						<ul id="menu5">			
							<li><a href="#about" data-transition="<?php echo $transitionefect ?>">About</a></li>
							<li><a href="#apparel" data-transition="<?php echo $transitionefect ?>">Apparel</a></li>
							<li><a href="#equipment" data-transition="<?php echo $transitionefect ?>">Equipment</a></li>
							<li><a href="#naples" data-transition="<?php echo $transitionefect ?>">Naples Tennis</a></li>
							<li><a href="#services" data-transition="<?php echo $transitionefect ?>">Services</a></li>
							
							<li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact us</a></li>
						</ul>
					</section>

                 
                    
						<h3>Blog</h3>
						<img src="img/slika5.jpg" alt="">
						<h3>How to Watch a Tennis Tournament</h3>
						<p>	Tennis, like any other sport, uses lots of jargon. Hard core tennis fans think nothing of the terms and use them regularly. But the casual fan might be a bit confused at times trying to figure out some of the terminology used during the telecast of a tournament. Here are explanations of some of the more commonly used terms. Hopefully they will help you better understand, and enjoy, the next tournament you watch.
Draw– Think NCAA brackets. A draw is the set of brackets that shows who plays whom in a tournament. This might be used as in, “She got a tough draw at the French Open,” meaning the player is set to play some difficult matches. Conversely, if a player gets a good draw or favorable draw , it means he is set up to play less formidable players or players he has had success against in the past.

Back Draw– You won’t see this in a professional tournament, but they are used often in high school, college, and USTA events. The back draw is another bracket, and it’s where players are placed when they suffer their first loss in a tournament. It’s a method to guarantee players get to play at least two matches in a tournament. Fans might be more familiar with consolation bracket , but that term is not commonly used any longer.

Open Era– The Open Era in tennis began in 1968. Prior to this, only amateur players were allowed to play in many of the top tournaments, including the Grand Slam events. The exclusion of professionals meant that tournaments often did not feature the best players of the era. Rod Laver in 1969 , Margaret Court in 1970 and Steffi Graf in 1988 are the only players in the Open Era to win all four of the Grand Slam tournaments in a single year.

Qualifier– If you see a Q next to a player’s name in a professional tournament draw, it means he is a qualifier. The player did not have a high enough ranking to gain automatic entry to a tournament and had to play in a qualifying tournament to earn a spot in the tournament proper. Fans saw this term recently in the headline, “Qualifier Beats Ailing Fish.”

Lucky Loser– This term is applied to a player who loses in the final round of a qualifying tournament but still gains access to the main draw. This happens when a player already in the main draw has to withdraw for some reason.

Wild Card– This is an exemption into a tournament for which the player did not otherwise qualify. Tournament sponsors and organizers are allowed a certain number of wild cards per tournament. These are usually given to up-and-coming local players and stars who will likely draw fans to the tournament. Venus Williams accepted a wild card spot to play in the Sony Ericsson Open in Miami earlier this month.

Retired– This is the polite term tennis uses when a player quits in the middle of a match. If you see a tennis result that reads, for example, Petkovic d. Stosur, 6-3, 1-0, ret., it means that Stosur retired, or quit, during the match when Petkovic was leading 1-0 in the second set. The most common reasons players retire are injury and illness. Fans of Andy Roddick recall that he retired in the second round of the Australian Open this year.

Walkover– If a player wins a match in a tournament but then cannot play the next match (again, normally due to injury), his would-be opponent wins the match in a walkover. We saw this recently when Rafael Nadal won his quarterfinal match at the Sony Ericsson Open but then could not play the next match. He would have played Andy Murray, who instead won the match in a walkover.

Break– To break serve is to win when your opponent is serving. This is a big deal in professional tennis, when players often dominate when they are serving and matches can turn on a single break. The term up a break means that the player has broken one more time than her opponent during the set. A related term, on serve , means that both players have won all of their service games during a set. A famous example of players struggling to break their opponents was the 5 th set of the 2009 Wimbledon final, when it took Roger Federer until the 30 th game of the set to finally break Andy Roddick and win the set 16-14 (there is no tiebreaker in the 5 th set at Wimbledon). Related terms include break point , break chance , hold serve and back on serve .

by Brad Boeker, a fan of professional tennis for over 30 years. He coaches high school tennis in Illinois.</p>
<p>	BLOG</p>
    <img src="img/google.png" <a href="https://plus.google.com/113555911016600043954" target="_blank" dmle_dont_remove="target" dm_dont_rewrite_url="true" duda_id="1435955903">  
</a> 
<img src="img/twiter.png" <a href="https://twitter.com/justennisnaples" target="_blank" dmle_dont_remove="target" dm_dont_rewrite_url="true" duda_id="1590222023"> <span class="dmSocialTwitter dm-icon-twitter oneIcon socialHubIcon style1" duda_id="1272882182"></span> 
</a>
<p>Copyright 2015 <a href="http://www.marketrivals.com" rel="external">MarketRivals</a></p>
<h3>by MOBILIZE.INFO</h3>



                </div>

			</div>	
				
				
		</div>
		
		<!--end blog ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
		
		<!-- contact us ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		
		<div id="contactform" data-role="page" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" >
				<div class="ui-grid-solo ui-alt-icon" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu-contact">
							<ul id="menu-contact">
                             <li><a href="#about" data-transition="<?php echo $transitionefect ?>">About</a></li>
							<li><a href="#apparel" data-transition="<?php echo $transitionefect ?>">Apparel</a></li>
							<li><a href="#equipment" data-transition="<?php echo $transitionefect ?>">Equipment</a></li>
							<li><a href="#naples" data-transition="<?php echo $transitionefect ?>">Naples Tennis</a></li>
							<li><a href="#services" data-transition="<?php echo $transitionefect ?>">Services</a></li>
							<li><a href="#blog" data-transition="<?php echo $transitionefect ?>">Blog</a></li>
					</section>
					<div>	
						<form data-parsley-validate method="post" action="mail.php" data-ajax="false">
							Name: <input type="text" id="naam" name="naam" value="" placeholder="Name" required/><br>
							E-mail: <input type="email" id="mail" name="mail" value="" placeholder="E-mail" required/><br>
							Phone Number: <input type="tel" id="telefoon" name="telefoon" value="" placeholder="Phone"/><br>
							Subject: <input type="text" id="onderwerp" name="onderwerp" value="" placeholder="Subject" required/><br>
							Message:<br>
							<textarea style="height:100px;" id="bericht" name="bericht" placeholder="Enter your message here..." required></textarea> <br />
							<input type="submit" value="Send" name="submit" class="btn" id="input-dugme">
						</form>
					</div>
				</div>
			</div>
		
		</div>
<!--contact us///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<!-- page seo ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		<!--///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<div id="seopage" data-role="page" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" >
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu-seo">
							<ul id="menu-seo">
								<li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
								<li><a href="#page2" data-transition="<?php echo $transitionefect ?>">Web Design</a></li>
								<li><a href="#page2" data-transition="<?php echo $transitionefect ?>">Local SE0</a></li>
								<li><a href="#page2" data-transition="<?php echo $transitionefect ?>">Web Analytics</a></li>
							</ul>
					</section>
					
				</div>
			</div>
		
		</div>
<!--page seo///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<div id="succes" data-role="page" data-theme="<?php echo $theme ?>" data-dialog="true">
		
			<div data-role="main" class="ui-content" >	
			 <p>The contact form was sent succesful!</p>
			
			</div>
		
		</div>
<!--page succes ends here///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<div id="error" data-role="page" data-dialog="true">
		
			<div data-role="main" class="ui-content" >	
				<p>The contact form was sent because of an error!</p>
			</div>
		
		</div>
<!--erroor ends here////////////////////////////////////////////////////////////////////////////////////////////////////
	<!-- page 3 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		<!-- SLIDER ZA MOBILNI SAJT POCINJE OVDJEE -->
		<!-- it works the same with all jquery version from 1.x to 2.x -->
	
		<script type="text/javascript" src="js/responsiveslides.js"></script>    
	
	   
		<!-- Slajder se zavrsava -->
	</body>
</html>
