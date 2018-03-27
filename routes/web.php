<?php

Route::get('/', function () {
    return view('front.page.index');
});

route::get('post', function(){
	return view('front.page.single');
});



Route::get('back/home', function(){

	return view('back.home');
})->name('post');
