<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
		<title>Buy Your Way to a Better Education!</title>
		<link href="buyagrade.css" type="text/css" rel="stylesheet">
	</head>
	<body>
				<?php
						if (!isset($_POST['Name'])||!isset($_POST['Section'])||!isset($_POST['cardNumber'])||!isset($_POST['cardtype'])) {
				 ?>
		<h1>Sorry!</h1>
		<p>
			You didn't fill out the form completely.
			<a href="buyagrade.php">Try again?</a>
		</p>
		<?php
	      } else {
		 ?>
		<h1>Thanks, sucker!</h1>

		<p>Your information has been recorded.</p>

		<dl>
			<dt>Name</dt>
			<dd>
				<?= $_POST['Name'] ?>
			</dd>

			<dt>Section</dt>
			<dd><?= $_POST['Section']  ?></dd>

			<dt>Credit Card</dt>
			<dd><?=$_POST['cardNumber'] ?>; (<?=$_POST['cardtype'] ?>)</dd>
		</dl>

		<?php
				$data = $_POST['Name'].";".$_POST['Section'].";".$_POST['cardNumber'].";".$_POST['cardtype']."\n";
				file_put_contents("sucker.txt",$data,FILE_APPEND);
		 ?>
		 <pre>
			 <?=file_get_contents("sucker.txt"); ?>
		 </pre>
  <script type="text/javascript" async="" src="./Buy Your Way to a Better Education!_files/1fa16f6ccbee745a0c.js">
	</script>
	<?php
} ?>
</body>
</html>
