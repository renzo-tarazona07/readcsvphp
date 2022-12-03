<?php

    $text = file_get_contents('costos.csv');
    $lineas=explode("\n", $text);
    print_r($lineas);exit;

    for ($i=0; $i < sizeof($lineas); $i++) {
      $monto = floatval($lineas[$i]);

      if($monto == 0){
        continue;
      }


      $body = "curl -d 'txt_cuentaid=1&txt_cuenta=YULI_NOVIEMBRE_1668831616358&txt_descripcion=varios(proceso sh)&txt_monto=".$monto."&txt_finalizar=seleccionar' -X POST http://localhost/appcontrolfinanciero/ws/index.php?method=logdetallecuentas.insert";

        //echo $body;exit;


        $ex = shell_exec($body);

        print_r($ex);
    }


?>