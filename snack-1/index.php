<?php 

// Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario. 
// Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
// Stampiamo a schermo tutte le partite con questo schema:
// Olimpia Milano - Cantù | 55-60

    $matches = [
        [
            'homeTeam' => 'Olimpia Milano',
            'hostTeam' => 'Cantù',
            'homeTeam_points' => 55,
            'hostTeam_points' => 60,
        ],
        [
            'homeTeam' => 'Venezia',
            'hostTeam' => 'Virtus Bologna',
            'homeTeam_points' => 80,
            'hostTeam_points' => 72,
        ],
        [
            'homeTeam' => 'Reggiana',
            'hostTeam' => 'Scafati',
            'homeTeam_points' => 45,
            'hostTeam_points' => 60,
        ],
        [
            'homeTeam' => 'Trento',
            'hostTeam' => 'Dinamo Sassari',
            'homeTeam_points' => 70,
            'hostTeam_points' => 75,
        ],
        [
            'homeTeam' => 'Pistoia',
            'hostTeam' => 'VL Pesaro',
            'homeTeam_points' => 80,
            'hostTeam_points' => 60,
        ],
    ];
?>


<ul>
    <?php  foreach ($matches as $singleMatche) {?>
        <li>
            <?php echo $singleMatche['homeTeam'] . ' - ' . $singleMatche['hostTeam'] . ' | ' . $singleMatche['homeTeam_points'] . ' - ' . $singleMatche['hostTeam_points']; ?>
        </li>
    <?php } ?>
</ul>