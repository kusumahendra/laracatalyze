# Catalyze CMS
Basic CMS to do blogging stuff for Catalyze. Feature including Categories, Tags, and image uploading

## Built with
* Laravel Framework
* LFM (https://github.com/UniSharp/laravel-filemanager)
* ZURB Foundation
* CKEditor

## How to install
1. Clone this repository to your web server directory
2. Prepare your database detail and create new database
3. rename file .env.example to .env
4. change detail in .enf file according to your DB connection detail
	DB_CONNECTION=mysql
	DB_HOST=127.0.0.1
	DB_PORT=3307
	DB_DATABASE=laracatalyze
	DB_USERNAME=root
	DB_PASSWORD=pass
5. open terminal, go to project directory and run this command to migrate the DB
	$ php artisan lara:rebuild
6. enter 'y' or 'n' in every question on migrate process (all 'y' is recommended)
7. your apps is ready to use

## notes
* admin section can be accessed under /admin
* a full sample for post detail can be accessed at /post/lorem-ipsum-dolor-sit-amet-consectetur-adipisicing-elit-sed-do-eiusmod-tempor
* CK editor is used as WYSIWYG editor
* on uploading image window, you need to change the view option from grid to list to able to select image. (this is a bug, will fix it soon)