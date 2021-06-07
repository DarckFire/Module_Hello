<html lang="fr">
    <head>
        <title>
         My Admin
        </title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />

        <!-- link boostraps css -->
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css.map">

        <!-- linnk boostraps js -->
        <script src="assets/bootstrap/js/bootstrap.js"></script>
        <script src="assets/bootstrap/js/bootstrap.js.map"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/bootstrap/js/jquery-slim.min.js"></script>
        <script src="assets/bootstrap/js/popper.min.js"></script>
        <script src="assets/bootstrap/js/util.js"></script>
    </head>
    <body>
        <form method="POST">

            <label>
                <u>
                    <b>
                        Choisir votre langue:
                    </b>
                </u>
            </label>

            <br>
        
            <!-- drop-down list-->
            <?php
            require('connexion_bdd.php'); //Connexion of the DataBase
            $sql = "select* From langue";
            $result = $connect_bdd->query($sql);


            if ($result->num_rows > 0) { //si result affiche un nombre de ligne suppérieur à 0
                echo "<select name='langues'>";
                    foreach ($result as $k => $v) {
                        echo " <option value= '". $v['traduction']."'>";
                        echo $v['nom'];
                        echo " </option>";
                    }
                echo "</select>";
            } 

            // else {
            //     echo "pas de result";
            // }

            $connect_bdd->close();
            ?>

            <!-- end drop-down list  -->
            <input type='text' name='prenom' placeholder='Prénom'></input>
            <input type='submit' name='btnValider' value="Valider"></input>

            <br>

            <?php
             if (isset($_POST['btnValider'])) {
                $prenom = $_POST['prenom'];
                $langue = $_POST['langues'];
                echo $langue . " ";
                echo $prenom;
             }
            ?>

        </form>

        <a href=index.php?>
         Partie Admin
        </a> 
    </body>
</html>





