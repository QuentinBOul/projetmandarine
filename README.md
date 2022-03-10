## Usage
### 1. Configuration

Open Terminal, select your project directory and write "composer install";

Change configuration inside `config.ini`;

```ini
[database]
host= localhost
dbname = your_db_name
;default MySQL port
port = 3306
username = your_db_username
password = your_db_password

[server]
;your project folder name
base_uri = /project-name
```

Insert abi.sql in your Database;

Change e-mail infos inside `src\controller\MessageController.php` for Contact-form;