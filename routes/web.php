<?php

// Post routes
route::get('/', 'PostsController@index')->name('home');

route::get('/posts/create', 'PostsController@create');

route::post('/posts', 'PostsController@store');

route::get('/posts/{post}', 'PostsController@show');

// Comment routes
route::post('/posts{post}/comments', 'CommentsController@store');


// Usersystem routes
route::get('/register', 'RegistrationController@create');
route::post('/register', 'RegistrationController@store');
route::get('/login', 'SessionsController@create');
route::get('/logout', 'SessionsController@destroy');