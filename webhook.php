<?php

echo shell_exec("/usr/bin/git pull 2>&1");
fwrite(STDOUT, 'foo');
