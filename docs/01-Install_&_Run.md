# Install, Run & command

> https://symfony.com/doc/current/index.html

---

## Upgarde PHP version 8

> https://stitcher.io/blog/php-8-upgrade-mac

Normal upgrade

     > brew update
     > brew upgrade php
     
Upgrade with shivammathur/homebrew-php

     > brew tap shivammathur/php
     > brew install shivammathur/php/php@8.0
     
To switch between versions, use the following command:

     > brew link --overwrite --force php@8.0

Symfony refresh version 

     > symfony local:php:refresh

---

## Install Composer & Symfony

### install HomeBrew 
    > /bin/bash -c "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/HEAD/install.sh)"

### Install Composer 
    > brew install composer

### Install Symfony
    > curl -sS https://get.symfony.com/cli/installer | bash
    > export PATH="$HOME/.symfony/bin:$PATH"
    > (export) PATH="$HOME/.symfony/bin:$PATH"

---

## init new Project 
    > symfony check:requirements
    > composer create-project symfony/website-skeleton my_project_name
    > symfony new my_projet_name --full

---

## Run project Symphony
    > Symfony help
    > Symfony server:start
    > Symfoy server:start -d
    > symfony serve -d
    > symfony server:start --port=8080
    > Symfony server:list
    > symphony open:local

---

## PHP refresh version (not require)
    > symfony local:php:refresh

---

## Run Project in https
    > symfony server:ca:install
    > symfony server:stopbrew install nss

