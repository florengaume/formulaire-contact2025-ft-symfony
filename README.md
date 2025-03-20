
# 📄 Projet Symfony 7 - Formulaire France Travail

## ✅ Structure
- Symfony 7 avec AssetMapper
- Bootstrap intégré
- Envoi d'email configuré
- Formulaire dynamique avec logique serveur
- Routing YAML ajouté

## 🚀 Lancer le projet
```bash
composer install
php bin/console asset-map:compile
symfony server:start
```

## 📂 Routes disponibles
- `/contact` ➔ Formulaire de contact

## 📧 Email Configuration
- FROM : formulaire-francetravail@onmycloud365.com
- FROMNAME : Formulaire contact France Travail
- Objet dynamique selon le profil sélectionné
- Redirection automatique Demandeur d’emploi et Recruteur vers la FAQ France Travail

## 📦 Asset Management
```bash
php bin/console asset-map:compile
```

## 📝 Technologies
- Symfony 7
- AssetMapper
- Bootstrap 5
- Twig

