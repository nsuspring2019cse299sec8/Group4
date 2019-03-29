<?php require_once("../resources/config.php"); ?>
<?php include(TEMPLATE_FRONT . DS . "header.php") ?>
<?php include(TEMPLATE_FRONT . DS . "top_nav.php") ?>


  <div class="container">
	<div class="jumbotron">
		<h1 class="text-center">

      <?php activate_user() ?> </h1> <!--activation link for user's email --> <!-- used in login_functions_users --> 

	</div>


<?php include(TEMPLATE_FRONT . DS . "footer.php") ?>
