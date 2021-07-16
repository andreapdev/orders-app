<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="update-ajax.js"></script>
    <script type="text/javascript" src="refresh.js"></script>
    <title>Freshly Orders</title>
</head>
<body>
    <header>
        <a href="/"><h1>Freshly Orders</h1></a>
    </header>
    <main>
        <form class="filter-form" action="submit" method="GET">
            <label>Estado: <input id="by_state" name="by_state"></input></label>
            <label>País: <input id="by_country" name="by_country"></input></label>
            <button>Buscar</button>
        </form>
        <div class="table-container">
            <?php
                include ('showTable.php');
            ?>
        </div>
        <div class="popUp"></div>

    </main>
    <footer>.</footer>
</body>
</html>