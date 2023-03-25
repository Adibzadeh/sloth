<?php
/**
 * Please delete or change its name and take a backup after completing the installation
 **/

require_once 'core/Form.php';

$form = new Form('install', 'POST', false);

$form->open();

// Website Name
$form->text('website-name', 'Website Name');

// Admin Username and password
$form->text('username', 'Username');
$form->password('password', 'Password');

// Admin panel url
$form->text('admin-panel');

// Database type and access details
$form->text('db-name', 'Database Name');

$form->submit("Save and Start!");

// Other settings
$form->close();
