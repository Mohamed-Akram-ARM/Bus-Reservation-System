# 🚍 Laravel Bus Reservation System

A simple bus reservation management system built with **Laravel**, featuring:
- Customer reservations management
- Bus management
- Seat booking system
- Admin panel with DataTables integration

---

## 📌 Features
- User authentication (Laravel Breeze/Jetstream/Custom)
- Manage buses (add, update, delete)
- Customer reservations with seat numbers
- Approve/Reject pending bookings
- DataTables for searchable & paginated data
- Responsive admin panel with Blade templates

---

## ⚙️ Requirements
Make sure you have the following installed:
- PHP >= 8.0
- Composer
- MySQL / MariaDB
- Node.js & NPM (for frontend assets)
- Laravel 10+

---

## 🚀 Installation



1. Install PHP dependencies:
--cmd--
composer install


2. Install JS dependencies:
--cmd--
npm install && npm run dev


3. Copy .env file and configure:
--cmd--
cp .env.example .env


4. Update the following in .env:

DB_DATABASE=bus
DB_USERNAME=root
DB_PASSWORD=


5. Run migrations and seeders:
--cmd--
php artisan migrate --seed


6. Start the local server:
--cmd--
php artisan serve


7. 2E52-83B0


Visit:
 http://127.0.0.1:8000