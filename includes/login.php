<?php include "db.php"; ?>

<?php 

	if (isset($_POST['login'])) {

		$username = mysqli_real_escape_string($connection, $_POST['username']);
		$password = mysqli_real_escape_string($connection, $_POST['password']);

		$query = "SELECT * FROM users WHERE username = '$username'";
		$show_user_info = mysqli_query($connection, $query);
		if (!$show_user_info) {
			die("Sorry! Query failed. " . mysqli_error($connection));
		}

		while ($row = mysqli_fetch_assoc($show_user_info)) {
			
			echo $user_id = $row['user_id'];

		}

	}

?>