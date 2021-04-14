<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dimvo Dashboard</title>
    <link rel="shortcut icon" href="Images/logodimvo.png" sizes="256x256">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/chartist.js/latest/chartist.min.css">
    <script src="//cdn.jsdelivr.net/chartist.js/latest/chartist.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" charset="utf-8"></script>
    <script src="js/request.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/grafiek.js"></script>
    
</head>

<body>
    <div id="DashBoard">
        <div class="item header"><img src="Images/hdlogo.png"></div>
        <div class="item nav"><h2>Navigatie</h2></div>        
        <div class="item kwh"><h2>KWH</h2></div>
        <div class="item water"><h2>Water verbruik over 1 week.</h2>
            <?php
                include 'php/standen.php';
            ?>
        </div>
        <div class="item weer"><h1>Weer</h1><br>
            <svg width="70%" height="70%" viewBox="0 0 42 42">
                <circle cx="20" cy="20" r=" 15.91549430918954" fill="transparent" stroke="rgba(200, 200, 200, 0.5)" stroke-width="2"></circle>
                <circle cx="20" cy="20" r=" 15.91549430918954" fill="transparent" stroke="#b400ff" stroke-width="2" stroke-dasharray="15 85" stroke-dashoffset="75" id="cirkelBoog"></circle>
                <g class="temp">
                    <text id="temperatuur" x="30%" y="45%"></text>
                    <text id="eenheid" x="30%" y="79%">&deg;C</text>
                </g>
            </svg>
            <script>
                let temperatuur = 19;

                const temperatuurUitvoerKleur = document.getElementById('temperatuur').style.color = "white";
                const temperatuurUitvoer = document.getElementById('temperatuur');
                const cirkelBoog = document.getElementById('cirkelBoog');
        
                uitvoeren = (temp) => {
                    temperatuurUitvoer.innerHTML = temp;
                    let boog = temp * 100/25;
                    cirkelBoog.style.strokeDasharray = `${boog} ${100 - boog}`;
                }
        
                uitvoeren(temperatuur);
            </script>
        </div>
        <div class="item kosten"><h2>Kosten</h2></div>
        <div class="item graph"><h2>Staaf Grafiek</h2>
            <div class ="chart">
                <ul class="numbers">
                    <li><span>100%</span></li>
                    <li><span>50%</span></li>
                    <li><span>0%</span></li>
                </ul>
                <ul class="bars">
                    <li><div class="bar" data-percentage="65"></div><span>Januari</span></li>
                    <li><div class="bar" data-percentage="45"></div><span>April</span></li>
                    <li><div class="bar" data-percentage="15"></div><span>Juli</span></li>
                    <li><div class="bar" data-percentage="80"></div><span>September</span></li>
                    <li><div class="bar" data-percentage="30"></div><span>December</span></li>
                </ul>
            </div>
            <script type="text/javascript">
            $(function(){
                $('.bars li .bar').each(function(key, bar){
                    var percentage = $(this).data('percentage');
                    $(this).animate({
                        'height' : percentage + '%'
                    },1000);
                })
            });
            </script>
        </div>
        <div class="item graph2"><h1>Lijn Grafiek</h1> <h3>Paars = KWH | Licht Paars = Water</h3>
            <div id="grafiek">

            </div>
        </div>
    </div>
</body>

</html>