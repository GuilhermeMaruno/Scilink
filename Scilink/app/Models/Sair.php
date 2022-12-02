<?php
error_reporting(E_ERROR | E_PARSE);
    session_unset();

    echo '<html>
                            <head>
                                <meta http-equiv="refresh" content="0; ..\Views\telaLogin.php" />
                            </head>
                            <body>
                                <h3>Redirecionando...</h3>
                            </body>
                        </html>';
?>