<?php
//application config
$config = include 'config.php';

$dbConfig = $config['db'];

try {
    $db = new PDO(
        sprintf('%s:host=%s;dbname=%s', ...array_values($dbConfig)),
        $dbConfig['username'],
        $dbConfig['password']
    );

    $articles = $db->query('SELECT * from ARTICLES');

    foreach($articles as $row)
    {
        print_r($row);
    }

    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

