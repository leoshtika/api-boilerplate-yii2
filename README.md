Crowd List web app + REST API
=============================

This is a Yii2 advanced application with backend, frontend and RESTful API


Requirements
------------
- PHP 5.4 or higher
- MySQL 5 or higher


How to use
----------

...




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
  `role` smallint(6) NOT NULL DEFAULT '10',
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `password_reset_token` (`password_reset_token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1;
```



Working on bugs and features
----------------------------
Having prepared your develop environment as explained above you can now start working on the feature or bugfix.

#### 1. Make sure there is an issue created for the thing you are working on if it requires significant effort to fix
All new features and bug fixes should have an associated issue to provide a single point of reference for discussion 
and documentation.
If you do not find an existing issue matching what you intend to work on, please open a new issue or create 
a pull request directly if it is straightforward fix.

#### 2. Fetch the latest code from the main crowd-list branch
You should start at this point for every new contribution to make sure you are working on the latest code.
```
git fetch upstream
```

#### 3. Create a new branch for your feature based on the current crowd-list master branch
Each separate bug fix or change should go in its own branch. Branch names should be descriptive and start with the 
number of the issue that your code relates to. If you aren't fixing any particular issue, just skip number. For example:
```
git checkout upstream/master
git checkout -b 999-name-of-your-branch
```

#### 4. Do your magic, write your code
All new code should follow [PSR-2](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-2-coding-style-guide.md) 
coding standard. Make sure it works :)

#### 5. Commit your changes
```
git add --all
git commit -m "Resolve #999: A brief description of this change"
```


#### 6. Pull the latest code from upstream, rebase & squash your changes
Before pushing your code to GitHub make sure to integrate upstream changes into your local repository
```
git checkout master
git pull upstream master
git checkout 999-name-of-your-branch
git rebase master
```
This ensures that your changes can be merged with one click. 

**Squash commits** 
This step is not always necessary, but is required when your commit history is full of small, unimportant commits.
```
git rebase -i master
```

#### 7. Push your code to GitHub
```
git push -u origin 999-name-of-your-branch
```

#### 8. Open a [pull request](http://help.github.com/send-pull-requests/) against upstream
Go to your repository on GitHub and click "Pull Request", choose your branch on the right and enter some more 
details in the comment box. To link the pull request to the issue put anywhere in the pull comment #999 
where 999 is the issue number.
Note that each pull-request should fix a single change.

#### 9. Someone will review your code
Someone will review your code, and you might be asked to make some changes, if so go to step #5 
(you don't need to open another pull request if your current one is still open). 
If your code is accepted it will be merged into the main branch and become part of the next release.

#### 10. Cleaning it up
After your code was either accepted or declined you can delete branches you've worked with from your local repository and origin.
```
git checkout master
git branch -D 999-name-of-your-branch
git push origin --delete 999-name-of-your-branch
```