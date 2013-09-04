apt-get -y update
apt-get -y install php5-cli
chmod +x /vagrant/bin/console

if [ ! -f /vagrant/env/additional.ini ]; then
    ln -s /vagrant/env/additional.ini /etc/php5/conf.d/additional.ini
fi