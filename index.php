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
    ],
    [
        'homeTeam' => 'Knicks',
        'awayTeam' => 'Raptors',
        'homeTeamScore' => 100,
        'awayTeamScore' => 105
    ],
    [
        'homeTeam' => 'Nets',
        'awayTeam' => 'Hornets',
        'homeTeamScore' => 105,
        'awayTeamScore' => 95
    ],
    [
        'homeTeam' => 'Jazz',
        'awayTeam' => 'Nuggets',
        'homeTeamScore' => 115,
        'awayTeamScore' => 120
    ],
    [
        'homeTeam' => 'Spurs',
        'awayTeam' => 'Rockets',
        'homeTeamScore' => 95,
        'awayTeamScore' => 110
    ],
    [
        'homeTeam' => 'Cavaliers',
        'awayTeam' => 'Pacers',
        'homeTeamScore' => 105,
        'awayTeamScore' => 90
    ],
    [
        'homeTeam' => 'Rockets',
        'awayTeam' => 'Lakers',
        'homeTeamScore' => 110,
        'awayTeamScore' => 100
    ]
];

if (isset($_GET['name']) && isset($_GET['mail']) && isset($_GET['age'])) {
    $name = $_GET['name'];
    $mail = $_GET['mail'];
    $age = $_GET['age'];
}
;

//$paragraph = "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a";

if (isset($_GET['paragraph'])) {
    $paragraph = $_GET['paragraph'];
    $paragraphList = explode('.', $paragraph);
}
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
        <div class='h-50 bg-success overflow-auto'>
            <h1>Snack #1</h1>
            <div class="d-flex container flex-wrap">
                <?php foreach ($games as $game) { ?>
                    <h2 style='width : calc(100% / 3);' class='py-4'>
                        <?php echo "$game[homeTeam]-$game[awayTeam] | $game[homeTeamScore]-$game[awayTeamScore] "; ?>
                    </h2>
                <?php } ?>
            </div>
        </div>
        <div class='d-flex w-100 h-50 '>
            <div class="w-50 bg-primary overflow-auto">
                <h1>Snack #2</h1>
                <div class="container">
                    <form class='text-start' action='index.php' method="GET">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                        <div class="mb-3">
                            <label for="mail" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="mail" name="mail" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="age" class="form-label">Age</label>
                            <input type="text" class="form-control" id="age" name='age'>
                        </div>

                        <button type="submit" class="btn btn-danger">Submit</button>
                    </form>

                    <h2>
                        <?php
                        if (!empty($name) && !empty($mail) && !empty($age)) {
                            echo strlen($name) > 3 && strpos($mail, '@') && strpos($mail, '.') && is_numeric($age) ? "Accesso riuscito" : "Accesso negato";
                        }
                        ?>
                    </h2>
                </div>
            </div>

            <div class="w-50 bg-warning overflow-auto">
                <h1>Snack bonus</h1>
                <div class="container py-5">
                    <form class='text-start' action='index.php' method="GET">
                        <div class="mb-3">
                            <label for="paragraph" class="form-label">Your paragraph</label>
                            <textarea type="text" class="form-control" id="paragraph" name='paragraph'
                                rows="5"></textarea>
                        </div>

                        <button type="submit" class="btn btn-danger">Submit</button>
                    </form>
                    <?php
                    if (!empty($paragraph)) {

                        foreach ($paragraphList as $singleParagraph) {
                            echo "<p style='border-bottom: 1px dashed black;' class='py-2'>$singleParagraph</p>";
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
</body>

</html>