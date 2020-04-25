<html>
<head>
	<?
		$page = "rsvp";
		$page_title = "RSVP";	
		include("include/header.php");
	?>
</head>
<body>

	<? include("include/nav.php") ?>
	
	<div class="main">

		<p>Thanks for RSVPing. We’ve just got a few questions below that’ll help us plan everything out. If you’re confused, have any questions, or just want to chat, get in touch!

		<form name="form_rsvp" id="form-rsvp">

			<label class="h2" for="field_names">your full name(s)</label>
			<textarea name="field_names" rows="2"></textarea>

			<label class="h2" for="field_email">Email Address(es)</label>
			<textarea name="field_email" rows="2"></textarea>
			
			<label class="h2" for="field_rvsp">are you coming?</label>
			<label class="selector">
				<input type="radio" name="field_rsvp" value="Yes" />
				<span>I will definitely 100% no take-backs be there.</span>
			</label>
			<label class="selector">
				<input type="radio" name="field_rsvp" value="No" />
				<span>I will not be there.</span>
			</label>

			<label class="h2">which events will you be attending?</label>
			<div class="info">Check out the <a href="/schedule">schedule</a> for more info about each day.</div>
			<label class="selector">
				<input type="checkbox" name="field_events_friday" />
				<span>Friday Night Pizza Hangout</span>
			</label>
			<label class="selector">
				<input type="checkbox" name="field_events_saturday" checked />
				<span>Saturday Wedding</span>
			</label>
			<label class="selector">
				<input type="checkbox" name="field_events_sunday" /> Sunday Brunch
			</label>

			<label class="h2" for="field_onsite">are you interested in staying on-site?</label>
			<div class="info">More info about on-site lodging can be found <a href="/stay">here</a>. First come, first serve. If you are interested, we'll get in touch with more details.</div>
			<label class="selector">
				<input type="radio" name="field_onsite" value="Yes" />
				<span>Yes</span>
			</label>
			<label class="selector">
				<input type="radio" name="field_onsite" value="No" />
				<span>No</span>
			</label>


			<label class="h2" for="field_transportation">will you have your own transportation?</label>
			<label class="selector">
				<input type="radio" name="field_transportation" value="Yes" />
				<span>Yes</span>
			</label>
			<label class="selector">
				<input type="radio" name="field_transportation" value="No" />
				<span>No</span>
			</label>

			<label class="h2" for="field_diet">dietary restrictions (optional)</label>
			<input type="text" name="field_diet" />

			<div class="error hide" style="color: #E00C32;"><br>Hold up. Looks like you forgot something.</div>
			<input id="rsvp-submit" name="submit" class="button" type="button" value="submit">

		</form>

	</div>

	<script type="text/javascript">
		var form = document.forms.form_rsvp;
		var submitButton = form.submit;
		var feedback = document.querySelector(".rsvp-feedback")
		var error = document.querySelector(".error")
		var main = document.querySelector(".main")
		
		submitButton.addEventListener("click", () => {

			var values = {
				names: form.field_names.value,
				field_email: form.field_email.value,
				rsvp: form.field_rsvp.value,
				field_events_friday: form.field_events_friday.checked ? "Yes" : "No",
				field_events_saturday: form.field_events_saturday.checked  ? "Yes" : "No",
				field_events_sunday: form.field_events_sunday.checked  ? "Yes" : "No",
				field_onsite: form.field_onsite.value,
				field_transportation: form.field_transportation.value,
				field_diet: form.field_diet.value != "" ? form.field_diet.value : "None"
			}

			if (form.field_rsvp.value == "No") {
				values.field_events_friday = "n/a"
				values.field_events_saturday = "n/a"
				values.field_events_sunday = "n/a"
				values.field_onsite = "n/a"
				values.field_transportation = "n/a"
				values.field_diet = "na/a"
			}
			
			if (values.rsvp 
				&& values.field_onsite 
				&& values.field_transportation 
				&& values.names != "") {

				fetch("/mail", {
					credentials: 'same-origin',
					method: 'POST',
					body: JSON.stringify(values),
					headers: new Headers({
						'Content-Type': 'application/json'
					}),
				}).then(response => response.json()).then(data => {
					if (data.rsvp == "Yes") main.innerHTML = `
						<div style="text-align:center;">Thanks for the response. Looking forward to seeing you!</div>
					`
					else if (data.rsvp == "No") main.innerHTML = `
						<div style="text-align:center;">Thanks for the response. You'll be missed!</div>
					`
				})
				
			} else {
				error.classList.remove("hide")
			}
			
		})
	</script>

</body>
</html>
