Setup & Run the project:

Download

# clone
git clone https://github.com/MoumitaSarkar425/laraveleventlistener.git

# Access project
cd laraveleventlistener

Config


# Install dependencies
composer install

# Create file .env
cp .env.example .env

# Create migrations (tables and Seeders)
php artisan migrate --seed

# Create Server
php artisan serve

# Queue
php artisan queue:work
