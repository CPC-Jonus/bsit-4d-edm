<?php
class query
{
    public static function LOGIN_QUERY(){
        return "SELECT * FROM user WHERE user = ? AND pass = ?";
    }
}
