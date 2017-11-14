<?php
//Basic Route
// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/about',function() {
// return '<h1>halo</h1>'
// .'Selamat datang dihalaman about 1<br>'
// .'Laravel,emang keren.';
// });

// Route::get('/about/1',function() {
// return '<h1>halo</h1>'
// .'Selamat datang dihalaman about 2<br>'
// .'Laravel,emang keren.';
// });


// Route::get('/about/2',function() {
// return '<h1>halo</h1>'
// .'Selamat datang dihalaman about 3<br>'
// .'Laravel,emang keren.';
// });


// Route::get('/about/3',function() {
// return '<h1>halo</h1>'
// .'Selamat datang dihalaman about 4<br>'
// .'Laravel,emang keren.';
// });

// Route::get('/about/4',function() {
// return '<h1>halo</h1>'
// .'Selamat datang dihalaman about 5<br>'
// .'Laravel,emang keren.';
// });
//route parameter
// Route::get('/about/{page}',function($a){
// 	return 'ini halaman about <b>'.$a.'</b>';
// }); 

// Route::get('/kontak',function(){
// 	return view('kontak');

// });

Route::get('/kantin/{makanan}/{minuman}/{cemilan}',function($a,$b,$c){
	return 'Saya pesan <b>'.$a.'</b><br>'
		   .'minumnya <b>'.$b.'</b><br>'
		   .'cemilannya <b>'.$c.'</b><br>';

});

Route::get('user/{nama?}',function($name = 'John'){
	return 'Nama saya '.$name;

});