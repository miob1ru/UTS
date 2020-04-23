<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset = "UTF - 8">
</head>
<body>
    <table border = "1" cellpadding = "10" cellspacing = "0">

        <?php
            for ( $b = 1; $b <= 10; $b++ ) { # $b = untuk baris

                    if ($b % 2 == 0){ // kondisi
                        echo "<tr>";    // konidisi true
                    }
                    else {
                        echo "<tr bgcolor = #00f300>"; // konddisi false
                    }

                for ( $k = 1; $k <= 5; $k++ ) { # $k = untuk kolom
                    echo "<td> $b , $k </td>";
                }
                echo "</tr>";
            }
        ?>

    </table>
</body>
</html>