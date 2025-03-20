
# 🚀 Environnement Docker Symfony 7 - MAC/PC Ready

## ✅ Lancer l'environnement (MAC #1)
```bash
git clone https://github.com/ton-utilisateur/ton-repo.git
cd ton-repo
docker compose up -d --build
```

## ✅ Vérifier que NGINX tourne sur :
http://localhost:8080

## ✅ Commande Composer / Symfony (dans le container PHP)
```bash
docker compose exec php composer install
docker compose exec php php bin/console cache:clear
```

## ✅ Déploiement sur MAC#2 ou PC :
```bash
git clone https://github.com/ton-utilisateur/ton-repo.git
docker compose up -d
```

## ✅ GitHub Init (MAC#1 uniquement)
```bash
git init
git add .
git commit -m "Initial commit"
gh repo create france-travail-contact --public --source=. --remote=origin --push
```
