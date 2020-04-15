CURRENT_DIR=$(pwd)
CURRENT_USER="$(whoami)"

sudo chown -R $CURRENT_USER $CURRENT_DIR
sudo chgrp -R www-data storage bootstrap/cache
sudo chmod -R ug+rwx storage bootstrap/cache

# OPTION 2

# Own all directories and files (it makes working with everything much easier):
#sudo chown -R $CURRENT_USER:www-data $CURRENT_DIR

# Then give both current_user and the webserver permissions:
#sudo find $CURRENT_DIR -type f -exec chmod 664 {} \;
#sudo find $CURRENT_DIR -type d -exec chmod 775 {} \;

# Then give the webserver the rights to read and write to storage and cache
#sudo chgrp -R www-data storage bootstrap/cache
#sudo chmod -R ug+rwx storage bootstrap/cache
