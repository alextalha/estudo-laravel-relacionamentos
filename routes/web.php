<?php

Route::get('one-to-one', 'OneToOneController@oneToOne');

Route::get('one-to-one-inverse','OneToOneController@oneToOneInverse');

Route::get('one-to-one-insert' ,'OneToOneController@oneToOneInsert');

Route::get('one-to-many','OneToManyController@oneToMany');

Route::get('many-to-one','OneToManyController@manyToOne');

Route::get('one-to-many-two','OneToManyController@oneToManyTwo');


Route::get('one-to-many-insert','OneToManyController@oneToManyInsert');




