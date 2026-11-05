# Abricoop

Projet **Bases de données (SQL) et PHP** — _Laurine, Laureline_

Application web PHP/MySQL de gestion d'une résidence : habitants, activités
proposées et visites d'infirmières.

## Fonctionnalités

| Page | Description |
|---|---|
| `index.php` | Page d'accueil et menu de navigation |
| `habitant.php` | Liste de tous les habitants |
| `session.php` | Toutes les sessions d'activités (animateur, date, horaires) |
| `activite.php` | Sessions triées par activité |
| `visites.php` | Toutes les visites d'infirmières |
| `visite.php` | Visites de chaque patient (tension, taux de sucre, motif…) |

## Structure du projet

```
├── index.php        # Accueil
├── habitant.php     # Page habitants
├── session.php      # Page sessions
├── activite.php     # Sessions par activité
├── visites.php      # Page visites
├── visite.php       # Visites par patient
├── fonctions.php    # Fonctions d'affichage (tableaux HTML)
├── utils.php        # Connexion PDO et exécution de requêtes
├── style.css        # Feuille de style
├── SimpleHandmade.* # Police personnalisée
└── *.ico            # Favicons
```

## Base de données

Base MySQL nommée `abricoop`, avec les tables : `habitant`, `activite`,
`sessions`, `infirmiere` et `visites`.

> Le script SQL de création n'est pas encore dans le dépôt (voir « À faire »).

## Installation

1. Installer un serveur local avec PHP et MySQL (XAMPP, WAMP, MAMP…).
2. Cloner le dépôt dans le dossier web (`htdocs/` ou `www/`) :
   ```bash
   git clone https://github.com/laurelinehenaff/projet-abricoop.git
   ```
3. Créer la base `abricoop` et importer le script SQL.
4. Vérifier les identifiants dans `utils.php` (par défaut : `root`, sans mot de
   passe, `localhost`).
5. Ouvrir `http://localhost/projet-abricoop/index.php`.

## À faire

- [ ] Ajouter le script SQL (création des tables + données de test)
- [ ] Sortir les identifiants de connexion de `utils.php`
- [ ] Échapper les données affichées (`htmlspecialchars`)
- [ ] Corriger le lien CSS de `session.php` (`css/style.css` → `style.css`)
- [ ] Corriger le favicon de `index.php` (`abricoop.ico` a été supprimé)
