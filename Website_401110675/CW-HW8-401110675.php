
    <?php
    $lastname = $_POST["lname"];
    $name = $_POST["fname"];
    $message = $_POST["message"];
    $email = $_POST["email"];
    $fi = new FilesystemIterator(__DIR__, FilesystemIterator::SKIP_DOTS);
    $count = iterator_count($fi) - 8;
    $txt = "$name \n$lastname \n$email \n$message\n";
    $fp = fopen("$count.txt", "wb");
    fwrite($fp, $txt);
    fclose($fp);
    ?>