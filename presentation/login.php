

<?php require './elements/header.php'; ?>

<div class="login">
	<h1>Login</h1>
		<form action="../controller/authenticate.php" method="post">
			<label for="login">
				<i class="fas fa-user"></i>
			</label>
			<input type="text" name="login" placeholder="login" id="login" required>
			<label for="password">
				<i class="fas fa-lock"></i>
			</label>
			<input type="password" name="password" placeholder="Password" id="password" required>
			<input type="submit" value="Login">
		</form>
</div>

<?php require './elements/footer.php'; ?>
