<a href='./index.php?filename=my'>My module</a>
<?php

highlight_file(__FILE__);

$f = $_REQUEST{'filename'};

include($f.".module");
