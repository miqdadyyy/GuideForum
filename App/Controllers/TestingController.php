<?php


class TestingController extends BaseController
{
    public function index($request){
        $ch = curl_init();
        $url = "https://uas.wrdhndty.site/functions.php";
        curl_setopt($ch,CURLOPT_URL, $url);
        curl_setopt($ch,CURLOPT_POST, true);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_COOKIE, "username=qweqwe;password=%242y%2410%24edn1qyrU95R%2FfEZVcH4dte4IEWPRp1bU4JcbbmWp3AYNaqQoLoFya");

//        curl_setopt($ch, CURLOPT_COOKIE, 'username=qweqwe');
        curl_setopt($ch, CURLOPT_VERBOSE, true);
        $i =100000;
        while(true){
            $fields = [
                'newTop'      => "qweqweaksdaslda$i",
                'newDesc' => "kontolasdasd",
                'submit'         => 'newTopic'
            ];
            $fields_string = http_build_query($fields);
            curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);
            $i++;
            $result = curl_exec($ch);
        }
    }

    public function test($id){

    }
}