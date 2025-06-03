# Events Booking System Backend API with Laravel

[Project Repository](https://github.com/Waly-ul/Event_Booking_Project_Backend_API_With_Laravel)

## Description
This backend is built using Laravel and acts as a RESTful API provider for a Vue.js frontend(https://github.com/Waly-ul/Event_Booking_Project_Frontend_With_Vue.JS).  
It manages core functionalities such as user authentication and authorization with Laravel Sanctum, and performs CRUD operations on users, events, bookings, and notifications. The backend ensures secure API communication, handles database relationships, validates data, and manages business logic.  

Additionally, it integrates with third-party services for enhanced functionality:  
- **Pusher** for real-time web notifications  
- **Twilio** for sending SMS alerts to users upon successful bookings or admin updates  

API testing is done using Postman, and the database schema follows a well-structured entity-relationship model.

---

## Features
- User registration, login, and authentication via Laravel Sanctum  
- CRUD operations on Users, Events, Bookings, and Notifications  
- Real-time notifications with Pusher  
- SMS notifications using Twilio  
- Secure API with proper validation and authorization  
- Database seeded with initial data for testing

---

## 🚀 Project Setup Guide

### Prerequisites
- PHP >= 8.0  
- Composer  
- MySQL (or compatible database)  
- Laravel CLI (optional)  
- Mailtrap account (for testing emails)  
- Pusher account (for broadcasting notifications)

### Installation Steps

1. Clone the repository  
   ```bash
   git clone https://github.com/Waly-ul/Event_Booking_Project_Backend_API_With_Laravel.git
   cd Event_Booking_Project_Backend_API_With_Laravel

2. Instal Composer dependencies
    ```bash
    composer install

3. Copy .env.example to .env
    ```bash
    cp .env.example .env

4. Generate Laravel application key
    ```bash
    php artisan key:generate

5. Create a database named events_booking on your local MySQL server.

6. Configure your database credentials in .env
    ```bash
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=events_booking
    DB_USERNAME=root
    DB_PASSWORD=your_db_password

7. Run database migrations
    ```bash
    php artisan migrate

8. Seed the database with sample data
    ```bash
    php artisan db:seed

9. Configure Mailtrap for email testing: 

    a. Register or login Mailtrap
    b. Create an inbox and grab SMTP credentials
    c. Update .env with Mailtrap settings:

        MAIL_MAILER=smtp
        MAIL_HOST=sandbox.smtp.mailtrap.io
        MAIL_PORT=2525
        MAIL_USERNAME=your_mailtrap_username
        MAIL_PASSWORD=your_mailtrap_password
        MAIL_ENCRYPTION=null
        MAIL_FROM_ADDRESS=no-reply@example.com
        MAIL_FROM_NAME="${APP_NAME}"

10. Configure Pusher for broadcasting notifications:

    a. Install Pusher PHP SDK (if not installed):

        composer require pusher/pusher-php-server

    b. Add these to your .env (replace placeholders with your actual Pusher credentials):

        BROADCAST_DRIVER=pusher
        PUSHER_APP_ID=your_app_id
        PUSHER_APP_KEY=your_app_key
        PUSHER_APP_SECRET=your_app_secret
        PUSHER_HOST=
        PUSHER_PORT=443
        PUSHER_SCHEME=https
        PUSHER_APP_CLUSTER=your_cluster
    
    c. Verify config/broadcasting.php has the correct Pusher config:

        'pusher' => [
            'driver' => 'pusher',
            'key' => env('PUSHER_APP_KEY'),
            'secret' => env('PUSHER_APP_SECRET'),
            'app_id' => env('PUSHER_APP_ID'),
            'options' => [
                'cluster' => env('PUSHER_APP_CLUSTER'),
                'useTLS' => true,
            ],
        ],

11. Start the Laravel development server:

    php artisan serve


