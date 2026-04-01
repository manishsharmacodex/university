#!/bin/bash

# Give permission
chmod -R 755 /var/www/html

# Restart Apache
systemctl restart apache2