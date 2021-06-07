<?php
	include 'MySQLfonction.php';
	include 'MaFonctionTableaux.php';
	
    $action = $_GET["action"];
	
	if ($action == "DELETE") {
		$id = $_GET["id"];
	}

	else {
		$id = $_GET["id"];
		$nom = $_GET["nom"];
		$traduction = $_GET["traduction"];	  	
	}

	if ($action == "CREATE") {
		$crud = new crud();
	    $liste = $crud->createUser($nom, $traduction);
		echo "Langue Ajoutée <br>";
		echo "<a href='index.php'>Liste des langues</a>";
	}

	if ($action == "UPDATE") {
	    $update = new update();
	    $liste = $update->updateUser($id, $nom, $traduction);
		echo "Langue Mise à jour <br>";
		echo "<a href='index.php'>Liste des langues</a>";
	}

	if ($action == "DELETE") {
		$delete = new delete();
	    $liste = $delete->deleteUser($id);
		echo "Langue Supprimé <br>";
		echo "<a href='index.php'>Liste des langues</a>";
	}
	
?>