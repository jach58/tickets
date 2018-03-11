<?php

Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');
Route::get('/contact', 'TicketsController@create');
Route::post('/contact', 'TicketsController@store');
Route::get('/tickets', 'TicketsController@index');
Route::get('/ticket/{slug?}', 'TicketsController@show');
Route::get('/ticket/{slug?}/edit', 'TicketsController@edit');
Route::post('/ticket/{slug?}/edit', 'TicketsController@update');
Route::post('/ticket/{slug?}/delete', 'TicketsController@destroy');
Route::post('/comment','CommentsController@newComment');


Route::get('sendemail',function(){
   $data = array(
     'name'=> "Curso Laravel",
   );

    Mail::send('emails.welcome',$data,function($message){
        $message->from('juher84@gmail.com','Curso Laravel');
        $message->to('juher84@gmail.com')->subject('test email Curso Laravel');
    });

    return "Tu email ha sido enviado";
});
