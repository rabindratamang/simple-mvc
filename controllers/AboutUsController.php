<?php

class AboutUsController extends BaseController{
    public static function test(){
        print_r(self::query("SELECT * FROM users"));
    }
}
?>