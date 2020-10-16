<html lang="en">

	<head>
		<!--
		In the <head> tag, you may choose to load any files or other assets required for your page. You might also choose to set some page settings, such as the <title>.

		The text in here will not be visible in the user's browser.

		For now, let's put some settings in and load some files that I think are good for every beginner:
		-->

		<title>AdmitMe</title>

		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
		<link rel="stylesheet" type="text/css" href="style.css">
		<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">

		<meta name="viewport" content="width=device-width, initial-scale=1">

	</head>


	<body>
		<!--
		The actual content of your web page belongs in here, in the <body> tag.
		
		Your code starts below here:
		-->

		<div class="titles">
			<h1>AdmitMe</h1>
			<h2>Admission Note Generator</h2>
		</div>

		<div class="input-section">

			<form method="POST" action="response.php">

				<div class="input-group">
					<h3 class="input-label">Hospital ID</h3>
					<input type="text" name="id">
				</div>

				<div class="input-group">
					<h3 class="input-label">First name</h3>
					<input type="text" name="first_name">
				</div>

				<div class="input-group">
					<h3 class="input-label">Last name</h3>
					<input type="text" name="last_name">
				</div>

				<div class="input-group">
					<h3 class="input-label">Sex</h3>
					<select name="sex">
						<option>Male</option>
						<option>Female</option>
						<option>Other</option>
					</select>
				</div>

				<div class="input-group">
					<h3 class="input-label">Date of Birth</h3>
					<input type="date" name="date_of_birth">
				</div>

				<div class="input-group">
					<h3 class="input-label">Presenting Complaint</h3>
					<input type="text" name="presenting_complaint">
				</div>

				<div class="input-group">
					<h3 class="input-label">History of Presenting Complaint</h3>
					<textarea name="hx_presenting_complaint"></textarea>
				</div>

				<div class="input-group">
					<h3 class="input-label">Past Medical History</h3>
					<textarea name="pmhx"></textarea>
				</div>

				<div class="input-group">
					<h3 class="input-label">Medications</h3>
					<textarea name="medications"></textarea>
				</div>

				<div class="input-group">
					<h3 class="input-label">Allergies</h3>
					<textarea name="allergies"></textarea>
				</div>

				<div class="input-group">
					<h3 class="input-label">Family History</h3>
					<textarea name="fmhx"></textarea>
				</div>

				<div class="input-group">
					<h3 class="input-label">Social History</h3>
					<textarea name="shx"></textarea>
				</div>

				<div class="input-group">
					<h3 class="input-label">Observations</h3>
					<div class="observation">
						<span>Heart rate</span><input type="number" name="heart_rate">
					</div>
					<div class="observation">
						<span>Blood pressure</span><input type="text" name="blood_pressure">
					</div>
					<div class="observation">
						<span>Respiratory rate</span><input type="number" name="resp_rate">
					</div>
					<div class="observation">
						<span>Temperature</span><input type="number" name="temp" step="0.1">
					</div>
					<div class="observation">
						<span>Oxygen saturation</span><input type="number" name="oxygen_sats">
					</div>
				</div>

				<div class="input-group">
					<h3 class="input-label">Examination</h3>
					<textarea name="examination"></textarea>
				</div>

				<div class="input-group">
					<h3 class="input-label">Impression</h3>
					<input type="text" name="impression">
				</div>

				<div class="input-group">
					<h3 class="input-label">Plan</h3>
					<textarea name="plan"></textarea>
				</div>

				<div class="input-group">
					<button type="submit" class="submit">Generate Admission Note</button>
				</div>

			</form>

		</div>

	</body>

</html>