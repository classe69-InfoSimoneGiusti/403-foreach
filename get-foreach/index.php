<?php

    $data = $_GET;

    if (empty($data)) {
        echo "Non hai passato nessun parametro";
    } else {
        foreach($data as $chiave => $valore) {
            echo $chiave . ' - ' . $valore . '<br>';
        }    
    }