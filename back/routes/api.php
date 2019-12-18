<?php

Route::group([
    'middleware' => ['api']
], function ($router) {
    Route::apiResource('task', 'TasksController');
});