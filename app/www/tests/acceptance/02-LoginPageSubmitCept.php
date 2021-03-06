<?php
$I = new AcceptanceTester($scenario);

$I->wantTo('Login to the site');
$I->amOnPage('/');

$I->expect('that I am logged out');
$I->see('Login');

$I->amGoingTo('go to the login page');
$I->click('Login');
$I->see('Login');

$I->amGoingTo('login');
$I->fillField('auth_slug', 'newuser@gmail.com');
$I->fillField('auth_password', 'password');
$I->click('form button');

$I->expect('Homepage');
$I->seeInCurrentUrl('/');
$I->see('Cradle PHP');
