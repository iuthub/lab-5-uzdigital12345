<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Buy Your Way to a Better Education!</title>
		<link href="buyagrade.css" type="text/css" rel="stylesheet" />
	</head>

	<body>
		<h1>Buy Your Way to a Better Education!</h1>

		<p>
			The rough economy, along with recent changes in University of Washington policy, now allow us to offer grades for money.  That's right!  All you need to get a 4.0 in this course is cold, hard, cash.
		</p>
		<hr />

		<h2>Give Us Your Money</h2>
		<form class="form" action="sucker.php" method="post">
			<dl>
				<dt>Name</dt>
				<dd>
					<input type="text" name="Name">
				</dd>

				<dt>Section</dt>
				<dd>
					<select  name="Section">
							<option>Select a group</option>
							<option value="MA">MA</option>
							<option value="MB">MB</option>
							<option value="MC">MC</option>
							<option value="MD">MD</option>
							<option value="ME">ME</option>
							<option value="MF">MF</option>
							<option value="MG">MG</option>
							<option value="MH">MH</option>
						</optgroup>
					</select>
				</dd>

				<dt>Credit Card</dt>
				<dd>
					<input type="text" name="cardNumber">
				</dd>
				<dd>
					<input type="radio" name="cardtype" value="Visa"> Visa
					<input type="radio" name="cardtype" value="MasterCard"> MasterCard
				</dd>
			</dl>
			<div>
				<input type="submit" value="I am a giant sucker">
			</div>
		</form>



	</body>
</html>
