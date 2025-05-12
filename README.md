# devoir-laravel

# 📚 Book Reviews App

Ce projet Laravel est une petite application web permettant de lister des livres et de publier des avis (reviews) associés à chaque livre.

## 🔥 Fonctionnalités

- Affichage de la liste des livres
- Détails d’un livre avec ses avis
- Ajout d’un avis pour un livre donné
- Relations Eloquent entre livres, avis et utilisateurs

## 🧱 Structure des tables

### Books
- `id`
- `title`
- `author`
- `description`
- `published_at`

### Reviews
- `id`
- `book_id` (clé étrangère vers `books.id`)
- `user_id` (clé étrangère vers `users.id`)
- `rating` (note de 1 à 5)
- `comment`

### Users
Utilise le modèle `User` par défaut de Laravel.

## 🔗 Relations Eloquent

- `Book` a plusieurs `Review`
- `Review` appartient à un `Book` et à un `User`
- `User` peut avoir plusieurs `Review`

## 🚀 Installation

1. Cloner le projet :
   git clone https://github.com/votre-utilisateur/book-reviews.git
   cd book-reviews

2. Vérifier que vous êtes bien sur la branche master :
   git checkout master


3. Installer les dépendances :
  composer install
  npm install && npm run dev


4. Configurer le fichier .env :
  cp .env.example .env
  php artisan key:generate

5. Créer la base de données book dans MySQL, puis :
  php artisan migrate


6. Lancer le serveur :
  php artisan serve

👨‍💻 Auteur
Nom : Mouhamed Al Mansour Aidara
Classe : l2 ESITEC

🟢 Le devoir se trouve dans la branche master du projet.
