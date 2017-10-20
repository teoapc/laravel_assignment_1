<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware'=>['cors', 'web']],function(){
    Route::get('/ticket_index', ['uses'=>'TicketController@index']);
    Route::get('/ticket_index/{user_ticket_id}', ['uses'=>'TicketController@json_single']);
    Route::put('/ticket_index/{user_ticket_id}', ['uses'=>'TicketController@changeLevels']);

    Route::group(['prefix' => 'issue'], function(){
        Route::get('/admin_ticket', ['uses'=>'TicketController@admin_tickets', 'as'=>'allAdminTickets']);
        Route::get('/admin_closed_ticket', ['uses'=>'TicketController@admin_closed_tickets', 'as'=>'allClosedTickets']);

    });

    Route::group(['prefix'=>'issue'/*,'middleware'=>'guest:admin'*/], function(){
        Route::get('create', ['as' => 'create', 'uses' => 'TicketController@create']);
        Route::post('store', ['as' => 'store', 'uses' => 'TicketController@store']);

        Route::get('/customer/customer_ticket', ['uses'=>'TicketController@cus_tickets', 'as'=>'allCustTickets']);
        Route::get('/customer/customer_closed_ticket', ['uses'=>'TicketController@cus_closed_tickets', 'as'=>'allCustClosedTickets']);
//    Route::resource('','TicketController');

        Route::get('/{user_ticket_id}', ['uses'=>'TicketController@show', 'as'=>'showTicketInfo']);
        Route::get('/customer/{user_ticket_id}', ['uses'=>'TicketController@showCust','as'=>'allCustTickets']);

    });


//CommentController routes
    Route::get('/json_comments', ['uses'=>'CommentController@showAllComments']);
    Route::put('{user_ticket_id}/comment', ['uses'=>'CommentController@addComment', 'as'=>'comment']);
    Route::get('issue/{user_ticket_id}/comments', ['uses'=>'CommentController@showComments', 'as'=>'showCommentsAdmin']);
    Route::get('issue/customer/{user_ticket_id}/comments', 'CommentController@showCommentsCust');
});
