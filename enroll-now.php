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
							<option value="">Others</option>
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
					<option value="">EC - Electronics & Communication Engineering</option>
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

			<div class="confirm">
				<p>If (Classroom course + LIve Class) + Registration <i>selected</i></p>
				<p><strong>Payment Details:</strong></p>
				<p>Course Fee: Rs. 10,000/-</p>
				<p>Total: Rs. 10,000/-</p>
				<p>Note: Due amount should be paid in a month of enrollment. Online live classes + Classroom coaching after lockdown is lifted is included in this course.</p>
			</div>

			<div class="vgroup">
					<input type="checkbox" >
					<label for="">I agree with terms & conditions</label>
				<button class="btn-theme">Submit</button>
			</div>
			
			<div class="confirm">
				<h3>Confirm Details & Make Payment</h3>
				<p>Name:</p>
				<p>Email:</p>
				<p>Mobile No:</p>
				<p>Selected Course:</p>
				<p>Selected Center:</p>
				<p>Selected Exam:</p>
				<p>Selected Batch:</p>
				<p>Selected Stream:</p>
				<p>Selected Payment:</p>
				<p>Fee Payable:</p>
				<p></p>
				<button class="btn-theme">Proceed to Payment</button>
				<p>Go back</p>
			</div>

			<div>
				<h3>Terms & Conditions</h3>
				<ol>
			<li>
				Student must be serious before taking admission and must remain committed in the course preparation of the target exam. Fees once paid will not be refunded or adjusted at any stage, under any circumstance.&nbsp;</li>
			<li>
				Students will have to pay the due amount in a month strictly from the date of admission</li>
			<li>
				Study Materials will be provided to the students after the complete fee payment &amp; Submission of admission documents.</li>
			<li>
				Rank improvement program is for classroom coaching only and is valid for three consecutive years from the date of admission.</li>
			<li>
				Extra IES syllabus for the weekend batch students will conduct on regular days since syllabus is vast to cover only on weekends.&nbsp;</li>
			<li>
				Change of place, change of packages / courses will not be entertained, under any circumstance.</li>
			<li>
				In case a student goes for upgrade, an extra amount will be charged for the packages / courses as per the institution fee.&nbsp;</li>
			<li>
				In case of reprint of study material during the academic year, due to lack of stock / a revision of content, IES GATE ACADEMY does not take the responsibility to distribute the reprinted edition to the students who were received earlier.&nbsp;</li>
			<li>
				IES GATE ACADEMY reserves the right to announce and withdraw discount schemes as its own discretion and no claim of any kind will be entertained in this matter. After the admission, even if a student is eligible for any discount will not be entertained.&nbsp;</li>
			<li>
				In case of misuse of ID Card is found by the management, then the candidate admission will be cancelled without any further explanation</li>
			<li>
				IES GATE ACADEMY reserves the right to change the schedule, staff, venue &amp; timings of the classes at its own discretion.&nbsp;</li>
			<li>
				Study materials, videos etc., are exclusive copyright of IES GATE ACADEMY and cannot be reproduced in print, media or otherwise, without explicit permission of the institution. They cannot be shared with other students or copied and provided as study material to any organization.</li>
			<li>
				IES GATE ACADEMY reserves the right to use results and information of students enrolled for its courses, in its advertisements and promotional material etc., to promote its products and services. IES GATE ACADEMY does not share the data to third party, with exception to Indian Government organizations.</li>
			<li>
				IES GATE ACADEMY assumes no liability whatsoever for any monetary or other damage suffered by the user on account of the delay, failure, interruption, or corruption of any data or other information transmitted in connection with use of the payment gateway or services in connection and any interruption or errors in the operation of the payment gateway.</li>
			<li>
				These terms and conditions may be revised at any time by updating this post. You are bound by any such revisions and should therefore periodically visit this page to review the then current terms and condition to which you are bound.</li>
		</ol>
		<div>
			&nbsp;</div>
		<div>
			The above mentioned are the terms and conditions for IES GATE ACADEMY online enrollments. By submitting our online registration form for enrollment, you are accepting to the terms &amp; conditions.&nbsp;</div>
		<div>
			&nbsp;</div>
			</div>

		</form>
		<p>
			
		</p>

		</div>
	</div>

<?php include 'inc/footer.php' ?>
</body>
</html>