<?php
# back-end

echo"\n<pre>|n";
print_r ($_GET); #Array
echo "\n</pre>\n";

if(isset($_GET['idade']) &&$_GET['idade'] <18){
    echo '<h1 style="color:red;"> nao pode beber na festa</h1>';
}else{
    echo '<h1 style="color:green;"> bebe pouco fii, a vida continua!</h1>';

}
