<?php
Route::get('/', 'HomeController@showWelcome');


Route::get("/calculate", [
  "as"   => "calculation.calculate",
  "uses" => "CalculationController@calculate"
]);

/*Route::any("/calculate", [
  "as"   => "calculator/calculate",
  "uses" => "CalculatorController@calculate"
]);*/

Route::any("/login", [
  "as"   => "user/login",
  "uses" => "UserController@login"
]);

Route::group(["before" => "auth"], function() {

  Route::any("/profile", [
    "as"   => "user/profile",
    "uses" => "UserController@profile"
  ]);

  Route::any("/logout", [
    "as"   => "user/logout",
    "uses" => "UserController@logout"
  ]);

});

Route::any("/request", [
  "as"   => "user/request",
  "uses" => "UserController@request"
]);

Route::any("/reset/{token}", [
  "as"   => "user/reset",
  "uses" => "UserController@reset"
]);
