## English Readme file: https://github.com/chkpr/bookeo/blob/main/README.md

# Bookéo : bibliothèque personnelle

## Présentation

Bookeo est une application PHP qui sert à répertorier et présenter des livres sur une page web. Elle permet de créer et d'organiser une bibliothèque et d'ajouter des informations sur chaque ouvrage.

J'ai réalisé ce projet dans le cadre de ma formation en développement web chez Studi en 2024/2025 avec l'objectif de mettre en place un MVC. Les fonctionnalités du projet permettent de s'authentifier et d'ajouter, modifier et supprimer des livres (CRUD).

## Technologies

- MySQL 5.7
- Bootstrap 5.3
- Xampp
- VSCode

## Déploiement local

Après avoir cloné le repository et démarré le serveur local, il faut importer la base de données pour pouvoir démarrer l'application localement et configurer l'accès à la base de données dans le fichier config.php (renseigner 'db_username' et 'db_password' avec les identifiants correspondants).
La page d'accueil s'affiche dans le navigateur avec les 3 derniers livres ajoutés.
La base de données contient déjà un utilisateur test et les identifiants suivants :

###### login: testuser@test.com

###### password: test

On peut également ajouter un utilisateur en base de données puis hasher son mot de pass avec password_hash() et insérer le mot de passe hashé en base de données. On peut ensuite se connecter avec les applications nouvellement créés.

## Fonctionnalités en cours d'ajout

- Inscription utilisateur
- Attribution d'une note à chaque livre
