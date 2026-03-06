<!--
SA: I Liam Durrant, 400471925 certify that this material is my original work.
No other person's work has been used without due acknowledgement.
I have also not made my work available to anyone else.
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <!--HTML BoilerPlate Content -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="PROCTECH 4IT3 - Lab7A">
    <meta name="author" content="Liam Durrant">
    <meta name="keywords" content="PROCTECH 4IT3 - Lab7A, PROCTECH 4IT3, SEP 6IT3, McMaster University, HTML, CSS, JavaScript">
    <meta name="robots" content="index, follow">

    <!--BoilerPlate items for Social Media Robots-->
    <meta property="og:title" content="PROCTECH 4IT3"/>
    <meta property="og:type:article:author" content="Liam Durrant"/>
    <meta property="og:type:article:section" content="Liam Durrant - Lab7A"/>
    <meta property="og:url" content="https://webdev.sept.mcmaster.ca/400471925/"/>

    <link href="images/favicon.ico" rel="icon" type="image/png">
    <title>Liam Durrant - Lab 7A</title>

    <!--BoilerPlate BOOTSTRAP!-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .cont {
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        body {
            padding: 20px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2 class="text-center mb-3">PROCTECH 4IT3 - Lab 7A</h2>

    <!-- Refresh button centered -->
    <div class="text-center mb-4">
        <form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <button type="submit" class="btn btn-primary">Refresh</button>
        </form>
    </div>

    <?php
        // Generate the table with 5 columns and 20 rows
        // Row numbering starts at 1
        // If row is ODD -> first number must be EVEN
        // If row is EVEN -> first number must be ODD
    ?>

    <table class="table table-bordered table-striped table-hover table-light">
        <thead class="table-dark">
            <tr>
                <th>Row #</th>
                <th>Column 1</th>
                <th>Column 2</th>
                <th>Column 3</th>
                <th>Column 4</th>
                <th>Column 5</th>
            </tr>
        </thead>
        <tbody>
        <?php
            for ($row = 1; $row <= 20; $row++) {
                // Generate a random starting number between 1 and 100
                // Ensure parity matches row rule
                $start = rand(1, 100);

                if ($row % 2 == 1) {
                    // Odd row -> first number must be EVEN
                    if ($start % 2 != 0) {
                        $start++; // make it even
                        if ($start > 100) $start = 2;
                    }
                } else {
                    // Even row -> first number must be ODD
                    if ($start % 2 == 0) {
                        $start++; // make it odd
                        if ($start > 100) $start = 1;
                    }
                }

                echo "<tr>";
                echo "<td><strong>$row</strong></td>";
                for ($col = 0; $col < 5; $col++) {
                    echo "<td>" . ($start + $col) . "</td>";
                }
                echo "</tr>\n";
            }
        ?>
        </tbody>
    </table>
</div>

<footer class="footer mt-auto py-3 bg-dark">
    <div class="container">
        <span class="text-muted cont">&copy; Liam Durrant 2026</span>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>