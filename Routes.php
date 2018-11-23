<?php

Route::set('index.php', function(){
    Index::CreateView('Index');
});

Route::set('AboutUs', function(){
    AboutUs::CreateView('AboutUs');
});

Route::set('ContactUs', function(){
    ContactUs::CreateView('ContactUs');
});
?>