<?php
 

require_once __DIR__.'/vendor/autoload.php';

use Symfony\Component\Process\Process;
 
// Start a process and detach form it on Win only
$process = new Process(['php', 'worker.php']);
$process->setWinOptions(["create_new_console" => true]); // New method I added
$process->disableOutput();
$process->start();

/*
--------------
Example without Using Symphony Process

$nullstream = fopen('NUL', 'c');
$desc =  [
            ['pipe', 'r'],
            $nullstream,
            $nullstream,
        ];
proc_open($command, $desc, $pipes, null, null, ["create_new_console" => true, "suppress_errors" => true]);

--------------
*/


echo "Main Done";