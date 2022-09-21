<?php
$email=$_POST['email'];
$massage=$_POST['massage'];



$subject="=?utf-8?b?".base64_encode("відповіді")."?=";
$headers="From:$email/r/n Reply-to:$email/r/n Content-type:text/plain; charset=utf-8/r/n";

mail('nikitatochilkin13@gmail.com', $subject, $massage, $headers);
header('location:index.html');