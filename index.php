<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>

<body>

<div class=title>
<h1>Heading 1</h1>
</div>

<div class=heading>
<h2>Heading 2</h2>
Vivamus mattis aliquet velit nec cursus. Donec maximus volutpat sagittis. Suspendisse potenti. Praesent condimentum, odio a tempus dictum, est lacus congue orci, vitae volutpat mi sem in sapien. Nam id eros ac magna mattis iaculis ut vitae risus. Nulla pretium tincidunt orci, suscipit condimentum felis fermentum sed. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vestibulum eget lectus neque. Pellentesque sed convallis orci. Aliquam et gravida enim. Aliquam rutrum, lectus sit amet aliquet pharetra, ante ante elementum dolor, ut commodo orci augue in ante. Integer id bibendum metus, feugiat pretium orci. Nunc pulvinar dolor neque, id lacinia ligula mattis ac. Vestibulum lacinia pretium facilisis.
</div>

<div class=main>

<p>HTML Test...</p>
<?php

echo "PHP Test...";
echo '<br>';
$ip = $_SERVER['REMOTE_ADDR'];
echo "IP Address is: ";
echo $ip;
?>

</div>

</body>

</html>