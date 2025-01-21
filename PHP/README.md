## Documnetating the PHP journey
After installation of PHP and a server to run it in:
PHP can be run in multiple ways as listed below:
- ```php php_filename`
    This format runs php directly in its file but the display is on the terminal/console

- ```php -S localhost:8080```
    In this format when you run it, it opens a localhost server with a port that you specify allowing you to view the file on the web browser.
    Any file in the directory from which the command was run on the terminal can be displayed on the browser by using the url and the filename e.g ```http://localhost:8080/index.php```

- Using the servers such as wampp, xampp or amps to run the php files.
    In this format the file is created inside htdocs for xampp and www for amps
    When the server is started, it starts the apache which is a webserver and also mysql which is a default database to most web servers.
    After the server has been started, you can use the localhost address to run the file e.g ```http://127.0.0.1/file_name``` or instead of the filename, you can use the file path in using it as the root.