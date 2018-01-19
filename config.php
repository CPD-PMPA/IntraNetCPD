<?php
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=cpd_pmpa', 'root', '');
    } catch (PDOException $e) {
        echo 'Error: ' . $e->getMessage() . '<br/>';
        exit;
    }
