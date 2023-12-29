<?php

highlight_file(__FILE__);

$f = $_REQUEST{'filename'};

include($f.".module");
