<?php

if(isset($_GET['send_notification'])){
   send_notification ();
}

function send_notification($asignacion)
{
define( 'API_ACCESS_KEY', 'AAAAaJlplt0:APA91bEk5QSgsJ02EHWHYoBy3SUIj4NU5mX4KCm958CkhlHJfqDA9MXp2AeZlRGFRgrn2oCcWvwbeR_auFKE6JSUHmFeAdmxWWZy1l8Y4YjRPzbfWx_5VO_Jpx15pkRmRJdOnPzytHZ2');
  $registrationIds = " ";
    if($asignacion=="Carlos Chavez"){
        $registrationIds ='cgEmcXqv3Ds:APA91bFjc49YYSD3Ac0tJCOzbuKP30zC-U-OhgeYVNpR0BOSLneqyFsAH3DNyBCUwcwahItUdNsUWWUGo-2qRTF8hWao5a65yt1j-I58NmM3-YCbiZh41bpgDmWrjZM2az2wG318frPK';
    }
#prep the bundle
     $msg = array
          (
		'body' 	=> 'Tienes nuevas tareas asignadas',
		'title'	=> 'Mantenimiento',
             	
          );
	$fields = array
			(
				'to'		=> $registrationIds,
				'notification'	=> $msg
			);
	
	
	$headers = array
			(
				'Authorization: key=' . API_ACCESS_KEY,
				'Content-Type: application/json'
			);
#Send Reponse To FireBase Server	
		$ch = curl_init();
		curl_setopt( $ch,CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send' );
		curl_setopt( $ch,CURLOPT_POST, true );
		curl_setopt( $ch,CURLOPT_HTTPHEADER, $headers );
		curl_setopt( $ch,CURLOPT_RETURNTRANSFER, true );
		curl_setopt( $ch,CURLOPT_SSL_VERIFYPEER, false );
		curl_setopt( $ch,CURLOPT_POSTFIELDS, json_encode( $fields ) );
		$result = curl_exec($ch );
		curl_close( $ch );
}
?>