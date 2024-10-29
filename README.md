# Laravel Club Management Project

Ce projet est une application backend Laravel pour la gestion de clubs, matchs, et rosters d'une équipe. Il inclut une base de données MySQL avec des tables prédéfinies : `club_info`, `matches`, et `roster`. Chaque table est dotée d'une structure et d'un modèle Eloquent pour faciliter les opérations CRUD.

## Configuration et Installation

### Prérequis

- **PHP** (version 8.0+ recommandée)
- **Composer**
- **MySQL**
- **Laravel Installer** (optionnel)

### Étapes d'installation

1. **Cloner le dépôt** :
    ```bash
    git clone https://github.com/ton-utilisateur/nom-du-projet.git
    cd nom-du-projet
    ```

2. **Installer les dépendances Composer** :
    ```bash
    composer install
    ```

3. **Configurer l'environnement** :
    - Copie le fichier `.env.example` en `.env` :
      ```bash
      cp .env.example .env
      ```
    - Configure les variables de base de données dans le fichier `.env` :
      ```env
      DB_CONNECTION=mysql
      DB_HOST=127.0.0.1
      DB_PORT=3306
      DB_DATABASE=nom_de_la_base
      DB_USERNAME=ton_utilisateur
      DB_PASSWORD=ton_mot_de_passe
      ```

4. **Générer la clé de l'application** :
    ```bash
    php artisan key:generate
    ```

5. **Appliquer les migrations** pour créer les tables dans la base de données :
    ```bash
    php artisan migrate
    ```

6. **Lancer le serveur de développement** :
    ```bash
    php artisan serve
    ```
    Accède à l'application sur `http://localhost:8000`.

## Utilisation des Modèles avec Tinker

Laravel Tinker est utilisé pour interagir avec les modèles et tester l'application en ligne de commande.

### Exemple de création d'enregistrements

1. **Lancer Tinker** :
    ```bash
    php artisan tinker
    ```

2. **Créer un enregistrement dans `club_info`** :
    ```php
    \App\Models\ClubInfo::create([
        'name' => 'FC Test',
        'description' => 'Description du club',
        'location' => 'Paris',
        'created_at' => now(),
    ]);
    ```

3. **Créer un enregistrement dans `matches`** :
    ```php
    \App\Models\MatchInfo::create([
        'date' => '2024-11-01',
        'opponent' => 'FC Opponent',
        'location' => 'Stade de Test',
        'created_at' => now(),
    ]);
    ```

4. **Créer un enregistrement dans `roster`** :
    ```php
    \App\Models\Roster::create([
        'name' => 'Player Test',
        'number' => 10,
        'position' => 'Forward',
        'created_at' => now(),
    ]);
    ```

5. **Vérifier les enregistrements** :
    ```php
    \App\Models\ClubInfo::all();
    \App\Models\MatchInfo::all();
    \App\Models\Roster::all();
    ```

### Structure des Tables

- **Table `club_info`** : contient des informations de base sur le club.
- **Table `matches`** : stocke les données sur les matchs à venir.
- **Table `roster`** : contient les informations sur les joueurs.

