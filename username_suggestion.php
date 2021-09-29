<?php

function username_suggestion($name)
{
    $nomes = explode(" ", $name);

    if (array_key_exists(1, $nomes)) {
        if (strlen($nomes[1]) > 2) {
            echo strtolower($nomes[0] . $nomes[1]);
        } else {
            if (array_key_exists(2, $nomes)) {
                if (strlen($nomes[2]) > 2) {
                    echo strtolower($nomes[0] . $nomes[2]);
                }
            }
        }
    } else {
        echo strtolower($nomes[0]);
    }
}
