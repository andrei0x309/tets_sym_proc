<?php
 //Example of some long task
sleep(5);
file_put_contents('test.txt',  date('Y/m/d H:i:s'));
echo("Worker done -> this output will be lost");