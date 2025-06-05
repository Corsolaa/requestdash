<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>request dashboard</title>

    <link rel="stylesheet" href="assets/standard.css">
    <link rel="stylesheet" href="assets/vars.css">
    <link rel="stylesheet" href="assets/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
</head>
<body>

<section>
    <h2>👻 new request</h2>
    <a class="link post" href="/request/edit" target="_blank">
        <div class="http-type">POST</div>/request
    </a>

    <div class="create_request">

    </div>
</section>

<section>
    <h2>📋 edit request</h2>
    <div class="links">
        <a class="link put" href="/request/edit" target="_blank">
            <div class="http-type">PUT</div>/request/{id}
        </a>
        <a class="link delete" href="/request/edit" target="_blank">
            <div class="http-type">DELETE</div>/request/{id}
        </a>
    </div>

    <div class="requests">
        <div class="request">

        </div>
    </div>
</section>

</body>
</html>