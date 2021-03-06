<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="css/swiper.min.css">
	<link rel="stylesheet" href="css/splitting.css">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/theme.css">
	<link rel="stylesheet" href="css/responsive.css">
	
	<title>IES GATE ACADEMY</title>
	<style type="text/css">
		.btn-theme:disabled {
		    color: #fff;
		}
		.btn-theme:disabled {
         opacity: .65;
        }
        .text-danger{
        	color: red;
        }
	</style>
</head>
<?php include 'inc/header.php' ?>
<?php include 'send-email.php' ?>

<?php
$fname = $lname = $email = $gender = $phone = $dob =$c_email =$father_name = $occupation =$fphone= $emailErr="";
$address = $street =$city=$pincode=$state ="";
$hdegree = $college_name =$college_addr=$college_status="";
$course =$exam =$center= $batch =$stream =$payment_type ="";
$confirmation =false;
$data = null;
$fee_total =10000;
$name = "";

function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
      return $data;
    }
 

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) 
{
	$fname = test_input($_POST["fname"]);
	$lname = test_input($_POST["lname"]);
	 $email = test_input($_POST["email"]);
	 $gender = test_input($_POST["gender"]);
	 $phone = test_input($_POST["phone"]);
	 $dob =test_input($_POST["dob"]);
	 $c_email =test_input($_POST["c_email"]);
	 $father_name = test_input($_POST["father_name"]);
	 $occupation =test_input($_POST["occupation"]);
	 $fphone= test_input($_POST["fphone"]);
    $address = test_input($_POST["address"]);
    $street =test_input($_POST["street"]);
    $city=test_input($_POST["city"]);
    $pincode=test_input($_POST["pincode"]);
    $state =test_input($_POST["state"]);
    $hdegree = test_input($_POST["hdegree"]);
    $college_name =test_input($_POST["college_name"]);
    $college_addr=test_input($_POST["college_addr"]);
    $college_status=test_input($_POST["college_status"]);
    $course=test_input($_POST["course"]);
    $exam=test_input($_POST["exam"]);
    $center=test_input($_POST["center"]);
    $batch=test_input($_POST["batch"]);
    $stream=test_input($_POST["stream"]);
    $payment_type=test_input($_POST["payment_type"]);

    if ($email != $c_email) {
    	$emailErr = "Confirmed Email is not matched";
    	$confirmation =false;
    }else{
    $name= $fname .''.$lname;

    $fee_total = test_input($_POST["fee_total"]);

	$data = array(
		'id' => md5(uniqid(rand(), true)),
		'name' => $name, 
		'email' => $email, 
		'gender' => $gender, 
		'phone' => $phone, 
		'dob' => $dob, 
		'father_name' => $father_name, 
		'occupation' => $occupation, 
		'fphone' => $fphone, 
		'address' => $address, 
		'street' => $street, 
		'city' => $city, 
		'pincode' => $pincode, 
		'state' => $state, 
		'hdegree' => $hdegree, 
		'college_name' => $college_name, 
		'college_addr' => $college_addr, 
		'college_status' => $college_status, 
		'course' => $course, 
		'exam' => $exam, 
		'center' => $center, 
		'batch' => $batch, 
		'stream' => $stream, 
		'payment_type' => $payment_type,
		'fee'=>$fee_total
	  );
	$_SESSION['enroll_data'] = $data;
	$confirmation =true;
  }
 }

 if(isset($_POST['cancel'])) { 
 	unset($_SESSION["enroll_data"]);
    $confirmation =false;
  }    
?>

<?php if (!$confirmation) { ?>
	<div class="c-container spacer">
		<h2 class="title  text-center text-theme no-margin">
			Enroll Now
		</h2>
		<p class="text-center">Fill this form to enroll now
		</p>
		<br>
		<h2>Student Details </h2>
		<form class="enquire-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
			<div class="row">
				<div class="col">
					<div class="vgroup inline">
						<label for="">First Name <span>*</span></label>
						<input type="text" name="fname" required id="fname">
						<input type="hidden" name="fee_total" value="<?php $fee_total ?>" id="fee_total">
					</div>
				</div>
				<div class="col">
					<div class="vgroup">
						<label for="">Last Name <span>*</span></label>
						<input type="text" name="lname" required id="lname">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="vgroup inline">
						<label for="">Gender<span>*</span></label>
						<select name="gender">
							<option value="">--Select Gender--</option>
							<option value="">Female</option>
							<option value="">Male</option>
						</select>
					</div>
				</div>
				<div class="col">
					<div class="vgroup">
						<label for="">Date of Birth <span>*</span></label>
						<input type="date" name="dob" required placeholder="01/01/1990">
					</div>
				</div>
			</div>
			<div class="vgroup">
				<label for="">Email ID <span>*</span></label>
				<input type="email" name="email" required id="email">
			</div>
			<div class="vgroup">
				<label for="">Confirm Email ID <span>*</span></label>
				<input type="text" name="c_email" required >
			</div>
			<div class="vgroup">
				<label for="">Mobile Number <span>*</span></label>
				<input type="tel" name="phone" minlength="10" maxlength="10" required id="">
			</div>
			<h2>Father's / Guardian's Details </h2>
			<div class="vgroup">
				<label for="">Father's Name <span>*</span></label>
				<input type="text" name="father_name" required >
			</div>
			<div class="row">
				<div class="col">
					<div class="vgroup">
						<label for="">Occupation <span>*</span></label>
						<input type="text" name="occupation" required >
					</div>
				</div>
				<div class="col">
					<div class="vgroup">
						<label for="">Mobile Number <span>*</span></label>
						<input type="tel" name="fphone" maxlength="10" minlength="10" required >
					</div>
				</div>
			</div>	
			<h2>Permanent Address </h2>
			<div class="vgroup">
				<label for="">Street Address <span>*</span></label>
				<input type="text" name="address" required placeholder="House Number/Apartment No and Name" >
			</div>
			<div class="vgroup">
				<label for="">Street Name <span>*</span></label>
				<input type="text" name="street" required >
			</div>
			<div class="vgroup">
				<label for="">City/Town <span>*</span></label>
				<input type="text" name="city" required >
			</div>
			<div class="row">
				<div class="col">
					<div class="vgroup">
						<label for="">State <span>*</span></label>
						<input type="text" name="state" required >
					</div>
				</div>
				<div class="col">			
					<div class="vgroup">
						<label for="">Postal Code <span>*</span></label>
						<input type="number" name="pincode" required >
					</div>
				</div>
			</div>

			<h2>Academic Details </h2>
			<div class="vgroup">
				<h4>Highest Degree</h4>
				
				<div class="cgroup">
					<input type="radio" name="hdegree" value="B.E/B.Tech" checked="">

					<label for="">B.E/B.Tech</label>
				</div>
				<div class="cgroup">
					<input type="radio" name="hdegree" value="M.E/M.Tech" >
					<label for="">M.E/M.Tech</label>
				</div>
				<div class="cgroup">
					<input type="radio" name="hdegree" value="others"  >
					<label for="">Others</label>
				</div>

				<div class="vgroup">
					<label for="">Full name of the college <span>*</span></label>
					<input type="text" name="college_name" required >
				</div>
				<div class="vgroup">
					<label for="">Address and Place of the college <span>*</span></label>
					<input type="text" name="college_addr" required >
				</div>
				<div class="vgroup">
				<h4>Current Status</h4>
				
				<div class="cgroup">
					<input type="radio" name="college_status" value="student"  checked="">

					<label for="">Student</label>
				</div>
				<div class="cgroup">
					<input type="radio" name="college_status" value="employed" >
					<label for="">Employed</label>
				</div>
				<div class="cgroup">
					<input type="radio" name="college_status" value="unemployed" >
					<label for="">Unemployed</label>
				</div>
			</div>

			<h2>Course Details </h2>
			<div class="vgroup inline">
				<label for="">Select Course<span>*</span></label>
				<select name="course" id="course">
					<option value="">Select Course</option>
					<option value="classroom-and-online">Classroom Coaching+Online Live Classes</option>
					<option value="online">Online Live Classes</option>
				</select>
			</div>
			<div class="row">
				<div class="col">
					<div class="vgroup inline">
						<label for="">Center?<span>*</span></label>
						<select name="center" id="center">
							<option value="Chennai">Chennai</option>
							<option value="Coimbatore">Coimbatore</option>
							<option value="Others">Others</option>
						</select>
					</div>
				</div>
				<div class="col">
					<div class="vgroup inline">
						<label for="">Select Exam<span>*</span></label>
						<select name="exam" id="exam">
							<option value="IES+GATE+PSUs-2021">IES+GATE+PSUs-2021</option>
							<option value="GATE+PSUs-2021">GATE+PSUs-2021</option>
							<option value="IES+GATE+PSUs-2022">IES+GATE+PSUs-2022</option>
							<option value="GATE+PSUs-2022">GATE+PSUs-2022</option>
						</select>
					</div>
				</div>
			</div>
			<div class="vgroup inline">
				<label for="">Select Batch<span>*</span></label>
				<select name="batch" id="batch">
					<option value="Regular">Regular Batch</option>
					<option value="Weekend">Weekend Batch</option>
				</select>
			</div>
			<div class="vgroup inline">
				<label for="">Select Stream</label>
				<select name="stream" id="stream">
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


			<div class="vgroup inline">
				<label for="">Select Payment?<span>*</span></label>
				<select name="payment_type" id="payment-type">
					<option value="registration-fee">Registration Fee</option>
					<option value="full-payment">Full Payment</option>
				</select>
			</div>

            <div class="vgroup" id="total-price"></div>

			<div class="vgroup inline">
				<input type="checkbox" style="display: inline-block;width: 20px;">
				<label style="display: inline-block;position: relative;bottom: 10px">I agree with terms &amp; conditions
                  <span><a href="terms-and-conditions.php">read now</a></span>
				</label>
			</div>

			<div class="vgroup">
				<button class="btn-theme" name="submit" value="submit" id="btn-submit">Submit</button>
			</div>

		</form>
		</div>
	</div>
	<?php } ?>


	<?php if ($confirmation && $data) { ?>
		<div class="c-container spacer">
		<h2 class="title  text-center text-theme no-margin">
			Confirm Details &amp; Make Payment
		</h2>

		   <div class="confirm">
				<p>Name: <b>&nbsp;<?php echo $data['name'] ?></b></p>
				<p>Email: <b>&nbsp;<?php echo $data['email'] ?></b></p>
				<p>Mobile No: <b>&nbsp;<?php echo $data['phone'] ?></b></p>
				<p>Selected Course: <b>&nbsp;<?php echo $data['course'] ?></b></p>
				<p>Selected Center: <b>&nbsp;<?php echo $data['center'] ?></b></p>
				<p>Selected Exam: <b>&nbsp;<?php echo $data['exam'] ?></b></p>
				<p>Selected Batch: <b>&nbsp;<?php echo $data['batch'] ?></b></p>
				<p>Selected Stream: <b>&nbsp;<?php echo $data['stream'] ?></b></p>
				<p>Selected Payment:<b>&nbsp;<?php echo $data['payment_type'] ?></b></p>
				<p>Fee Payable: INR <b>&nbsp;<?php echo $fee_total ?> /-</b></p>
				<p></p>
				
			</div>

			<div class="vgroup">
				<form method="post"  style="display: inline-block;">
					<button class="btn-theme" name="cancel" value="cancel">Cancel</button>
			   </form>
			   <button class="btn-theme" id="rzp-button1">Proceed to Payment</button>
					
			</div>

		 </div>
	<?php } ?>



<?php include 'inc/footer.php' ?>
<script type="text/javascript">
	var course = $('#course').val();
	var payment_type;
	var exam = $('#exam').val();
	var batch = $('#batch').val();
	var stream = $('#stream').val();
	var center = $('#center').val();
	var fee;
 
	$('#course').on('change', function() {
	  course = this.value;
	  if (course=="online") {
	  	$('#payment-type').html('<option value="full-payment" selected>Full Payment</option>');
	  }else{
	  	$('#payment-type').html('<option value="registration-fee">Registration Fee</option><option value="full-payment">Full Payment</option>');
	  }

      showPrice()
    });

    $('#payment-type').on('change', function() {
      payment_type = this.value;
      console.log(payment_type);
      showPrice()
    });

    $('#exam').on('change', function() {
	  exam = this.value;
      showPrice()
    });

    $('#batch').on('change', function() {
      batch = this.value;
      showPrice()
    });
    $('#center').on('change', function() {
	  center = this.value;
      showPrice()
    });

    $('#stream').on('change', function() {
      stream = this.value;
      showPrice()
    });

	function showPrice(){
		if (course=="online") {
		  $('#center').prop('disabled', true);
		  $('#batch').prop('disabled', true);
		}else{
		  $('#center').prop('disabled', false);
		  $('#batch').prop('disabled', false);
		}
		 payment_type =$('#payment-type').val();
      getPrice();
	}

	function getPrice(){
		console.log(course+","+exam+","+batch+","+stream+","+center);
		$.ajax({
		    url: './inc/pricing.php',
		    method: "POST",
		    data: { course:course,exam:exam,batch:batch,stream:stream,center:center },
		    success: function(data) {
		      console.log(data)
		      if (data) {
		      	data =JSON.parse(data);
		      	var content="";
		      	if (data.message) {
		      	 content += '<p class="text-danger"><strong>'+data.message+'</strong></p>';
		      	}
      	    	if (course =="classroom-and-online") {
      	    		content += '<p><strong>Details: Classroom Coaching+Online Live Classes</strong></p>';
      	    	}else{
      	    		content += '<p><strong>Details:Online Live Classes</strong></p>';
      	    	}
      	    	content += '<p>Exam: '+exam+'</p>';
      	    	if (payment_type =="registration-fee") {
      	    		content += '<p>Course Fee: Rs. '+data.partial+'/-</p>';
      	    	}else{
      	    		content += '<p>Course Fee: Rs. '+data.full+'/-</p>';
      	    	}
      			if (course =="classroom-and-online" && payment_type=="registration-fee") {
      			content += '<p>Note: Due amount should be paid in a month of enrollment. Online live classes + Classroom coaching after lockdown is lifted is included in this course.</p>';
      		    }
      	        $("#total-price").html(content);
      	        if (payment_type =="registration-fee") fee = data.partial;
      	        else fee = data.full;
      	        fee=parseInt(fee);
      	        $("#fee_total").val(fee);
      	        if(!fee){
      	        	$("#btn-submit").attr("disabled", true);
      	        }else{
      	        	$("#btn-submit").attr("disabled", false);
      	        }
		      }
		    }
		});
	}
</script>

<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
	var fee =  parseInt(<?php echo $fee_total ?>) *100;

	var options = {
	    "key": "rzp_live_k72SiUL4jGMwwG",
	    "amount":fee,
	    "currency": "INR",
	    "name": "IES GATE ACADEMY",
	    "description": "IES GATE ACADEMY ENROLLMENT",
	    "image": "https://cdn.razorpay.com/logos/EzEHF4cQbZzeZ4_large.jpg",
	    "order_id": "", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
	    "callback_url": 'http://iesgateacademy.in/live/iesgate/payment-status.php',
	    "redirect": true,

	    "handler": function (response){
	         console.log(response);
	         console.log(response.razorpay_order_id);
	         console.log(response.razorpay_signature);
	         /*if (response.razorpay_payment_id) {
	         	location.href = 'http://localhost/iesgate/iesgate/payment-status.php?txt='+response.razorpay_payment_id
	         }*/

	        
	    },
	    "prefill": {
	        "name": "<?php echo $name; ?>",
	        "email": "<?php echo $email; ?>",
	        "contact": "<?php echo $phone; ?>"
	    },
	    "notes": {
	        "address": "Razorpay Corporate Office"
	    },
	    "theme": {
	        "color": "#F37254"
	    }
	};
	var rzp1 = new Razorpay(options);
	document.getElementById('rzp-button1').onclick = function(e){
	    rzp1.open();
	    e.preventDefault();
	}
</script>
</body>
</html>