
# ✅ Distinction Environnement DEV (Docker) / PROD (Serveur)

## 🖥 DEV ➔ Sur Mac (ou Windows) avec Docker
- NGINX tourne dans Docker **juste pour servir Symfony et tester**
- Commande : 
```bash
docker compose up -d --build
```
- Accès au formulaire sur : 
```
http://localhost:8080
```
- Email envoyé en local ou capturé (Mailer dev ou SendGrid dev)

---

## 🌐 PROD ➔ Sur le serveur CentOS
- ⚠️ Aucun Docker utilisé
- ⚠️ NGINX **du serveur** s'occupe de servir le dossier `public/`
- ✅ Symfony déployé proprement :
```bash
git pull
composer install --no-dev --optimize-autoloader
php bin/console cache:clear
```
- ✅ Le formulaire fonctionne en iframe sans dépendre de Docker

---

## ✅ Rappel :
- Docker PHP et NGINX servent **uniquement au développement local**
- En production ➔ Symfony tourne **classique** sur PHP / NGINX du serveur

