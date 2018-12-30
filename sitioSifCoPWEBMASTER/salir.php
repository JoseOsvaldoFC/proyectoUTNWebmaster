<script>
	alert("Sesión cerrada por favor identifiquese");		
</script>
<?php 
	session_start();
	session_destroy();
	include('formLogin.php');
?>