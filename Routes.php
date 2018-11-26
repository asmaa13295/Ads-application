<?php
if($_GET['url'] == 'index.php'){
Route::set('', function(){
    Home::CreateView('Home');
    Home::get_all_ads();

});
}

if($_GET['url'] == 'AdDetails.php'){
    Route::set('AdDetails', function(){
    Home::CreateView('AdDetails');
}); 
}

if($_GET['url'] == 'Edit.php'){
    Route::set('Edit', function(){
    Home::CreateView('Edit');
}); 
}

?>