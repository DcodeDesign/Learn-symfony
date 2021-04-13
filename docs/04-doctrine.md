# Doctrine

## Config .env
    
    # connexion string > https://www.connectionstrings.com/
    DATABASE_URL="mysql://root:root@127.0.0.1:8889/db_pkns?serverVersion=5.7"
    
## create database
    > symfony console doctrine:database:create
    > symfony console doctrine:database:drop --force
    
    
## create Entity
    > symfony console make:entity
    
    > symfony doctrine:shema:validate # verification des entity
    > symfony console doctrine:migrations:status
     
    > symfony console make:migration 
    > symfony doctrine:migrations:migrate
    
    > composor dump-autoload # après suppression d'une entity & repository
    
    > symfony console doctrine:migrations:migrate prev # execute la fonction down
    > symfony console doctrine:migrations:migrate next # execute la fonction up de la migration après la current

## Generate Entities from an Existing Database

    php bin/console doctrine:mapping:import "App\Entity" annotation --path=src/Entity
    # ajouter @ORM\Entity(repositoryClass=nameRepository::class) pour chaque entitée génerée
    symfony console make:entity --regenerate App # generate rpository

    