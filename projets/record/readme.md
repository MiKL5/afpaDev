# **Velvet Record** <img align="right" src="../../src/img/php.gif" alt="PHP" title="PHP" widht="auto" height="64px">

> En langage PHP

*Mettre en place la gestion CRUD*

- la liste des disques doit interroger la base de donées ;
- le bouton 'ajouter' affiche la page permettant la création d'un disque ;
    - le formulaire d'ajout (*create*) permet de saisir :
        - le titre ;
        - de selectionner parmis une liste d'artiste qui intérroge la base de données ;
        - l'annèe ;
        - le genre ;
        - le label ;
        - le prix ;
        - d'ajouter une image (qui doit être enregistrer avec son vrai nom, pas le nom temporaire) ;
        - les boutons 'Ajouter' et 'Retour' ;
        - renvoyer vers la liste des disques après l'ajout ;
- le bouton 'détails' permet d'afficher les infos du disque sur une autre pages ;
    - la page de détails (*read*) ne permet pas les modifications et contient :
        - le titre ;
        - l'artiste ;
        - l'année ;
        - le genre ;
        - le label ;
        - le prix ;
        - l'aperçu de la jaquette ;
        - 3 boutons (modifier, supprimer, retour) ;
    - la page de modification.s (*update*) permet de modifier :
        - le titre ;
        - l'artiste (via une liste déroulante) ;
        - l'année ;
        - le genre ;
        - le label ;
        - le prix ;
        - la jaquette (ainsi que l'aperçu) ;
        - 2 boutons :
            - Modifier, qui renvoi à la liste des disques après la mise à jour ;
            - Retour ; 
    - le bouton de suppression (*delete*) :
        - un script permet de supprimer le disc ;
- La session permettre de conserver les donnèes de l'utilisateur entre les pages ;
- La gestion des mots de passe est requise ;

| Nom | Prénom | Couriel | Mot de passe |
|---|---|---|---|
| Mario | NET | mario.net@gmail.com | \|V\|Ot2p/\55e |
| Ann | O'NYM | ann.o-nym@gmial.com | azerty |

- Un mail sera envoyé pour chaque création de compte ;
- L'en-tête et le pied de page sont deux fichiers à part ;
- La connexion à la base de donnée est aussi isolée ;
- Préparer les requêtes pour les sécurisées

[Voir les captures](https://github.com/MiKL5/afpaDev/blob/master/projets/record/docs/screenshot.md "Captures d'écran")

[Comment afficher le contenu](https://github.com/MiKL5/afpaDev/blob/master/projets/record/instructions4use.md "Instructions")



---
>>>NOTA :       
**CRUD**       
**C**rate -> Créer   
**R**ead -> Lire *ou* **R**etrieve -> Récupérer  
**U**pdate -> Mettre à jour     
**D**elete -> Supprimer