Crowd List web app + REST API
=============================

This is a Yii2 advanced application with backend, frontend and RESTful API


Requirements
------------
- PHP 5.4 or higher


Workflow for crowd-list contributors
------------------------------------

### Prepare your development environment

#### 1. Fork the crowd-list repository on GitHub and clone your fork to your development environment
```
git clone https://github.com/YOUR-GITHUB-USERNAME/crowd-list.git
```

#### 2. Add the main crowd-list repository as an additional git remote called "upstream"
```
git remote add upstream https://github.com/leoshtika/crowd-list.git
```

#### 3. Install dependencies (assuming you have composer installed globally)
```
composer install
```
Note: If you see errors like Problem 1 The requested package bower-asset/jquery could not be found in any version, 
there may be a typo in the package name., you will need to run: 
```
composer global require "fxp/composer-asset-plugin:~1.0.3"
```

#### 4. Initialize the application
Execute
```
php init
```
select development as environment


#### 5. Create a new database
```
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `auth_key` varchar(32) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `password_reset_token` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `first_name` varchar(128) NOT NULL,
  `last_name` varchar(128) NOT NULL,
  `role` int(6) NOT NULL DEFAULT '10',
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `password_reset_token` (`password_reset_token`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1;
```



Working on bugs and features
----------------------------