<?php
    echo "Hello, you badger";

    file_put_contents('/tmp/ngrok/ngroktest.log', json_encode($_POST));
?> 