
# 📧 Gestion des Mails - Symfony 7 + SendGrid

## ✅ Environnement de développement (.env.local)
```env
APP_ENV=dev
MAILER_DSN=null://null
```
- Les emails **ne sont pas envoyés**
- Les emails sont capturés dans la **Web Debug Toolbar** (icône 📬)

---

## ✅ Environnement de production (.env.prod)
```env
APP_ENV=prod
MAILER_DSN=sendgrid://SG.your_sendgrid_api_key@default
```
- Les emails sont **envoyés via SendGrid**
- Pense à remplacer `your_sendgrid_api_key` par la vraie clé API

---

## ✅ Exemple de Config dans `config/packages/mailer.yaml`
```yaml
framework:
    mailer:
        dsn: '%env(MAILER_DSN)%'
```

---

## 📤 Envoi d'un email dans le code Symfony
```php
$email = (new Email())
    ->from('formulaire-francetravail@onmycloud365.com')
    ->sender('formulaire-francetravail@onmycloud365.com')
    ->replyTo($data['email'])
    ->to($destinataire)
    ->subject($subject)
    ->html($this->renderView('contact/email_template.html.twig', ['data' => $data]));

$mailer->send($email);
```

---

## ✅ Bonnes pratiques :
- Utiliser `.env.local` en local pour désactiver l’envoi réel
- Utiliser `.env.prod` ou des variables d’environnement serveur en production
- Toujours sécuriser la clé API SendGrid (ne pas la commit)

---

## 🔗 Documentation utile :
- Symfony Mailer : https://symfony.com/doc/current/mailer.html
- SendGrid API : https://docs.sendgrid.com/api-reference/

