<?php

require_once "bootstrap.php";

$helperSet = new \Symfony\Component\Console\Helper\HelperSet(array(
    'em' =&gt; new \Doctrine\ORM\Tools\Console\Helper\EntityManagerHelper($em)
));