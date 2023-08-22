<?php 

use App\Http\Controllers\Admin\SettingController;

Route::get('admin/settings',[SettingController::class,'index'])->name('settings.index');