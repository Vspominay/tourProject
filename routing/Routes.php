<?php

require_once(__DIR__ . '/classes/Route.php');
require_once(__DIR__ . '/controllers/homeController.php');
require_once(__DIR__ . '/controllers/authController.php');
require_once(__DIR__ . '/controllers/adminController.php');
require_once(__DIR__ . '/controllers/adminUsersController.php');
require_once(__DIR__ . '/controllers/adminToursController.php');
require_once(__DIR__ . '/controllers/toursCreateController.php');
require_once(__DIR__ . '/controllers/TourViewController.php');
require_once(__DIR__ . "/../services/dummyData.php");


Route::set('', function () {
    HomeController::CreateView("homePage");
});

Route::set('auth', function () {
    AuthController::CreateView("auth");
});

Route::set('admin', function () {
    AdminController::CreateView("admin");
});

Route::set('admin/users', function () {
    AdminUsersController::CreateView("users");
});

Route::set('admin/tours', function () {
    AdminToursController::CreateView("tours");
});

Route::set('admin/tours/create', function () {
    ToursCreateController::CreateView("toursCreate");
});


foreach ($toursArray as $tour) {
    Route::set("details/$tour->id", function () use ($tour) {
        TourViewController::CreateView($tour->id);
    });
}



Route::set('404', function () {
});
