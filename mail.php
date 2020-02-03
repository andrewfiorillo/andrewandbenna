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
$subject = "$rsvp - $names";


// Message

$message = "
<strong>Names</strong><br>
$names
<br>
<br>

<strong>RSVP</strong><br>
$rsvp
<br>
<br>

<strong>Events</strong><br>
Friday - $field_events_friday<br>
Saturday - $field_events_saturday<br>
Friday - $field_events_sunday
<br>
<br>

<strong>Dietary Restrictions</strong>
<br>
$field_diet
";

$headers = 'From: RSVP <mail@andrewandbenna.com>' . "\r\n" .
			'Content-type: text/html; charset=iso-8859-1' . "\r\n" .
			'Reply-To: bennaandrew@gmail.com' . "\r\n" .
			'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);


// Return responee

header('Content-Type: application/json');
echo json_encode($input);

?>
