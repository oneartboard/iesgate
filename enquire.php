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
<?php include 'send-email.php' ?>
<?php
$fname = $lname = $email = $gender = $phone = $dob =$c_email =$father_name = $occupation =$fphone= "";
$address = $street =$city=$pincode=$state ="";
$hdegree = $college_name =$college_addr=$college_status="";
$course =$exam =$center= $batch =$stream =$payment_type ="";
$confirmation =false;
$data = null;
$fee_total =0;

function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
      return $data;
    }
 

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) 
{
	$name = test_input($_POST["name"]);
	$email = test_input($_POST["email"]);
	$phone = test_input($_POST["phone"]);
    $course=test_input($_POST["course"]);
    $exam=test_input($_POST["exam"]);
    $center=test_input($_POST["center"]);
    $stream=test_input($_POST["stream"]);
    $message=test_input($_POST["message"]);

    	$data = array(
		'name' => $name, 
		'email' => $email, 
		'phone' => $phone, 
		'course' => $course, 
		'exam' => $exam, 
		'center' => $center, 
		'stream' => $stream, 
		'message' => $message, 
	  );

    

    if($name && $email && $phone){
	 sendSMS($phone,"enquiry");
	  sendEmail($data,"enquiry");
	  $name = $email = $phone = $course=$exam=$center=$stream=$message=="";
	  header('location: success.php');
    }
 }


    
?>

	<div class="c-container spacer">
		<h2 class="title  text-center text-theme no-margin">
			Enquiry Now
		</h2>
		<p class="text-center">We would like to hear from you. Please
			send us your enquiry by filling out the 
			form below and we will get back with you shortly
		</p>
		<br>
		<form class="enquire-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

			<div class="vgroup inline">
				<label for="">Full Name <span>*</span></label>
				<input type="text" name="name" required >
			</div>
			<div class="row">
				<div class="col">
					<div class="vgroup">
						<label for="">Email <span>*</span></label>
						<input type="text" name="email" required>
					</div>
				</div>
				<div class="col">
					<div class="vgroup">
						<label for="">Phone <span>*</span></label>
						<input type="tel" name="phone" minlength="10" maxlength="10" required id="phone">
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col">
					<div class="vgroup inline">
						<label for="">Center?<span>*</span></label>
						<select name="center">
							<option value="">--Select Center--</option>
							<option value="Chennai">Chennai</option>
							<option value="Coimbatore">Coimbatore</option>
						</select>
					</div>
				</div>
				<div class="col">
					<div class="vgroup inline">
						<label for="">Select Exam<span>*</span></label>
						<select name="exam" id="">
							<option value="IES+GATE+PSUs-2021">IES+GATE+PSUs-2021</option>
							<option value="GATE+PSUs-2021">GATE+PSUs-2021</option>
							<option value="IES+GATE+PSUs-2022">IES+GATE+PSUs-2022</option>
							<option value="GATE+PSUs-2022">GATE+PSUs-2022</option>
						</select>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col">
					<div class="vgroup inline">
						<label for="">Select Stream</label>
						<select name="stream" id="">
							<option value="EE">EE - Electrical & Electronics Engineering</option>
							<option value="EE">EC - Electronics & Communication Engineering</option>
							<option value="IN">IN - Instrumentation Engineering</option>
							<option value="CE">CE - Civil Engineering</option>
							<option value="ME">ME - Mechanical Engineering</option>
							<option value="PI">PI - Production & Industrial Engineering</option>
							<option value="CS">CS - Computer Science Engineering</option>
							<option value="IT">IT - Information Technology</option>
							<option value="CH">CH -  Chemical Engineering</option>
							<option value="PE">PE - Petroleum Engineering</option>
							<option value="BT">BT - Bio-Technology</option>
							<option value="AE">AE - Aerospace Engineering</option>
							<option value="Others">Others</option>
						</select>
					</div>
				</div>
			</div>
			<div class="vgroup">
				<h4>Course</h4>
				<div class="cgroup">
					<input type="radio" name="course" value="Classroom-Course" checked="">
					<label for="">Classroom Course</label>
				</div>
				<div class="cgroup">
					<input type="radio" name="course" value="Classroom-Course">
					<label for="">Online Live Class Course</label>
				</div>
				<div class="cgroup">
					<input type="radio" name="course" value="Online-Test-Series">
					<label for="">Online Test Series</label>
				</div>
				<div class="cgroup">
					<input type="radio" name="course" value="others" >
					<label for="">others</label>
				</div>
				
			</div>
			<div class="vgroup">
				<h4>Message <span style="color: red;">*</span></h4>
				
				<textarea name="message" id="" style="width: 100%;" rows="5" maxlength="250" required=""></textarea>
				
			</div>
			<button class="btn-theme" name="submit" value="submit">Submit</button>
		</form>
		
	</div>

	<footer class="site-footer">
		<div class="c-container">
			<div class="flex-row" style="flex-wrap: nowrap;">
				<div class="flex-col">
					<ul class="simple-list">
						<h4>Contact Info</h4>
						<li>
							<a href="">
								D.No. 50, Mahalakshmi Street, <br>
								Beside City Union Bank, T.Nagar, <br>
								Chennai-600017. <br>
							</a>
						</li>
						<li>
							<a href="">+91-9445017000</a>
						</li>
						<li>
							<a href="">+91-9445027000</a>
						</li>
						<li>
							<a href="">+91-9445037000</a>
						</li>
						<li>
							<a href="">iesgateacademy@gmail.com</a>
						</li>
						
	
	
					</ul>
				</div>
				
				<div class="flex-col">
					<ul class="simple-list">
						<h4>Quick Links</h4>
						<li><a href="">ESE</a></li>
						<li><a href="">GATE</a></li>
						<li><a href="">PSUs</a></li>
						<li><a href="">Courses</a></li>
						<li><a href="">- Classroom Courses</a></li>
						<li><a href="">- Online Live Classes</a></li>
						<li><a href="">- Online Test Series  </a></li>
						<li><a href="">Batches & Fee Structure</a></li>
						<li><a href="">Contact us</a></li>
						<li><a href="">Enquiry</a></li>
						
					</ul>
				</div>
				<div class="flex-col social-col">
					<ul class="simple-list">
						<h4>Social</h4>
						<div class="flex-inline-mobile">
							<li>
								<a href="">
								<img src="img/icons/facebbok.png" alt="">					
								</a>
							</li>
							<li><a href=""><img src="img/icons/insta.png" alt=""></a></li>
							<li><a href=""><img src="img/icons/whatsapp.png" alt=""></a></li>
							<li><a href=""><img src="img/icons/twitter.png" alt=""></a></li>
							<li><a href=""><img src="img/icons/gp.png" alt=""></a></li>
							<li><a href=""><img src="img/icons/youtube.png" alt=""></a></li>
						</div>
						
					
					
	
					</ul>
				</div>
				<div class="flex-col sbs-col">
					<div class="subscribe">
						<h4 class="text-theme">Mailing List</h4>
						<p class="text-white">
							Enter your email address  for our mailing list to keep yourself updated.
						</p>
						<div class="attach-input">
							<input type="text" placeholder="Email address">
							<button >Done</button>
						</div>
						<p style="color: #919191;">We Respect Your Privacy</p>
						
					</div>
					<p class="copywrite">IES GATE ACADEMY © 2020. All Rights Reserved.</p>
				</div>
			</div>
		</div>
	
	</footer>

<script src="js/jQuery.min.js"></script>
<script src="js/scroll-out.js"></script>
<script src="js/swiper.min.js"></script>
<script src="js/splitting.js"></script>
<script src="js/micromodal.min.js"></script>
<script src="js/jquery.marquee.js"></script>
<script src="js/controller.js"></script>
	<script>


	</script>
</body>
</html>