// JavaScript Document


$(window).resize(function(){

	if ($("html").width() < 975 ){
		
		$("#portrait").fadeIn();
		$( ".menu" ).css("width","95%");
		$( ".menu" ).css("height","95%");
	}
	
	if ($("html").width() > 975 ){
		$("#portrait").fadeOut();
		$( ".menu" ).css("width","49.7%");
		$( ".menu" ).css("height","47.5%");
		
	}
});





$(document).ready(function()
{
	verif_resize();
	$(".login").hide();
	$("#portrait").fadeOut();
	$(".login").fadeIn(1500);

	$(".profil").mouseover(function(){
		

		$(".nav").css("text-shadow","0 0 10px #333");
		$(".nav").css("color","transparent");
		

		down_profil();
				
	});
	$(".profil").mouseout(function(){
		if ($("html").width() < 975 ){
		$(".profil").css("top","-196%");

	}
	
	if ($("html").width() > 975 ){
		$(".profil").css("top","-98%");
		
	}
		$(".nav").css("text-shadow","0 0 0px #333");
		$(".nav").css("color","");

	});
	
	//Ajax : Login
    $("#form_log").submit(function () {

            $.post("template/controler/login.php",$("#form_log").serialize(),function(texte){

                $("body").html(texte);
            });

            return false; // ne change pas de page

    });
	
	
	

	
  });




function down_profil(){
	if ($("html").width() < 975 ){
		$(".profil").css("top","0%");
		$(".profil").css("height","200%");//400% si y a tout le menu	
	}
	else {
	$(".profil").css("top","-0.5%");	
	
	}
}

function up_profil(){
	
	if ($("html").width() < 975 ){
		$(".profil").css("top","-196%");

	}
	
	if ($("html").width() > 975 ){
		$(".profil").css("top","-98%");
		
	}	
	
	if($( "#bottom-left" ).hasClass("active") == false && $( "#bottom-right" ).hasClass("active")== false && $( "#top-left" ).hasClass("active")== false && $( "#top-right" ).hasClass("active")== false ){
		$(".retour").fadeIn();
	}
	
	
				
			
}

function verif_resize(){
	if ($("html").width() < 975 ){
		$("#portrait").fadeIn();
		$(".retour").css("margin-top","-50px");
		$( ".menu" ).css("width","95%");
		$( ".menu" ).css("height","95%");
	}
	
	if ($("html").width() > 975 ){
		$("#portrait").fadeOut();
		$(".retour").css("margin-top","0px");
		$( ".menu" ).css("width","49.7%");
		$( ".menu" ).css("height","47.5%");
		
	}	
	
}

function br() {
		if ($( "#bottom-right" ).hasClass("active") == true){
			projet_form();
		}
		
		$( ".top" ).css("height","0%");
		$( "#bottom-right" ).removeClass("active");
		$( "#bottom-left" ).addClass("active");
		$( "#bottom-left" ).removeClass("inactive");
		$( "#bottom-right" ).addClass("inactive");
		$( "#bottom-right" ).css("width","95%");
		$( "#bottom-right" ).css("height","800px");
		$( "#bottom-left" ).css("width","4%");
		$( "#bottom-left" ).css("height","800px");
		//$( "#content-bl" ).fadeOut();
		$( "#content-tr" ).fadeOut();
		$( "#content-tl" ).fadeOut();
		$( "#content-br" ).fadeIn();
		setTimeout(function(){
		  $(".top").hide();
		  
		}, 750);
}

function bl() {
		if ($( "#bottom-left" ).hasClass("active") == true){
			liste_projet();
		}
		$( "#bottom-left" ).removeClass("active");
		$( "#bottom-right" ).addClass("active");
		$( "#bottom-right" ).removeClass("inactive");
		$( "#bottom-left" ).addClass("inactive");
		$( ".top" ).css("height","0%");
		$( "#bottom-right" ).css("width","4%");
		$( "#bottom-right" ).css("height","800px");
		$( "#bottom-left" ).css("width","95%");
		$( "#bottom-left" ).css("height","800px");
		//$( "#content-br" ).fadeOut();
		$( "#content-tr" ).fadeOut();
		$( "#content-tl" ).fadeOut();
		$( "#content-bl" ).fadeIn();
		setTimeout(function(){
		  $(".top").hide();
		 
		}, 750);

}


function ble() {
		if ($( "#bottom-left" ).hasClass("active") == true){
			
		}
		$( "#bottom-left" ).removeClass("active");
		$( "#bottom-right" ).addClass("active");
		$( "#bottom-right" ).removeClass("inactive");
		$( "#bottom-left" ).addClass("inactive");
		$( ".top" ).css("height","0%");
		$( "#bottom-right" ).css("width","4%");
		$( "#bottom-right" ).css("height","800px");
		$( "#bottom-left" ).css("width","95%");
		$( "#bottom-left" ).css("height","800px");
		$( "#content-br" ).fadeOut();
		$( "#content-tr" ).fadeOut();
		$( "#content-tl" ).fadeOut();
		$( "#content-bl" ).fadeIn();
		setTimeout(function(){
		  $(".top").hide();
		 
		}, 750);

}

function tl(){
	if ($( "#top-left" ).hasClass("active") == true){
			visualiser();
		}
		$( "#top-right" ).removeClass("inactive");
		$( "#top-right" ).addClass("active");
		$( "#top-left" ).removeClass("active");
		$( "#top-left" ).addClass("inactive");
		$( "#top-right" ).css("width","4%");
		$( "#top-right" ).css("height","800px");
		$( "#top-left" ).css("width","95%");
		$( "#top-left" ).css("height","800px");
		$( ".bottom" ).css("height","0%");
		//$( "#content-tr" ).fadeOut();
		$( "#content-br" ).fadeOut();
		$( "#content-bl" ).fadeOut();
		$( "#content-tl" ).fadeIn();
		setTimeout(function(){
		  $(".bottom").hide();
		}, 750);

}


function tr(){

		if ($( "#top-right" ).hasClass("active") == true){
			deposer();
		}
		$( "#top-left" ).removeClass("inactive");
		$( "#top-left" ).addClass("active");
		$( "#top-right" ).removeClass("active");
		$( "#top-right" ).addClass("inactive");
		$( "#top-right" ).css("width","95%");
		$( "#top-right" ).css("height","800px");
		$( "#top-left" ).css("width","4%");
		$( "#top-left" ).css("height","800px");
		$( ".bottom" ).css("height","0%");
		//$( "#content-tl" ).fadeOut();
		$( "#content-tr" ).fadeIn();
		$( "#content-br" ).fadeOut();
		$( "#content-bl" ).fadeOut();
		setTimeout(function(){
		  	$(".bottom").hide();

		}, 750);
}



function return_m(){
$(".top").fadeIn();
		 $(".bottom").fadeIn();
		 $( "#content-tl" ).fadeIn();
		 $( "#content-tr" ).fadeIn();
		 $( "#content-bl" ).fadeIn();
		 $( "#content-br" ).fadeIn();
		 $( ".top" ).addClass("active");
		 $( ".top" ).removeClass("inactive");
		 $( ".bottom" ).addClass("active");
		 $( ".bottom" ).removeClass("inactive");
		 setTimeout(function(){
		 	$( ".menu" ).css("width","49.7%");
			$( ".menu" ).css("height","400px");
			verif_resize();
			
		}, 0.5);	
				$(".retour").fadeOut();
}


function liste_projet(){
$.ajax({
  type: "POST",
  url: "template/content/liste_projet.php"
  
  
})
  .done(function( msg ) {
    $("#content-bl").html(msg);
  });
 }


function projet_form(){
$.ajax({
  type: "POST",
  url: "template/content/projet_form.php",
  data: { name: "jhon", location: "Boston" }
  
})
  .done(function( msg ) {
    $("#content-br").html(msg);
  });
 }
 
 
 
 function sup_projet(){
			var projet, valeur;
			projet = document.getElementById("projet");
			valeur = projet.options[projet.selectedIndex].value;
			console.log(valeur);
$.ajax({
  type: "POST",
  url: "template/controler/sup_projet.php",
  data: { value: valeur }
  
})
  .done(function( msg ) {
    $("#content-bl").append("Projet effacé. <br/> veuillez rafraichir la liste.");
  });
 }
 


function refreshtest(){
	$("#modif_test").html("");
	modif_projet();
}

function modif_projet(){
			var projet, valeur;
			projet = document.getElementById("projet");
			valeur = projet.options[projet.selectedIndex].value;
			console.log(valeur);
$.ajax({
  type: "POST",
  url: "template/controler/modif_projet.php",
  data: { value: valeur }
  
})
  .done(function( msg ) {
    $("#modif_test").append(msg);
  });
 }
 
 
 function maj_projet(){
			var nomprojet;
			nomprojet = document.getElementById("nomprojet").value;
			
			var projet, valeur;
			projet = document.getElementById("projet");
			valeur = projet.options[projet.selectedIndex].value;
			console.log(nomprojet);

$.ajax({
  type: "POST",
  url: "template/controler/maj_projet.php",
  data: { value: nomprojet, id: valeur }
  
})
  .done(function( msg ) {
    	$("#modif_test").append(msg);
		$("#modif_test").html("");
		liste_projet();
  });
 }
 


function sup_test(valeur){
			
			
$.ajax({
  type: "POST",
  url: "template/controler/sup_test.php",
  data: { value: valeur }
  
})
  .done(function( msg ) {
    $("#modif_test").append(msg);
  });
 }
 






function deposer(){
	$.ajax({
  type: "POST",
  url: "template/content/test_form.php",

  
})
  .done(function( msg ) {
     $("#content-tr").html(msg);
  });
 
	 
 }

 
 function visualiser(){
	$.ajax({
  type: "POST",
  url: "template/content/visualiser.php",

  
})
  .done(function( msg ) {
     $("#content-tl").html(msg);
  });
 
	 
 }
 
 
  function visualiser_programmes(){
	  var projet, valeur;
			projet = document.getElementById("projet");
			valeur = projet.options[projet.selectedIndex].value;
			console.log(valeur);
	$.ajax({
 	 type: "POST",
  	url: "template/controler/afficheprojet_etudiant.php",
 	 data: { idprojet : valeur }
  
})
  .done(function( msg ) {
     $("#content-tl").append(msg);
  });
 
	 
 }
 
 
 
