
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<?php

	//On se connecte à la base de données 
	require_once('../Connect_bdd.php');
	
 ?>
 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <!-- Titre de la page affichée dans l'onglet du navigateur -->
    <title>M2L - Réservez une salle</title>

        <!-- On charge le style -->
        <link rel="stylesheet" href="booking/css/style.css">
        
        <!-- On charge le style bootstrap -->
        <link rel="stylesheet" href="booking/css/bootstrap.min.css">
        
</head>

<body>

<!--Bannière -->
<div style="margin-bottom: -35px; min-height: 170px; padding: 15px 15px 0 0;">

    <div style="float: left; width: auto;">

                <!-- LINKS BOX -->
                <div style="width: 120px; float: left;">
                    <a href="http://www.maisondesliguesdelorraine.fr/" title="maisondesliguesdelorraine.fr" target="_blank" style="border: 0; height: 50px;"><img src="booking/images/mdl_logo.png" alt="" title="" class="image" style="margin: auto; width: 150%;"></a>
                </div>
                <!-- LINKS BOX END -->
    </div>

</div>

 <div class="panel panel-default">

        <div class="panel-heading">

            <h3 class="panel-title">Veuillez choisir une salle</h3>

        </div>

        <div class="panel-body">
        
        <form class="form" name="test1" method="post" action="booking/index.php">
        
        <!-- Liste des salles de M2L -->
       <table style="text-align: center; float: center; margin-left: 5%;">
        
        	<!-- SALLE USA -->
        	<tr>
            	<td> <a href="booking/index.php" onclick='document.getElementById("room").submit()'>
                	<input type="submit" name="room" value="10" style="display: none;"/>
                       <ul style="list-style-type:none;"> 
                       <li> <img src='booking/images/salle-usa.jpg' alt="Salle USA" title="Salle USA" style="width: 300px; height: 250px;"/></li>
                       <li> <h1>Salle USA </h1></li>
                        </ul>
                    </a>
            	</td>
            
            <!-- SALLE Espagne -->
        		<td>  
                	<a href="planning.php" onclick='document.getElementById("room").submit()'>
                   	 	<input type="hidden" name="room" value="11"/>
                        <ul style="list-style-type:none;"> 
                             <li><img src='booking/images/salle-espagne.jpg' style="width: 300px; height: 250px;"/></li>
                             <li><h1>Salle Espagne </h1></li>
                        </ul>
                    </a>
            	</td>
            
            <!-- SALLE Japon -->
        		<td>
                    	<input type="submit" name="room" value="12" style="display: none;">
                        <ul style="list-style-type:none;"> 
                             <li><img src='booking/images/salle-japon.jpg' style="width: 300px; height: 250px;"/></li>
                             <li><h1>Salle Japon </h1></li>
                        </ul> </input>
            	</td>
            
            <!-- SALLE Angleterre -->
        		<td>    
                	<a href="planning.php" onclick='document.getElementById("room").submit()'>
                    	<input type="hidden" name="room" value="13"/>
                        <ul style="list-style-type:none;"> 
                            <li> <img src='booking/images/salle-angleterre.jpg'  style="width: 300px; height: 250px;"/></li>
                            <li> <h1>Salle Angleterre </h1></li>
                        </ul>
                    </a>
           		</td>
            
            <!-- SALLE Canada -->
        		<td>
                	<a href="planning.php" onclick='document.getElementById("room").submit()'>
                    	<input type="hidden" name="room" value="14"/>
                        <ul style="list-style-type:none;"> 
                            <li> <img src='booking/images/salle-canada.jpg' style="width: 300px; height: 250px;"/></li>
                             <li><h1>Salle Canada </h1></li>
                        </ul>
                </a>
           		</td>
            </tr>
            
            <tr>
            
            <!-- SALLE Mexique -->
        		<td>
                	<a href="planning.php" onclick='document.getElementById("room").submit()'>
                  	 	<input type="hidden" name="room" value="15"/>
                        <ul style="list-style-type:none;"> 
                            <li> <img src='booking/images/salle-mexique.jpg' style="width: 300px; height: 250px;"/></li>
                             <li><h1>Salle Mexique </h1></li>
                        </ul>
                    </a>
            	</td>
            
            <!-- SALLE Chine -->
        		<td>
                	<a href="planning.php" onclick='document.getElementById("room").submit()'>
                   	<input type="hidden" name="room" value="16"/>
                        <ul style="list-style-type:none;"> 
                             <li><img src='booking/images/salle-chine.jpg' style="width: 300px; height: 250px;"/></li>
                             <li><h1>Salle Chine </h1></li>
                        </ul>
                    </a>
            	</td>
            
            <!-- SALLE Allemagne -->
        		<td>
               		<a href="planning.php" onclick='document.getElementById("room").submit()'>
                  		 <input type="hidden" name="room" value="17"/>
                        <ul style="list-style-type:none;"> 
                             <li><img src='booking/images/salle-allemagne.jpg' style="width: 300px; height: 250px;"/></li>
                            <li> <h1>Salle Allemagne </h1></li>
                        </ul>
                    </a>
            	</td>
            
            <!-- SALLE Amphithéâtre -->
        		<td>
                	<a href="planning.php" onclick='document.getElementById("room").submit()'>
                   		 <input type="hidden" name="room" value="18"/>
                        <ul style="list-style-type:none;"> 
                             <li><img src='booking/images/amphitheatre.jpg' style="width: 300px; height: 250px;"/></li>
                             <li><h1>Amphithéâtre</h1></li>
                        </ul>
                    </a>
            	</td>
            
            <!-- SALLE Salle de formation -->
        		<td>
                	<a href="planning.php" onclick='document.getElementById("room").submit()'>
                   	 	<input type="hidden" name="room" value="19"/>
                        <ul style="list-style-type:none;"> 
                           <li> <img src='booking/images/salle-formation.png' style="width: 300px; height: 250px;"/></li>
                            <li> <h1>Salle de formation </h1></li>
                       </ul>
                    </a>
           		</td>
           </tr>
        
		</table>
        
        </form>
        
	</div>
</div>

<footer id="footer">Copyright M2L - 2015</footer>

<?php

	//On récupère l'id de chaque salle disponible
	$room = "12";

?>

</body>

</html>