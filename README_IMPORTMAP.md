
# 📦 ImportMap Symfony - Utilisation sans NPM

## ✅ Ce projet utilise ImportMap (pas NPM)

## 📥 Extrait de `importmap.php`
```php
<?php
return [
    'bootstrap' => 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.esm.min.js',
];
```

## 🔧 Comment utiliser bootstrap ou autre librairie dans app.js
```javascript
import 'bootstrap';
```

## ✅ Ensuite dans votre Twig :
```twig
{{ importmap('app') }}
```

## 🎯 Pas besoin de `npm install` ni `node_modules`
- ImportMap gère le CDN
- Bootstrap et autres librairies externes viennent du web
