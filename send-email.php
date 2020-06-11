<?php
	 function sendEmail($data,$type)
	 {
	     $subject = "";
	     if ($type =="enquiry") {
	         $subject = 'Enquiry From '.$data['name'];
	       }
	     else{
	       	 $subject = 'New Enroll From '.$data['name'];
	       }
	     $to      = 'pranaypydi@gmail.com';
	     $from      = $data['email'];
	     $message = '<p>Name: <b>&nbsp'.$data['name'].'</b></p>
	 				<p>Email: <b>&nbsp;'. $data['email'] .'</b></p>
	 				<p>Mobile No: <b>&nbsp;'. $data['phone'] .'</b></p>
	 				<p>Selected Course: <b>&nbsp;'. $data['course'] .'</b></p>
	 				<p>Selected Center: <b>&nbsp;'. $data['center'] .'</b></p>
	 				<p>Selected Exam: <b>&nbsp;'. $data['exam'] .'</b></p>
	 				<p>Selected Batch: <b>&nbsp;'. $data['batch'] .'</b></p>
	 				<p>Selected Stream: <b>&nbsp;'. $data['stream'] .'</b></p>
	 				<p>Message: <b>&nbsp;'. $data['message'] ?? " " .'</b></p>
	 				';
	 			  if ($data && $subject && $type && $to) {
	 			  	 $headers = 'From: '.$from.'' . "\r\n" .
	 			          'Reply-To: '.$from.'' . "\r\n" .
	 			          'X-Mailer: PHP/' . phpversion();
	 			       mail($to, $subject, $message, $headers);
	 			       echo true;
	 			  }
	 }
	  function sendSMS($phone)
	  {
	  	$url = 'http://sms.adeep.in/api/v4/?api_key=A1b509a4a9cd046eb888085ad8192387d&method=sms&sender=IGADMY&to='.$phone.'&message=Thank you for your enquiry. we will get back to you .Regards IES Academy';
	 	$ch = curl_init($url);
	 	curl_setopt($ch, CURLOPT_POST, 1);
	 	curl_setopt($ch, CURLOPT_POSTFIELDS, $xml);
	 	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	 	$response = curl_exec($ch);
	 	curl_close($ch);
	  }
 ?>