<?php
// Funktion zum Würfeln
function rollDice($sides = 6) {
    return random_int(1, $sides);
}

// Hauptlogik
while (true) {
    echo "Würfel-Simulator\n";
    echo "1. Würfeln\n";
    echo "2. Beenden\n";
    echo "Wähle eine Option: ";
    $option = trim(fgets(STDIN));

    if ($option == '1') {
        $result = rollDice();
        echo "Du hast eine $result gewürfelt!\n";
    } elseif ($option == '2') {
        echo "Programm beendet.\n";
        break;
    } else {
        echo "Ungültige Option. Bitte wähle 1 oder 2.\n";
    }
}
