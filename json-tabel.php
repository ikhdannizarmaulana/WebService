
<?php
 require 'vendor/autoload.php';
 $collection = (new MongoDB\Client())->tekdev->tekdev;
$cursor = $collection->find();
foreach ($cursor as $data1) {
    $data[]=$data1;
    }
    echo json_encode($data1);
    ?>