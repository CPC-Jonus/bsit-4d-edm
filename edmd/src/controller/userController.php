<?php
class userController
{
    public function login($user,$pass){
        try {
            $db = new database();
            if ($db->getStatus()) {
                $stmt = $db->getCon()->prepare(query::LOGIN_QUERY());
                $stmt->bindValue(1, $user);
                $stmt->bindValue(2, $pass);
                $res = $stmt->execute();
                if ($res) {
                    return 200;
                }else{
                    return 404;
                }
            }else{
                return 403;
            }
        } catch (Exception $th) {
            return 500;
        }
    }
    public function register(){
        return "register";
    }
    public function update(){

    }
    public function delete(){

    }
}
