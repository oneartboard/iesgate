<?php 
	 function sendEmail($data,$type)
	 {
	     $subject = "";
	      if ($type =="enquiry") {
	         $subject = 'Enquiry From '.$data['name'];
	       }else{
	       	 $subject = 'New Enroll From '.$data['name'];
	       }
	     $message ="";
		$to      = 'rajnish42413@gmail.com';
		$from      = $data['email'];

		$headers = "MIME-Version: 1.0" . "\r\n"; 
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 

	    if ($type =="enquiry") {
	       $message = '<html> 
				    <head> 
				        <title>'.$subject.'</title> 
				    </head> 
				    <body> 
				    <h1>'.$subject.'</h1>
	 				<table cellspacing="0" style="border: 2px dashed #FB4314; width: 100%;"> 
	 				    <tr> 
	 				        <th>Name:</th><td>'.$data['name'].'</td> 
	 				    </tr> 
	 				    <tr> 
	 				        <th>Email:</th><td>'.$data['email'].'</td> 
	 				    </tr> 
	 				    <tr> 
	 				        <th>Mobile No:</th><td>'.$data['phone'].'</td> 
	 				    </tr> 
	 				    <tr> 
	 				        <th>Course:</th><td>'.$data['course'].'</td> 
	 				    </tr> 
	 				    <tr> 
	 				        <th>Center:</th><td>'.$data['exam'].'</td> 
	 				    </tr> 
	 				    <tr> 
	 				        <th>Batch:</th><td>'.$data['batch'].'</td> 
	 				    </tr> 
	 				    <tr> 
	 				        <th>Stream:</th><td>'.$data['stream'].'</td> 
	 				    </tr> 
	 				    <tr> 
	 				        <th>Message:</th><td>'.$data['message'].'</td> 
	 				    </tr> 
	 				</table> 
	 				</body> 
              </html>'; 
	 	 }else{
 		       $message = '<html> 
 					    <head> 
 					        <title>'.$subject.'</title> 
 					    </head> 
 					    <body> 
 					    <h1>'.$subject.'</h1>
 		 				<table cellspacing="0" style="border: 2px dashed #FB4314; width: 100%;"> 
 		 				    <tr> 
 		 				        <th>Name:</th><td>'.$data['name'].'</td> 
 		 				    </tr> 
 		 				    <tr> 
 		 				        <th>Email:</th><td>'.$data['email'].'</td> 
 		 				    </tr> 
 		 				    <tr> 
 		 				        <th>Mobile No:</th><td>'.$data['phone'].'</td> 
 		 				    </tr> 
 		 				    <tr> 
 		 				        <th>Course:</th><td>'.$data['course'].'</td> 
 		 				    </tr> 
 		 				    <tr> 
 		 				        <th>Center:</th><td>'.$data['exam'].'</td> 
 		 				    </tr> 
 		 				    <tr> 
 		 				        <th>Batch:</th><td>'.$data['batch'].'</td> 
 		 				    </tr> 
 		 				    <tr> 
 		 				        <th>Stream:</th><td>'.$data['stream'].'</td> 
 		 				    </tr> 
 		 				    <tr> 
 		 				        <th>Payment Type:</th><td>'.$data['payment_type'].'</td> 
 		 				    </tr>
 		 				     <tr> 
 		 				        <th>Total Amount:</th><td>INR '.$data['fee'].'</td> 
 		 				    </tr> 
 		 				</table> 
 		 				</body> 
 	              </html>';
	 	     }
	 	     $headers = "MIME-Version: 1.0" . "\r\n"; 
			  if ($data && $subject && $type && $to) {
			  	 $headers  .= 'From: '.$from.'' . "\r\n" .
			          'Reply-To: '.$from.'' . "\r\n" .
			          'X-Mailer: PHP/' . phpversion();
			       mail($to, $subject, $message, $headers);
			       echo true;
			  }
	 }


	  function sendSMS($phone,$type=null)
	  {
	  	$message ="";
	  	if ($type =="enquiry") {
	  	$message="Thank you for your enquiry. We will get back to you shortly. Call to 9445017000 for quick response. Regards IES GATE ACADEMY";
	  	}else{
	  	$message="Thank you for your enrollment. We will get back to you shortly. Call to 9445017000 for quick response. Regards IES GATE ACADEMY";
	    }

	  	$url = 'http://sms.adeep.in/api/v4/?api_key=A1b509a4a9cd046eb888085ad8192387d&method=sms&sender=IGADMY&to='.$phone.'&message='.$message.'';
	 	$ch = curl_init($url);
	 	curl_setopt($ch, CURLOPT_POST, 1);
	 	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	 	$response = curl_exec($ch);
	 	curl_close($ch);
	  }
      
 ?>