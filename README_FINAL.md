
# ✅ Guide Symfony 7 - AssetMapper, ImportMap, Email (SendGrid) - Récapitulatif

## 🚀 Lancer le projet en développement
```bash
composer install
php bin/console asset-map:compile
symfony server:start
```

## 📦 Vérifier les assets disponibles
```bash
php bin/console asset-map:assets
```

## 📥 Gestion ImportMap (déjà prêt avec Bootstrap CDN)
Importer une librairie :
```bash
php bin/console importmap:require bootstrap
```

Dans `app.js` :
```javascript
import 'bootstrap';
```

Dans Twig :
```twig
{{ importmap('app') }}
```

## 🛠 Compilation des assets
### En développement :
```bash
php bin/console asset-map:compile
```
### En production :
```bash
APP_ENV=prod php bin/console asset-map:compile --no-debug --force
```

## ✉️ Envoi d’email (Mailer / SendGrid)
### En dev :
```
MAILER_DSN=null://null
```
### En prod (SendGrid actif) :
```
MAILER_DSN=sendgrid://SG.your_sendgrid_api_key@default
```

### Envoi dans le Controller :
```php
$mailer->send($email);
```

## 🖥 Exemple d'usage en IFRAME :
```html
<iframe src="https://ton-projet.fr/contact" width="100%" height="900"></iframe>
```

## 📚 Documentation utile :
- AssetMapper : https://symfony.com/doc/current/frontend/asset_mapper.html
- ImportMap : https://symfony.com/doc/current/frontend/importmap.html
- Mailer : https://symfony.com/doc/current/mailer.html

