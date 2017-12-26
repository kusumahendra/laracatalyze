# Catalyze CMS
Basic CMS to do blogging stuff for Catalyze. Feature including Categories, Tags, and image upload

## Built with
* Laravel Framework
* LFM (https://github.com/UniSharp/laravel-filemanager)
* ZURB Foundation
* CKEditor

## How to install
1. Clone this repository to your web server directory
2. create subdomain and point to /public folder
3. go to project directory and run command
```
composer install
```
3. Prepare your database detail and create new database
4. rename file .env.example to .env
5. change detail in .env file according to your DB connection detail
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3307
DB_DATABASE=laracatalyze
DB_USERNAME=root
DB_PASSWORD=pass
```
6. open terminal, go to project directory and run this command to migrate the DB
```
$ php artisan lara:rebuild
```
7. enter 'y' or 'n' in every question on migrate process (all 'y' is recommended)
8. to enable admin section to fully function go to file: /routes/web.php and un-comment this line
```
// Auth::loginUsingId(1);
```
8. your apps is ready to use on your subdomain

## Important Notes
* you need to have composer in order to install this project
* if there's 500 error when accessing the site after install try run this command inside project directory
```
sudo chgrp -R www-data storage bootstrap/cache
sudo chmod -R ug+rwx storage bootstrap/cache
```
* this project include some post/catagories and tags, so you dont need to write all post. but if you want to create new post, you can do it on admin section
* admin section can be accessed under /admin
* a full sample for post detail can be accessed at /post/lorem-ipsum-dolor-sit-amet-consectetur-adipisicing-elit-sed-do-eiusmod-tempor
* CKeditor is used as WYSIWYG editor
* on uploading image window, you need to change the view option from grid to list to able to select image. (this is a bug, will fix it soon)
