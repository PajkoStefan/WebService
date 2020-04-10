<?php

include "Db.php";


try {

    $server = new SoapServer(
        NULL,
        array(
            'uri' => 'http://localhost/WebServices/crud_soap/lib/server.php'
        )
    );

    // SETTING UP THE Db CLASS
    $server->setClass('Db');
    $server->handle();

} catch (SoapFault $f) {
    print $f->faultstring;
    exit;
}

?>
