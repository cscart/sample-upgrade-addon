<?php

// Some POST actions, e.g. clear some cache
fn_set_progress('echo', 'POST: Clear cache and sleep 3 sec', false);
fn_clear_cache();

sleep(3);
