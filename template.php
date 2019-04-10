<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="css/fonts.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/styles.css">
	</head>
	<body>
		<!-- Left Column -->
		<div class="mainpiece">
			<!-- Intro section -->
			<h1><?php display("intro-name");?></h1>
			<h2><?php display("intro-craft");?> <span class="subheadline"><?php display("intro-curious");?></span></h2>
			<p><?php display("intro-young");?></p>
			<p><?php display("intro-projectexp");?></p>
			<p><?php display("intro-biggestkick");?></p>
			<p class="extramargin"><?php display("intro-freetime");?></p>

			<!-- Job section -->
			<h3>
				<i class="fa fa-briefcase" aria-hidden="true"></i><?php display("title-workexp");?>
			</h3>

			<!-- Job section Livemanager -->
			<h4>
				<?php display("jobtitle-livemanager");?>: <span class="place"><?php display("jobinfo-livemanager");?></span>
			</h4>
			<p>
				<?php display("jobdescription-livemanager");?>
				<span class="technologies"><?php display("jobtechnologies-livemanager");?></span>
			</p>
			
			<!-- Job section HP -->
			<h4>
				<?php display("jobtitle-hp");?>: 
				<span class="place"><?php display("jobinfo-hp");?></span>
			</h4>
			<p>
				<?php display("jobdescription-hp");?><br>
				<span class="technologies"><?php display("jobtechnologies-hp");?></span>
			</p>

			<!-- Job section Econocom/A2Z -->
			<h4>
				<?php display("jobtitle-a2z");?>: 
				<span class="place"><?php display("jobinfo-a2z");?></span>
			</h4>
			<div class="paragraph">
				<?php display("jobdescription1-a2z");?>:
				<ul>
					<li><?php display("jobdescription2-a2z");?></li>
					<li><?php display("jobdescription3-a2z");?></li>
					<li><?php display("jobdescription4-a2z");?></li>
				</ul>
				<span class="technologies"><?php display("jobtechnologies-a2z");?></span>
			</div>

			<!-- Job section Oxynade -->
			<h4>
				<?php display("jobtitle-oxynade");?>: 
				<span class="place"><?php display("jobinfo-oxynade");?></span>
			</h4>
			<p class="extramargin">
				<?php display("jobdescription-oxynade");?><br>
				<span class="technologies"><?php display("jobtechnologies-oxynade");?></span>
			</p>
			
			<!-- Education section -->
			<h3>
				<i class="fa fa-mortar-board" aria-hidden="true"></i>
				<?php display("title-education");?>
			</h3>
			
			<!-- Education section Oracle -->
			<h4>
				<?php display("education-place-oracle");?>: 
				<span class="place"><?php display("education-name-oracle");?></span>
			</h4>
			<p><?php display("education-description-oracle");?></p>

			<!-- Education section Toegepast Itmanagement -->
			<h4>
				<?php display("education-place-itmanagement");?>: 
				<span class="place"><?php display("education-name-itmanagement");?></span>
			</h4>
			<p><?php display("education-description-itmanagement");?></p>

			<!-- Education section Toegepaste Informatica -->
			<h4>
				<?php display("education-place-toegepasteinformatica");?>: 
				<span class="place"><?php display("education-name-toegepasteinformatica");?></span>
			</h4>
			<p><?php display("education-description-toegepasteinformatica");?></p>
		</div>
		<!-- Right Column -->
		<div class="sidepiece">
			<img src="images/profile_grey.jpg">
			
			<!-- Contact info section -->
			<h3><?php display("side-title-contactinfo");?></h3>
			
			<p class="personaldetails">
				<i class="fa fa-envelope-o" aria-hidden="true"></i>
				<a href="mailto:<?php display('side-email');?>"><?php display("side-email");?></a>
			</p>
			<p class="personaldetails">
				<i class="fa fa-phone" aria-hidden="true"></i>
				<?php display('side-phone');?>
			</p>
			<p class="personaldetails">
				<i class="fa fa-home" aria-hidden="true"></i>
				<?php display('side-address');?>
			</p>
			<p class="personaldetails extramargin">
				<i class="fa fa-linkedin" aria-hidden="true"></i>
				<a href="http://<?php display('side-linkedin');?>"><?php display('side-linkedin');?></a>
			</p>

			<!-- Skills section -->
			<div>
				<h3><?php display("side-title-skills");?></h3>

				<h4><?php display("side-title-programming");?></h4>
				<p><?php display("side-programming");?></p>

				<h4><?php display("side-title-web");?></h4>
				<p><?php display("side-web");?></p>

				<h4><?php display("side-title-tools");?></h4>
				<p><?php display("side-tools");?></p>

				<h4><?php display("side-title-databases");?></h4>
				<p><?php display("side-databases");?></p>

				<h4><?php display("side-title-languages");?></h4>
				<p><?php display("side-languages");?></p>
			</div>
		</div>
	</body>
</html>