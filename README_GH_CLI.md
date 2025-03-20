
# 🚀 Utilisation de GitHub CLI (gh) depuis Mac - Création directe du repo GitHub

## ✅ Pré-requis :
```bash
brew install gh
gh auth login  # Connecte-toi à ton compte GitHub une fois pour toutes
```

## 📂 Positionne-toi dans ton projet Symfony :
```bash
cd /chemin/vers/ton-projet
```

## 🟢 Initialise ton Git si ce n'est pas déjà fait :
```bash
git init
git add .
git commit -m "Initial commit Symfony 7 France Travail"
```

## 🚀 Crée et pousse le repo GitHub DIRECTEMENT avec la CLI :
```bash
gh repo create france-travail-contact --public --source=. --remote=origin --push
```

✅ Résultat :
- Le repo est créé sur GitHub
- Remote "origin" ajouté automatiquement
- Le push se fait directement sur la branche main

## 📚 Bonus - Voir le repo dans ton navigateur :
```bash
gh repo view --web
```

## 📌 Ton repo est prêt et en ligne sur GitHub sans passer par le site
