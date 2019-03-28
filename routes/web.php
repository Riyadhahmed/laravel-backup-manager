<?php


Route::get('/', 'BackupController@home')->name('home');


// Backup routes
Route::get('backups', 'BackupController@index');
Route::get('allBackups', 'BackupController@getall')->name('allBackups.backups');
Route::post('backups/db_backup', 'BackupController@db_backup');
Route::post('backups/full_backup', 'BackupController@full_backup');
Route::get('backups/download/{file_name}', 'BackupController@download');
Route::delete('backups/delete/{file_name}', 'BackupController@delete');