<?php
    header('Content-Type: application/json; charset=utf-8');
    date_default_timezone_set('America/Fortaleza');
    $date = date('d-m-Y h:i:s a', time());
    $curl = curl_init('https://academico.iff.edu.br/');
    $result = curl_exec($curl);
    $status = '';
    $http_code = curl_getinfo ( $result, CURLINFO_HTTP_CODE );
    curl_close($curl);
    if($http_code == 200){
        $status = "Online";
    }
    else{
        $status = "Offline";
    }


    $data =  $date.", o Acadêmico está ".$status;
    
    echo json_encode($data, JSON_UNESCAPED_UNICODE);
?>