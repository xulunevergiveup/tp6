<?php

use think\facade\Route;

// demo
Route::group(':version/demo', function () {
    Route::get('', ':version.Demo/show');
});
