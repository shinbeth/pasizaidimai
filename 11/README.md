# Ubuntu/Kubuntu MariaDB instaliacija

## Duomenu bazes susikurimas

```

$ sudo mysql
[sudo] password for kentauras: 
Welcome to the MariaDB monitor.  Commands end with ; or \g.
Your MariaDB connection id is 42
Server version: 10.3.32-MariaDB-0ubuntu0.20.04.1 Ubuntu 20.04

Copyright (c) 2000, 2018, Oracle, MariaDB Corporation Ab and others.

Type 'help;' or '\h' for help. Type '\c' to clear the current input statement.

MariaDB [(none)]> CREATE DATABASE 'lesson1';
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ''lesson1'' at line 1
MariaDB [(none)]> CREATE DATABASE 'lesson1';
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ''lesson1'' at line 1
MariaDB [(none)]> CREATE DATABASE lesson1;
Query OK, 1 row affected (0.002 sec)

MariaDB [(none)]> SHOW DATABASES;
+--------------------+
| Database           |
+--------------------+
| dolibarr           |
| information_schema |
| lesson1            |
| mysql              |
| performance_schema |
+--------------------+
5 rows in set (0.002 sec)

MariaDB [(none)]> CREATE USER 'user1'@localhost IDENTIFIED BY 'password1';
Query OK, 0 rows affected (0.003 sec)

MariaDB [(none)]> SELECT User FROM mysql.user;
+----------+
| User     |
+----------+
| dolibarr |
| root     |
| user1    |
+----------+
3 rows in set (0.000 sec)

MariaDB [(none)]> GRANT ALL PRIVILEGES ON 'lesson1'.* TO 'user1'@localhost;
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ''lesson1'.* TO 'user1'@localhost' at line 1
MariaDB [(none)]> GRANT ALL PRIVILEGES ON lesson1.* TO 'user1'@localhost;
Query OK, 0 rows affected (0.002 sec)

MariaDB [(none)]> FLUSH PRIVILEGES;
Query OK, 0 rows affected (0.001 sec)

MariaDB [(none)]> SHOWS GRANTS FOR 'user1'@localhost;
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'SHOWS GRANTS FOR 'user1'@localhost' at line 1
MariaDB [(none)]> SHOWS GRANTS FOR user1@localhost;
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'SHOWS GRANTS FOR user1@localhost' at line 1
MariaDB [(none)]> SHOWS GRANTS FOR 'user1'@localhost;
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'SHOWS GRANTS FOR 'user1'@localhost' at line 1
MariaDB [(none)]> SHOWS GRANTS FOR 'user1';
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'SHOWS GRANTS FOR 'user1'' at line 1
MariaDB [(none)]> SHOWS GRANTS FOR user1;
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'SHOWS GRANTS FOR user1' at line 1
MariaDB [(none)]> SHOW GRANTS FOR 'user1'@localhost;
+--------------------------------------------------------------------------------------------------------------+
| Grants for user1@localhost                                                                                   |
+--------------------------------------------------------------------------------------------------------------+
| GRANT USAGE ON *.* TO `user1`@`localhost` IDENTIFIED BY PASSWORD '*668425423DB5193AF921380129F465A6425216D0' |
| GRANT ALL PRIVILEGES ON `lesson1`.* TO `user1`@`localhost`                                                   |
+--------------------------------------------------------------------------------------------------------------+
2 rows in set (0.000 sec)


```
