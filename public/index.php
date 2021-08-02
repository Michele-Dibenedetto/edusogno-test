<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.7.1/dist/css/uikit.min.css"/>
    <link rel="stylesheet" href="css/uikit.min.css"/>
    <link rel="stylesheet" href="css/style.css">
    <title>Edusogno</title>
</head>
<body>
    <div class="container uk-child-width-1-4@s uk-flex-center uk-text-center">
        <div class="uk-position-center">
            <form class="uk-form-stacked" method="post" action="php/store.php">
                <!-- UTENTI -->
                <div id="block_users" class="uk-card uk-card-default uk-card-body">
                    
                    <h2>UTENTE</h2>

                    <div class="uk-margin">
                        <label class="uk-form-label" for="name">Nome</label>
                        <div class="uk-form-controls">
                            <input class="uk-input" type="text" name="name" id="name" placeholder="inserisci nome">
                        </div>
                    </div>
                    

                    <div class="uk-margin">
                        <label class="uk-form-label" for="surname">Cognome</label>
                        <div class="uk-form-controls">
                            <input class="uk-input" type="text" name="surname" id="surname" placeholder="inserisci cognome">
                        </div>
                    </div>

                    <div class="uk-margin">
                        <label class="uk-form-label" for="email">Email</label>
                        <div class="uk-form-controls">
                            <input class="uk-input" type="email" name="email" id="email" placeholder="inserisci email">
                        </div>
                    </div>
                </div>
                <!-- EVENTI -->
                <div id="block_users" class="uk-card uk-card-default uk-card-body">
                    <h2>EVENTI</h2>

                    <div class="uk-margin">
                        <label class="uk-form-label" for="name_event">Nome evento</label>
                        <div class="uk-form-controls">
                            <input class="uk-input" type="text" name="name_event" id="name_event" placeholder="inserisci nome dell'evento">
                        </div>
                    </div>
                    

                    <div class="uk-margin">
                        <label class="uk-form-label" for="description">Descrizione evento</label>
                        <div class="uk-form-controls">
                            <textarea class="uk-textarea" name="description" id="descrition" rows="2" style="width: 220px; height: 54px"></textarea>
                        </div>
                    </div>

                    <div style="display: inline-block;">
                        <label class="uk-form-label" for="date">Data</label>
                        <div class="uk-form-controls">
                        <input name="date" id="date" type="date">
                        </div>
                    </div>

                    <div style="display: inline-block;">
                        <label class="uk-form-label" for="hour">Ora</label>
                        <div class="uk-form-controls">
                        <input name="hour" id="hour" type="time">
                        </div>
                    </div>
                </div>
                <div>
                    <button type="submit" class="uk-button uk-button-primary uk-text-center my_btn">info</button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.7.1/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.7.1/dist/js/uikit-icons.min.js"></script>
</body>
</html>