===INSTRUCTIONS===
Download WordPress .zip file from https://wordpress.org/latest.zip and extract it to the appropriate folder (I am using WampServer and the folder where you should extract in that environment is "www"). Rename "wordpress" folder to "test".
Extract downloaded .zip archive to any place.
Copy folder "uploads" to "wp-content" folder inside "test".
Copy "main_test_theme-child" folder to the "themes" folder.
Copy "main_test_theme" folder to the "themes" folder, or use your copy - they are the same.
Copy "wp-config.php" file and ".htaccess" file to the main "test" folder.
Start your server (WampServer for me), and open phpMyAdmin (localhost/phpmyadmin). Credentials for accessing the database are: username = "root", password = "" (no password), if needed, you can change that in config.php.
Create new database and name it "test". I used utf8_general_ci collation, but I don't think that matters.
Click on newly created "test" database, go to Import tab and import test.sql file. After that's finished, you can restart your WampServer and in your browser go to the address localhost/test/blog.
Credentials for accessing Admin Area on localhost/test/wp-admin are: username = "root", password = "1".
