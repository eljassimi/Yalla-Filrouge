
![Yalla Logo](yalla/public/assets/logo/Yalla2.png)

## 🏆 Description
**Yalla** est une application web développée pour accompagner les visiteurs et participants aux grands événements au Maroc, notamment la Coupe du Monde 2030. Elle centralise plusieurs services essentiels pour simplifier l'expérience utilisateur :

- Gestion des billets et réservations
- Gestion du transport interurbain (car/bus entre la localisation de l'utilisateur et les lieux d'événement)
- Gestion des hôtels (recherche, réservation et suivi des hébergements)

Le but est de proposer une plateforme fluide, sécurisée et intuitive pour les visiteurs nationaux et internationaux.

---

## ⚙️ Fonctionnalités principales
- ✅ Réservation et gestion de billets
- ✅ Planification et réservation de transport entre villes
- ✅ Réservation d'hôtels à proximité des événements
- ✅ Interface responsive (desktop et mobile)
- ✅ Tableau de bord utilisateur pour suivre ses réservations
- ✅ Intégration d'un système de paiement sécurisé (Stripe)
- ✅ Authentification sécurisée (mot de passe, éventuellement 2FA)

---

## 🛠️ Technologies utilisées
- **Frontend** : HTML5, CSS3, JavaScript, Vue.js, Tailwind CSS
- **Backend** : PHP (Laravel)
- **Base de données** : MySQL
- **Autres** : Stripe API, Vercel (hébergement), authentification sécurisée

---

## 🚀 Installation
1. Clonez le repository :
   ```bash
   git clone
   ```
2. Enter Directory :
   ```bash
   cd yalla
   ```
3. Installez les dépendances Laravel :
   ```bash
   composer install
   ```
4. Copiez le fichier d'environnement :
   ```bash
   cp .env.example .env
   ```
5. Enter Directory :
   ```bash
   php artisan key:generate
   ```
6. Générez la clé d'application  :
   ```bash
   php artisan migrate
      ```
7. Démarrez le serveur local :
   ```bash
   php artisan serve
   ```
  
