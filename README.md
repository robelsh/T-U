# T-U (2013-2014)
Projet Web / Java CIR2 - Automatisation de tests unitaires

Projet : Automatisation de test Unitaire.

1 : Assurez vous d'avoir Java, et une JDK d'installé.
    Si ce n'est pas le cas pour la JDK : sudo apt-get install openjdk-7-jre icedtea-7-plugin

2 : Ouvrez le config/config.php.
    Modifiez les varaibles en fonctions de l'endroit ou vous avez installer les sources sur le serveur.
    exemple :
	si vous avez déposé les sources dans un dossier comme /var/www/projet, modifiez $site en ajoutant "/projet" et $root en ajoutant "/projet".

3 : Importez la BDD qui se trouve dans le dossier bdd.
    Puis configurez la connection à la base de donnée en modifiant avec vos identifiants et le nom donnée à la bdd : bdd/bdd.php.



Fonctionnalité non opérationnelles :

	- Génération du fichier Excel.
	- Visualisation partiellement opérationnelle :
		- Un enseignant ne peux pas visualiser les resultat d'un etudiant.


Traitement des erreurs :

	-traitements partiel pour l'upload :
		si on ajoute un fichier non conforme, lancement du fichier existant.
		L'ajax nous permet d'éviter certaines erreurs.



Lignes de commande :

	Exemple de commande pour le projet numéro 1 et un etudiant nomdeletudiant:

	-compilation : javac -classpath \"../../projets/classpath/junit-4.11.jar\
		"\"../../projets/projet1/nomdeletudiant/".$_FILES["myfile"]["name"].
		"\" ../../projets/projet1/test/TestJunit.java ../../projets/projet1/test/Principale.java"

	-execution : java -cp /var/www/projets/classpath/junit-4.11.jar:
		/var/www/projets/classpath/hamcrest-core-1.3.jar:
		/var/www/projets/projet1/nomdeletudiant:
		/var/www/projets/projet1/test Principale"


Junit :
	projets/classpath/junit-4.11.jar
	projets/classpath/hamcrest-core-1.3.jar
