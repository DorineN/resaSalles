// On initialise deux paramètres de la fonction ajax puisque ceux-ci seront toujours les mêmes pour toutes les requêtes.
$.ajaxSetup({

    // Toutes nos requêtes pointeront vers le fichier "requests".
    url: "../requests.php",

    // Toutes les requêtes seront du type POST, les variables ne passent donc pas par l'url.
    type: "POST",

    async: false

});

// Cette fonction se lance au chargement complet de la page.
$(document).ready(function() {
	
	initializeDatepicker();

});

//Fonction qui va créer le calendrier de réservation de salles
function initializeDatepicker() {
	
    jQuery.datepicker.setDefaults(jQuery.datepicker.regional['fr']);
	
	// On créer un tableau qui contiendra la liste des réservations
    var closedDates = new Array();

    $.ajax({
		
        data: {request: "getBookings"},

        // Si la requête a correctement aboutie.
        success: function(result) {
			
			closedDates = result.split("||");
			
			console.log(closedDates);

        },

        // Si la requête n'a pas aboutie.
        error: function() {

        }

    });

    $("#dateList").datepicker({
        firstDay : 1,
        minDate: 0, // Aujourd'hui
        maxDate: '+1Y', //Un an max pour réserver une salle à l'avance
		dateFormat: 'yy-mm-dd',
        hideIfNoPrevNext: false,
		
		//Quand on sélectionne une date on créé une réservation
        onSelect: function(date) {
			
			console.log(date);
			
			$.ajax({

				data: {
					request: "setBooking",
					date: date,
					room: ""
					//userId: ""
				},
		
				// Si la requête a correctement aboutie.
				success: function(result) {
					
		
				},
		
				// Si la requête n'a pas aboutie.
				error: function() {
		
				}
		
			});
			
			
		},
        beforeShowDay: function(date) {
			
			var date = jQuery.datepicker.formatDate('yy-mm-dd', date);
			
		    if($.inArray(date, closedDates) != -1) {

                return [false, "", "Aucun rendez-vous disponible à cette date"]; 

            } else {
				
				return [true, "", ""]; 
				
			}	
			
		}
		
    });


    var width = document.body.clientWidth || window.innerWidth;

    if(width < 500) {

        $("#dateList").datepicker( "option", "dayNamesMin", ["Di","Lu","Ma","Me","Je","Ve","Sa"]);


    } else {

        $("#dateList").datepicker( "option", "dayNamesMin", ["Dimanche","Lundi","Mardi","Mercredi","Jeudi","Vendredi","Samedi"]);

    }


}