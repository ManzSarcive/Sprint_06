<?php

    try {
        // dev configuration
        if (strcmp($_SERVER['ENVIRONMENT_TYPE'], "development") == 0) {
            $con = new mysqli(
                'localhost',
                'thomasB',
                'thomassql',
                'Vap Factory'
            );
        }
        if (strcmp($_SERVER['ENVIRONMENT_TYPE'], "production") == 0) {
            $con = new mysqli('109.234.164.161', $_SERVER['DB_USER'], $_SERVER['DB_PASSWORD'], 'sc1lgvu9627_begue-thomas.sprint-06');
        }
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }

?>