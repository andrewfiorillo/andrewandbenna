<html>
<head>
	<?
		$page = "rsvp";
		$page_title = "RSVP";
	?>
		
	<? include("include/header.php") ?>
</head>
<body>
	
	<? include("include/nav.php") ?>
	
	<div class="main">

		<p>Thanks for RSVPing. We’ve just got a few questions below that’ll help us plan everything out. If you’re confused, have any questions, or just want to chat, <a href="">get in touch</a>!</p>

		<form id="form-rsvp">
			<label class="h2" for="field-names">Your full names</label>
			<textarea id="field-names" name="field-names" rows="3"></textarea>

			<label class="h2" for="field-rvsp">Are you coming?</label>
			<label class="selector">
				<input type="radio" name="field-rsvp" id="rsvp-yes" />
				<span>I will definitely 100% no take-backs be there.</span>
			</label>
			<label class="selector">
				<input type="radio" name="field-rsvp" id="rsvp-no" />
				<span>I will not be there.</span>
			</label>

			<label class="h2" for="field-events">Which events will you be attending?</label>
			<label class="selector">
				<input type="checkbox" name="field-events" id="event-friday" />
				<span>Friday Night Pizza Hangout</span>
			</label>
			<label class="selector">
				<input type="checkbox" name="field-events" id="event-saturday" />
				<span>Saturday Wedding</span>
			</label>
			<label class="selector">
				<input type="checkbox" name="field-events" id="event-sunday" />
				Sunday Lunch
			</label>
			<span>Check out the <a href="/schedule">schedule</a> for more info about each day.</span>

			<label class="h2" for="field-diet">Dietary restrictions (optional)</label>
			<input type="text" id="field-diet" name="field-diet" />

			<input class="button" type="submit" value="submit">
		</form>

	</div>
	
</body>
</html>