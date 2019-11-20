<?php
    
    Route::set('index.php',function(){
        IndexController::createView('Index');
    });

    Route::set('about-us',function(){
        AboutUsController::createView('AboutUs');
        AboutUsController::test();
    });

    Route::set('contact-us',function(){
        ContactUsController::createView('ContactUs');
    })

?>
