<?php

// Post routes
route::get('/', 'PostsController@index');

route::get('/posts/create', 'PostsController@create');

route::post('/posts', 'PostsController@store');

route::get('/posts/{post}', 'PostsController@show');

// Comment routes
route::post('/posts{post}/comments', 'CommentsController@store');