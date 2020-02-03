<?
// Get values from JSON

$input = json_decode(file_get_contents('php://input'), true);
$names = $input["names"];
$rsvp = $input["rsvp"];
$field_events_friday = $input['field_events_friday'];
$field_events_saturday = $input['field_events_saturday'];
$field_events_sunday = $input['field_events_sunday'];
$field_diet = $input['field_diet'];


// Build Email

$to = 'fiorilloaj@gmail.com';
$subject = "RSVP: $rsvp";


// Message

$message = "
Names:
$names

RSVP:
$rsvp

Events:

Friday - $field_events_friday
Saturday - $field_events_saturday
Friday - $field_events_sunday

Dietary Restrictions:
$field_diet
";

// error_log($message);

$headers = 'From: andrewandbenna <mail@andrewandbenna.com>' . "\r\n" .
			'Reply-To: bennaandrew@gmail.com' . "\r\n" .
			'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);





	// return "foo";

	// error_log(print_r($input, true));

	// $data = '{
	// 	"name": "Aragorn",
	// 	"race": "Human"
	// }';
	
	// $character = json_decode($data);
	// echo $character->name;

	
	// the message
	// $msg = "First line of text\nSecond line of text";

	// // use wordwrap() if lines are longer than 70 characters
	// $msg = wordwrap($msg,70);

	// // send email
	// mail("fiorilloaj@gmail.com","My subject",$msg);

	// error_log(print_r($input, true));
	// error_log($input["names"]);
header('Content-Type: application/json');
echo json_encode($input);

?>