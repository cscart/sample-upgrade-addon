<?php

// We can do anyting
function say($what)
{
    fn_set_progress('echo', $what, false);
    echo $what;
}

say('PRE script: Hello world! And sleep 5 sec.');
sleep(5);
