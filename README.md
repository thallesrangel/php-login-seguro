# Login seguro no PHP

Usando PASSWORD_ARGON2ID
[Youtube](https://www.youtube.com/watch?v=Qhk6xu53kho)

## SQL

```mysql -uroot -proot```

create database users;

use users;

create table user (
    id int primary key auto_increment, 
    email varchar(32), 
    password varchar(255)
);

## Container PHP

```php cadastrar.php```

```php logar.php```