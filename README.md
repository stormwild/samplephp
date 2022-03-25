# Sample PHP

## Pre-requisites

- PHP

### Install PHP SQLite

```
sudo apt-get install php-sqlite3
```

Output

```
Reading package lists... Done
Building dependency tree
Reading state information... Done
The following packages were automatically installed and are no longer required:
  docutils-common libimagequant0 libwebpdemux2 python3-botocore python3-dateutil python3-docutils python3-jmespath python3-olefile python3-pil python3-pygments python3-roman python3-rsa python3-s3transfer sgml-base
  xml-core
Use 'sudo apt autoremove' to remove them.
The following additional packages will be installed:
  php7.4-cli php7.4-common php7.4-json php7.4-opcache php7.4-readline php7.4-sqlite3
Suggested packages:
  php-pear
The following NEW packages will be installed:
  php-sqlite3 php7.4-sqlite3
The following packages will be upgraded:
  php7.4-cli php7.4-common php7.4-json php7.4-opcache php7.4-readline
5 upgraded, 2 newly installed, 0 to remove and 134 not upgraded.
Need to get 2663 kB of archives.
After this operation, 145 kB of additional disk space will be used.
Do you want to continue? [Y/n] Y
Get:1 http://archive.ubuntu.com/ubuntu focal-updates/main amd64 php7.4-json amd64 7.4.3-4ubuntu2.10 [19.2 kB]
Get:2 http://archive.ubuntu.com/ubuntu focal-updates/main amd64 php7.4-opcache amd64 7.4.3-4ubuntu2.10 [198 kB]
Get:3 http://archive.ubuntu.com/ubuntu focal-updates/main amd64 php7.4-readline amd64 7.4.3-4ubuntu2.10 [12.6 kB]
Get:4 http://archive.ubuntu.com/ubuntu focal-updates/main amd64 php7.4-cli amd64 7.4.3-4ubuntu2.10 [1422 kB]
Get:5 http://archive.ubuntu.com/ubuntu focal-updates/main amd64 php7.4-common amd64 7.4.3-4ubuntu2.10 [981 kB]
Get:6 http://archive.ubuntu.com/ubuntu focal-updates/main amd64 php7.4-sqlite3 amd64 7.4.3-4ubuntu2.10 [27.0 kB]
Get:7 http://archive.ubuntu.com/ubuntu focal/main amd64 php-sqlite3 all 2:7.4+75 [2004 B]
Fetched 2663 kB in 3s (911 kB/s)
(Reading database ... 95976 files and directories currently installed.)
Preparing to unpack .../0-php7.4-json_7.4.3-4ubuntu2.10_amd64.deb ...
Unpacking php7.4-json (7.4.3-4ubuntu2.10) over (7.4.3-4ubuntu2.7) ...
Preparing to unpack .../1-php7.4-opcache_7.4.3-4ubuntu2.10_amd64.deb ...
Unpacking php7.4-opcache (7.4.3-4ubuntu2.10) over (7.4.3-4ubuntu2.7) ...
Preparing to unpack .../2-php7.4-readline_7.4.3-4ubuntu2.10_amd64.deb ...
Unpacking php7.4-readline (7.4.3-4ubuntu2.10) over (7.4.3-4ubuntu2.7) ...
Preparing to unpack .../3-php7.4-cli_7.4.3-4ubuntu2.10_amd64.deb ...
Unpacking php7.4-cli (7.4.3-4ubuntu2.10) over (7.4.3-4ubuntu2.7) ...
Preparing to unpack .../4-php7.4-common_7.4.3-4ubuntu2.10_amd64.deb ...
Unpacking php7.4-common (7.4.3-4ubuntu2.10) over (7.4.3-4ubuntu2.7) ...
Selecting previously unselected package php7.4-sqlite3.
Preparing to unpack .../5-php7.4-sqlite3_7.4.3-4ubuntu2.10_amd64.deb ...
Unpacking php7.4-sqlite3 (7.4.3-4ubuntu2.10) ...
Selecting previously unselected package php-sqlite3.
Preparing to unpack .../6-php-sqlite3_2%3a7.4+75_all.deb ...
Unpacking php-sqlite3 (2:7.4+75) ...
Setting up php7.4-common (7.4.3-4ubuntu2.10) ...
Setting up php7.4-readline (7.4.3-4ubuntu2.10) ...
Setting up php7.4-opcache (7.4.3-4ubuntu2.10) ...
Setting up php7.4-sqlite3 (7.4.3-4ubuntu2.10) ...

Creating config file /etc/php/7.4/mods-available/sqlite3.ini with new version

Creating config file /etc/php/7.4/mods-available/pdo_sqlite.ini with new version
Setting up php7.4-json (7.4.3-4ubuntu2.10) ...
Setting up php7.4-cli (7.4.3-4ubuntu2.10) ...
Setting up php-sqlite3 (2:7.4+75) ...
Processing triggers for man-db (2.9.1-1) ...
Processing triggers for php7.4-cli (7.4.3-4ubuntu2.10) ...
```

Verify installation

```
$ php -m | grep sqlite
pdo_sqlite
sqlite3
```

## Resources

[SQLite 3](https://gist.github.com/stormwild/cb3cd7369897ce9322832be20535b96d)

```sql
CREATE TABLE Courses
(
    Id INTEGER PRIMARY KEY AUTOINCREMENT,
    Name TEXT NOT NULL,
    Author TEXT NOT NULL,
    Created TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
);
```

## Composer

Error:

```
$ composer update
Composer is operating significantly slower than normal because you do not have the PHP curl extension enabled.
```

[Composer install error - requires ext_curl when it's actually enabled](https://stackoverflow.com/questions/19335305/composer-install-error-requires-ext-curl-when-its-actually-enabled)

```
sudo apt-get install php-curl
```
