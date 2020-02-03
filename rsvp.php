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

		<form name="form_rsvp" id="form-rsvp">
			<label class="h2" for="field_names">Your full names</label>
			<textarea name="field_names" rows="3">Andrew</textarea>

			<label class="h2" for="field_rvsp">Are you coming?</label>
			<label class="selector">
				<input type="radio" name="field_rsvp" value="Yes" checked />
				<span>I will definitely 100% no take-backs be there.</span>
			</label>
			<label class="selector">
				<input type="radio" name="field_rsvp" value="No" />
				<span>I will not be there.</span>
			</label>

			<label class="h2">Which events will you be attending?</label>
			<label class="selector">
				<input type="checkbox" name="field_events_friday" />
				<span>Friday Night Pizza Hangout</span>
			</label>
			<label class="selector">
				<input type="checkbox" name="field_events_saturday" checked disabled />
				<span>Saturday Wedding</span>
			</label>
			<label class="selector">
				<input type="checkbox" name="field_events_sunday" />
				Sunday Lunch
			</label>
			<span>Check out the <a href="/schedule">schedule</a> for more info about each day.</span>

			<label class="h2" for="field_diet">Dietary restrictions (optional)</label>
			<input type="text" name="field_diet" />

			<div class="feedback error hide" style="display: none;"><br>looks like you forgot something</div>
			<input id="rsvp-submit" name="submit" class="button" type="button" value="submit">
		</form>

	</div>

	<script type="text/javascript">
		var form = document.forms.form_rsvp;
		var submitButton = form.submit;
		
		submitButton.addEventListener("click", function() {

			var values = {
				names: form.field_names.value,
				rsvp: form.field_rsvp.value,
				field_events_friday: form.field_events_friday.checked ? "Yes" : "No",
				field_events_saturday: form.field_events_saturday.checked  ? "Yes" : "No",
				field_events_sunday: form.field_events_sunday.checked  ? "Yes" : "No",
				field_diet: form.field_diet.value
			}
			
			if (values.rsvp && values.names != "") {
				fetch("/mail", {
					credentials: 'same-origin',
					method: 'POST',
					body: JSON.stringify(values),
					headers: new Headers({
						'Content-Type': 'application/json'
					}),
				}).then(response => response.json()).then( data => {
					console.log(data)
				})
			} else {
				document.querySelector(".error").style.display = "block";
			}
			
		});
	</script>

</body>
</html>