<?php

Route::group([
    'middleware' => ['api','cors']
], function ($router) {
    Route::apiResource('task', 'TasksController');
});