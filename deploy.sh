# Turn on maintenance mode in Laravel
php artisan down || true

# Pull the latest changes from the git repository
git pull origin master

# Install and update Composer dependencies (no dev removes development scripts)
composer install --no-interaction --prefer-dist --optimize-autoloader --no-dev

# Run database migrations
php artisan migrate --force

# Clear caches
php artisan cache:clear

# Clear login and registration authentication tables
php artisan auth:clear-resets

# Clear and cache routes
php artisan route:cache

# Clear and cache config
php artisan config:cache

# Clear and cache views
php artisan view:cache

# Install node modules by bypassing the package.json file
npm ci

# Build assets
npm run production

# Turn off maintenance mode
php artisan up
