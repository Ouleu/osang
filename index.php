<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>100% pour sang &middot; Twitter Bootstrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Tidi Traore" >

    <!-- CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <style type="text/css">

      /* Sticky footer styles
      -------------------------------------------------- */

      html,
      body {
        height: 100%;
        /* The html and body elements cannot have any padding or margin. */
      }

      /* Wrapper for page content to push down footer */
      #wrap {
        min-height: 100%;
        height: auto !important;
        height: 100%;
        /* Negative indent footer by it's height */
        margin: 0 auto -60px;
      }

      /* Set the fixed height of the footer here */
      #push,
      #footer {
        height: 60px;
      }
      #footer {
        background-color: #f5f5f5;
      }

      /* Lastly, apply responsive CSS fixes as necessary */
      @media (max-width: 767px) {
        #footer {
          margin-left: -20px;
          margin-right: -20px;
          padding-left: 20px;
          padding-right: 20px;
        }
      }



      /* Custom page CSS
      -------------------------------------------------- */
      /* Not required for template or sticky footer method. */

      .container {
        width: auto;
        max-width: 680px;
      }
      .container .credit {
        margin: 20px 0;
      }

    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="../assets/ico/favicon.png">
  </head>

  <body>


    <!-- Part 1: Wrap all page content here -->
    <div id="wrap">

      <!-- Begin page content -->
      <div class="container">
        <div class="page-header">
          <h1>Sang pour sang donateur</h1>
          
          <?php
    if(isset($_POST["valider"]) && ($_POST["valider"])=="valider") {
    	
    	
    	//connection base de données
mysql_connect($server = "localhost", $username = "root", $password = "tidiane") or die("connexion serveur impossible");
mysql_select_db("osang") or die("connexion bd impossible");


$grpsang=$_POST["groupesanguin"];
$nom=$_POST["nom"];
$prenom=$_POST["prenom"];
$mail=$_POST["mail"];
$contact=$_POST["contact"];
$localisation=$_POST["localisation"];
$plusinfo=$_POST["plus_info"];

if(!empty($grpsang) && !empty($nom) && !empty($prenom) && !empty($mail) && !empty($contact) && !empty($localisation) )  {
	//requête d'insertion de données dans la bd
	$sql="insert into donnateur values('$mail','$nom','$prenom','$contact','$localisation','$plusinfo','$grpsang')";
	mysql_query($sql);?>
	<div class="alert alert-success"> <a href="#" class="close" data-dismiss="alert"> &times; </a> Merci pour votre enregistrement, votre action pourra sauver des vies </div>
	<?php
	
}
    		
    }
    	
    ?>
          
          
          
        </div>
        <form action="index.php" method="post">
          <fieldset>
              <legend>Merci de nous faire part de votre groupe sanguin.</legend>
              <label>Groupe sanguin</label>
              <select id="groupesanguin" name="groupesanguin">
                
                <option value="a+">
                A+
                </option>
                <option value="a-">
                A-
                </option>
                <option value="b+">
                B+
                </option>
              
                <option value="b-">
                B-
                </option>
                <option value="ab+">
                AB+
                </option>
                <option value="ab-">
                AB-
                </option>
                <option value="o+">
                O+
                </option>
                <option value="o-">
                O-
                </option>
              </select>
              <label>Nom</label>
              <input type="text" placeholder="Entrer votre Nom" id="nom" name="nom">
              <label>Prenom</label>
              <input type="text" placeholder="Entrer votre prenom" id="prenom" name="prenom">
              <label>Mail</label>
              <input type="email" placeholder="Entrer votre mail" id="mail" name="mail">
              <label>Contact</label>
              <input type="text" placeholder="Entrer votre contact" id="contact" name="contact">
              <label>Localisation</label>
              <input type="text" placeholder="Entrer votre ville ou commune" id="localisation" name="localisation">
              <label>Plus d'information sur la localisation</label>
              <input type="textarea" placeholder="Entrer les informations de votre ville ou commune" id="plus_info" name="plus_info">
              <br/>
              <button type="submit" class="btn" name="valider" value="valider">Valider</button>
          </fieldset>
        </form>
        
      </div>

      <div id="push"></div>
    </div>

    <div id="footer">
      <div class="container">
        <p class="muted credit"> <a href="http://www.ovillage.ci" target="_blank">Initiative Ovillage</a> .</p>
      </div>
    </div>
    
    
    



    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/bootstrap-transition.js"></script>
    <script src="../assets/js/bootstrap-alert.js"></script>
    <script src="../assets/js/bootstrap-modal.js"></script>
    <script src="../assets/js/bootstrap-dropdown.js"></script>
    <script src="../assets/js/bootstrap-scrollspy.js"></script>
    <script src="../assets/js/bootstrap-tab.js"></script>
    <script src="../assets/js/bootstrap-tooltip.js"></script>
    <script src="../assets/js/bootstrap-popover.js"></script>
    <script src="../assets/js/bootstrap-button.js"></script>
    <script src="../assets/js/bootstrap-collapse.js"></script>
    <script src="../assets/js/bootstrap-carousel.js"></script>
    <script src="../assets/js/bootstrap-typeahead.js"></script>

  </body>
</html>
