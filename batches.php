<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="css/swiper.min.css">
	<link rel="stylesheet" href="css/splitting.css">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/theme.css">
	<link rel="stylesheet" href="css/responsive.css">
	
	<title>IES GATE ACADEMY</title>
</head>
<?php include 'inc/header.php' ?>
<div class="c-container spacer">
<h2 class="title  text-center text-theme">
			Batches & Fee Structure
		</h2>
<div class="batch-tabs" >
		<ul class="tabs clearfix" data-tabgroup="first-tab-group2" style="justify-content:center">
		  <li class="bt-li"><a href="#tab11" class="active">Classroom Courses</a></li>
		  <li class="bt-li"><a href="#tab22" style="color: gray;">Liveroom Course</a></li>
		</ul>
	
		<section id="first-tab-group2" class="tabgroup">
		  <div id="tab11" >
		  <?php include 'inc/course-details.php' ?>



 </div>
		  <div id="tab22">
		  <div class=" spacer">
			<h2 class="text-theme no-margin">Streams Offered</h2>
			<ul class="simple-list">
		<li>	Electronics & Communication Engineering (EC)</li>
		<li>	Electrical & Electronics Engineering (EE)</li>
		<li>	Instrumentation Engineering (IN)</li>
		<li>	Civil Engineering (CE)</li>
		<li>	Mechanical Engineering (ME)</li>
		<li>	Computer Science Engineering (CS)</li>
		<li>	Information Technology (IT)</li>
		<li>	Chemical Engineering (CH)</li>
		<li>	Petroleum Engineering (PE)</li>
		<li>	Bio-Technology (BT)</li>
		<li>	Aerospace Engineering (AE)</li>
	</ul>

<p ><b style="font-size: 30px;
    color: var(--theme-color);">Class Timings</b> – Monday to Saturday (6PM to 9PM) & Sunday (9AM to 6PM)</p>
	<p class="note" style="width:100%">
		  Our Class timings are suitable for Working professionals, College-goers, Graduates etc.,
            who are planning to do their preparation in full time or part time. Contact us to know
            more in detail about preparation & study plans.
	</p>
	<div class="inline-item" style="justify-content:flex-start;margin-top:20px">
				<button class="btn btn-theme">ENQUIRE NOW</button>
				<button class="btn btn-theme">ENROLL NOW</button>
		
				</div>
		</div>
		  </div>
		  
		</section>
		
	  </div>
</div>



		<?php include 'inc/footer.php' ?>
</body>
</html>