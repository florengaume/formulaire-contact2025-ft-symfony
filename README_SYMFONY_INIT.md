
# 🚀 Création d'un projet Symfony 7 depuis zéro

## ✅ 1. Prérequis sur ton Mac
- PHP 8.x minimum
- Composer installé
- Symfony CLI recommandé : https://symfony.com/download

---

## ✅ 2. Créer ton projet Symfony
```bash
composer create-project symfony/skeleton mon_projet
cd mon_projet
```

---

## ✅ 3. Installer les paquets nécessaires
```bash
composer require webapp
composer require symfony/asset-mapper symfony/twig-pack symfony/mailer
composer require symfony/validator
```

---

## ✅ 4. Lancer le serveur local
```bash
symfony server:start
```
Ou :
```bash
php -S localhost:8000 -t public
```

---

## ✅ 5. Initialiser AssetMapper et ImportMap
```bash
php bin/console asset-map:compile
php bin/console importmap:install
```

---

## ✅ 6. Ajouter Bootstrap (optionnel si ImportMap prêt)
```bash
php bin/console importmap:require bootstrap
```

---

## ✅ 7. Compiler les assets
```bash
php bin/console asset-map:compile
```

---

## ✅ 8. Ready à coder !
- Le projet tourne en local
- Formulaire, contrôleurs et front prêts
