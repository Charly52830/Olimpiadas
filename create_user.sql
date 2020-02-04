CREATE DATABASE OlimpiadasDB;
CREATE USER 'admin_olimpiada'@'localhost' IDENTIFIED BY 'admin';
GRANT ALL PRIVILEGES ON OimpiadasDB.* TO 'admin_olimpiada'@'localhost';
FLUSH PRIVILEGES;
