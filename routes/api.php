<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Mahasiswa;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::prefix('v2')->group(function(){
//    Route::get('mahasiswa/get/{id}', function($id){
//     try {
//         $data =[
//             'nama' => 'Yayan'
//         ];
//         if($id < 1){
//             throw new Exception('Error user not found');
//         }
//         if ($id == 99) {
//             throw new Exception('Access user forbidden');
//         }

//     } catch (\Throwable $th) {
//         return response()->json(['massage' => $th->getMasage()], 403);
//     }
//     return response()->json($data);
//    });
// });

Route::prefix('v1')->group(function(){
    Route::get('mahasiswa/get',function(){
        $mahasiswa = Mahasiswa::all();
        return response()->json($mahasiswa);
    });
    
    Route::post('mahasiswa/post',function(Request $request){
        Mahasiswa::create($request->all());
    });
});