<?php 

  function getPricing($course,$exam,$batch,$stream,$center)
  {
  	 $res = array(
			'partial' => 0,
			'full'=> 0,
			'enrollAlloed'=>false,
			'message'=>""
      );
  	 if ($course == "classroom-and-online" && $center =="Chennai") {
  	 	if ($exam =="IES+GATE+PSUs-2021" && $batch=="Regular" && in_array($stream,array("EC","EE","IN","CE","ME"
         ))) {
  	 		$res = array(
  	 			'partial' => 15000,
  	 			'full'=> 50000,
  	 			'enrollAlloed'=>true,
  	 			'message'=>""
  	 		  );
  	 	}

  	 	if ($exam == "GATE+PSUs-2021" && $batch=="Regular" && in_array($stream,array("EC","EE","IN","CE","ME"
        ))) {
  	 		$res = array(
  	 			'partial' => 10000,
  	 			'full'=> 40000,
  	 			'enrollAlloed'=>true,
  	 			'message'=>""
  	 		  );
  	 	}
  	 	if ($exam == "IES+GATE+PSUs-2021" && $batch=="Weekend" && in_array($stream,array("EC","EE","IN","CE","ME"
        ))) {

  	 		$res = array(
  	 			'partial' => 15000,
  	 			'full'=> 40000,
  	 			'enrollAlloed'=>true,
  	 			'message'=>""
  	 		  );
  	 	}
  	 	if ($exam == "GATE+PSUs-2021" && $batch=="Weekend" && in_array($stream,array("EC","EE","IN","CE","ME","CS","IT","CH","PE","BT","AE"))) {
  	 		$res = array(
  	 			'partial' => 10000,
  	 			'full'=> 25000,
  	 			'enrollAlloed'=>true,
  	 			'message'=>""
  	 		  );
  	 	}

  	 	if ($exam == "IES+GATE+PSUs-2022" && $batch=="Weekend" && in_array($stream,array("EC","EE","IN","CE","ME"
        ))) {
  	 		$res = array(
  	 			'partial' => 15000,
  	 			'full'=> 40000,
  	 			'enrollAlloed'=>true,
  	 			'message'=>""
  	 		  );
  	 	}
  	 	if ($exam == "GATE+PSUs-2022" && $batch=="Weekend" && in_array($stream,array("EC","EE","IN","CE","ME","CS","IT","CH","PE","BT","AE"))) {
  	 		 $res = array(
  	 			'partial' => 10000,
  	 			'full'=> 25000,
  	 			'enrollAlloed'=>true,
  	 			'message'=>""
  	 		  );
  	 	}
  	 	return $res;
  	 	
  	 }

  	 if($course == "classroom-and-online" && $center =="Coimbatore") {
  	 	if ($batch=="Weekend" && in_array($stream,array("EC","EE","IN","CE","ME"
         ))) {
  	 		 if ($exam=="IES+GATE+PSUs-2021") {
  	 		 	 $res = array(
	  	 			'partial' => 15000,
	  	 			'full'=> 40000,
	  	 			'enrollAlloed'=>true,
	  	 			'message'=>""
  	 		     );
  	 		 }
  	 		 if ($exam=="GATE+PSUs-2021") {
                $res = array(
	  	 			'partial' => 10000,
	  	 			'full'=> 25000,
	  	 			'enrollAlloed'=>true,
	  	 			'message'=>""
  	 		     );
  	 		 }
  	 		 if ($exam=="IES+GATE+PSUs-2022") {
  	 		 	$res = array(
	  	 			'partial' => 15000,
	  	 			'full'=> 40000,
	  	 			'enrollAlloed'=>true,
	  	 			'message'=>""
  	 		     );
  	 		 }
  	 		 if ($exam=="GATE+PSUs-2022") {
  	 		 	$res = array(
	  	 			'partial' => 10000,
	  	 			'full'=> 25000,
	  	 			'enrollAlloed'=>true,
	  	 			'message'=>""
  	 		     );
  	 		 }
  	 	 }

  	 	 if ($batch=="Weekend" && !in_array($stream,array("EC","EE","IN","CE","ME"
         ))){
  	 	 	 $res = array(
				'partial' => 0,
				'full'=> 0,
				'enrollAlloed'=>false,
				'message'=>"This Street is not available in Coimbatore"
            );
         }

  	 	 if($batch == "Regular"){
          $res = array(
			'partial' => 0,
			'full'=> 0,
			'enrollAlloed'=>false,
			'message'=>"Regular Batch not available in Coimbatore"
            );
  	 	}
  	 }

  	 if ($course == "online") {
  	 	if ($exam=="IES+GATE+PSUs-2021" && in_array($stream,array("EC","EE","IN","CE","ME"
        ))) {
  	 		 	 $res = array(
	  	 			'partial' => 0,
	  	 			'full'=> 25000,
	  	 			'enrollAlloed'=>true,
	  	 			'message'=>""
  	 		     );
  	 		 }
  	 		 if ($exam=="GATE+PSUs-2021" && in_array($stream,array("EC","EE","IN","CE","ME","CS","IT","CH","PE","BT","AE"))) {
                $res = array(
	  	 			'partial' => 0,
	  	 			'full'=> 20000,
	  	 			'enrollAlloed'=>true,
	  	 			'message'=>""
  	 		     );
  	 		 }
  	 		 if ($exam=="IES+GATE+PSUs-2022" && in_array($stream,array("EC","EE","IN","CE","ME"
        ))) {
  	 		 	$res = array(
	  	 			'partial' => 0,
	  	 			'full'=> 30000,
	  	 			'enrollAlloed'=>true,
	  	 			'message'=>""
  	 		     );
  	 		 }
  	 		 if ($exam=="GATE+PSUs-2022" && in_array($stream,array("EC","EE","IN","CE","ME","CS","IT","CH","PE","BT","AE"))) {
  	 		 	$res = array(
	  	 			'partial' => 0,
	  	 			'full'=> 22000,
	  	 			'enrollAlloed'=>true,
	  	 			'message'=>""
  	 		     );
  	 		 }
  	  }
  	  return $res;
  }

  if ($_SERVER['REQUEST_METHOD'] === 'POST' &&isset($_POST['course'])) {
  	$course = $_POST['course'];
  	$exam = $_POST['exam'];
  	$batch = $_POST['batch'];
  	$stream = $_POST['stream'];
  	$center = $_POST['center'];
  	$a_price = getPricing($course,$exam,$batch,$stream,$center);
  	echo json_encode($a_price);
  }

 ?>