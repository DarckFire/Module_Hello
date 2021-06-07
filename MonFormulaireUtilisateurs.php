<?php
	include 'MySQLfonction.php';
	include 'MaFonctionTableaux.php';
	
	$id = $_GET["id"];
	if ($id == 0) {
		$crud = new crud();
		$liste = $crud->getNewUser();
		$action = "CREATE";
		$libelle = "Creer";
	} 
	else {
		$test = new test();
		$liste = $test->readUser($id);
		$action = "UPDATE";
		$libelle = "Mettre a jour";
	}
	

?>

<html>
	<header>
		<link rel="stylesheet" href="assets/style/style.css">
	</header>
	<body>

			
		<form action="MesFunctionFormulaire.php" method="GET">
			<p>	
				<a href="index.php">
					Liste des langues
				</a>

				<input type="hidden" name="id" value="<?php echo $liste['id'];  ?>"/>
				<input type="hidden" name="action" value="<?php echo $action;  ?>"/>
				<div>
					<label for="name">
						Nom :
					</label>
					<input type="text" id="nom" name="nom" value="<?php echo $liste['nom'];  ?>"> 
				</div>

				<div>
					<label for="prenom">
						Prenom :
					</label>
					<input type="text" id="traduction" name="traduction" value="<?php echo $liste['traduction'];  ?>">
				</div>

				</div>
				<div class="button">
					<button type="submit"><?php echo $libelle;  ?></button>
				</div>

			</p>
		</form>
		
		<br>

		<?php if ($action!="CREATE") { ?>
			<form action="MesFunctionFormulaire.php" method="GET">
				<input type="hidden" name="action" value="DELETE"/>
				<input type="hidden" name="id" value="<?php echo $liste['id'];  ?>"/>
				<p>
					<div class="button">
						<button type="submit">
							Supprimer
						</button>
					</div>
				</p>
			</form>
		<?php } ?>

	</body>
</html>