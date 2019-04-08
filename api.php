<?php
    header('Content-Type: application/json; charset=utf-8');
    header("Access-Control-Allow-Methods: GET");
    header("Access-Control-Allow-Origin: *");

    date_default_timezone_set('America/Fortaleza');
    $date = date('d-m-Y h:i:s a', time());
    $curl = curl_init('https://academico.iff.edu.br/');
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    
    $result = curl_exec($curl);
    $status = '';
    $http_code = curl_getinfo($curl,CURLINFO_HTTP_CODE);
    curl_close($curl);

    if($http_code == 200){
        $status = "Online";
    }
    else{
        $status = "Offline";
    }


    $data = array(
        "response" => $date.", o Acadêmico está ".$status
    );
    
    $response = json_encode($data, JSON_UNESCAPED_UNICODE);
    echo $response;
?>