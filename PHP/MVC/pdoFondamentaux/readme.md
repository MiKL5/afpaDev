Model View Controller (frameworks PHP) <img align="right" src="../../../src/img/mvc.png" alt="Modèle Vue Contrôleur" title="Modèle Vue Contrôleur" widht="auto" height="64px">

Exercices
Exercice 1 : création d'un personnage


1 - Dans un dossier nommé POO, créez un dossier classes/ dans lequel vous créez un fichier Personnage.class.php.
2 - Créez une classe Personnage qui comprend les attributs suivants:
- nom
- prenom
- age
- sexe
Votre classe doit encpsuler les attributs à l'aide de propriétés privées et utiliser des accesseurs pour permettre l'accès aux attributs.
3 - Créez un deuxième fichier MonPerso.php permettant de vérifier le bon fonctionnement de votre classe
Exercice 2 : gestion des employés
La société Jarditou, d'envergure nationale, souhaite se doter d'un S.I.R.H. pour gérer ses employés dans les différents magasins à travers la France.
1 - Ecrire une classe Employe avec les informations (propriétés) suivantes :
Nom
Prénom
Date d'embauche dans l'entreprise
Fonction (Poste) dans l'entreprise
Salaire en K euros brut annuel
Service dans lequel se situe l'employé (Comptabilité, Commercial...)
2 - Dans la classe Employe, écrire une méthode permettant de savoir depuis combien d'années l'employé est dans l'entreprise.
3 - Chaque année, l'employé reçoit une prime calculée sur le salaire annuel (5% du brut) et sur l'ancienneté (2% du brut pour chaque année d'ancienneté). Cette prime est versée au 30/11 de chaque année. Dans la classe Employe, écrire le(s) méthode(s) permettant de déduire le montant de cette prime et de donner l'ordre de transfert à la banque le jour du versement.

L'ordre de transfert à la banque sera juste un message écrit spécifiant que l'ordre de transfert a été envoyé à la banque avec mention du montant.

Afin de tester les éléments ci-dessus, créer au minimum 5 objets Employe avec des informations sensiblement différentes. Ecrire dans le programme principal l'affichage du montant des primes de chaque employé.

La date du versement de la prime doit également être vérifiée. Pour tester, fixer cette date à la date du jour, faire les conditions nécessaires dans le code et tester en changeant de date afin de voir si le message voulu s'affiche.



4 - L'entreprise est constituée de magasins implantés sur tout le territoire français.
Un employé fait partie d'un (et un seul) magasin. Un magasin dispose d'un nom, d'une adresse, d'un code postal, d'une ville. Ecrire une nouvelle classe Magasins qui contient tous ces éléments et modifier la classe Employe afin que celui-ci soit rattaché à un magasin.
5 - En ce qui concerne les repas, les magasins ne disposent pas toutes d'un restaurant d'entreprise. Les employés se trouvant dans les magasins qui n'ont pas de restaurant d'entreprise bénéficient en contrepartie de tickets restaurants. Chaque magasin dispose donc de son propre mode de restauration.

Modifier la classe Magasin pour gérer ce mode de restauration.

Afficher chaque mode de restauration de chaque employé selon le magasin dans lequel il est affecté.



6 - L'entreprise souhaite intégrer dans ce système informatique les activités du comité d'entreprise. Des chèques-vacances sont distribués aux employés à condition que ceux-ci aient une ancienneté d'au moins un an.

Modifier la classe Employe afin de savoir si celui-ci peut disposer de chèques-vacances ou non.



7 - Chaque année, des chèques Noël sont distribués aux enfants des employés. Le montant du chèque Noël dépend de l'âge des enfants :
- 20 € pour les enfants de 0 à 10 ans,
- 30 € pour les enfants de 11 à 15 ans,
- 50 € pour les enfants de 16 à 18 ans.
Modifier le programme afin de gérer l'attribution des chèques Noël aux enfants des salariés.

Afficher si l'employé a le droit d'avoir des chèques Noël (Oui/Non). Pour ce faire, établir les conditions nécessaires dans le programme.

Si la réponse est Oui, afficher combien de chèques de chaque montant sera distribué à l'employé.

Si aucun chèque n'est distribué pour une tranche d'âge, ne pas afficher.