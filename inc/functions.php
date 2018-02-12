<?php
    //display points based on matching symbols
    function displayPoints($randomValue1, $randomValue2, $randomValue3) {
        echo "<div id= 'output'>";
        
        if($randomValue1 == $randomValue2 && $randomValue2 == $randomValue3) {
            switch($randomValue1) {
                case 0: $totalPoints = 1000;
                        echo "<h1>Jackpot!</h1>";
                        /*add audio thing here*/
                        break;
                case 1: $totalPoints = 500;
                        break;
                case 2: $totalPoints = 250;
                        break;
                case 3: $totalPoints = 900;
                        break;
            }
            echo "<h1>You won $totalPoints points!</h1>";
        } else {
            echo "<h1>Try Again.</h1>";
        }
        echo "</div>";
    }
    
    //display symbols randomly
    function displaySymbol ($randomValue,$pos) {
        switch ($randomValue) {
            case 0: $symbol = "seven";
                    break;
            case 1: $symbol = "cherry";
                    break;
            case 2: $symbol = "lemon";
                    break;
            case 3: $symbol = "orange";
                    break;
        }
        
        echo "<img id='reel$pos' src='img/$symbol.png' alt='$symbol' title='" . ucfirst($symbol) . "' width='70' />";
    }
    
    //main function to play the game
    function play() {
        for($i = 1; $i < 4; $i++) {
            ${"randomValue". $i} = rand(0,3);
            displaySymbol(${"randomValue". $i},$i);
        }
            
        displayPoints($randomValue1,$randomValue2,$randomValue3);
    }
?>