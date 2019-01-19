<?php
    return array(
        "debug" => true,
        "dbconfig" => "localhost;root;;mvc",
        "routes" => array(
            // ["REGEXP", ["CONTROLLER/METHOD"], [PARAMS]]
            ["\/", ["main", "index"], []],
        )
    );
?>