#Put all documentation files at here

#Development Tools
- ubuntu 12.04
- eclipse + egit
- apache2
- php
- firebird2.5-classic

#Setup and Configuration:
https://help.ubuntu.com/community/Firebird2.5

sudo apt-get install php5-dev firebird2.5-dev php-pear devscripts debget

apt-get source php5
cd php5-5.3.5/
cd ext/pdo_firebird
phpize
sudo ln -s /usr/include/php5 /usr/include/php
./configure
make
sudo make install

sudo pico/vi /etc/php5/conf.d/pdo.ini
# configuration for php PDO module
extension=pdo.so
extension=pdo_firebird.so


php -i | grep PDO
#Below are expected output:
PDO
PDO support => enabled
PDO drivers => firebird
PDO_Firebird
PDO Driver for Firebird/InterBase => enabled