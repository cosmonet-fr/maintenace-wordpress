# maintenace-wordpress

Ce code permet de passer un site Wordpress en maintenance, et de basculer automatiquement sur une deuxième page de maintenance à partir d'une certaine date. Et de sortir du mode maintenance à une autre date.

---

Pour l'utiliser il faut copier le code du fichier functions.php du dépot dans le fichier functions.php du theme Wordpress.
Il faut ensuite indiquer les bonnes valeurs dans les variables $limitesTime1 et $limitesTime1 (en Unix time).
