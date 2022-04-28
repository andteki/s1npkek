<?php

$con = new mysqli('localhost', 'kek', 'titok', 'kek');

if($con->connect_error) {
    die("Hiba! A kapcsolódás sikertelen");
}

//echo "ok";

$sql = <<<EOT
select * from dolgozok
EOT;

if($result = $con->query($sql)) {
    echo "lekérés ok";
}else {
    echo "Hiba! A lekérdezés sikertelen!";
}

while( $row = $result->fetch_assoc() ) {
    echo $row['nev'];
}

$con->close();