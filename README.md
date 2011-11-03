
Installation
================



Install Vendors
-------------------
php bin/vendors install


Update database
-------------------

* Configured database is called symfony2social, user:root / password: empty (app/config/parameters.ini).

php app/console doctrine:schema:update --force


Facebook 
-------------------
Included test Facebook app is configured for symfony2social.com domain.

You should edit your hosts config to resolve this domain in your hosts file.

sudo vi /etc/hosts


Admin
------------------
For admin dashboard go to:

/app_dev.php/admini/dashboard



