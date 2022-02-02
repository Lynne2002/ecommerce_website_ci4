<?php namespace App\Controllers;

use App\Models\UserModel;

Class UserAuthorization extends BaseController{
           function create_token(){
                $this->load->helper('jwt');
                $jwt = new JWT();
                $payload = array(
                    'id' => '123',
                    'email' => 'techlifediary@gmail.com',
                    'time' => time()
                );
                $token = $jwt->encode($payload, key);//key is a constant defined once
                return_api(true, Authorization_token,$token);
           }

   function authorize(){
            $this->load->helper('jwt');
            $headers = $ci->input->request_headers();
        if(!isset($headers['Authorization'])){
         return_api(false, 'Please Send Authorization token!');
         }
             $token = $headers['Authorization'];
             $jwt = new JWT();
     try{
         $payload = $jwt->decode($token, key);//$payload is your metadata send by you & key is the contant value ones defined by you.
         if($tok === $token){//$tok is your saved token in databse
             // return_api(true, 'Access Authorize');   			
         }else{
             return_api(true, 'UnAuthorize Access Token missmatch!', 401);
         }			
     }catch(Exception $e){
         return_api(true, 'UnAuthorize Access!', 401);
     }  
        }
     }
     ?>