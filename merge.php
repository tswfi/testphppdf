<?php
include 'vendor/autoload.php';

use iio\libmergepdf\Merger;
use iio\libmergepdf\Driver\TcpdiDriver;

$myfile = fopen("merged.pdf", "w") or die("Unable to open file!");

$merger = new Merger(new TcpdiDriver);

$merger->addIterator(['test1.pdf', 'test2.pdf']);
$createdPdf = $merger->merge();

fwrite($myfile, $createdPdf);
fclose($myfile);
