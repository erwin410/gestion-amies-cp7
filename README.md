
# INSTALLER LE PROJET

### Require
- PHP 8
- CLI de symfony
- Composer

- Cloner le projet
```
git clone https://github.com/erwin410/gestion-amies-cp7.git
```

- Accéder au répertoire
```
cd nom-du-repertoire
```
- Installer les dépendances
```
composer install
```

- Créer un fichier .env.local et renseigner les variables d'environnement
```
DATABASE_URL="mysql://nom-utilisateur:votre-mots-de-passe@127.0.0.1:3306/nom-base-de-donnée?charset=utf8mb4"
```

- Créer la base de donnée
```
php bin/console doctrine:database:create
```

- Executer les migrations
```
php bin/console doctrine:migrations:migrate
```

- Lancer le serveur
```
symfony server:start
```


# FONCTIONNALITE EN PLACE

- Enregistrement utilisateur
- Connexion utilisateur
- Page accueil (si pas connecté redirige vers login) : voir comme sur la capture d'écran

# FONCTIONNALITE NE FONCTIONNE PAS

- Ajouter les autres utilisateurs en amis
- Voir les demandes en cours que j'ai faite
- Voir les demandes que les autres ont fait (pouvoir l'accepter ou refuser)
- Voir les amis
