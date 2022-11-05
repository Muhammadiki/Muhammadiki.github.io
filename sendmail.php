<?php
$msg = "Hay apa kabar";

$msg = wordwrap($msg,70);

// send email
mail("muhammadrizky118@gmail.com","judul",$msg);
