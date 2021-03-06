<?
// Get values from JSON

$input = json_decode(file_get_contents('php://input'), true);

$names = $input["names"];
$field_email = $input["field_email"];
$rsvp = $input["rsvp"];
$field_events_friday = $input['field_events_friday'];
$field_events_saturday = $input['field_events_saturday'];
$field_events_sunday = $input['field_events_sunday'];
$field_onsite = $input['field_onsite'];
$field_transportation = $input["field_transportation"];
$field_diet = $input['field_diet'];


// Build Email

$message = "
<strong>Names</strong><br>
$names
<br>
<br>

<strong>Email Address(es)</strong><br>
$field_email
<br>
<br>

<strong>RSVP</strong><br>
$rsvp
<br>
<br>

<strong>Events</strong><br>
Friday - $field_events_friday<br>
Saturday - $field_events_saturday<br>
Sunday - $field_events_sunday
<br>
<br>

<strong>Interested in Staying Onsite</strong><br>
$field_onsite
<br>
<br>

<strong>Has Transportation</strong><br>
$field_transportation
<br>
<br>

<strong>Dietary Restrictions</strong>
<br>
$field_diet
";

$to = 'bennaandrew@gmail.com';
$subject = "$rsvp - $names";
$headers = 'From: RSVP <noreply@andrewandbenna.com>' . "\r\n" .
			'Content-type: text/html; charset=iso-8859-1' . "\r\n" .
			'Reply-To: noreply@andrewandbenna.com' . "\r\n" .
			'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);


// Return responee

header('Content-Type: application/json');
echo json_encode(array('rsvp' => $rsvp, 'name' => $names))

?>
