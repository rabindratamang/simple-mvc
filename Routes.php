<?php
    
    Route::set('about-us',function(){
        AboutUsController::createView();
    });

    Route::set('contact-us',function(){
        echo 'contact-us';
    })

?>
