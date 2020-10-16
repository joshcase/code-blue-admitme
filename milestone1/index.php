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

			<div class="input-group">
				<h3 class="input-label">Hospital ID</h3>
				<input type="text">
			</div>

			<div class="input-group">
				<h3 class="input-label">First name</h3>
				<input type="text">
			</div>
			
			<div class="input-group">
				<h3 class="input-label">Last name</h3>
				<input type="text">
			</div>

			<div class="input-group">
				<h3 class="input-label">Sex</h3>
				<select>
					<option>Male</option>
					<option>Female</option>
					<option>Other</option>
				</select>
			</div>

			<div class="input-group">
				<h3 class="input-label">Date of Birth</h3>
				<input type="date">
			</div>

			<div class="input-group">
				<h3 class="input-label">Presenting Complaint</h3>
				<input type="text">
			</div>
			
		</div>
		
	</body>

</html>