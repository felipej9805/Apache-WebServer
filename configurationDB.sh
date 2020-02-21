#!/bin/bash

sudo rm /etc/mysql/mysql.conf.d/mysqld.cnf
sudo cp /home/vagrant/provision/mysqld.cnf /etc/mysql/mysql.conf.d/
sudo service mysql restart
sudo mysql -u root < alldata.sql
