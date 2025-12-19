#!/bin/bash

echo "Menjalankan Laravel Dev Environment..."

# Menjalankan PHP Artisan Serve di jendela baru
mintty -e php artisan serve &

# Menjalankan NPM Run Dev di jendela baru
mintty -e npm run dev &

# Menjalankan Queue Worker di jendela baru
# mintty -e php artisan queue:listen --tries=1 &

echo "Semua proses telah dijalankan di jendela terpisah!"