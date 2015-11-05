# procédure pour l'installation et tests 

**Récupérer le code**  
tout est sur https://github.com/fredjust/gad  

**installer WAMP (ou EasyPHP)**  
* testé avec succès avec WAMP  
* créer une base cvoe (ou changer dans _connect.php)


**créer les tables dans la base SQL**  
* dans le rep SQL exécuter les fichiers SQL
* importer
	* gad_files
	* gad_data
	* gad_color
	
**paramétrer les mots de passe**  
* dans le fichier _connect.php
* dans le fichier 00admin.php

**importer une grille**  
* accéder à l'index du site
* cliquer sur Dynamiser une grille
* envoyer la grille /sample/grillepapi.html
* parametrer les options et cliquer sur générer la grille
* envoyer le classement /sample/classementpapi.html
* regénérer la grille

