# INFlow
Inflow is a mental help  web application designed to help users accurately diagnose emotional health conditions based on the Lüscher Color Test System. This platform provides users with a comprehensive set of tools to better understand their emotional health, including symptoms, risk factors, treatment options, and access to a private psychological clinic

## Features

- **Lüscher Color Test**:
  - Take the Lüscher Color Test to gain insights into your emotional state.
  - Receive a personalized analysis based on your test results.
  - Understand the emotional significance of different color choices.

- **Private Psychological Clinic**:
  - Explore our private psychological clinic services.
  - Connect with experienced mental health professionals.
  - Schedule private sessions for personalized support and treatment.

- **Articles and Reviews**:
  - Access a library of articles on mental health topics.
  - Read reviews and testimonials from our community.
  - Stay informed and inspired on your emotional wellness journey.


## Demo video
[Application run](https://drive.google.com/drive/folders/1yNsxK4bdHYgR89D0iCiU8PA7DVjxHqFo)


## Requirements
This project built using **laravel 10**, so your php version must be >= **7.0**

## Installation
1. Clone the source code. `git clone https://github.com/embabby/blog.git`
2. Go to inside the project. `cd inflow`
3. Run `composer install` to install all the dependencies.
4. Copy configrations file. `cp .env.example .env`
5. Create a new database.
6. Open .env file and set database configrations
```php
      DB_DATABASE= YOUR_DATABASE_NAME_HERE
      DB_USERNAME= YOUR_USERNAME_HERE
      DB_PASSWORD= YOUR_PASSWORD_HERE
```
7. Migrate the tables `php artisan migrate`
8. Run `php artisan jwt:secret` to create a secret key into .env
9. Run the project! `php artisan serve`
10. for admin panel type in url /dashboard/login and insert 'admin@gmail.com' for email and 'admin' for password


