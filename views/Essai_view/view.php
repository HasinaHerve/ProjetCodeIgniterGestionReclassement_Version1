<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
</head>
<body>

<div id="container">
	<h1> <?php echo $this->session->userdata('alert'); ?></h1>

	<form method="POST" action=<?php echo base_url().'Essai/valider';?>>
		<input type="text" name="nom"></input>
		<?php echo form_error('nom'); ?>
		<button name="">valider</button>
	</form>
	<form method="POST" action=<?php echo base_url().'Essai/retour';?>>
		<input type="submit" name="ret" value="retour"></input>
	</form>
</body>
</html>
