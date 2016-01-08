Letty's Laravel Blog

This is my blog written in PH, JS, jQuery, and CSS on the Laravel framework using the MVC Architecture.

##Getting Started
- Clone this repository (do this before creating .dev site)
	- cd into sites
	- git clone git@github.com.....blog.git blog.dev
- Create your own branch
	- cd blog.dev
	- git branch letty
	- git checkout letty
	- git branch -b letty (short cut command to replace the above)
- Create .dev site
	- cd vagrant_lamp
	- ansible-playbook ansible/playbooks/vagrant/site/php.yml
		- Note: When using php packages that route or php frameworks, use dynamic site creation ansible command
- Edit /etc/hosts
- Create a database for this application
	- ansible command to create database
- Create a '.env.local.php' file inside of 'blog.dev/'
- Add the contents of 'env-template.php' to '.env.local.php'
- Add your database logins credentials to the values
- Run 'composer install'
	- vagrant ssh
	- cd blog.dev
	- composer install on the command line

This project is built using a Model-View-Controller architecture.

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)