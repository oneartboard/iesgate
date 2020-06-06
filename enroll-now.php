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
		<h2 class="title  text-center text-theme no-margin">
			Enroll Now
		</h2>
		<p class="text-center">Fill this form to enroll now
		</p>
		<br>
		<h2>Student Details </h2>
		<form class="enquire-form">
			<div class="row">
				<div class="col">
					<div class="vgroup inline">
						<label for="">First Name <span>*</span></label>
						<input type="text" required>
					</div>
				</div>
				<div class="col">
					<div class="vgroup">
						<label for="">Last Name <span>*</span></label>
						<input type="text" required>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="vgroup inline">
						<label for="">Gender<span>*</span></label>
						<select name="" id="">
							<option value="">--Select Gender--</option>
							<option value="">Female</option>
							<option value="">Male</option>
						</select>
					</div>
				</div>
				<div class="col">
					<div class="vgroup">
						<label for="">Date of Birth <span>*</span></label>
						<input type="text" required placeholder="01/01/1990">
					</div>
				</div>
			</div>
			<div class="vgroup">
				<label for="">Email ID <span>*</span></label>
				<input type="text" required >
			</div>
			<div class="vgroup">
				<label for="">Confirm Email ID <span>*</span></label>
				<input type="text" required >
			</div>
			<div class="vgroup">
				<label for="">Mobile Number <span>*</span></label>
				<input type="text" required >
			</div>
			<h2>Father's / Guardian's Details </h2>
			<div class="vgroup">
				<label for="">Father's Name <span>*</span></label>
				<input type="text" required >
			</div>
			<div class="row">
				<div class="col">
					<div class="vgroup">
						<label for="">Occupation <span>*</span></label>
						<input type="text" required >
					</div>
				</div>
				<div class="col">
					<div class="vgroup">
						<label for="">Mobile Number <span>*</span></label>
						<input type="text" required >
					</div>
				</div>
			</div>	
			<h2>Permanent Address </h2>
			<div class="vgroup">
				<label for="">Street Address <span>*</span></label>
				<input type="text" required placeholder="House Number/Apartment No and Name" >
			</div>
			<div class="vgroup">
				<label for="">Street Name <span>*</span></label>
				<input type="text" required >
			</div>
			<div class="vgroup">
				<label for="">City/Town <span>*</span></label>
				<input type="text" required >
			</div>
			<div class="row">
				<div class="col">
					<div class="vgroup">
						<label for="">State <span>*</span></label>
						<input type="text" required >
					</div>
				</div>
				<div class="col">			
					<div class="vgroup">
						<label for="">Postal Code <span>*</span></label>
						<input type="text" required >
					</div>
				</div>
			</div>

			<h2>Academic Details </h2>
			<div class="vgroup">
				<h4>Highest Degree</h4>
				
				<div class="cgroup">
					<input type="checkbox" >
					<label for="">B.E/B.Tech</label>
				</div>
				<div class="cgroup">
					<input type="checkbox" >
					<label for="">M.E/M.Tech</label>
				</div>
				<div class="cgroup">
					<input type="checkbox" >
					<label for="">Others</label>
				</div>

				<div class="vgroup">
					<label for="">Full name of the college <span>*</span></label>
					<input type="text" required >
				</div>
				<div class="vgroup">
					<label for="">Address and Place of the college <span>*</span></label>
					<input type="text" required >
				</div>
				<div class="vgroup">
				<h4>Current Status</h4>
				
				<div class="cgroup">
					<input type="checkbox" >
					<label for="">Student</label>
				</div>
				<div class="cgroup">
					<input type="checkbox" >
					<label for="">Employed</label>
				</div>
				<div class="cgroup">
					<input type="checkbox" >
					<label for="">Unemployed</label>
				</div>
			</div>

			<h2>Course Details </h2>
			<div class="vgroup inline">
				<label for="">Select Course<span>*</span></label>
				<select name="" id="">
					<option value="">Classroom Coaching+Online Live Classes</option>
					<option value="">Online Live Classes</option>
				</select>
			</div>
			<div class="row">
				<div class="col">
					<div class="vgroup inline">
						<label for="">Center?<span>*</span></label>
						<select name="" id="">
							<option value="">--Select Center--</option>
							<option value="">Chennai</option>
							<option value="">Coimbatore</option>
						</select>
					</div>
				</div>
				<div class="col">
					<div class="vgroup inline">
						<label for="">Select Exam<span>*</span></label>
						<select name="" id="">
							<option value="">IES+GATE+PSUs-2021</option>
							<option value="">GATE+PSUs-2021</option>
							<option value="">IES+GATE+PSUs-2022</option>
							<option value="">GATE+PSUs-2022</option>
						</select>
					</div>
				</div>
			</div>
			<div class="vgroup inline">
				<label for="">Select Batch<span>*</span></label>
				<select name="" id="">
					<option value="">Regular Batch</option>
					<option value="">Weekend Batch</option>
				</select>
			</div>
			<div class="vgroup inline">
				<label for="">Select Stream</label>
				<select name="" id="">
					<option value="">--Select Stream--</option>
					<option value="">EE - Electrical & Electronics Engineering</option>
					<option value="">IN - Instrumentation Engineering</option>
					<option value="">CE - Civil Engineering</option>
					<option value="">ME - Mechanical Engineering</option>
					<option value="">PI - Production & Industrial Engineering</option>
					<option value="">CS - Computer Science Engineering</option>
					<option value="">IT - Information Technology</option>
					<option value="">CH -  Chemical Engineering</option>
					<option value="">PE - Petroleum Engineering</option>
					<option value="">BT - Bio-Technology</option>
					<option value="">AE - Aerospace Engineering</option>
					<option value="">Others</option>
				</select>
			</div>


			<div class="vgroup inline">
				<label for="">Select Payment?<span>*</span></label>
				<select name="" id="">
					<option value="">Registration Fee</option>
					<option value="">Full Payment</option>
				</select>
			</div>

			<div class="vgroup">
				<button class="btn-theme">Submit</button>
			</div>

		</form>
		</div>
	</div>

<?php include 'inc/footer.php' ?>
</body>
</html>