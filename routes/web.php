<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
 Route::get('/inscription', [AuthController::class, 'inscriptionForm']) ;
// Route::post('/inscription', 'AuthController@register');



// Route::get('/inscription', 'AuthController@inscriptionForm');
// {
         
    //return view('pages.log');
//}
Route::post('/save', [AuthController::class,  'traitement_log']);

    Route::get('/liste',[AuthController::class, 'liste']); 
    Route::post('/upload-pdf', [PdfController::class, 'upload.pdf']);

    Route::get('/download-pdf/{filename}', [PdfController::class, 'download.pdf']);
