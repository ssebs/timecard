#!/bin/bash
echo "Creating tables..."
mysql -u root -proot -Bse "DROP DATABASE test;" > /dev/null 2>&1
mysql -u root -proot -Bse "CREATE DATABASE test; USE test; CREATE TABLE Users (id INT NOT NULL PRIMARY KEY AUTO_INCREMENT, Name VARCHAR(20), User VARCHAR(20), Email VARCHAR(30), Birthday DATE);"
mysql -u root -proot -Bse "USE test; CREATE TABLE Passwds (id INT NOT NULL PRIMARY KEY AUTO_INCREMENT, User VARCHAR(20), Pass VARCHAR(20));"
mysql -u root -proot -Bse "USE test; CREATE TABLE Time (id int NOT NULL PRIMARY KEY AUTO_INCREMENT,User VARCHAR(20),ChargeCode VARCHAR(20),InputTime TIME ,Latest bool DEFAULT '0');"

mysql -u root -proot -Bse "USE test; INSERT INTO Users VALUES (NULL,'Sebastian', 'ssebs', 'ssebs@ymail.com', '1997-06-18');"
mysql -u root -proot -Bse "USE test; INSERT INTO Passwds VALUES (NULL, 'ssebs','myP@ss');"
mysql -u root -proot -Bse "USE test; INSERT INTO Time VALUES (NULL, 'ssebs','ch01-std', '2018-2-26 08:45:00', TRUE);"
mysql -u root -proot -Bse "USE test; SELECT * FROM Users;"
mysql -u root -proot -Bse "USE test; SELECT * FROM Passwds;"
mysql -u root -proot -Bse "USE test; SELECT * FROM Time;"

ip=$(ifconfig | grep "inet addr:192" | cut -d":" -f 2 | xargs | cut -d" " -f 1)

echo "IP: $ip"  
