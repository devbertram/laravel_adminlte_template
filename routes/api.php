<?php




// User
Route::get('/user/response_from_employee/{slug}', 'Api\ApiUserController@responseFromEmployee')
		->name('api.user_response_from_employee');




// Submenu
Route::get('/submenu/select_submenu_byMenuId/{menu_id}', 'Api\ApiSubmenuController@selectSubmenuByMenuId')
		->name('selectSubmenuByMenuId');



