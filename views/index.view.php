<?php require 'views/partials/head.php'; ?>

<h1>Submit Your Name</h1>

<form method="POST" action="/names">

	<input name="name"></input>
	<button type="submit">Submit</button>

</form>

<?php require 'views/partials/footer.php'; ?>