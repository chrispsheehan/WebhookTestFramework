<?php
    echo "Hello, you badger";

    file_put_contents('/tmp/ngroktest.log', json_encode($_POST));
?> 