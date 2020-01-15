/**
* Fikrs Auteurs Langue
*/
SELECT fikrs.id, fikrs.titre, fikrs.livre, fikrs.date, auteurs.nom, auteurs.prenom, langues.titre FROM fikrs LEFT JOIN auteurs ON auteur=auteurs.id LEFT JOIN langues ON langue_id=langues.id ORDER BY fikrs.date DESC

/**
* Fikrs Auteurs Langue en fonction du Titre de la langue
*/
SELECT fikrs.id, fikrs.titre, fikrs.livre, fikrs.date, auteurs.nom, auteurs.prenom, langues.titre FROM fikrs LEFT JOIN auteurs ON auteur=auteurs.id LEFT JOIN langues ON langue_id=langues.id WHERE langues.titre='HAUSA' ORDER BY fikrs.date DESC

/**
*/
SELECT COUNT(datas.id) as nombre FROM datas WHERE fikr="$id"

SELECT fikrs.id, fikrs.titre, fikrs.livre, fikrs.date, auteurs.nom, auteurs.prenom, langues.titre as langue
            FROM fikrs 
            LEFT JOIN auteurs ON auteur=auteurs.id
            LEFT JOIN langues ON langue_id=langues.id
            IN (SELECT COUNT(datas.id) as nombre FROM datas WHERE datas.fikr=fikrs.id)
            ORDER BY fikrs.date DESC