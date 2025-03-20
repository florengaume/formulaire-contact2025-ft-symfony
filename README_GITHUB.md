
# 🚀 Déploiement du projet Symfony sur GitHub depuis Mac

## ✅ Étapes à suivre dans le terminal (Mac / zsh)

### 1. Se placer dans le dossier du projet
```bash
cd /chemin/vers/ton-projet
```

### 2. Initialiser Git
```bash
git init
```

### 3. Ajouter le .gitignore (fourni dans ce projet)
```bash
git add .gitignore
```

### 4. Ajouter tous les fichiers (sauf ce qui est ignoré)
```bash
git add .
```

### 5. Faire un commit initial
```bash
git commit -m "Initialisation du projet Symfony 7 avec AssetMapper et SendGrid"
```

### 6. Créer un dépôt vide sur https://github.com (nom du repo exemple : france-travail-contact)

### 7. Lier le projet à ton dépôt distant
```bash
git remote add origin https://github.com/TON-UTILISATEUR/france-travail-contact.git
```

### 8. Pousser le projet sur la branche principale (main)
```bash
git branch -M main
git push -u origin main
```

✅ Ton projet est maintenant sur GitHub.

---
## 📌 Bonus - Ne JAMAIS versionner :
- `.env.local`
- tes clés API SendGrid
- `/vendor`
- `/var`

Le `.gitignore` fourni gère tout ça.
