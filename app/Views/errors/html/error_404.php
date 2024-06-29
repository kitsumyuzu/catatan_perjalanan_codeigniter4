<!DOCTYPE html>
<html lang="en">
    
    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        
        <!-- Pages title -->

            <title>Page 404 Terminal</title>

        <!-- Links -->

            <link rel="stylesheet" href="<?= base_url('assets') ?>/error/style.css">
            <script src="<?= base_url('assets') ?>/error/function.js"></script>

    </head>

    <body class="" id="body">

        <main id="main">

            <header class="Menubar">

                <p class="title_Terminal">Terminal</p>
                <p class="title_404">404</p>

                <div class="Menu_BTN">
                    <a href="#" id="min" onclick="BTNS('min')"></a>
                    <a href="#" id="max" onclick="BTNS('max')"></a>
                    <a href="/home/" id="close"></a>
                </div>

            </header>

            <div class="Terminal_body" id="Terminal">

                <p>🚀 Oops! page not found</p>

                    <br>

                <p>Enter <span class="red"> commands</span> for more information
                </p>

                    <br>

                <div class="Terminal_code">

                    <div class="Terminal_line">

                        <div class="code" id="code">

                        </div>

                        <span class="arrow">→</span><span class="user-input" id="userInput"></span>
                        <label for="Keyboard"></label><input type="text" id="Keyboard" class="keyboard">

                    </div>

                </div>

            </div>

        </main>

        <div class="min_app" id="min_app">

            <a href="#" onclick="BTNS('re')">

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="40" height="40">

                    <path fill="#CFD8DC" d="M41,6H7C6.4,6,6,6.4,6,7v35h36V7C42,6.4,41.6,6,41,6z" />
                    <path fill="#263238" d="M8 13H40V40H8z" />
                    <path fill="#90A4AE" d="M13.5 8A1.5 1.5 0 1 0 13.5 11 1.5 1.5 0 1 0 13.5 8zM9.5 8A1.5 1.5 0 1 0 9.5 11 1.5 1.5 0 1 0 9.5 8z" />

                    <g>
                        <path fill="#18FFFF" d="M18.5 26.5l-3.5-2V22l6 3.4v2.1L15 31v-2.5L18.5 26.5zM23 29H33V31H23z" />
                    </g>
                    
                </svg>

            </a>

        </div>

    </body>

</html>