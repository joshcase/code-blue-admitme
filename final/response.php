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

		<div class="note">

			<div class="note-section">
				<h2>Admission Note</h1>
				<?php echo date('j/n/y H:i'); ?>
			</div>

			<div class="note-section">
				<h3><?php echo $_POST['last_name'] . ', ' . $_POST['first_name']; ?></h3>
				<div>Date of birth: <?php echo $_POST['date_of_birth']; ?></div>
				<div>Hospital ID: <?php echo $_POST['id']; ?></div>
				<div>Sex: <?php echo $_POST['sex']; ?></div>
			</div>

			<div class="note-section">
				<h3>Presenting Complaint</h3>
				<div><?php echo $_POST['presenting_complaint']; ?></div>
			</div>

			<div class="note-section">
				<h3>History of Presenting Complaint</h3>
				<div><?php echo $_POST['hx_presenting_complaint']; ?></div>
			</div>

			<div class="note-section">
				<h3>Past Medical History</h3>
				<div><?php echo $_POST['pmhx']; ?></div>
			</div>

			<div class="note-section">
				<h3>Medications</h3>
				<div><?php echo $_POST['medications']; ?></div>
			</div>

			<div class="note-section">
				<h3>Allergies</h3>
				<div><?php echo $_POST['allergies']; ?></div>
			</div>

			<div class="note-section">
				<h3>Family History</h3>
				<div><?php echo $_POST['fmhx']; ?></div>
			</div>

			<div class="note-section">
				<h3>Social History</h3>
				<div><?php echo $_POST['shx']; ?></div>
			</div>

			<div class="note-section">
				<h3>Examination</h3>
				<span>Heart rate: <?php echo $_POST['heart_rate']; ?> </span>
				<span>Blood pressure: <?php echo $_POST['blood_pressure']; ?> </span>
				<span>Respiratory rate: <?php echo $_POST['resp_rate']; ?> </span>
				<span>Temperature: <?php echo $_POST['temp']; ?> </span>
				<span>Oxygen saturation: <?php echo $_POST['oxygen_sats']; ?> </span>
				<div><?php echo $_POST['examination']; ?></div>
			</div>

			<div class="note-section">
				<h3>Impression</h3>
				<div><?php echo $_POST['impression']; ?></div>
			</div>

			<div class="note-section">
				<h3>Plan</h3>
				<div><?php echo $_POST['plan']; ?></div>
			</div>

		</div>

	</body>

</html>