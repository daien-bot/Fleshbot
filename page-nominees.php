<?php /* Template Name: Fleshbot Awards Nominees */ ?>
<?php get_header() ?>
<?php if (is_gay_domain()) { ?>
<style>
	@font-face {
	    font-family: GothamLight;
	    src: url(<?php bloginfo('template_url') ?>/assets/fonts/GothamLight.otf);
	}
	@font-face {
	    font-family: GothamMedium;
	    src: url(<?php bloginfo('template_url') ?>/assets/fonts/GothamMedium.ttf);
	}
	@font-face {
	    font-family: GothamBold;
	    src: url(<?php bloginfo('template_url') ?>/assets/fonts/GothamBold.ttf);
	}
	.no-padding {
		padding-left: 0;
		padding-right: 0;
	}
	.award-main-container {
		background: #dedede;
		font-family: 'GothamLight', sans-serif;
		margin-top: -25px;
	}
	.award-main-container a:hover {
		text-decoration: none;
	}
	.award-header {
		background-color: #242532;
		color: #fff;
	}

	.award-main-content p {
		padding-bottom: 0;
		margin-bottom: 0;
	}

	.award-main-content {
		background: #fff;
		text-align: center;
		padding: 40px;
		padding-bottom: 150px;

	}
	.award-main-content h1 {
		font-size: 24px;
		text-transform: uppercase;	
		letter-spacing: 1px;
		margin-bottom: 50px;
	}
	.award-main-content img {
		text-align: center;
		margin:20px;
	}
	.award-main-content a.content-vote-btn {
		background: #d33777;
		padding:18px 80px;
		text-align: center;
		color: #fff;
		text-transform: uppercase;
		font-size: 30px;
		border-radius: 50px;
		margin-top: 50px;
		display: inline-block;
		font-family: 'GothamBold', sans-serif;
		letter-spacing: 2px;
	}
.award-banner img {
		object-fit: cover;
		width: 100%;
		height: 100%;
	}


	.menu-conteiner {
		background-color: #292b36;
	    position: relative;
	    z-index: 1;
	    width: 100%;
	    height: 80px;
	}
	.award-about {
		position: relative;
		background-image: url(<?php bloginfo('template_url') ?>/assets/images/awards/gay/bang-background.png);
		background-repeat: no-repeat;
		background-size: 100% 100%;
		width: 100%;
		height: 357px;
		padding: 60px;
	}
	.award-about h3 {
		color: #d33777;
		font-size: 24px;
		text-transform: uppercase;	
		letter-spacing: 2px;
		margin-bottom: 20px;
	}
	.award-about p {
		color: #fff;
		font-size: 14px;
		line-height: 32px;
		letter-spacing: 1px;
	}
	.award-about p a{
		color: #d33777;
	}

	.award-presents {
		position: relative;
		padding:40px;
		background-color: #fff;
		z-index: 99;
	}
	.award-presents span {
		letter-spacing: 2px;
		text-transform: uppercase;
		margin-right: 20px;
		font-size: 20px;
	}
	.award-presents .box {
		position: absolute;
		right: 50px;
		top: -320px;
		z-index: -1;
	}

	.award-footer {
		background-color: #202026;
		padding:80px 0;
		text-align: center;
	}

	.award-nav ul {
		margin-bottom: 0;
		padding-left: 0;
	}

	.award-nav ul li {
		list-style: none;
		display: inline-block;
		line-height: 80px;
	}


	.award-nav ul li a {
		color: #fff;
		padding:10px 20px;
		font-size: 14px;
		text-transform: uppercase;
		letter-spacing: 2px;
		position: relative;
		cursor: pointer;
	}

@media (max-width: 1350px) {
	.award-nav ul li a {
		padding:10px;
	}
}
@media (max-width: 1110px) {
	.award-nav ul li a {
		padding:10px 5px;
	}

	.award-nav ul li {
		line-height: 82px;
	}
}

	.award-nav ul li a:hover {
		text-decoration: none;
	}

	.desktop .award-nav ul li.active a:before, .desktop .award-nav ul li a:hover:before {
		border-top: 1px solid #d33777;
		content: "";
		width: 50%;
		display: block;
		margin-left: auto;
		margin-right: auto;
		left: 0;
		right: 0;
		top: 0;
		position: absolute;
	}

	.desktop .award-nav ul li.active a:after, .desktop .award-nav ul li a:hover:after {
		border-top: 1px solid #d33777;
		content: "";
		width: 50%;
		display: block;
		margin-left: auto;
		margin-right: auto;
		left: 0;
		right: 0;
		bottom: 0;
		position: absolute;
	}

	.mobile .award-nav ul li.active a:before {
		border-top: 1px solid #d33777;
		content: "";
		width: 50%;
		display: block;
		margin-left: auto;
		margin-right: auto;
		left: 0;
		right: 0;
		top: 0;
		position: absolute;
	}

	.mobile .award-nav ul li.active a:after{
		border-top: 1px solid #d33777;
		content: "";
		width: 50%;
		display: block;
		margin-left: auto;
		margin-right: auto;
		left: 0;
		right: 0;
		bottom: 0;
		position: absolute;
	}
	.desktop {
		display: inline-block;
	}
	.mobile {
		display: none;
	}

	.nominees-content {
		padding:40px;
		background: #fff;
	}
	.nominees-content h3 {
		text-transform: uppercase;
		color: #d33777;
		font-size: 24px;
		letter-spacing: 2px;
	}
	.nominees-content h4 {
		text-transform: uppercase;
		color: #000;
		font-size: 14px;
		letter-spacing: 2px;
		font-weight: 700;
		margin-top: 20px;
		font-family: 'GothamMedium', sans-serif;
	}
	.nominees-content ul {
		padding: 0;
	}
	.nominees-content ul li{
		list-style: none;
		line-height: 130%;
	}
	.nominees-content ul li a{
		color: #000;
		font-weight: 600;
		font-size: 13px;
		letter-spacing: 1px;
		cursor: pointer;
	}
	.nominees-content ul li a:hover{
		color: #d33777;
	}

@media (max-width: 1300px) {
     .award-about {
     	height: auto;
     	padding:60px 20px;
     }
}

@media (max-width: 992px) {
    .left-banner {
      display: none; } 
    .right-banner {
      display: none; } 
     .award-presents .box {
     	display: none;
     }
     .award-logo {
     	text-align: center;
     }
	.award-nav ul li a {
		padding:10px 20px;
	}
	.award-banner .banner-content h1, .gay-banner .banner-content h1 {
	    font-size: 40px;	
	    margin: 0 2%;
	}
     .award-banner .banner-content, .gay-banner .banner-content {
     	margin-left: 0;
     	margin-right: 0;
     	padding-bottom: 10%
     }
     .award-banner, .gay-banner {
     	height: auto;
     }
     .award-presents {
	    text-align: center;
	}

	.desktop {
		display: none;
	}
	.mobile {
		display: inline-block;
		width: 100%;
	}

 }

 .no-gutters>.col, .no-gutters>[class*=col-] {
    padding-right: 0;
    padding-left: 0;
}

.content-vote-btn {
	background: #d33777;
    padding: 18px 80px;
    text-align: center;
    color: #fff;
    text-transform: uppercase;
    font-size: 30px;
    border-radius: 50px;
    margin-top: 50px;
    font-family: 'GothamBold', sans-serif;
    display: inline-block;
    letter-spacing: 2px;
    margin: 50px auto 0;
}
/*Mobile*/
@media (max-width: 576px) {
     .content-vote-btn {
	    padding: 18px 20px;
		font-size: 20px;
	}
	.award-footer img {
		width: 80%;
	}
	.award-logo {
		text-align: center;
		padding: 0 2%;
	}
	
	.award-main-content img {
		margin: 20px 0 !important;
	}
	.award-nav ul li a {
	    padding: 10px 16px;
	}
}
</style>

<!-- gay tab start -->
<div class="award-main-container">
    <div class="container-fluid nominees no-padding">
        <div class="row no-gutters">
            <div class="col-md-2 left-banner">
                <a target="_blank" href="http://mrman.com/"><img class="img-responsive" src="<?php bloginfo('template_url') ?>/assets/images/awards/gay/man_wallpaper_left_light.png"></a>
            </div>
            <div class="col-md-8">
            	<div class="award-banner">
            		<a target="_blank" href="https://t.grtyo.com/aff_c?offer_id=4436&aff_id=4339&url_id=13148"><img src="<?php bloginfo('template_url') ?>/assets/images/awards/gay/fb_awards_main_image_gay.png" alt=""/></a>
            	</div>
            	<div class="menu-conteiner">
	            	<div class="col-lg-12 col-md-12 desktop">
			    		<div class="award-nav text-lg-center text-center">
			    			<ul>
			    				<li><a href="/awards" target="_blank">About</a></li>
			    				<li class="active"><a href="/awards-nominees/">Nominees</a></li>
			    				<li><a target="_blank" href="https://t.grtyo.com/aff_c?offer_id=4436&aff_id=4339&url_id=13148">Vote</a></li>
			    			</ul>
			    		</div>
			    	</div>

					<div class="col-lg-12  col-md-12 mobile">
			    		<div class="award-nav text-lg-center text-center">
			    			<ul>
			    				<li><a href="/awards/" target="_blank">About</a></li>
			    				<li class="active"><a href="/awards-nominees/">Nominees</a></li>
			    				<li><a target="_blank" href="https://t.grtyo.com/aff_c?offer_id=4436&aff_id=4339&url_id=13148">Vote</a></li>
			    			</ul>
			    		</div>
			    	</div>
			    </div>
            	<div class="nominees-content">
            		<h3>The Nominees</h3>
						<div class="row">
						  <div class="col-md-6">
						      <h4>Best Paysite</h4>
						      <ul>
						          <li><a href="https://www.8teenboy.com/" target="_blank">8teenBoy</a></li>
						          <li><a href="https://www.activeduty.com/" target="_blank">Active Duty</a></li>
						          <li><a href="http://belamionline.com/" target="_blank">Belami</a></li>
						          <li><a href="http://www.c1r.com/" target="_blank">C1R</a></li>
						          <li><a href="https://www.chaosmen.com/" target="_blank">Chaos Men</a></li>
						          <li><a href="https://cockyboys.com/" target="_blank">Cocky Boys</a></li>
						          <li><a href="https://www.corbinfisher.com/" target="_blank">Corbin Fishers</a></li>
                                  <li><a href="https://www.falconstudios.com/" target="_blank">Falcon Studios</a></li>
                                  <li><a href="https://www.familydick.com/" target="_blank">Family Dick</a></li>
						          <li><a href="https://gayhoopla.com/" target="_blank">Gay Hoopla</a></li>
						          <li><a href="http://guysinsweatpants.com/" target="_blank">Guys In Sweatpants</a></li>
						          <li><a href="https://www.helixstudios.net/" target="_blank">Helix</a></li>
						          <li><a href="https://www.hothouse.com/" target="_blank">Hot House</a></li>
						          <li><a href="https://www.iconmale.com/" target="_blank">Icon Male</a></li>
						          <li><a href="http://www.jockpussy.com/" target="_blank">Jock Pussy</a></li>
						          <li><a href="https://www.kink.com/kinkmen/" target="_blank">Kink Men</a></li>
						          <li><a href="https://www.lucasentertainment.com" target="_blank">Lucas Entertainment</a></li>
                                  <li><a href="https://www.men.com/" target="_blank">Men</a></li>
						          <li><a href="https://www.nextdoorstudios.com/" target="_blank">Next Door Studios</a>
						          <li><a href="https://www.ragingstallion.com/" target="_blank">Raging Stallion</a>
						      </ul>

						    </div>
						    <div class="col-md-6">
						        <h4>Best Cam Site</h4>
						        <ul>
                                  <li><a href="https://cam4.com/" target="_blank">CAM4</a></li>
						          <li><a href="https://www.cameraboys.com/" target="_blank">Camera Boys</a></li>
						          <li><a href="https://cams.com" target="_blank">Cams</a></li>
						          <li><a href="https://chaturbate.com/" target="_blank">Chaturbate</a></li>
						          <li><a href="https://www.flirt4free.com/" target="_blank">Flirt4Free</a></li>
						          <li><a href="http://www.gaywebcams.com/" target="_blank">Gay Webcams</a></li>
						          <li><a href="http://hunks.com/" target="_blank">Hunks</a></li>
                                  <li><a href="" target="_blank">iFriends</a></li>  
                                  <li><a href="https://jockmenlive.com/" target="_blank">Jock Men Live</a></li>  
                                  <li><a href="https://www.livejasmin.com/" target="_blank">Live Jasmin</a></li> 
                                  <li><a href="http://www.livemuscleshow.com/" target="_blank">Live Muscle Show</a></li> 
						          <li><a href="https://www.randyblue.com/" target="_blank">Randy Blue</a></li>
						          <li><a href="https://www.realliveguys.com" target="_blank">Real Live Guys</a></li> 
                                  <li><a href="https://www.streamen.com/" target="_blank">Streamen</a></li>
						          <li><a href="https://www.supermen.com/" target="_blank">Supermen</a></li>  
						      </ul>
						    </div>
						  </div>


						<div class="row">
						    <div class="col-md-6">
						        <h4>Best New Site</h4>
						        <ul>
                                  <li><a href="https://boyforsale.com/" target="_blank">Boy For Sale</a></li>  
                                  <li><a href="https://www.brothercrush.com/" target="_blank">Brother Crush</a></li> 
                                  <li><a href="https://funsizeboys.com/" target="_blank">Fun Size Boys</a></li> 
                                  <li><a href="https://growlboys.com/" target="_blank">Growl Boys</a></li> 
                                  <li><a href="https://latinleche.org/" target="_blank">Latin Leche</a></li> 
                                  <li><a href="https://www.latinoguysporn.com/" target="_blank">Latino Guys Porn</a></li> 
                                  <li><a href="https://missionaryboys.com/" target="_blank">Missionary Boys</a></li>
                                  <li><a href="https://www.noirmale.com/" target="_blank">Noir Male</a></li> 
                                  <li><a href="https://www.richard.xxx/" target="_blank">Richard.XXX</a></li> 
                                  <li><a href="https://www.whynotbi.com/" target="_blank">Why Not Bi</a></li> 
						      </ul>

						    </div>
						    <div class="col-md-6">
						        <h4>Trans Performer Of The Year</h4>
						        <ul>
                                  <li><a href="https://www.instagram.com/billyvegax/?hl=en" target="_blank">Billy Vega</a></li>  
                                  <li><a href="https://www.cam4.com/buckangel/" target="_blank">Buck Angel</a></li> 
                                  <li><a href="" target="_blank">Connor Atlas</a></li> 
                                  <li><a href="https://twitter.com/cydstvincent?lang=en" target="_blank">Cyd St. Vincent</a></li> 
                                  <li><a href="" target="_blank">Eddie Wood</a></li> 
                                  <li><a href="" target="_blank">Jade Phillips</a></li> 
                                  <li><a href="" target="_blank">Kipp Slinger</a></li> 
                                  <li><a href="" target="_blank">Logan Phillips</a></li> 
						          <li><a href="http://www.jockpussy.com/about/" target="_blank">Luke Hudson</a></li>
						          <li><a href="" target="_blank">Nicko Wolfe</a></li>
                                  <li><a href="" target="_blank">Olly Jackson</a></li>  
                                  <li><a href="" target="_blank">Tommy Tanner</a></li>  
                                  <li><a href="" target="_blank">Trip Richards</a></li>  
                                  <li><a href="" target="_blank">Tyler St. Syn</a></li>  
                                  <li><a href="" target="_blank">Victor Belmont</a></li>  
                                  <li><a href="https://twitter.com/yoshiwaraniisan?lang=en" target="_blank">Yoshiwara Niisan</a></li>  
						        </ul>
						      </div>
						</div>


						<div class="row">
						    <div class="col-md-6">
						        <h4>Performer Of The Year</h4>
						        <ul>
                                  <li><a href="https://www.austinwilde.com" target="_blank">Austin Wilde</a></li>     
                                  <li><a href="https://www.ragingstallion.com/en/profile/Austin-Wolf/37736" target="_blank">Austin Wolf</a></li>  
                                  <li><a href="https://twitter.com/austinlyoungxxx" target="_blank">Austin Young</a></li>  
						          <li><a href="https://twitter.com/CalvinBanksxxx" target="_blank">Calvin Banks</a></li>  
						          <li><a href="https://twitter.com/marqdb" target="_blank">DeAngelo Jackson</a></li>
						          <li><a href="https://twitter.com/devinfrancoxxx/" target="_blank">Devin Franco</a></li>
                                  <li><a href="https://www.men.com/model/1861/diego-sans/" target="_blank">Diego Sans</a></li>  
                                  <li><a href="https://twitter.com/dominicpacifico" target="_blank">Dominic Pacifico</a></li>  
                                  <li><a href="https://twitter.com/grgisthewerd" target="_blank">Greg McKeon</a></li>  
						          <li><a href="https://twitter.com/jacen_zhu" target="_blank">Jacen Zhu</a></li>
                                  <li><a href="https://www.men.com/model/2231/jack-hunter/" target="_blank">Jack Hunter</a></li>  
                                  <li><a href="https://twitter.com/soitsjakeporter/" target="_blank">Jake Porter</a></li>  
                                  <li><a href="https://twitter.com/johnnyrapidatl" target="_blank">Johnny Rapid</a></li>  
                                  <li><a href="https://twitter.com/amipheonix" target="_blank">Pheonix Fellington</a></li>  
                                  <li><a href="https://twitter.com/RomanToddNYC" target="_blank">Roman Todd</a></li>
						          <li><a href="https://twitter.com/seanzevran" target="_blank">Sean Zevran</a></li>
                                  <li><a href="https://www.men.com/model/3021/skyy-knox/" target="_blank">Skyy Knox</a></li> 
                                  <li><a href="https://twitter.com/TaylorXColeman" target="_blank">Taylor Coleman</a></li>
                                  <li><a href="https://twitter.com/vadimblack_xxx?lang=en" target="_blank">Vadim Black</a></li>
						          <li><a href="https://twitter.com/william_seedxxx" target="_blank">William Seed</a></li>
						      </ul>
						    </div>
                            
						    <div class="col-md-6">
						        <h4>Director Of The Year</h4>
						        <ul>
						          <li><a href="https://twitter.com/alexroman95x" target="_blank">Alex Roman</a></li>
						          <li><a href="https://twitter.com/djchichilarue" target="_blank">Chi Chi LaRue</a></li>
						          <li><a href="https://twitter.com/dominicpacifico" target="_blank">Dominic Pacifico</a></li>
						          <li><a href="https://twitter.com/dougjeffries/" target="_blank">Doug Jeffries</a></li>
						          <li><a href="https://www.instagram.com/jakejaxson/" target="_blank">Jake Jaxson</a></li>
						          <li><a href="" target="_blank">Joe Gage</a></li>
                                  <li><a href="https://www.nextdoorstudios.com/en/model/John-Smith/35985" target="_blank">John Smith</a></li> 
						          <li><a href="https://twitter.com/lancehartfetish" target="_blank">Lance Hart</a></li> 
                                  <li><a href="https://twitter.com/wolflegrand?lang=en" target="_blank">Legrand Wolf</a></li> 
                                  <li><a href="https://twitter.com/marcmacnamara?lang=en" target="_blank">Marc MacNamara</a></li> 
                                  <li><a href="" target="_blank">Marty Stevens</a></li> 
                                  <li><a href="https://twitter.com/MaxCarterXXX" target="_blank">Max Carter</a></li> 
                                  <li><a href="https://twitter.com/maxsohltim" target="_blank">Max Sohl</a></li> 
						          <li><a href="https://twitter.com/mrpam" target="_blank">Mr. Pam</a></li>
                                  <li><a href="https://twitter.com/roccofallonxxx" target="_blank">Rocco Fallon</a></li> 
						          <li><a href="https://twitter.com/roccosteelenyc" target="_blank">Rocco Steele</a></li>  
                                  <li><a href="https://twitter.com/xxxmrkeysxxx" target="_blank">Sebastian Keys</a></li> 
						          <li><a href="https://twitter.com/iamstevecruz/" target="_blank">Steve Cruz</a></li> 
						          <li><a href="https://twitter.com/mrdimarco/" target="_blank">Tony Dimarco</a></li> 
                                  <li><a href="https://twitter.com/trentonducati/" target="_blank">Trenton Ducati</a></li>
						      </ul>
						    </div>
						  </div>
                    

						<div class="row">
						      <div class="col-md-6">
						        <h4>Movie Of The Year</h4>
						        <ul>
                                  <li><a href="https://familydicks.com/daddys-secret-side-job-a-special-place-in-daddys-heart/" target="_blank">Familydicks.com: A Special Place in Daddy's Heart - FamilyDick </a></li>  
                                   <li><a href="https://cockyboys.com/dvds/jake-jaxsons-all-saints.html" target="_blank">CockyBoys.com: All Saints – Cockyboys</a></li>    
                                   <li><a href="https://www.noirmale.com/en/dvd/Black-On-White/75632" target="_blank">NoirMale.com: Black On White - Noir Male</a></li> 
                                   <li><a href="https://nakedsword.com/fivebrothers" target="_blank">Nakedsword.com: Five Brothers - NakedSword</a></li> 
                                   <li><a href="https://www.ragingstallion.com/en/dvd/Masturbation-Station/75168" target="_blank">Ragingstallion.com: Masturbation Station - Raging Stallion</a></li>
                                   <li><a href="https://www.men.com/sceneid/4305891/plastics-part-1" target="_blank">Men.com: Plastics-Men</a></li>
                                   <li><a href="https://www.iconmale.com/en/movie/The-Graduation/68094" target="_blank">Iconmale.com: The Graduation - Icon Male</a></li>
                                   <li><a href="https://www.falconstudios.com/en/dvd/The-Pledge/74849" target="_blank">Falconstudios.com: The Pledge - Falcon</a></li>
                                   <li><a href="https://www.nakedsword.com/movies/226073/the-slutty-professor" target="_blank">Nakedsword.com: The Slutty Professor - NakedSword</a></li>
                                   <li><a href="https://menatplay.com/updates/the-wedding-package.html" target="_blank">Menatplay.com: The Wedding Package -  MenAtPlay</a></li>
                                   <li><a href="https://www.helixstudios.net/video/6321/vegas-nights-trailer.html" target="_blank">HelixStudios.com: Vegas Nights - Helix</a></li>
                                   <li><a href="https://www.falconstudios.com/en/dvd/Zack--Jack-Make-A-Porno/69171" target="_blank">Falconstudios.com: Zack and Jack Make a Porno - Falcon</a></li>
						      </ul>
						    </div>
                            
						    <div class="col-md-6">
						        <h4>Best New Star</h4>
						        <ul>
                                 <li><a href="https://twitter.com/wernikalam" target="_blank">Alam Wernik</a></li>   
                                 <li><a href="https://twitter.com/AustinLYoungXXX" target="_blank">Austin Young</a></li>  
                                 <li><a href="https://twitter.com/avatarakyiaxxx?lang=en" target="_blank">Avatar Akyia</a></li> 
                                 <li><a href="https://twitter.com/coltonreecexxx" target="_blank">Colton Reece</a></li>   
                                 <li><a href="https://twitter.com/coreymarshallxx/" target="_blank">Corey Marshall</a></li>   
                                 <li><a href="https://twitter.com/grgisthewerd" target="_blank">Greg McKeon</a></li>    
                                 <li><a href="https://www.falconstudios.com/en/model/Hunter-Smith/58364" target="_blank">Hunter Smith</a></li>   
                                 <li><a href="https://twitter.com/jakeolsenxxx" target="_blank">Jake Olsen</a></li>    
                                 <li><a href="https://twitter.com/jaredshawnew1" target="_blank">Jared Shaw</a></li>    
                                 <li><a href="https://twitter.com/joelsomeonexxx" target="_blank">Joel Someone</a></li>    
                                 <li><a href="https://twitter.com/johnnyhandsxxx" target="_blank">Johnny Hands</a></li>    
                                 <li><a href="https://twitter.com/PaxtonWardXXX" target="_blank">Paxton Ward</a></li>    
                                 <li><a href="https://twitter.com/gaygringo_" target="_blank">Steven Lee</a></li>    
                                 <li><a href="https://twitter.com/tayesctt?lang=en" target="_blank">Taye Scott</a></li>    
                                 <li><a href="https://twitter.com/thyleknoxx" target="_blank">Thyle Knoxx</a></li> 
                                 <li><a href="https://twitter.com/willangellxxx" target="_blank">Will Angel</a></li> 
						      </ul>
						    </div>
						  </div>



						<div class="row">
						    <div class="col-md-6">
						        <h4>Cam Model of the Year</h4>
						        <ul> 
						          <li><a href="" target="_blank">Adam Archuleta</a></li>
						          <li><a href="https://twitter.com/killianadam" target="_blank">Adam Killian</a></li>
						          <li><a href="" target="_blank">Alex DeMarco</a></li>
                                  <li><a href="https://www.austinwilde.com/en/profile/" target="_blank">Austin Wilde</a></li> 
						          <li><a href="https://www.helixstudios.net/model/1128/blake-mitchell.html" target="_blank">Blake Mitchell</a></li>
						          <li><a href="" target="_blank">Colby Chambers</a></li>
                                  <li><a href="https://www.men.com/model/3571/damien-stone/" target="_blank">Damien Stone</a></li>
						          <li><a href="https://twitter.com/dominicpacifico" target="_blank">Dominic Pacifico</a>  
						          <li><a href="https://twitter.com/grgisthewerd" target="_blank">Greg McKeon</a></li>
						          <li><a href="https://twitter.com/kevinwarholreal?lang=en" target="_blank">Kevin Warhol</a></li>
                                  <li><a href="https://www.men.com/model/3511/michael-roman/" target="_blank">Michael Roman</a></li>  
						          <li><a href="" target="_blank">Mickey Knox</a></li>
						          <li><a href="https://twitter.com/svenbasquiat" target="_blank">Sven Basquiat</a></li>
						          <li><a href="https://twitter.com/thyleknoxx" target="_blank">Thyle Knoxx</a></li>
						          <li><a href="https://twitter.com/TheWesleyWoods" target="_blank">Wesley Woods</a></li> 
						          <li><a href="https://twitter.com/yumalexxx" target="_blank">YummyAlexxx</a></li>
                            </ul>
						</div>
                            
						  <div class="col-md-6">
						      <h4>Best Social Media Personality</h4>
						      <ul>
						        <li><a href="https://twitter.com/alexroman95x" target="_blank">Alex Roman</a></li>
						        <li><a href="https://twitter.com/AriKoyoteXXX" target="_blank">Ari Koyote</a></li>
                                <li><a href="https://twitter.com/AustinLYoungXXX" target="_blank">Austin Young</a></li>
                                <li><a href="https://twitter.com/boomer_banks" target="_blank">Boomer Banks</a></li>   
                                <li><a href="https://twitter.com/djchichilarue" target="_blank">Chi Chi LaRue</a></li>  
                                <li><a href="https://twitter.com/coleclairelgbt" target="_blank">Cole Claire</a></li>   
                                <li><a href="https://twitter.com/Dante_Colle" target="_blank">Dante Colle</a></li>   
						        <li><a href="https://twitter.com/rb_diegosans" target="_blank">Diego Sans</a></li>   
                                <li><a href="https://twitter.com/JackVidra" target="_blank">Jack Vidra</a></li>   
                                <li><a href="https://twitter.com/joelsomeonexxx" target="_blank">Joel Someone</a></li>  
                                <li><a href="https://twitter.com/johnnyrapidatl" target="_blank">Johnny Rapid</a></li>   
                                <li><a href="https://twitter.com/JoshMooreXXX" target="_blank">Josh Moore</a></li>   
                                <li><a href="https://twitter.com/kylerossxxx" target="_blank">Kyle Ross</a></li> 
                                <li><a href="https://twitter.com/LoganCrossXXX" target="_blank">Logan Cross</a></li>  
                                <li><a href="https://twitter.com/matthewcampnyc" target="_blank">Matthew Camp</a></li>   
                                <li><a href="https://twitter.com/MaxCarterXXX" target="_blank">Max Carter</a></li>     
                                <li><a href="https://twitter.com/amipheonix" target="_blank">Pheonix M. Fellington</a></li>
                                <li><a href="https://twitter.com/pierceparisxxx" target="_blank">Pierce Paris</a></li>
                                <li><a href="https://twitter.com/TaylorREIGNXXX" target="_blank">Taylor Reign</a></li>  
                                <li><a href="https://twitter.com/willbraunXXX" target="_blank">Will Braun</a></li> 
						      </ul>
						    </div>
						</div>


						<div class="row">
						  <div class="col-md-6">
						    <h4>Best Body</h4>
						    <ul>
                               <li><a href="https://twitter.com/oaradwinwin" target="_blank">Arad Winwin</a></li> 
                                <li><a href="https://twitter.com/baraddisonxxx" target="_blank">Bar Addison</a></li> 
                                <li><a href="https://twitter.com/cademaddoxxx" target="_blank">Cade Maddox</a></li> 
                                <li><a href="https://twitter.com/damienstonexxx" target="_blank">Damien Stone</a></li>
						        <li><a href="http://www.mixitupboy.com/members/model.php?which=959" target="_blank">DeAngelo Jackson</a></li>
                                <li><a href="https://twitter.com/devinfrancoxxx" target="_blank">Devin Franco</a></li> 
                                <li><a href="https://twitter.com/dontethick" target="_blank">Donte Thick</a></li>
                                <li><a href="https://twitter.com/grgisthewerd" target="_blank">Greg McKeon</a></li> 
                                <li><a href="https://twitter.com/jaredshawnew1" target="_blank">Jared Shaw</a></li>
                                <li><a href="https://twitter.com/jessiecolterxxx" target="_blank">Jessie Colter</a></li>
                                <li><a href="https://twitter.com/lancehartfetish" target="_blank">Lance Hart</a></li> 
                                <li><a href="https://twitter.com/liamcyberxxx" target="_blank">Liam Cyber</a></li>
                                <li><a href="https://twitter.com/sirlukewilder" target="_blank">Luke Wilder</a></li>
                                <li><a href="https://twitter.com/peterfever" target="_blank">Peter Le</a></li>
                                <li><a href="https://twitter.com/ruslanangeloxxx" target="_blank">Ruslan Angelo</a></li>
                                <li><a href="https://twitter.com/skyyknox" target="_blank">Skyy Knox</a></li>
                                <li><a href="https://twitter.com/gaygringo_" target="_blank">Steven Lee</a></li>
                                <li><a href="https://twitter.com/TravisStevensX" target="_blank">Travis Stevens</a></li>
                                <li><a href="https://twitter.com/william_seedxxx" target="_blank">William Seed</a></li>
                                <li><a href="https://twitter.com/theonlywoodyfox" target="_blank">Woody Fox</a></li>
						    </ul>
						  </div>



						  <div class="col-md-6">
						    <h4>Best Cock</h4>
						    <ul>
                               <li><a href="https://twitter.com/alex_mecum" target="_blank">Alex Mecum</a></li>
                               <li><a href="https://twitter.com/bosinnxxx" target="_blank">Bo Sinn</a></li>
						       <li><a href="https://twitter.com/boomer_banks" target="_blank">Boomer Banks</a></li>
                               <li><a href="https://twitter.com/coltonreecexxx" target="_blank">Colton Reece</a></li>
                               <li><a href="https://twitter.com/CorbinColby_" target="_blank">Corbin Colby</a></li>  
                               <li><a href="https://twitter.com/jakeolsenxxx" target="_blank">Jake Olsen</a></li> 
                               <li><a href="https://twitter.com/jjknightxxx" target="_blank">JJ Knight</a></li> 
                               <li><a href="https://twitter.com/kaydengrayxxx" target="_blank">Kayden Gray</a></li> 
                               <li><a href="https://twitter.com/wolflegrand" target="_blank">Legrand Wolf</a></li> 
                               <li><a href="https://growlboys.com/prometheans/matthew-colt/" target="_blank">Matthew Colt</a></li> 
                               <li><a href="https://twitter.com/maxarionxxx" target="_blank">Max Arion</a></li> 
                               <li><a href="https://twitter.com/maxkonnorxxx" target="_blank">Max Konnor</a></li> 
                               <li><a href="https://www.waybig.com/blog/tag/mick-sean-cody/" target="_blank">Mick (Sean Cody)</a></li> 
                               <li><a href="https://twitter.com/amipheonix" target="_blank">Pheonix Fellington</a></li>
                               <li><a href="https://twitter.com/pierceparisxxx" target="_blank">Pierce Paris</a></li>
						       <li><a href="https://twitter.com/rafaelalencar" target="_blank">Rafael Alencar</a></li>
						       <li><a href="https://twitter.com/roccosteelenyc" target="_blank">Rocco Steele</a></li>
                               <li><a href="https://twitter.com/seancodyssean" target="_blank">Sean (Sean Cody)</a></li> 
                               <li><a href="https://twitter.com/gaygringo_" target="_blank">Steven Lee</a></li>
                               <li><a href="https://twitter.com/TysonTylerXXX?lang=en" target="_blank">Tyson Tyler</a></li>
						    </ul>
						  </div>

						</div>


						<div class="row">
						  <div class="col-md-6">
						    <h4>Best Butt</h4>
						    <ul>
						      <li><a href="https://twitter.com/wernikalam" target="_blank">Alam Wernik</a></li>
						      <li><a href="https://twitter.com/angelriveraxxx" target="_blank">Angel Rivera</a></li>
						      <li><a href="https://twitter.com/Beaux_Banks" target="_blank">Beaux Banks</a></li>
						      <li><a href="https://twitter.com/bishop_angus" target="_blank">Bishop Angus</a></li>
						      <li><a href="https://twitter.com/BruceBeckhamXXX" target="_blank">Bruce Beckham</a></li>
						      <li><a href="https://twitter.com/CaseyJacksXXX" target="_blank">Casey Jacks</a></li>
						      <li><a href="https://twitter.com/damonheartxxx" target="_blank">Damon Heart</a></li>
						      <li><a href="https://twitter.com/dantemartinx" target="_blank">Dante Martin</a></li>
						      <li><a href="https://twitter.com/derekboltxxx" target="_blank">Derek Bolt</a></li>
						      <li><a href="https://twitter.com/devinfrancoxxx" target="_blank">Devin Franco</a></li>
						      <li><a href="https://twitter.com/thedylanhayes" target="_blank">Dylan Hayes</a></li>
						      <li><a href="https://twitter.com/JeremySpreadums" target="_blank">Jeremy Spreadums</a></li>
						      <li><a href="https://twitter.com/johnnyrapidatl" target="_blank">Johnny Rapid</a></li>
						      <li><a href="https://twitter.com/johnnyv_muscle" target="_blank">Johnny V</a></li>
						      <li><a href="https://twitter.com/iamjudasking" target="_blank">Judas King</a></li>
                              <li><a href="https://twitter.com/LoganCrossXXX" target="_blank">Logan Cross</a></li>
						      <li><a href="https://twitter.com/nickdannerxxx" target="_blank">Nick Danner</a></li>
						      <li><a href="https://twitter.com/PAULTHECANONXXX/status/942193550292406272" target="_blank">Paul Canon</a></li>
						      <li><a href="https://twitter.com/amipheonix" target="_blank">Pheonix Fellington</a></li>
						      <li><a href="https://twitter.com/TylerHillXXX" target="_blank">Tyler Hill</a></li>
						    </ul>
						  </div>


						  <div class="col-md-6">
						    <h4>Best Duo Scene</h4>
						    <ul>
						      <li><a href="" target="_blank">Guysinsweatpants.com: Brandon Evans and Austin Wilde in "Flip Fucking Fun" for GuysInSweatPants</a></li>
                              <li><a href="https://menatplay.com/updates/the-wedding-package.html" target="_blank">Menatplay.com: Dario Beck and Diego Reyes In “The Wedding Package” for MenAtPlay</a></li> 
                              <li><a href="" target="_blank">MissionaryBoys.com: Darron Bluu and Manuel Skye in "Second Anointing” for MissionaryBoys</a></li> 
						      <li><a href="https://www.seancody.com/scene/4357231/deacon-manny-bareback" target="_blank">Seancody.com: Deacon and Manny in "Deacon & Manny: Bareback” for SeanCody</a></li>
						      <li><a href="https://www.noirmale.com/en/video/Meet-The-Parents/134040" target="_blank">Noirmale.com: Jacen Zhu and Roman Todd in “Meet the Parents” for NoirMale</a></li>
                              <li><a href="https://www.men.com/sceneid/4129221/cum-to-life-part-1" target="_blank">Men.com: Johnny Rapid and JJ Knight in “Cum To Life” for Men</a></li> 
						      <li><a href="" target="_blank">Nakedsword.com: Johnny V. And François Sagat in "Paris Perfect: An American In François" for NakedSword</a></li>
						      <li><a href="" target="_blank">Legrand Wolf and Austin in "Dr Wolf's Dr Office” for FunSizeBoys</a></li>
						      <li><a href="https://www.familydick.info/pornstars/myles-landon-michael-boston/" target="_blank">Familydick.com: Michael Boston and Myles Landon in "Daddy's Little Man” for FamilyDick</a></li>
						      <li><a href="https://www.nextdoorstudios.com/en/show/Hiding-From-The-Parents/133219" target="_blank">Nextdoorstudios.com: Scott Finn and Carter Woods in "Hiding From The Parents" for NextDoorStudios</a></li>
						      <li><a href="https://www.nakedsword.com/movies/229896/the-last-rose/scene/1" target="_blank">Nakedsword.com: Serge Cavalli and Damon Heart in "The Last Rose” for NakedSword/Bel Ami</a></li>
						      <li><a href="https://www.falconstudios.com/en/dvd/Zack--Jack-Make-A-Porno/69171" target="_blank">Falconstudios.com: Woodsy Fox and Alam Wernik in "Zack & Jack Make A Porno” for Falcon</a></li>
						    </ul>
						  </div>
						</div>

						<div class="row">
						  <div class="col-md-6">
						    <h4>Best Group Sex Scene</h4>
						    <ul>
                              <li><a href="https://www.men.com/sceneid/3705971/sex-god-part-3" target="_blank">Allen King, Paddy O’Brian, and Francois Sagat in "Sex God” for Men</a></li>
						      <li><a href="" target="_blank">Ash Hendricks, Theo Brady, and Küper Ryan in "Big Dick Fuck Fest” for GuysInSweatpants</a></li>
						      <li><a href="https://www.familydick.info/pornstars/dale-savage-bar-addison-greg-mckeon/" target="_blank">Bar Addison, Dale Savage, and Greg McKeon in "A Special Legacy” for FamilyDick</a></li>
						      <li><a href="https://www.helixstudios.net/video/6297/spitroasted.html" target="_blank">Corbin Colby, Blake Mitchell, and Clay Turner in “Spitroasted” for Helix</a></li>
						      <li><a href="https://www.falconstudios.com/en/dvd/The-Pledge/74849" target="_blank">Devin Franco, Colton Reece, Nic Sahara, Trevor Mille, Zak Bishop, and Brandon Wilde in "The Pledge” for Falcon</a></li>
						      <li><a href="" target="_blank">Hector, Deacon, and Asher in "Hector, Deacon, and Asher: Bareback” for SeanCody</a></li>
						      <li><a href="" target="_blank">Jacen Zhu, Max Adonis, and Noah Donovan in “Stepbrother Threeway” for NoirMale</a></li>
						      <li><a href="https://www.helixstudios.net/movie/HXM095/room-for-one-more.html?nats=r.." target="_blank">Josh Brady, Corbin Colby, Joey Mills, Cameron Parks, Angel Rivera, and Luke Wilder in "Room for One More" for HelixStudios</a></li>
						      <li><a href="https://funsizeboys.com/chapter-updates/austin-jonathan-chapter-2-dr-wolfs-private-room-3-some" target="_blank">Legrand Wolf, Austin, and Jonathan in "Dr Wolf's Private Room 3-Some” for FunSizeBoys</a></li>
						      <li><a href="" target="_blank">Pheonix Fellington, Austin Wolf, and Kurtis Wolfe in “Rideshare” for Raging Stallion</a></li>
						      <li><a href="https://store.nextdoorstudios.com/products/the-bareback-boys" target="_blank">Quentin Gainz, Roman Todd, and Tyler Carver in "The Bareback Boys” for NextDoorStudios</a></li>
						      <li><a href="https://nakedsword.com/movies/226073/the-slutty-professor" target="_blank">Tyler Roberts, Ace Era, and Dave Slick in "The Slutty Professor” for NakedSword/Falcon</a></li>
						    </ul>
						  </div>

						  <div class="col-md-6">
						    <h4>Best CLip Performer</h4>
						    <ul>
                              <li><a href="https://www.ragingstallion.com/en/profile/Austin-Wolf/37736" target="_blank">Austin Wolf</a></li>
						      <li><a href="https://twitter.com/AveryJonesxxx" target="_blank">Avery Jones</a></li> 
						      <li><a href="https://twitter.com/Dev_Tylerxxx" target="_blank">Dev Tyler</a></li>
						      <li><a href="https://twitter.com/DirkCaber" target="_blank">Dirk Caber</a></li>
                              <li><a href="https://twitter.com/dominicpacifico" target="_blank">Dominic Pacifico</a> 
                              <li><a href="https://twitter.com/sagatfrancois" target="_blank">Francois Sagat</a></li>  
						      <li><a href="https://twitter.com/gabrielcrossxxx" target="_blank">Gabriel Cross</a></li>
						      <li><a href="https://twitter.com/JacksonHoodxxx" target="_blank">Jackson Hood</a></li>
						      <li><a href="https://twitter.com/JaxxThanatos" target="_blank">Jaxx Thanatos</a></li>
						      <li><a href="https://twitter.com/jayjamesxxx" target="_blank">Jay James</a></li>
						      <li><a href="https://twitter.com/JoshMooreXXX" target="_blank">Josh Moore</a></li>
						      <li><a href="" target="_blank">Joshua Knox *</a></li>
						      <li><a href="https://twitter.com/gymburger" target="_blank">Mars Gymburger</a></li>  
						      <li><a href="https://twitter.com/matthewcampnyc" target="_blank">Matthew Camp</a></li>
						      <li><a href="https://twitter.com/maxkonnorxxx" target="_blank">Max Konnor</a></li>
						      <li><a href="https://twitter.com/parkerxpayne" target="_blank">Parker Payne</a></li>
						      <li><a href="https://twitter.com/srhyheim" target="_blank">RhyheimShabazz</a></li> 
						      <li><a href="https://twitter.com/roccosteelenyc" target="_blank">Rocco Steele</a></li>   
						      <li><a href="https://twitter.com/TheWesleyWoods/" target="_blank">Wesley Woods</a></li>
						    </ul>
						  </div>
						</div>



						<div class="row">
						  <div class="col-md-6">
						    <h4>Best Free Site Thats Not Fleshbot</h4>
						    <ul>
						      <li><a href="https://bananaguide.com/" target="_blank">Banana Guide</a></li>
						      <li><a href="http://www.boyculture.com/" target="_blank">Boy Culture</a></li>
						      <li><a href="http://www.cocktailsandcocktalk.com/" target="_blank">Cocktails And Cocktalk</a></li>
						      <li><a href="http://www.fleshandboners.com/" target="_blank">Flesh And Boners</a></li>
						      <li><a href="https://www.gaydemon.com/" target="_blank">Gay Demon</a></li>
						      <li><a href="https://www.gaybuzzer.com/" target="_blank">Gay Buzzer</a></li>
						      <li><a href="http://gayety.co/" target="_blank">Gayety</a></li>
						      <li><a href="" target="_blank">Homorazzi</a></li>
						      <li><a href="https://hornet.com/" target="_blank">Hornet Stories</a></li>
						      <li><a href="" target="_blank">Instinct</a>
						      <li><a href="https://omg.blog/" target="_blank">OMG blog</a></li>
						      <li><a href="http://www.queermenow.net/" target="_blank">Queer Me Now</a></li>
						      <li><a href="http://queerpig.com/" target="_blank">Queer pig</a></li>
						      <li><a href="https://www.queerty.com/" target="_blank">Queerty</a></li>
						      <li><a href="http://str8upgayporn.com/" target="_blank">Str8upgayporn</a></li>
						      <li><a href="https://thegailygrind.com/" target="_blank">The Gaily Grind</a></li> 
						      <li><a href="https://www.thesword.com/" target="_blank">The Sword</a></li> 
						    </ul>
						  </div>
						    
                          <div class="col-md-6">
						    <h4>Best Daddy</h4>
						    <ul> 
						      <li><a href="https://www.ragingstallion.com/en/profile/Austin-Wolf/37736" target="_blank" target="_blank">Austin Wolf</a></li>
                              <li><a href="https://twitter.com/boomer_banks" target="_blank">Boomer Banks</a></li> 
                              <li><a href="https://twitter.com/cademaddoxxx" target="_blank">Cade Maddox</a></li>
						      <li><a href="https://twitter.com/colbyjansenxxx" target="_blank">Colby Jansen</a></li>
                              <li><a href="https://twitter.com/DaleSavagexxx" target="_blank">Dale Savage</a></li>
						      <li><a href="https://twitter.com/dolfdietrich" target="_blank">Dolf Dietrich</a></li>
						      <li><a href="https://twitter.com/sagatfrancois" target="_blank">François Sagat</a></li>
						      <li><a href="https://twitter.com/wolflegrand?lang=en" target="_blank">Legrand Wolf</a></li>
						      <li><a href="https://twitter.com/ManuelSkyexxx" target="_blank">Manuel Skye</a></li>  
						      <li><a href="" target="_blank">Master Felix</a></li>
						      <li><a href="https://twitter.com/maxarionxxx" target="_blank">Max Arion</a></li>
						      <li><a href="https://twitter.com/maxkonnorxxx" target="_blank">Max Konnor</a></li>
						      <li><a href="https://twitter.com/myleslandonxxx" target="_blank">Myles Landon</a></li>
						      <li><a href="https://twitter.com/rickylark1n" target="_blank">Ricky Larkin</a></li>
						      <li><a href="https://twitter.com/roccosteelenyc" target="_blank">Rocco Steele</a></li>   
						      <li><a href="https://www.lucasentertainment.com/models/view/sean-duran" target="_blank">Sean Duran</a></li>
						      <li><a href="https://twitter.com/teddytorresxxx" target="_blank">Teddy Torres</a></li>
						      <li><a href="https://twitter.com/djtristanjaxx" target="_blank">Tristan Jaxx</a></li>
						      <li><a href="https://twitter.com/willangellxxx" target="_blank">Will Angel</a></li>  
						      <li><a href="https://twitter.com/theonlywoodyfox" target="_blank">Woody Fox</a></li>
						    </ul>
						  </div>
						</div>
                    
                    
                    
                        <div class="row">
						  <div class="col-md-6">
						    <h4>Best Twink</h4>
						    <ul>
                              <li><a href="https://twitter.com/ndress666" target="_blank">Aiden Garcia</a></li>
                              <li><a href="" target="_blank">Austin Lock</a></li>
                              <li><a href="https://twitter.com/benmastersxxx" target="_blank">Ben Masters</a></li>
                              <li><a href="https://twitter.com/peter_pounder" target="_blank">Charlie Fox</a></li>
                              <li><a href="https://twitter.com/coleclairelgbt" target="_blank">Cole Claire</a></li>
                              <li><a href="https://twitter.com/collinadamsxxx" target="_blank">Collin Adams</a></li>
                              <li><a href="https://twitter.com/thedylanhayes" target="_blank">Dylan Hayes</a></li>
                              <li><a href="https://twitter.com/SirEvanParker" target="_blank">Evan Parker</a></li>
                              <li><a href="https://www.helixstudios.net/model/2169/ezra-michaels.html" target="_blank">Ezra Michaels</a></li>
                              <li><a href="https://twitter.com/graysonlangexxx" target="_blank">Grayson Lange</a></li>
                              <li><a href="https://twitter.com/joeymillsxxx" target="_blank">Joey Mills</a></li>
                              <li><a href="https://twitter.com/kurtnilesxxx" target="_blank">Kurt Niles</a></li>  
                              <li><a href="https://twitter.com/kylerossxxx" target="_blank">Kyle Ross</a></li> 
                              <li><a href="https://twitter.com/LoganCrossXXX" target="_blank">Logan Cross</a></li>
                              <li><a href="https://twitter.com/ryanbaileyxxx" target="_blank">Ryan Bailey</a></li>
                              <li><a href="https://twitter.com/TheOnlySeanFord/" target="_blank">Sean Ford</a></li>
                              <li><a href="https://twitter.com/TravisStevensX" target="_blank">Travis Stevens</a></li>
                              <li><a href="https://twitter.com/trevorharrisxxx/" target="_blank">Trevor Harris</a></li>
                              <li><a href="https://twitter.com/TroyRyanXXX" target="_blank">Troy Ryan</a></li>
                              <li><a href="https://twitter.com/zachcovington25" target="_blank">Zach Covington</a></li>
						    </ul>
						  </div>
						    
                        <div class="col-md-6">
						    <h4>Cam Newcomer Of The Year</h4>
						    <ul> 
                                <li><a href="https://twitter.com/kasey_alvin?lang=en" target="_blank">Alvin Kasey</a></li>
                                <li><a href="https://twitter.com/croyklein1?lang=en" target="_blank">Croy Klein</a></li>
                                <li><a href="https://twitter.com/henritheroux?lang=en" target="_blank">Henri Theroux</a></li>
                                <li><a href="https://www.men.com/modelprofile/22745/jesse-prather" target="_blank">Jesse Prather</a></li>
                                <li><a href="#" target="_blank">Keith Atkins</a></li>
                                <li><a href="#" target="_blank">Liam Jacobs</a></li>
                                <li><a href="#" target="_blank">MaxZeyh</a></li>
                                <li><a href="#" target="_blank">Rod Pierce</a></li>
                                <li><a href="https://twitter.com/rrider420?lang=en" target="_blank">RoughRider420</a></li>
                                <li><a href="https://twitter.com/svenbasquiat?lang=en" target="_blank">Sven Basquiat</a></li>
                                <li><a href="https://twitter.com/tannorreed?lang=en" target="_blank">Tannor Reed</a></li>
						    </ul>
						  </div>
						</div>
                    
                    

                    
						<p style="text-align: center;"><a target="_blank" class="content-vote-btn" href="https://t.grtyo.com/aff_c?offer_id=4436&aff_id=4339&url_id=13148">Vote Now &gt;&gt;</a></p>

            	</div>
            </div>
            <div class="col-md-2 right-banner">
                <a target="_blank" href="http://mrman.com/"><img class="img-responsive" src="<?php bloginfo('template_url') ?>/assets/images/awards/gay/man_wallpaper_right_light.png"></a>
            </div>
        </div>
    </div>
    <div class="container-fluid award-footer no-padding">
    	<img src="<?php bloginfo('template_url') ?>/assets/images/awards/gay/footer-logo.png" alt="" />
    </div>
</div>

<!-- gay tab end -->

<?php } else { ?>
<style>
	@font-face {
	    font-family: GothamLight;
	    src: url(<?php bloginfo('template_url') ?>/assets/fonts/GothamLight.otf);
	}
	@font-face {
	    font-family: GothamMedium;
	    src: url(<?php bloginfo('template_url') ?>/assets/fonts/GothamMedium.ttf);
	}
	@font-face {
	    font-family: GothamBold;
	    src: url(<?php bloginfo('template_url') ?>/assets/fonts/GothamBold.ttf);
	}
	.no-padding {
		padding-left: 0;
		padding-right: 0;
	}
	.award-main-container {
		background: #dedede;
		font-family: 'GothamLight', sans-serif;
		margin-top: -25px;
	}
	.award-main-container a:hover {
		text-decoration: none;
	}
	.award-header {
		background-color: #242532;
		color: #fff;
	}

	.award-main-content p {
		padding-bottom: 0;
		margin-bottom: 0;
	}

	.award-main-content {
		background: #fff;
		text-align: center;
        padding: 40px;
		padding-bottom: 150px;

	}
	.award-main-content h1 {
		font-size: 24px;
		text-transform: uppercase;	
		letter-spacing: 1px;
		margin-bottom: 50px;
	}
	.award-main-content img {
		text-align: center;
		margin:20px;
	}
	.award-main-content a.content-vote-btn {
		background: #d33777;
		padding:18px 80px;
		text-align: center;
		color: #fff;
		text-transform: uppercase;
		font-size: 30px;
		border-radius: 50px;
		margin-top: 50px;
		display: inline-block;
		font-family: 'GothamBold', sans-serif;
		letter-spacing: 2px;
	}
	.award-banner img {
		object-fit: cover;
		width: 100%;
		height: 100%;
	}


	.menu-conteiner {
		background-color: #292b36;
	    position: relative;
	    z-index: 1;
	    width: 100%;
	    height: 80px;
	}
	.award-about {
		position: relative;
		background-image: url(<?php bloginfo('template_url') ?>/assets/images/awards/straight/bang-background.png);
		background-repeat: no-repeat;
		background-size: 100% 100%;
		width: 100%;
		height: 357px;
		padding: 60px;
	}
	.award-about h3 {
		color: #d33777;
		font-size: 24px;
		text-transform: uppercase;	
		letter-spacing: 2px;
		margin-bottom: 20px;
	}
	.award-about p {
		color: #fff;
		font-size: 14px;
		line-height: 32px;
		letter-spacing: 1px;
	}
	.award-about p a{
		color: #d33777;
	}

	.award-presents {
		position: relative;
		padding:40px;
		background-color: #fff;
		z-index: 99;
	}
	.award-presents span {
		letter-spacing: 2px;
		text-transform: uppercase;
		margin-right: 20px;
		font-size: 20px;
	}
	.award-presents .box {
		position: absolute;
		right: 50px;
		top: -320px;
		z-index: -1;
	}

	.award-footer {
		background-color: #202026;
		padding:80px 0;
		text-align: center;
	}

	
	.award-nav ul {
		margin-bottom: 0;
		padding-left: 0;
	}

	.award-nav ul li {
		list-style: none;
		display: inline-block;
		line-height: 80px;
	}


	.award-nav ul li a {
		color: #fff;
		padding:10px 20px;
		font-size: 14px;
		text-transform: uppercase;
		letter-spacing: 2px;
		position: relative;
		cursor: pointer;
	}

@media (max-width: 1350px) {
	.award-nav ul li a {
		padding:10px;
	}
}
@media (max-width: 1110px) {
	.award-nav ul li a {
		padding:10px 5px;
	}

	.award-nav ul li {
		line-height: 82px;
	}
}

	.award-nav ul li a:hover {
		text-decoration: none;
	}

	.desktop .award-nav ul li.active a:before, .desktop .award-nav ul li a:hover:before {
		border-top: 1px solid #d33777;
		content: "";
		width: 50%;
		display: block;
		margin-left: auto;
		margin-right: auto;
		left: 0;
		right: 0;
		top: 0;
		position: absolute;
	}

	.desktop .award-nav ul li.active a:after, .desktop .award-nav ul li a:hover:after {
		border-top: 1px solid #d33777;
		content: "";
		width: 50%;
		display: block;
		margin-left: auto;
		margin-right: auto;
		left: 0;
		right: 0;
		bottom: 0;
		position: absolute;
	}

	.mobile .award-nav ul li.active a:before {
		border-top: 1px solid #d33777;
		content: "";
		width: 50%;
		display: block;
		margin-left: auto;
		margin-right: auto;
		left: 0;
		right: 0;
		top: 0;
		position: absolute;
	}

	.mobile .award-nav ul li.active a:after{
		border-top: 1px solid #d33777;
		content: "";
		width: 50%;
		display: block;
		margin-left: auto;
		margin-right: auto;
		left: 0;
		right: 0;
		bottom: 0;
		position: absolute;
	}
	.desktop {
		display: inline-block;
	}
	.mobile {
		display: none;
	}

	.nominees-content {
		padding:40px;
		background: #fff;
	}
	.nominees-content h3 {
		text-transform: uppercase;
		color: #d33777;
		font-size: 24px;
		letter-spacing: 2px;
	}
	.nominees-content h4 {
		text-transform: uppercase;
		color: #000;
		font-size: 14px;
		letter-spacing: 2px;
		font-weight: 700;
		margin-top: 20px;
		font-family: 'GothamMedium', sans-serif;
	}
	.nominees-content ul {
		padding: 0;
	}
	.nominees-content ul li{
		list-style: none;
		line-height: 130%;
	}
	.nominees-content ul li a{
		color: #000;
		font-weight: 600;
		font-size: 13px;
		letter-spacing: 1px;
		cursor: pointer;
	}
	.nominees-content ul li a:hover{
		color: #d33777;
	}

@media (max-width: 1300px) {
     .award-about {
     	height: auto;
     	padding:60px 20px;
     }
}

@media (max-width: 992px) {
    .left-banner {
      display: none; } 
    .right-banner {
      display: none; } 
     .award-presents .box {
     	display: none;
     }
     .award-logo {
     	text-align: center;
     }
	.award-nav ul li a {
		padding:10px 20px;
	}
	.award-banner .banner-content h1 {
	    font-size: 40px;	
	    margin: 0 2%;
	}
     .award-banner .banner-content {
     	margin-left: 0;
     	margin-right: 0;
     	padding-bottom: 10%
     }
     .award-banner {
     	height: auto;
     }
     .award-about {
     	height: auto;
     	padding:60px 20px;
     }
     .award-presents {
	    text-align: center;
	}
	.desktop {
		display: none;
	}
	.mobile {
		display: inline-block;
	}

	.desktop {
		display: none;
	}
	.mobile {
		display: inline-block;
		width: 100%;
	}
 }
 .no-gutters>.col, .no-gutters>[class*=col-] {
    padding-right: 0;
    padding-left: 0;
}


.content-vote-btn {
	background: #d33777;
    padding: 18px 80px;
    text-align: center;
    color: #fff;
    text-transform: uppercase;
    font-size: 30px;
    border-radius: 50px;
    margin-top: 50px;
    font-family: 'GothamBold', sans-serif;
    display: inline-block;
    letter-spacing: 2px;
    margin: 50px auto 0;
}

/*Mobile*/
@media (max-width: 576px) {
    .content-vote-btn {
    	padding: 18px 34px;
		font-size: 20px;
	}
	.award-footer img {
		width: 80%;
	}
	.award-logo {
		text-align: center;
		padding: 0 2%;
	}
	.award-main-content img {
		margin: 20px 0 !important;
	}
	.award-nav ul li a {
	    padding: 10px 16px;
	}
	.content-vote-btn {
		padding: 18px 34px;
		font-size: 20px;
	}
}

</style>

<!-- straight tab start -->
<div class="award-main-container">
    <div class="container-fluid nominees no-padding">
        <div class="row no-gutters">
            <div class="col-md-2 left-banner">
                <a target="_blank" href="http://bang.com/"><img class="img-responsive" src="<?php bloginfo('template_url') ?>/assets/images/awards/straight/bang_wallpaper_left_light.png"></a>
            </div>
            <div class="col-md-8">
            	<div class="award-banner">
            		<a target="_blank" href="https://t.grtyo.com/aff_c?offer_id=4436&aff_id=4339&url_id=13149"><img src="<?php bloginfo('template_url') ?>/assets/images/awards/straight/fb_awards_main_image.png" alt=""/></a>
            	</div>
            	<div class="menu-conteiner">
	            	<div class="col-lg-12  col-md-12 desktop">
			    		<div class="award-nav text-lg-center text-center">
			    			<ul>
			    				<li><a href="/awards" target="_blank">About</a></li>
			    				<li class="active"><a href="/awards-nominees/">Nominees</a></li>
			    				<li><a target="_blank" href="https://t.grtyo.com/aff_c?offer_id=4436&aff_id=4339&url_id=13149">Vote</a></li>
			    			</ul>
			    		</div>
			    	</div>

					<div class="col-lg-12  col-md-12 mobile">
			    		<div class="award-nav text-lg-center text-center">
			    			<ul>
			    				<li><a href="/awards" target="_blank">About</a></li>
			    				<li class="active"><a href="awards-nominees">Nominees</a></li>
			    				<li><a target="_blank" href="https://t.grtyo.com/aff_c?offer_id=4436&aff_id=4339&url_id=13149">Vote</a></li>
			    			</ul>
			    		</div>
			    	</div>
			    </div>
            	<div class="nominees-content">
            		<h3>The nominees</h3>
					<div class="row">
					  <div class="col-md-6">
					    <h4>Best Paysite</h4>
					    <ul>
					      <li><a href="http://www.adamandevetv.com/" target="_blank">Adam & Eve TV</a></li>
					      <li><a href="https://www.adulttime.com/" target="_blank">AdultTime</a></li>
					      <li><a href="https://analized.com/" target="_blank">Analized</a></li>
					      <li><a href="https://www.bang.com/" target="_blank">Bang</a></li>
					      <li><a href="http://www.brazzers.com/" target="_blank">Brazzers</a></li>
					      <li><a href="https://www.burningangel.com/" target="_blank">Burning Angel</a></li>
					      <li><a href="https://www.ersties.com/" target="_blank">Ersties</a></li>
					      <li><a href="https://www.evilangel.com/" target="_blank">Evil Angel</a></li>
					      <li><a href="https://ww1.girlsway.com/" target="_blank">Girlsway</a></li>
					      <li><a href="https://www.hardx.com/" target="_blank">HardX.com</a></li>
					      <li><a href="http://www.julesjordanvideo.com/" target="_blank">Jules Jordan Video</a></li>
					      <li><a href="https://www.kink.com/" target="_blank">Kink</a></li>
					      <li><a href="https://lifeselector.com/" target="_blank">Lifeselector</a></li>
					      <li><a href="https://www.loveherfeet.com" target="_blank">LoveHerFeet</a></li>
					      <li><a href="https://lustery.com/" target="_blank">Lustery</a></li>
					      <li><a href="https://www.metart.com/" target="_blank">MetArt</a></li>
					      <li><a href="http://www.newsensations.com/" target="_blank">New Sensations</a></li>
					      <li><a href="http://nubilefilms.com/" target="_blank">NubileFilms</a></li>
					      <li><a href="https://www.playboyplus.com/" target="_blank">Playboy Plus</a></li>
					      <li><a href="https://www.pornstarplatinum.com/" target="_blank">Pornstar Platinum</a></li>
					      <li><a href="http://www.puba.com/" target="_blank">Puba</a></li>
					      <li><a href="https://www.sexart.com/" target="_blank">Sexart</a></li>
					      <li><a href="http://www.teamskeet.com/" target="_blank">TeamSkeet</a></li>
					      <li><a href="https://www.tushy.com/" target="_blank">Tushy</a></li>
					      <li><a href="https://www.vixen.com/" target="_blank">Vixen</a></li>
					      <li><a href="https://www.yanks.com/" target="_blank">Yanks</a></li>
					    </ul>
					  </div>

					   <div class="col-md-6">
					    <h4>Best Cam Site</h4>
					    <ul>
					      <li><a href="https://www.bongacams.com/" target="_blank">Bonga Cams</a></li>
					      <li><a href="https://www.cam4.com/" target="_blank">CAM4</a></li>
					      <li><a href="" target="_blank">Cams.com</a></li>
					      <li><a href="http://camsoda.com/" target="_blank">CamSoda</a></li>
					      <li><a href="http://www.camster.com/" target="_blank">Camster</a></li>
					      <li><a href="http://www.chaturbate.com/" target="_blank">Chaturbate</a></li>
					      <li><a href="https://www.flirt4free.com/" target="_blank">Flirt4Free</a></li>
					      <li><a href="https://imlive.com/" target="_blank">ImLive</a></li>
					      <li><a href="https://www.livejasmin.com/" target="_blank">Jasmin</a></li>
					      <li><a href="https://www.myfreecams.com/" target="_blank">MyFreeCams</a></li>
					       <li><a href="http://skyprivate.com/" target="_blank">SkyPrivate</a></li>
					      <li><a href="http://www.streamate.com/" target="_blank">Streamate</a></li>
					      <li><a href="https://stripchat.com/" target="_blank">Stripchat</a></li>
					      <li><a href="https://www.xcams.com/" target="_blank">Xcams</a></li>
					    </ul>
					  </div>
					</div>


					<div class="row">
					    <div class="col-md-6">
					    <h4>Best New Site</h4>
					    <ul>
					    	<li><a href="https://www.acesofporn.com" target="_blank">Aces Of Porn</a></li>
					    	<li><a href="https://alterotic.com/" target="_blank">Alterotic</a></li>
					    	<li><a href="https://baberotica.com" target="_blank">Baberotica</a></li>
					    	<li><a href="https://bigjohnnyxxx.com/" target="_blank">Big Johnny XXX</a></li>
					    	<li><a href="https://deeplush.com/" target="_blank">Deep Lush</a></li>
					    	<li><a href="https://www.deeper.com/" target="_blank">Deeper</a></li>
					    	<li><a href="https://www.kink.com/channel/familiestied" target="_blank">Families Tied</a></li>
					    	<li><a href="https://filthypov.com/" target="_blank">Filthy POV</a></li>
					    	<li><a href="https://girlcum.video/" target="_blank">Girl Cum</a></li>
					    	<li><a href="https://kinkvr.com/" target="_blank">Kink VR</a></li>
					    	<li><a href="https://www.lethalhardcorevr.com/" target="_blank">Lethal Hardcore VR</a></li>
					    	<li><a href="https://mrluckypov.com/" target="_blank">Mr Lucky POV</a></li>
					    	<li><a href="https://www.mylf.com/" target="_blank">MYLF</a></li>
					    	<li><a href="https://www.mylfdom.com/" target="_blank">Mylfdom</a></li>
					    	<li><a href="https://www.shapeofbeauty.com/en" target="_blank">Shape of Beauty</a></li>
					    	<li><a href="https://sugarbabes.tv/" target="_blank">SugarBabes.tv</a></li>
					    	<li><a href="https://www.thickumz.com/" target="_blank">Thickumz</a></li>
					    	<li><a href="https://www.tushyraw.com/" target="_blank">Tushy Raw</a></li>
					    	<li><a href="https://vitalyuncensored.com/" target="_blank">Vitaly Uncensored</a></li>
					    	<li><a href="https://yourmomdoesporn.com/" target="_blank">Your Mom Does Porn</a></li>
					    </ul>
					  </div>
					    <div class="col-md-6">
					    <h4>Cam Newcomer Of The Year</h4>
					    <ul>
					    	<li><a href="https://twitter.com/adrianabelle" target="_blank">AdaniaBelle</a></li>
					    	<li><a href="https://twitter.com/adorableharlot" target="_blank">AdorableHarlot</a></li>
					    	<li><a href="https://twitter.com/officialalaska" target="_blank">Alaska Rose</a></li>
					    	<li><a href="https://twitter.com/arikasilk" target="_blank">ArikaSilk</a></li>
					    	<li><a href="#" target="_blank">AshleyMoretti</a></li>
					    	<li><a href="https://twitter.com/daddy_daycare_" target="_blank">Belle Creed</a></li>
					    	<li><a href="#" target="_blank">Holly Jayne</a></li>
					    	<li><a href="https://twitter.com/jessieryah" target="_blank">Jessie Ryah</a></li>
					    	<li><a href="https://twitter.com/kittybenks" target="_blank">Kitty Benks</a></li>
					    	<li><a href="https://twitter.com/lexilunaxoxo" target="_blank">Lexi Luna</a></li>
					    	<li><a href="https://twitter.com/melissaxmills" target="_blank">Melissa Mills</a></li>
					    	<li><a href="https://twitter.com/charonixxcam" target="_blank">Melrose Strip</a></li>
					    	<li><a href="#" target="_blank">Nora Grace</a></li>
					    	<li><a href="https://twitter.com/sensualcherrin1" target="_blank">Sensual Cherrin</a></li>
					    	<li><a href="#" target="_blank">TheEmmaBelle</a></li>
					    </ul>
					  </div>
					   
					</div>


					<div class="row">
					 
					 <div class="col-md-6">
					    <h4>Female Performer Of The Year</h4>
					    <ul>
					      <li><a href="https://twitter.com/Abella_Danger" target="_blank">Abella Danger</a></li>
					      <li><a href="https://twitter.com/AnaFoxxx" target="_blank">Ana Foxxx</a></li>
					      <li><a href="https://twitter.com/ANGELAWHITE" target="_blank">Angela White</a></li>
					      <li><a href="https://twitter.com/caseycalvertxxx" target="_blank">Casey Calvert</a></li>
					      <li><a href="https://twitter.com/GothCharlotte" target="_blank">Charlotte Sartre</a></li>
					      <li><a href="https://twitter.com/CherieDeVille" target="_blank">Cherie DeVille</a></li>
					      <li><a href="https://twitter.com/ElsaJeanxxx" target="_blank">Elsa Jean</a></li>
					      <li><a href="https://twitter.com/GValentinaxxx" target="_blank">Gina Valentina</a></li>
					      <li><a href="https://twitter.com/onlyjennafoxx" target="_blank">Jenna Foxx</a></li>
					      <li><a href="https://twitter.com/karlaxxxlane" target="_blank">Karla Lane</a></li>
					      <li><a href="https://twitter.com/kj_fetishmodel" target="_blank">Katrina Jade</a></li>
					      <li><a href="https://twitter.com/thekiranoir" target="_blank">Kira Noir</a></li>
					      <li><a href="https://twitter.com/KissaSins" target="_blank">Kissa Sins</a></li>
					      <li><a href="https://twitter.com/krisscottxxx" target="_blank">Kristen Scott</a></li>
					      <li><a href="https://twitter.com/lenaisapeach" target="_blank">Lena Paul</a></li>
					      <li><a href="https://twitter.com/NinaElleXoXo" target="_blank">Nina Elle</a></li>
					      <li><a href="https://twitter.com/rileyreidx3" target="_blank">Riley Reid</a></li>
					      <li><a href="https://twitter.com/BbwSofiaRose" target="_blank">Sofia Rose</a></li>
					      <li><a href="https://twitter.com/ValeNappi" target="_blank">Valentina Nappi</a></li>
					      <li><a href="https://twitter.com/whitneywrightx" target="_blank">Whitney Wright</a></li>
					    </ul>
					  </div>
					  <div class="col-md-6">
					    <h4>Male Performer Of The Year</h4>
					    <ul>
					      	<li><a href="https://twitter.com/RealDera" target="_blank">Charles Dera</a></li>
					      	<li><a href="https://twitter.com/DreddXXX" target="_blank">Dredd</a></li>
					      	<li><a href="https://twitter.com/IsiahMaxwell" target="_blank">Isiah Maxwell</a></li>
					      	<li><a href="https://twitter.com/jamesdeen" target="_blank">James Deen</a></li>
					      	<li><a href="https://twitter.com/iamjasonluv" target="_blank">Jason Luv</a></li>
					      	<li><a href="https://twitter.com/lancehartfetish" target="_blank">Lance Hart</a></li>
					      	<li><a href="https://twitter.com/LucasxFrost" target="_blank">Lucas Frost</a></li>
					      	<li><a href="https://twitter.com/MandingoXXXstar" target="_blank">Mandingo</a></li>
					      	<li><a href="https://twitter.com/manuelferrara" target="_blank">Manuel Ferrara</a></li>
					      	<li><a href="https://twitter.com/MarkusDupree" target="_blank">Markus Dupree</a></li>
					      	<li><a href="https://twitter.com/ItsMichaelVegas" target="_blank">Michael Vegas</a></li>
					      	<li><a href="https://twitter.com/MickBluexxx" target="_blank">Mick Blue</a></li>
					       	<li><a href="https://twitter.com/PrinceYahshua" target="_blank">Prince Yahshua</a></li>
					       	<li><a href="https://twitter.com/RamonxxxnomaR" target="_blank">Ramon Nomar</a></li>
					       	<li><a href="https://twitter.com/yearofthericky" target="_blank">Ricky Johnson</a></li>
					       	<li><a href="https://twitter.com/ryandriller" target="_blank">Ryan Driller</a></li>
					       	<li><a href="https://twitter.com/sethgamblexxx" target="_blank">Seth Gamble</a></li>
					       	<li><a href="https://twitter.com/thesmallhands_" target="_blank">Small Hands</a></li>
					       	<li><a href="https://twitter.com/TommyPistol" target="_blank">Tommy Pistol</a></li>
					       	<li><a href="https://twitter.com/xcorvus777" target="_blank">Xander Corvus</a></li>
					    </ul>
					  </div>
					</div>

                    <div class="row">
                      <div class="col-md-6">
                        <h4>Trans Performer Of The Year</h4>
                        <ul>
                        	<li><a href="https://twitter.com/aspenbrooks97" target="_blank">Aspen Brooks</a></li>
                          	<li><a href="https://twitter.com/AUBREYKATEXXX" target="_blank">Aubrey Kate</a></li>
                          	<li><a href="https://twitter.com/Caseykissesxoxo" target="_blank">Casey Kisses</a></li>
                          	<li><a href="https://twitter.com/CCSantini" target="_blank">Chanel Santini</a></li>
                          	<li><a href="https://twitter.com/xxxchelseamarie" target="_blank">Chelsea Marie</a></li>
                          	<li><a href="https://twitter.com/dominopresley"  target="_blank">Domino Presley</a></li>
                          	<li><a href="https://twitter.com/_jennacreed_" target="_blank">Jenna Creed</a></li>
                          	<li><a href="https://twitter.com/tsjessy" target="_blank">Jesse Dubai</a></li>
                          	<li><a href="https://twitter.com/KayleighCoxx84" target="_blank">Kayleigh Coxx</a></li>
                          	<li><a href="https://twitter.com/khloekayxxx" target="_blank">Khloe Kay</a></li>
                          	<li><a href="https://twitter.com/korradelrio" target="_blank">Korra Del Rio</a></li>
                          	<li><a href="https://twitter.com/LENAKELLYXXX" target="_blank">Lena Kelly</a></li>
                          	<li><a href="https://twitter.com/LiannaLawson" target="_blank">Lianna Lawson</a></li>
                          	<li><a href="https://twitter.com/MiaMaffiaDotXXX" target="_blank">Mia Maffia</a></li>
                          	<li><a href="https://twitter.com/theNatalieMars" target="_blank">Natalie Mars</a></li>
                          	<li><a href="https://twitter.com/NATASSIADREAMSX" target="_blank">Natassia Dreams</a></li>
                          	<li><a href="https://twitter.com/rydermonroe" target="_blank">Ryder Monroe</a></li>
                          	<li><a href="https://twitter.com/ShiriAllwoodXXX" target="_blank">Shiri Allwood</a></li>
                          	<li><a href="https://twitter.com/Foxxy702" target="_blank">TS Foxxy</a></li>
                          	<li><a href="https://twitter.com/VenusLux" target="_blank">Venus Lux</a></li>
                        </ul>
                      </div>

					  <div class="col-md-6">
					    <h4>Director Of The Year</h4>
					    <ul>
					    	<li><a href="#" target="_blank">Aiden Riley</a></li>
					    	<li><a href="#" target="_blank">Aiden Starr</a></li>
					      	<li><a href="#" target="_blank">Axel Braun</a></li>
					      	<li><a href="#" target="_blank">Billy Visual</a></li>
					      	<li><a href="#" target="_blank">Bree Mills</a></li>
					      	<li><a href="#" target="_blank">Chris Streams</a></li>
					      	<li><a href="#" target="_blank">Dana Vespoli</a></li>
					      	<li><a href="#" target="_blank">Eddie Powell</a></li>
					      	<li><a href="#" target="_blank">Greg Lansky</a></li>
					      	<li><a href="#" target="_blank">Jacky St. James</a></li>
					      	<li><a href="#" target="_blank">James Avalon</a></li>
					      	<li><a href="#" target="_blank">Joanna Angel</a></li>
					      	<li><a href="#" target="_blank">Jonni Darkko</a></li>
					      	<li><a href="https://julesjordan.com/" target="_blank">Jules Jordan</a></li>
					      	<li><a href="#" target="_blank">Kayden Kross</a></li>
					      	<li><a href="#" target="_blank">Lee Roy Myers</a></li>
					      	<li><a href="#" target="_blank">Mason</a></li>
					      	<li><a href="#" target="_blank">Mike Quasar</a></li>
					      	<li><a href="#" target="_blank">Nikki Hearts</a></li>
					      	<li><a href="#" target="_blank">Ryan Madison</a></li>
					    </ul>
					  </div>
					</div>


					<div class="row">
                     <div class="col-md-6">
					    <h4>Movie Of The Year</h4>
					    <ul>
					    	<li><a href="#" target="_blank">"Cheater Cheater" - Trenchcoat X</a></li>
					    	<li><a href="https://www.tushy.com/abigail" target="_blank">Abigail by Tushy</a></li>
					    	<li><a href="#" target="_blank">Blacked’s Interracial Icon 10</a></li>
					    	<li><a href="https://www.wicked.com/en/movie/Deadpool-XXX---An-Axel-Braun-Parody/77345" target="_blank">Deadpool XXX by Wicked</a></li>
					    	<li><a href="https://www.evilangel.com/en/movie/I-Am-Angela/70357" target="_blank">I Am Angela by Evil Angel</a></li>
					    	<li><a href="#" target="_blank">Icons by Vixen</a></li>
					    	<li><a href="https://www.newsensations.com/tour_ns/dvds/milf-stories---still-sexy.html" target="_blank">MILF Stories: Still Sexy, New Sensations</a></li>
					    	<li><a href="https://www.girlfriendsfilms.net/2548446/prinzzess-a-decade-of-desire-porn-videos.html" target="_blank">Prinzzess: A Decade Of Desire by Girlfriends</a></li>
					    	<li><a href="https://www.elegantangel.com/shop/2547503/squirtwoman-wasteland-porn-videos.html" target="_blank">Squirtwoman: Wasteland by Elegant Angel</a></li>
					    	<li><a href="https://www.julesjordan.com/trial/scenes/Kissa-Sins-Big-Butt-Facial_vids.html" target="_blank">The Corruption Of Kissa Sins, Jules Jordan</a></li>
					    	<li><a href="https://www.puretaboo.com/en/video/The-Weight-of-Infidelity/131413" target="_blank">The Weight of Infidelity - Pure Taboo</a></li>
					    	<li><a href="https://www.wicked.com/en/movie/Axel-Brauns-Girlfest/77347" target="_blank">Wicked Pictures’ "Axel Braun’s Girlfest"</a></li>
					    </ul>
					  </div>
					  <div class="col-md-6">
					    <h4>Best New Starlet</h4>
					    <ul>
					    	<li><a href="https://twitter.com/AriaLeexxx" target="_blank">Aria Lee</a></li>
					    	<li><a href="https://twitter.com/autumnfallsxoxo" target="_blank">Autumn Falls</a></li>
					    	<li><a href="https://twitter.com/queendannixxx" target="_blank">Danni Rivers</a></li>
					    	<li><a href="https://twitter.com/emilywillisxoxo" target="_blank">Emily Willis</a></li>
					    	<li><a href="https://twitter.com/estarletto" target="_blank">Emma Starletto</a></li>
					    	<li><a href="https://twitter.com/GiaDerza" target="_blank">Gia Derza</a></li>
					    	<li><a href="https://twitter.com/Gianna_DiorXXX" target="_blank">Gianna Dior</a></li>
							<li><a href="https://twitter.com/hannahhaysxxx" target="_blank">Hannah Hays</a></li>
							<li><a href="https://twitter.com/alittlewolfe" target="_blank">Ivy Wolfe</a></li>
							<li><a href="https://twitter.com/izzylush_" target="_blank">Izzy Lush</a></li>
							<li><a href="https://twitter.com/janewildexxx" target="_blank">Jane Wilde</a></li>
							<li><a href="https://twitter.com/kandie_monaee" target="_blank">Kandie Monaee</a></li>
							<li><a href="https://twitter.com/KeiraCroft" target="_blank">Keira Coft</a></li>
							<li><a href="https://twitter.com/KendraSpade" target="_blank">Kendra Spade</a></li>
							<li><a href="https://twitter.com/kitmercerxxx" target="_blank">Kit Mercer</a></li>
							<li><a href="https://twitter.com/LexiLore" target="_blank">Lexi Lore</a></li>
							<li><a href="https://twitter.com/xomackenziemoss" target="_blank">Mackenzie Moss</a></li>
							<li><a href="https://twitter.com/MischevousKitty" target="_blank">Mischievous Kitty</a></li>
							<li><a href="https://twitter.com/thesavannahbond" target="_blank">Savannah Bond</a></li>
							<li><a href="https://twitter.com/ZoeBloomxxx" target="_blank">Zoe Bloom</a></li>
					    </ul>
					  </div>
					  
					</div>

					<div class="row">
					  <div class="col-md-6">
					    <h4>Cam Model Of The Year</h4>
					    <ul>
					    	<li><a href="#" target="_blank">Amber Rush</a></li>
					    	<li><a href="https://www.instagram.com/bootygangtv/?hl=en" target="_blank">Brittany Benz</a></li>
					    	<li><a href="#" target="_blank">Bunny Dela Cruz</a></li>
					    	<li><a href="https://twitter.com/chelliedd" target="_blank">ChellieDD </a></li>
					    	<li><a href="https://twitter.com/eliselaurenne" target="_blank">Elise Laurenne</a></li>
					    	<li><a href="https://twitter.com/ellasilver__" target="_blank">Ella Silver</a></li>
					    	<li><a href="https://www.instagram.com/emilybloomofficial/" target="_blank">Emily Bloom</a></li>
					    	<li><a href="#" target="_blank">Eva Devine</a></li>
					    	<li><a href="https://twitter.com/kaisyprince" target="_blank">Kaisy Prince</a></li>
					    	<li><a href="https://www.instagram.com/kendrasummerx/" target="_blank">Kendra Summer</a></li>
					    	<li><a href="https://twitter.com/lalaiveyxxx" target="_blank">Lala Ivey</a></li>
					    	<li><a href="https://twitter.com/lenaspanks" target="_blank">LenaSpanks</a></li>
							<li><a href="https://twitter.com/banksie231" target="_blank">Lindsey Banks </a></li>
							<li><a href="https://twitter.com/maryismoody" target="_blank">Mary Moody</a></li>
							<li><a href="https://twitter.com/callmemissmolly" target="_blank">Molly Stewart</a></li>
							<li><a href="https://twitter.com/nikki_sequoia" target="_blank">Nikki Sequoia</a></li>
							<li><a href="https://twitter.com/lustnirvana" target="_blank">Nirvana Lust</a></li>
							<li><a href="https://twitter.com/lustsophie" target="_blank">Sophie Lust</a></li>
							<li><a href="https://twitter.com/valeriekayxxx" target="_blank">Valerie Savalos</a></li>
							<li><a href="https://twitter.com/zoey_taylorxxx" target="_blank">Zoey Taylor</a></li>
					    </ul>
					  </div>
					      <div class="col-md-6">
					    <h4>Best Social Media Personality</h4>
					    <ul>
					      <li><a href="https://twitter.com/Abella_Danger" target="_blank">Abella Danger</a></li>
					      <li><a href="https://twitter.com/angelaWHITE" target="_blank">Angela White</a></li>
					      <li><a href="https://twitter.com/AUBREYKATEXXX" target="_blank">Aubrey Kate</a></li>
					      <li><a href="https://twitter.com/brennasparksxxx" target="_blank">Brenna Sparks</a></li>
					      <li><a href="https://twitter.com/GothCharlotte" target="_blank">Charlotte Sartre</a></li>
					      <li><a href="https://twitter.com/CherieDeVille" target="_blank">Cherie DeVille</a></li>
						  <li><a href="https://twitter.com/ElsaJeanxxx" target="_blank">Elsa Jean</a></li>
						  <li><a href="https://twitter.com/Gianna_DiorXXX" target="_blank">Gianna Dior</a></li>
						  <li><a href="https://twitter.com/kj_fetishmodel" target="_blank">Katrina Jade</a></li>
						  <li><a href="https://twitter.com/KSLibraryGirl" target="_blank">Kendra Sunderland</a></li>
						  <li><a href="https://twitter.com/thekiranoir" target="_blank">Kira Noir</a></li>
					      <li><a href="https://twitter.com/lenaisapeach" target="_blank">Lena Paul</a></li>
					      <li><a href="https://twitter.com/MissyXMartinez" target="_blank">Missy Martinez</a></li>
					      <li><a href="https://twitter.com/NikkiDelano" target="_blank">Nikki Delano</a></li>
					      <li><a href="https://twitter.com/rileyreidx3" target="_blank">Riley Reid</a></li>
					      <li><a href="https://twitter.com/thesavannahbond" target="_blank">Savannah Bond</a></li>
					      <li><a href="https://twitter.com/savagesaya" target="_blank">Saya Song</a></li>
					      <li><a href="https://twitter.com/BbwSofiaRose" target="_blank">Sofia Rose</a></li>
					      <li><a href="https://twitter.com/taylorvixen" target="_blank">Taylor Vixen</a></li>
					      <li><a href="https://twitter.com/TeannaTrump" target="_blank">Teanna Trump</a></li>
					    </ul>
					  </div>

					</div>

					<div class="row">
					  <div class="col-md-6">
					    <h4>Best Boobs</h4>
					    <ul>
					      <li><a href="https://twitter.com/ANGELAWHITE" target="_blank">Angela White</a></li>
					      <li><a href="https://twitter.com/MsAryanaAdin" target="_blank">Aryana Adin</a></li>
					      <li><a href="https://twitter.com/autumnfallsxoxo" target="_blank">Autumn Falls</a></li>
					      <li><a href="https://twitter.com/AvaAddams" target="_blank">Ava Addams</a></li>
					      <li><a href="https://twitter.com/britney_amber" target="_blank">Britney Amber</a></li>
					      <li><a href="https://twitter.com/dillionharper" target="_blank">Dillion Harper</a></li>
					      <li><a href="https://twitter.com/thegiamilana" target="_blank">Gia Milana</a></li>
					      <li><a href="https://twitter.com/KSLibraryGirl" target="_blank">Kendra Sunderland</a></li>
					      <li><a href="https://twitter.com/KrissyLynnxxx" target="_blank">Krissy Lynn</a></li>
					      <li><a href="https://twitter.com/LaurenFillsUp" target="_blank">Lauren Phillips</a></li>
					      <li><a href="https://twitter.com/lenaisapeach" target="_blank">Lena Paul</a></li>
					      <li><a href="https://twitter.com/LilyLanexxx" target="_blank">Lily Lane</a></li>
					      <li><a href="https://twitter.com/LondonCRiver" target="_blank">London River</a></li>
					      <li><a href="https://twitter.com/cutelunastar" target="_blank">Luna Star</a></li>
					      <li><a href="https://twitter.com/clubmasseratixx" target="_blank">Maserati</a></li>
					      <li><a href="https://twitter.com/nikkidelano" target="_blank">Nikki Delano</a></li>
					      <li><a href="https://twitter.com/sarahjessiexxx" target="_blank">Sarah Jessie</a></li>
					      <li><a href="https://twitter.com/MsSarahVandella" target="_blank">Sarrah Vandella</a></li>
					      <li><a href="https://twitter.com/BbwSofiaRose" target="_blank">Sofia Rose</a></li>
					      <li><a href="https://twitter.com/ValeNappi" target="_blank">Valentina Nappi</a></li>
					    </ul>
					  </div>

					  <div class="col-md-6">
					    <h4>Best Butt</h4>
					    <ul>
					      <li><a href="https://twitter.com/Abella_Danger" target="_blank">Abella Danger</a></li>
					      <li><a href="https://twitter.com/xaidrafoxx" target="_blank">Aidra Fox</a></li>
					      <li><a href="https://twitter.com/ajsapplebooty" target="_blank">AJ Applegate</a></li>
					      <li><a href="https://twitter.com/alexis_texas" target="_blank">Alexis Texas</a></li>
					      <li><a href="https://twitter.com/ANGELAWHITE" target="_blank">Angela White</a></li>
					      <li><a href="https://twitter.com/xbaileybrookex" target="_blank">Bailey Brooke</a></li>
					      <li><a href="https://twitter.com/candicedare" target="_blank">Candice Dare</a></li>
					      <li><a href="https://twitter.com/ChristianaCinn" target="_blank">Christiana Cinn</a></li>
					      <li><a href="https://twitter.com/DaisyDucati" target="_blank">Daisy Ducati</a></li>
					      <li><a href="https://twitter.com/dayaknight" target="_blank">Daya Knight</a></li>
					      <li><a href="https://twitter.com/estellabathory" target="_blank">Estella Bathory</a></li>
					      <li><a href="https://twitter.com/hollyhendrix_" target="_blank">Holly Hendrix</a></li>
					      <li><a href="https://twitter.com/KeiraCroft" target="_blank">Keira Croft</a></li>
					      <li><a href="https://twitter.com/kendralust" target="_blank">Kendra Lust</a></li>
					      <li><a href="https://twitter.com/thekiranoir" target="_blank">Kira Noir</a></li>
					      <li><a href="https://twitter.com/cutelunastar" target="_blank">Luna Star</a></li>
					      <li><a href="https://twitter.com/MiaMalkova" target="_blank">Mia Malkova</a></li>
					      <li><a href="https://twitter.com/mia_melano" target="_blank">Mia Melano</a></li>
					      <li><a href="https://twitter.com/NikkiDelano" target="_blank">Nikki Delano</a></li>
					      <li><a href="https://twitter.com/rileyreyxxx" target="_blank">Riley Reyes</a></li>
					    </ul>
					  </div>
					</div>

					
					<div class="row">
					  <div class="col-md-6">
					    <h4>Best Clip Performer</h4>
					    <ul>
					      <li><a href="#" target="_blank">Ari Dee</a></li>
					      <li><a href="#" target="_blank">Ashley Alban</a></li>
					      <li><a href="#" target="_blank">Cassandra Cain</a></li>
					      <li><a href="#" target="_blank">Ceara Lynch</a></li>
					      <li><a href="#" target="_blank">Dee Siren</a></li>
					      <li><a href="#" target="_blank">Destinationkat</a></li>
					      <li><a href="#" target="_blank">Destiny Diaz</a></li>
					      <li><a href="#" target="_blank">Ginger Banks</a></li>
					      <li><a href="#" target="_blank">Haley420</a></li>
					      <li><a href="#" target="_blank">Honey Gold</a></li>
					      <li><a href="#" target="_blank">Jenny Blighe</a></li>
					      <li><a href="#" target="_blank">Kati3kat</a></li>
					      <li><a href="#" target="_blank">Kit Mercer</a></li>
					      <li><a href="#" target="_blank">Korina Kova</a></li>
					      <li><a href="#" target="_blank">Lana Rain</a></li>
					      <li><a href="#" target="_blank">Larkin Love</a></li>
					      <li><a href="#" target="_blank">Lena Sparks</a></li>
					      <li><a href="#" target="_blank">LilCanadianGirl</a></li>
					      <li><a href="#" target="_blank">Lily Cade</a></li>
					      <li><a href="#" target="_blank">Penny Barber</a></li>
					    </ul>
					  </div>

					  <div class="col-md-6">
					    <h4>Best Group Sex Scene</h4>
					    <ul>
					      <li><a href="https://www.brazzers.com/series/2409472/xanders-world-tour/" target="_blank">Abigail Mac, Lena Paul, Gina Valentina. and Xander Corvus in "Xander's World Tour” for Brazzers</a></li>
					      <li><a href="https://www.evilangel.com/en/movie/Angela-By-Darkko/73806" target="_blank">Angela White, Mick Blue, John Strong, Steve Holmes, and Mr. Pete in "Angela By Darkko” for AGW/Darkko/Evil Angel</a></li>
					      <li><a href="https://www.evilangel.com/en/movie/Ariana-Marie-A-Little-Bit-Harder/51266" target="_blank">Ariana Marie, Marklus Dupree, and Steve Holmes in "Ariana Marie: A Little Bit Harder" for Evil Angel</a></li>
					      <li><a href="#" target="_blank">Cadence Lux, Charles Dera, and Seth Gamble in "Bad Samaritans" for PureTaboo</a></li>
					      <li><a href="#" target="_blank">Derrick Pierce, Karla Lane, Mazzaratie Monica, and Cayenne Amor in "Three on One” for Shape of Beauty</a></li>
					      <li><a href="https://www.puretaboo.com/en/anne" target="_blank">Eliza Jane, Casey Calvert, Elena Koshka, Kristen Scott, Derrick Pierce, and Seth Gamble in "Anne: A Taboo Parody” for Pure Taboo</a></li>
					      <li><a href="https://www.elegantangel.com/2513216/gangbanged-9-porn-videos.html" target="_blank">Holly Hendrix's gangbang in "Gangbanged 9” for Elegant Angel</a></li>
					      <li><a href="https://www.burningangel.com/en/dvd/Joanna-Angel-Gangbang---As-Above-So-Below/51270" target="_blank">Joanna Angel's gangbang "Joanna Angel Gangbang: As Above So Below” for Burning Angel</a></li>
					      <li><a href="https://www.elegantangel.com/shop/2547503/squirtwoman-wasteland-porn-videos.html" target="_blank">Kelio Valentien, Markus Dupree, and Timmy Gunn in "Squirtwoman:Wasteland" for Elegant Angel</a></li>
					      <li><a href="https://www.tushy.com/take-my-girlfriend-for-your-birthday" target="_blank">Riley Reid, Paige Owens, and Markus Dupree in "Take My Girlfriend For Your Birthday” for Tushy</a></li>
					      <li><a href="#" target="_blank">Shyla Jennings, Serena Blair, and Melissa Moore in "The Breast Doctor Around” for Girlsway/Girlfriends</a></li>
					      <li><a href="#" target="_blank">The Massive Orgy in “After Dark 5” for Vixen</a></li>
					    </ul>
					  </div>
					</div>


					<div class="row">
					   <div class="col-md-6">
					    <h4>Best B/G Scene</h4>
					    <ul>
					      <li><a href="#" target="_blank">Adria Rae and Markus Dupree in "Club Vixen 5” for Vixen</a></li>
					      <li><a href="#" target="_blank">Alex Grey and Small Hands in "Goth Teen Nymphos” for BurningAngel</a></li>
					      <li><a href="https://www.burningangel.com/en/dvd/Goth-Teen-Nymphos/69046" target="_blank">Alina Lopez and Markus Dupree in "Hot Bodies 3” for Hard X</a></li>
					      <li><a href="https://www.evilangel.com/en/movie/Oil-Slick/69881" target="_blank">Autumn Falls and Markus Dupree in "Oil Slick” for Evil Angel</a></li>
					      <li><a href="https://www.wicked.com/en/movie/The-Possession-Of-Mrs-Hyde/77360" target="_blank">Avi Love and Ramon Nomar in "The Possession Of Mrs. Hyde” for Wicked</a></li>
					      <li><a href="https://store.julesjordanvideo.com/2652762/manuels-fucking-pov-11-porn-videos.html" target="_blank">Demi Sutra and Manuel Ferrara in "Manuel's Fucking POV 11” for Jules Jordan Video</a></li>
					      <li><a href="#" target="_blank">Jill Kassidy and Tommy Pistol in “Future Darkly Artifamily” for Pure Taboo</a></li>
					      <li><a href="#" target="_blank">Karla Lane and Alex Duca in “Dripping with Desire” for Shape of Beauty</a></li>
					      <li><a href="#" target="_blank">Marley Brinx and Charles Dera in "Dad's Paddle Collection” for FemaleSubmission</a></li>
					      <li><a href="#" target="_blank">Sarah Vandella and Rob Piper in "Feel Me, See Me" for DarkX</a></li>
					      <li><a href="#" target="_blank">Sophie Dee and Alex Jones in “Insatiable” for Vixen</a></li>
					      <li><a href="https://www.eroticax.com/en/video/Make-Up-Sex/145468" target="_blank">Vienna Rose and Tyler Nixon in "Make Up Sex” for EroticaX</a></li>
					    </ul>
					  </div>

					  <div class="col-md-6">
					    <h4>Best G/G Scene</h4>
					    <ul>
					      <li><a href="#" target="_blank">Abigail Mac and Sabina Rouge in A Woman's Promise” for Sweetheart Video</a></li>
					      <li><a href="#" target="_blank">Angela White and Prinzzess in "Lesbian Psychodramas 31” for Girlfriends Films</a></li>
					       <li><a href="#" target="_blank">Bridgette B. And Alex Coal in "Net Skirts 19.0” for Girlfriends Films</a></li>
					      <li><a href="#" target="_blank">Dana Vespoli and Victoria Voxxx "Lesbian Stepmother 5” for Sweetheart Video</a></li>
					      <li><a href="https://www.lesbianx.com/en/video/All-Natural-Anal-Lesbians/146575" target="_blank">Georgia Jones and Izzy Lush in “All Natural Anal Lesbians” for LesbianX</a></li>
					      <li><a href="https://www.lesbianx.com/en/video/Deep-Lesbian-Connection/146318" target="_blank">Honey Gold and Shyla Jennings in “Deep Lesbian Connection” for LesbianX</a></li>
					      <li><a href="https://www.girlsway.com/en/video//Surprised-by-Mom/133119" target="_blank">India Summer and Jenna Sativa in "Surprised By Mom” for Girlsway</a></li>
					      <li><a href="#" target="_blank">Jill Kassidy and Ariana Marie in "Ariana Marie: A Little Bit Harder" for Evil Angel</a></li>
					      <li><a href="https://www.mommysgirl.com/en/video/Mommys-Secret/128403" target="_blank">Mindi Mink and Carolina Sweets in "Mommy's Secret” for MommysGirl</a></li>
					      <li><a href="https://www.wicked.com/en/movie/Axel-Brauns-Girlfest/77347" target="_blank">Sabina Rouge and Charlotte Stokely in "Axel Braun's Girlfest” for Wicked</a></li>
					      <li><a href="#" target="_blank">Serene Siren & Mona Wales in "Confessions Of A Sinful Nun 2” for Sweetheart Video</a></li>
					      <li><a href="https://www.girlfriendsfilms.net/2548446/prinzzess-a-decade-of-desire-porn-videos.html" target="_blank">Zoey Monroe and Prinzzess in "Prinzzess: A Decade Of Desire” for Girlfriends Films  </a></li>
					    </ul>
					  </div>
                    </div>

					<div class="row">
					   <div class="col-md-6">
					    <h4>Best Anal Scene</h4>
					    <ul>
					      <li><a href="https://www.tushy.com/abigail" target="_blank">Abigail Mac and Markus Dupree in “Abigail” for Tushy</a></li>
					      <li><a href="https://www.evilangel.com/en/movie/I-Am-Angela/70357" target="_blank">Angela White and Rocco Siffredi in "I Am Angela” for Evil Angel</a></li>
					      <li><a href="#" target="_blank">Chloe Cherry and Bryan Gozzling in "HH: Something Casual” for Hookup Hotshot/Evil Angel</a></li>
					      <li><a href="https://www.evilangel.com/en/movie/Oil-Slick/69881" target="_blank">Gia Derza and Markus Dupree in "Oil Slick” for Evil Angel</a></li>
					      <li><a href="https://julesjordanvideo.com/gallery/1016/14/bounce-4.html" target="_blank">Ivy Lebelle and Manuel Ferrara in "Bounce 4” for Jules Jordan</a></li>
					      <li><a href="https://www.puretaboo.com/en/video/Breaking-The-Vow/146249" target="_blank">Keira Croft and Steve Holmes in "Breaking the Vow” for PureTaboo</a></li>
					      <li><a href="https://www.tushy.com/anal-confession" target="_blank">Kenzie Reeves and Jean Val Jean in "Anal Confession" for Tushy</a></li>
					      <li><a href="#" target="_blank">Kenzie Taylor and Manuel Ferrara in "Kenzie Taylor's Fantasy Comes True" Jules Jordan for Jules Jordan</a></li>
					      <li><a href="https://www.evilangel.com/en/movie/Anal-Slut-Training/75301" target="_blank">Kira Noir and Small Hands in "Anal Slut Training” for Evil Angel</a></li>
					      <li><a href="https://www.evilangel.com/en/movie/Anal-Investigation-02/75588" target="_blank">Kissa Sins and Manuel Ferrara "Anal Investigation 2” for Evil Angel</a></li>
					      <li><a href="#" target="_blank">Marica Hase and Jason Brown in “The Naughty Stepdaughter for DarkX</a></li>
					      <li><a href="https://www.elegantangel.com/shop/2660292/big-wet-milf-asses-porn-videos.html" target="_blank">Nina Elle and Ramon Nomar in "Big Wet MILF Asses" for Elegant Angel</a></li>
					    </ul>
					  </div>
                        
					   <div class="col-md-6">
					    <h4>Best Oral Scene</h4>
					    <ul>
					    <li><a href="#" target="_blank">Adria Rae's blowbang in "Facialized 5” for HardX</a></li>
					    <li><a href="#" target="_blank">Alexxxis Allure and Charles Dera in "Who's The Boss” for Shape of Beauty</a></li>
					    <li><a href="https://www.evilangel.com/en/movie/Angela-By-Darkko/73806" target="_blank">Angela White's blowbang in "Angela By Darkko” for Evil Angel</a></li>
					    <li><a href="https://www.throated.com/en/video/Fuck-My-Mouth/134481" target="_blank">Cindy Starfall in "Fuck My Mouth!” For Throated</a></li>
					    <li><a href="#" target="_blank">Dee Williams and Tommy Gunn in "Rock The Cock” for 1000 Facials</a></li>
					     <li><a href="#" target="_blank">Della Dane in "Blow Off Some Steam” for Mommy Blows Best</a></li>
					    <li><a href="https://www.hardx.com/en/video/Massive-Swallow/148943" target="_blank">Gina Valentina's blowbang in "Massive Swallow” for Hard X</a></li>
					    <li><a href="#" target="_blank">Jennifer White and Seth Gamble in “DeadpoolXXX” for Wicked</a></li>
					    <li><a href="https://www.1000facials.com/en/scene/Jillian-Gets-Jizzed/146855" target="_blank">Jillian Janson and Logan Long in "Jillian Gets Jizzed" for 1000 Facials</a></li>
					    <li><a href="#" target="_blank">Karmen Karma and Jason Love in “Sharing Me” for Blacked</a></li>
					    <li><a href="https://www.evilangel.com/en/movie/Katrina-Jade-Addicted-To-Black/70237" target="_blank">Katrina Jade's blowbang in "Katrina Jade: Addicted To Black” for Evil Angel</a></li>
					    <li><a href="#" target="_blank">Kristen Scott's blowbang in "My Hotwife's First Blowbang” for New Sensations</a></li>
					    </ul>
					  </div>
					</div>



					<div class="row">
					   <div class="col-md-6">
					    <h4>Best Free Site That's Not Fleshbot</h4>
					    <ul>
					      <li><a href="https://altporn.net/" target="_blank">AltPorn.net</a></li>
					      <li><a href="https://avn.com/" target="_blank">AVN</a></li>
					      <li><a href="https://www.babepedia.com/" target="_blank">Babepedia</a></li>
					      <li><a href="https://www.boobieblog.com/" target="_blank">Boobie Blog</a></li>
					      <li><a href="http://boobpedia.com/" target="_blank">Boobpedia</a></li>
					      <li><a href="https://www.celebjihad.com/" target="_blank">Celeb Jihad</a></li> 
					      <li><a href="https://drunkenstepfather.com/" target="_blank">Drunken Step Father</a></li>
					      <li><a href="http://www.egotastic.com/" target="_blank">Egotastic</a></li>
					      <li><a href="https://www.freeones.com/" target="_blank">Freeones</a></li>
					      <li><a href="https://hotnessrater.com/" target="_blank">Hotnessrater</a></li>
					      <li><a href="https://www.hottystop.com/" target="_blank">Hottystop</a></li>
					      <li><a href="https://www.nudography.com/" target="_blank">Nudography</a></li>
					      <li><a href="https://www.peeperz.com/" target="_blank">Peeperz</a></li>
					      <li><a href="http://pinkworld.com/" target="_blank">Pink World</a></li>
					      <li><a href="https://www.rabbitsreviews.com/" target="_blank">RabbitsReviews</a></li>
					      <li><a href="https://www.recapped.com/" target="_blank">Recapped</a></li>
					      <li><a href="https://www.sexyandfunny.com/" target="_blank">Sexy And Funny</a></li>
					      <li><a href="http://www.thebestporn.com/" target="_blank">The Best Porn</a></li>
					      <li><a href="https://www.thenipslip.com/" target="_blank">The Nip Slip</a></li>
					      <li><a href="https://www.wtfpeople.com/" target="_blank">wtfpeople</a></li>
					    </ul>
					  </div>
                        
					</div>
                    
					<p style="text-align: center;"><a target="_blank" class="content-vote-btn" href="https://t.grtyo.com/aff_c?offer_id=4436&aff_id=4339&url_id=13149">Vote Now &gt;&gt;</a></p>
            	</div>
            </div>
            <div class="col-md-2 right-banner">
                <a target="_blank" href="http://bang.com/"><img class="img-responsive" src="<?php bloginfo('template_url') ?>/assets/images/awards/straight/bang_wallpaper_right_light.png"></a>
            </div>
        </div>
    </div>
    <div class="container-fluid award-footer no-padding">
    	<img src="<?php bloginfo('template_url') ?>/assets/images/awards/straight/footer-logo.png" alt="" />
    </div>
</div>
<!-- straight tab end -->

<?php } ?>

<?php get_footer() ?>
