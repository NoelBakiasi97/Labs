<?php

use Illuminate\Support\Facades\Route;


Auth::routes();
Route::get('/backoffice', 'HomeController@index')->name('home');


//PAGES
Route::get('/', 'WelcomeController@index')->name('welcome');
Route::get('/pageServices', 'PageServices@index')->name('pageServices');
Route::get('/pageBlog', 'PageBlog@index')->name('pageBlog');
Route::get('/pageContact', 'PageContact@index')->name('pageContact');


//USERS
Route::get('/users', 'UserController@index')->name('users');
Route::get('/editUsers/{id}', 'UserController@edit')->name('editUsers');
Route::post('/updateUsers/{id}', 'UserController@update')->name('updateUsers');
Route::get('/deleteUsers/{id}', 'UserController@destroy')->name('deleteUsers');


//MAIL-NEWSLETTER
Route::get('/emails', 'FormController@index')->name('emails');
Route::post('/saveMail', 'FormController@store')->name('saveEmail');
Route::get('/newsletter', 'NewsletterController@index')->name('newsletter');
Route::post('/saveNewsletter', 'NewsletterController@store')->name('saveNewsletter');




//TITRES
Route::get('/titres', 'TitreController@index')->name('titres');
Route::get('/editTitres/{id}', 'TitreController@edit')->name('editTitres');
Route::post('/updateTitres/{id}', 'TitreController@update')->name('updateTitres');


//HEADER
Route::get('/header', 'HeaderController@index')->name('header');
Route::get('/addCarousel', 'HeaderController@create')->name('addCarousel');
Route::post('/saveCarousel', 'HeaderController@store')->name('saveCarousel');
Route::get('/editCarousel/{id}', 'HeaderController@edit')->name('editCarousel');
Route::post('/updateCarousel/{id}', 'HeaderController@update')->name('updateCarousel');
Route::get('/deleteCarousel/{id}', 'HeaderController@destroy')->name('deleteCarousel');
Route::get('/editHeader/{id}', 'HeaderController@editHeader')->name('editHeader');
Route::post('/updateHeader/{id}', 'HeaderController@updateHeader')->name('updateHeader');


//ABOUT
Route::get('/about', 'AboutController@index')->name('about');
Route::get('/editAbout/{id}', 'AboutController@edit')->name('editAbout');
Route::post('/updateAbout/{id}', 'AboutController@update')->name('updateAbout');


//TESTIMONIAL
Route::get('/testimonials', 'TestimonialController@index')->name('testimonials');
Route::get('/addTestimonial', 'TestimonialController@create')->name('addTestimonial');
Route::post('/saveTestimonial', 'TestimonialController@store')->name('saveTestimonial');
Route::get('/editTestimonial/{id}', 'TestimonialController@edit')->name('editTestimonial');
Route::post('/updateTestimonial/{id}', 'TestimonialController@update')->name('updateTestimonial');
Route::get('/deleteTestimonial/{id}', 'TestimonialController@destroy')->name('deleteTestimonial');


//SERVICES
Route::get('/services', 'ServiceController@index')->name('services');
Route::get('/addServices', 'ServiceController@create')->name('addServices');
Route::post('/saveServices', 'ServiceController@store')->name('saveServices');
Route::get('/editServices/{id}', 'ServiceController@edit')->name('editServices');
Route::post('/updateServices/{id}', 'ServiceController@update')->name('updateServices');
Route::get('/deleteServices/{id}', 'ServiceController@destroy')->name('deleteServices');


//STANDOUT
Route::get('/standout', 'StandoutController@index')->name('standout');
Route::get('/editStandout/{id}', 'StandoutController@edit')->name('editStandout');
Route::post('/updateStandout/{id}', 'StandoutController@update')->name('updateStandout');


//CONTACT
Route::get('/contact', 'ContactController@index')->name('contact');
Route::get('/editContact/{id}', 'ContactController@edit')->name('editContact');
Route::post('/updateContact/{id}', 'ContactController@update')->name('updateContact');


//FOOTER
Route::get('/footer', 'FooterController@index')->name('footer');
Route::get('/editFooter/{id}', 'FooterController@edit')->name('editFooter');
Route::post('/updateFooter/{id}', 'FooterController@update')->name('updateFooter');


//ARTICLES
Route::get('/articles', 'ArticleController@index')->name('articles');
Route::get('/addArticle', 'ArticleController@create')->name('addArticle');
Route::post('/saveArticle', 'ArticleController@store')->name('saveArticle');
Route::get('/editArticle/{id}', 'ArticleController@edit')->name('editArticle');
Route::post('/updateArticle/{id}', 'ArticleController@update')->name('updateArticle');
Route::get('/showArticle/{id}', 'ArticleController@show')->name('showArticle');
Route::get('/deleteArticle/{id}', 'ArticleController@destroy')->name('deleteArticle');
Route::get('/searchArticle', 'ArticleController@search')->name('searchArticle');



//CATEGORIES
Route::get('/categories', 'CategorieController@index')->name('categories');
Route::get('/addCategorie', 'CategorieController@create')->name('addCategorie');
Route::post('/saveCategorie', 'CategorieController@store')->name('saveCategorie');
Route::get('/editCategoire/{id}', 'CategorieController@edit')->name('editCategorie');
Route::post('/updateCategorie/{id}', 'CategorieController@update')->name('updateCategorie');
Route::get('/deleteCategorie/{id}', 'CategorieController@destroy')->name('deleteCategorie');
Route::get('/searchCategorie', 'CategorieController@search')->name('searchCategorie');


//TAGS
Route::get('/tags', 'TagController@index')->name('tags');
Route::get('/addTag', 'TagController@create')->name('addTag');
Route::post('/saveTag', 'TagController@store')->name('saveTag');
Route::get('/editTag/{id}', 'TagController@edit')->name('editTag');
Route::post('/updateTag/{id}', 'TagController@update')->name('updateTag');
Route::get('/deleteTag/{id}', 'TagController@destroy')->name('deleteTag');
Route::get('/searchTag', 'TagController@search')->name('searchTag');


//COMMENTAIRE
Route::get('/comments', 'CommentController@index')->name('comments');
Route::get('/addComment', 'CommentController@create')->name('addComment');
Route::post('/saveComment', 'CommentController@store')->name('saveComment');