# Then... Record! 

This began when I noticed that every new language used demand  effort to memorize its syntax and semantic rules. So, as I did not want carry my copybook forever, I decided record every new sentence in a simple text file full of comments (but not spamy) in order to I be able to come back wherever and reopen, seek the forgotten command, for example, and "Ctrl+C Ctrl+V".

## What about the struct
 
- A new discipline, programing language or whatever specific subject, a new folder in database. 
- If the subject has concepts, so there is a *topic.txt* file
- If the subject is a kind of coding, there is a folder named *sheet* with its *samples* and *comments*

## How this is growing up

- A new knowledge area learning, a new entity into database 
- A new concept or a deeper learning into coding, a new block of lines

---
> This tends to be always in works.

---

## Development environment for Linux users

1. Install apache2 and php7

2. Clone this project in /var/www/thenrecord. 

```sh 
	$ chown -R $USER:$USER /var/www/thenrecord
```

3. Set a virtual host to run thenrecord
	Copy /etc/apache2/sites-available/000-default.conf to /etc/apache2/sites-available/thenrecord.conf 
	Paste the following code into /etc/apache2/sites-available/thenrecord.conf 
		
```
	ServerName thenrecord
	ServerAlias www.thenrecord
	ServerAdmin webmaster@localhost
	DocumentRoot /var/www/thenrecord
	<Directory /var/www/thenrecord>
		Options Indexes FollowSymLinks
		AllowOverride All
		Require all granted
	</Directory>
	ErrorLog ${APACHE_LOG_DIR}/error.log
	CustomLog ${APACHE_LOG_DIR}/access.log combined
```

4. Disable the default apache2 site installed

```sh
	$ a2dissite 000-default 
```

5. Enable thenrecord with

 
```sh
	$ a2ensite thenrecord
```

6. Set friendly url

```sh
	$ a2enmod rewrite
```

7. Verify apache syntax errors with 

```sh
	$ a2dissite 000-default
```

8. Restart apache with

```sh
	$ service apache2 restart
```

9. `Finally`, access localhost/ in your favourite browser. For more explanation, see
	- [digitalocean.com/community/tutorials/how-to-install-linux-apache-mysql-php-lamp-stack-on-ubuntu-20-04-pt]
	- [digitalocean.com/community/tutorials/how-to-rewrite-urls-with-mod_rewrite-for-apache-on-ubuntu-20-04]

[digitalocean.com/community/tutorials/how-to-install-linux-apache-mysql-php-lamp-stack-on-ubuntu-20-04-pt]: <https://www.digitalocean.com/community/tutorials/how-to-install-linux-apache-mysql-php-lamp-stack-on-ubuntu-20-04-pt>
[digitalocean.com/community/tutorials/how-to-rewrite-urls-with-mod_rewrite-for-apache-on-ubuntu-20-04]: <https://www.digitalocean.com/community/tutorials/how-to-rewrite-urls-with-mod_rewrite-for-apache-on-ubuntu-20-04>


