
<script type="text/javascript">
	function preventBack() {
		window.history.forward();
	}
	setTimeout("preventBack()", 0);
	window.onunload = function() {
		null;
	};
</script>

<?php
	session_start();
	session_destroy();
	header('location:donor_login.php');
?>
