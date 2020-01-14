/**
* Fikrs Auteurs Langue
*/
SELECT fikrs.id, fikrs.titre, fikrs.livre, fikrs.date, auteurs.nom, auteurs.prenom, langues.titre FROM fikrs LEFT JOIN auteurs ON auteur=auteurs.id LEFT JOIN langues ON langue_id=langues.id ORDER BY fikrs.date DESC

/**
* Fikrs Auteurs Langue en fonction du Titre de la langue
*/
SELECT fikrs.id, fikrs.titre, fikrs.livre, fikrs.date, auteurs.nom, auteurs.prenom, langues.titre FROM fikrs LEFT JOIN auteurs ON auteur=auteurs.id LEFT JOIN langues ON langue_id=langues.id WHERE langues.titre='HAUSA' ORDER BY fikrs.date DESC