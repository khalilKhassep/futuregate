<?php

return [
    "driver" => "smtp",
    "host" => "smtp.mailtrap.io",
    "port" => 2525,
    "from" => array(
        "address" => "from@example.com",
        "name" => "Example"
    ),
    "username" => "fe4cee575c31c6",
    "password" => "2164dadcd884d3",
    "sendmail" => "/usr/sbin/sendmail -bs"
];