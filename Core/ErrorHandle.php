<?php

class ErrorHandle
{
    Public static function errorProcess($message){
        $data = [
            'error' => $message
        ];

        viewPages('error',$data);


    }

}