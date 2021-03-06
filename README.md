## Brocket Project

Made to complete studies, by :
- Bryan Dario Lesmana
- Muhammad Miftah Faridh
- Suryanegara
- Aditya Ghalib Hendryan 
- Yogie Wisesa
- Muhamad Fadil Hafiz
- Nisrina Athallah


## Requirement

- Windows 10
- Node.js : https://nodejs.org/en/download/
- XAMPP : https://www.apachefriends.org/index.html
- Code Editor

## How to run

- Make sure all the requirements have been met
- Open CMD
- git clone https://github.com/miftahfaridhh/brocket.git
- cd brocket
- composer install
- npm install
- cp .env.example .env
- php artisan key:generate
- open XAMPP without closing the CMD, klik start Click start on apache and MySQL
- open your localhost/phpmyadmin on your browser
- make a new database with the name 'brocket'
- open cmd again, type 'php artisan migrate'
- type 'php artisan serve' to run the laravel project
