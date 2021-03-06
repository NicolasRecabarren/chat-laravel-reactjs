<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>CHAT | NPRV</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">

        <!-- Styles -->
        <link rel="stylesheet" href="css/custom.css">
        
    </head>
    <body>
        <div class="content h-100">
            <nav class="navbar navbar-light position-absolute w-100" style="z-index: 10; top: 0;">
                <span class="navbar-brand mb-0 h1 text-light">Chat | Nicolás Recabarren Valderrama</span>
            </nav>
            <div class="container h-100" style="padding-top: 53px; background: transparent;">
                <div id="chat-box" class="card p-0 h-100">

                    <div id="chat" class="card-body h-100">
                    </div>

                    <div id="chat-form" class="card-footer">
                        
                    </div>
                </div>
            </div>
        </div>
    </body>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js" integrity="sha384-XEerZL0cuoUbHE4nZReLT7nx9gQrQreJekYhJD9WNWhH8nEW+0c5qq7aIo2Wl30J" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/app.js"></script>
</html>
