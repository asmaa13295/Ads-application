<?php
use App\Classes\Route;
use App\Classes\CurrentUser;
use App\Controllers\Home;

Route::set('index.php', function () {
    Home::CreateView('Home');
});

Route::set('details', function () {
    Home::CreateView('AdDetails');
});


Route::set('edit', function () {
    Home::CreateView('Edit');
});


Route::set('update_ad', function () {
    Home::updateAd();
});

Route::set('add', function () {
    Home::CreateView('Add');
});


Route::set('add_ad', function () {
    Home::addAd();
});


Route::set('delete', function () {
    Home::deleteAd();
});

Route::set('login', function () {
    Home::CreateView('Login');
});

Route::set('logout', function () {
    CurrentUser::logout();
    header('Location: ' . $_SERVER['SCRIPT_NAME']);
});

Route::set('login_validation', function () {
    Home::validateAdmin('Login');
});
