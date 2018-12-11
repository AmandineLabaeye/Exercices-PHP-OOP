Consignes :

- Lancer exercice.html dans le navigateur, ouvrir la console de debug, et cliquez sur l'onglet réseau
- Cliquer sur le bouton présent sur la page pour executer votre premiere requete ajax
- Votre requete ajax va être présente dans l'onglet réseau

- Créer un script php qui echo le texte de votre choix, uploadez sur votre hebergement
- Modifiez la fonction js lançant la requete ajax pour qu'elle effectue une requête vers ce script php au lieu du fichier
data.txt
- Testez => Ca ne fonctionne pas !
- Pourquoi ? : Il n'est pas possible d'éxécuter une requête ajax vers un domaine différent du domaine où est éxécuté
votre javascript pour des raisons de sécurité

- Uploadez tout les fichiers du projet sur webhost puis testez en ligne => Ca marche !






Théorie :

La programmation orienté objet en PHP vous permet de rendre votre code plus facile à modifier et de moins vous répéter dans
le code.

En php, pour définir des objets, on utilise le mot clef class.

La bonne pratique consiste à créer un nouveau fichier php pour chaque classe, il est également recommandé de créer un dossier
classes et d'y mettre tout les fichiers de classe php.

Une classe posséde des propriétés et des méthodes.

Pour déclarer les propriétés , on utilisera les mots clefs suivant :

public $var
private $var
protected $var

- Lorsqu'une proriété est délarée avec public :

La propriété est accessible partout, même dans les classes héritées , aussi bien en lecture qu'en écriture

- Lorsqu'une propriété est déclarée avec private :

La propriété est accessible seulement à l'intérieur de la classe.

- Lorsqu'une propriété est déclarée avec protected :

La propriété est accessible seulement à l'intérieur de la classe mais les classes qui heritent de la classe mere peuvent
y acceder.




