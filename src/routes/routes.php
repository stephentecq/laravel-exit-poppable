<?php


Route::get('poppable', function(){

    $data = ExitPoppable::make('Welcome to Poppables Exit popup', 'Please don\'t leave the site we have more to show you', 1);
    return view('exitPoppable::poppable', compact('data'));
});