CREATE DATABASE OlimpiadasDB;
CREATE USER 'admin_olimpiada'@'localhost' IDENTIFIED BY 'admin';
GRANT ALL PRIVILEGES ON OlimpiadasDB.* TO 'admin_olimpiada'@'localhost';
FLUSH PRIVILEGES;
