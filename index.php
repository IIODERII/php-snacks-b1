<?php
$games = [
    [
        'homeTeam' => 'Lakers',
        'awayTeam' => 'Celtics',
        'homeTeamScore' => 120,
        'awayTeamScore' => 100
    ],
    [
        'homeTeam' => 'Warriors',
        'awayTeam' => 'Rockets',
        'homeTeamScore' => 140,
        'awayTeamScore' => 95
    ],
    [
        'homeTeam' => 'Pacers',
        'awayTeam' => 'Nuggets',
        'homeTeamScore' => 130,
        'awayTeamScore' => 105
    ],
    [
        'homeTeam' => 'Clippers',
        'awayTeam' => 'Spurs',
        'homeTeamScore' => 150,
        'awayTeamScore' => 80
    ],
    [
        'homeTeam' => 'Raptors',
        'awayTeam' => 'Jazz',
        'homeTeamScore' => 110,
        'awayTeamScore' => 90
    ],
    [
        'homeTeam' => 'Bulls',
        'awayTeam' => 'Heat',
        'homeTeamScore' => 90,
        'awayTeamScore' => 115
    ]
]
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>PHP Snaks</title>
</head>

<body>
    <div class="vh-100 text-center">
        <div class='h-50 bg-success'>
            <h1>Snack #1</h1>
            <div class="d-flex container flex-wrap">
                <?php foreach ($games as $game) { ?>
                    <h2 style='width : calc(100% / 3);' class='py-3'>
                        <?php echo "$game[homeTeam]-$game[awayTeam] | $game[homeTeamScore]-$game[awayTeamScore] "; ?>
                    </h2>
                <?php } ?>
            </div>
        </div>
        <div class='d-flex w-100 h-50 '>
            <div class="w-50 bg-primary">
                <h1>Snack #2</h1>
            </div>
            <div class="w-50 bg-warning">
                <h1>Snack bonus</h1>
            </div>
        </div>
    </div>
</body>

</html>