<?php

//echo "Received Input: " . $_POST["inputveld"];
$input = filter_var($_POST["inputveld"], FILTER_SANITIZE_STRING);
$input2 = filter_var($_POST["inputveld2"], FILTER_SANITIZE_STRING);

?>
<textarea rows="30" cols="40">
<?php

for ($i = 1; $i <= 100; $i++){
    if(0 == fmod($i, $input) && 0 == fmod($i, $input2)) {
        echo "fizz buzz\n";
        //print("<br>");
    }
    elseif(0 == fmod($i, $input)){
        echo "fizz\n";
        //print("<br>");
    }
    elseif(0 == fmod($i, $input2)){
        echo "buzz\n";
        //print("<br>");
    }
    else{
        echo $i . "\n";
        //print("<br>");
    }
}
?>
</textarea>
