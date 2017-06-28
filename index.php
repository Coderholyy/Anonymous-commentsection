<?php
	date_default_timezone_set('asia/kolkata');
	include 'database.php';
	include 'comments.inc.php';

?>


<!DOCTYPE html>
<html>
	<body>
		<?php
		echo "<form method='POST' action='".setComments($conn)."'>
				<input type='hidden' name='uid' value='Anonymous'></input>
				<input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'></input>
				<textarea name='message'></textarea><br>
				<button name='commentsubmit' type='submit'>COMMENTS</button>
			</form>";

			getcomments($conn);
		?>
	</body>


</html>