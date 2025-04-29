## Le fichier Readme est disponible en français : https://github.com/chkpr/bookeo/blob/main/README_fr.md

# Bookeo : book management app

## Description

Bookeo is a PHP app to list and display books. It allows the user to create and organize their own personal library and to add information on each book.

This project was created as part of Studi's web development learning program in 2024/2025 with the aim of setting up a MVC structure. The features include user authentication and adding, editing or removing items (CRUD).

## Technologies

- PHP 8
- MySQL 5.7
- Bootstrap 5.3
- Xampp
- VSCode

## Local deployment

Clone the repository, start the server locally and import the database. Add the database username and password to config.php. Start the application on localhost port. The navigator should display the homepage with the last 3 books added.
The database contains a test user with the following credentials:
######login: testuser@test.com
######password: test
You can also add a new user to the database then hash the password and replace the original password with the hash in the database.

## Features being added

- User registration
- Book rating
