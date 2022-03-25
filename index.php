<?php

require 'vendor/autoload.php';

use App\SQLiteConnection;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;

$logger = new Logger('query_log');
$logger->pushHandler(new StreamHandler('logs/query.log', Logger::DEBUG));

$pdo = (new SQLiteConnection())->connect();

if ($pdo != null) {
    echo 'Connected to the SQLite database successfully!';

    $insert = "INSERT INTO Courses ([Name], Author) VALUES ('High Performance PHP', 'Jonathan Klein')";

    $result = logQuery($pdo, $insert, $logger);

    $query = "SELECT * FROM Courses";
    $courses = logQuery($pdo, $query, $logger);

    foreach ($courses as $course) {
        echo nl2br($course['Name'] . PHP_EOL);
    }
} else {
    echo 'Whoops, could not connect to the SQLite database!';
}

function logQuery(\PDO $pdo, string $query, Logger $logger)
{
    $result = $pdo->query($query);
    $logger->info('Query executed', ['query' => $query]);
    return $result;
}
