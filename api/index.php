<?php 

    //preparaçao da resposta
    $data['status'] = 'ERROR';
    $data['data'] = null;

    //request
    if(isset($_GET['option'])) {

        switch($_GET['option']) {
            case 'status':
                define_response($data, 'API running OK!.... ');
                break;

            case 'random':
                define_response($data, rand(0, 1000));
                break;
        }

    }

    //resposta da API
    response($data);

    //
    function define_response(&$data, $value) { //uso do & para fazer referencia ao data de fora da variavel
        $data['status'] = 'SUCCESS';
        $data['data'] = $value;
    }
    
    //Response
    function response($data_response) {
        header("Content-Type:application/json");
        echo json_encode($data_response);
    }
?>