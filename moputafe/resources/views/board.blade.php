<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://kit.fontawesome.com/5646030e11.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="resources/css/board.css">
    <style>
        #boardgame {
            position: fixed;
            left: 33.3%;
            right: 33.3%;
            top: 20px;
            width: 597px;
            height: 597px;
        }

        #board {
            height: inherit;
            width: inherit;
            background-color: #ecfcf4;
        }

        #top {
            display: block;
            direction: ltr;
            height: 60px;
        }

        #left {
            display: flex;
            height: 60px;
            width: 476px;
            -webkit-transform: rotate(-90deg);
            -moz-transform: rotate(-90deg);
            -o-transform: rotate(-90deg);
            -ms-transform: rotate(-90deg);
            transform: rotate(-90deg);
            position: absolute;
            left: -208px;
            top: 268px;
        }

        #bottom {
            display: flex;
            direction: ltr;
            height: 60px;
            position: absolute;
            bottom: 0px;
            -webkit-transform: rotate(180deg);
            -moz-transform: rotate(180deg);
            -o-transform: rotate(180deg);
            -ms-transform: rotate(180deg);
            transform: rotate(180deg);
        }

        #right {
            display: flex;
            direction: ltr;
            height: 60px;
            -webkit-transform: rotate(90deg);
            -moz-transform: rotate(90deg);
            -o-transform: rotate(90deg);
            -ms-transform: rotate(90deg);
            transform: rotate(90deg);
            position: absolute;
            right: -208px;
            top: 268px;
        }

        #logo {
            display: block;
            height: 152px;
            width: 400px;
            position: absolute;
            left: 90px;
            top: 185px;
            background-image: url("https://upload.wikimedia.org/wikipedia/en/f/f9/Monopoly_pack_logo.png");
            -webkit-transform: rotate(-45deg);
            -moz-transform: rotate(-45deg);
            -o-transform: rotate(-45deg);
            -ms-transform: rotate(-45deg);
            transform: rotate(-45deg);
        }

        #chance {
            display: block;
            height: 125px;
            width: 90px;
            box-shadow: 2px 2px #332f66;
            -webkit-transform: rotate(45deg);
            -moz-transform: rotate(45deg);
            -o-transform: rotate(45deg);
            -ms-transform: rotate(45deg);
            transform: rotate(45deg);
            position: absolute;
            top: 110px;
            left: 140px;
            background-color: #caad50;
        }

        #innerchance {
            display: table-cell;
            height: 105px;
            width: 70px;
            outline-style: solid;
            outline-color: #000000;
            outline-width: 4px;
            position: absolute;
            top: 10px;
            left: 10px;
            background-color: #caad50;
            text-align: center;
            vertical-align: middle;
        }

        #cchest {
            display: block;
            height: 125px;
            width: 90px;
            box-shadow: -2px -2px #332f66;
            -webkit-transform: rotate(-135deg);
            -moz-transform: rotate(-135deg);
            -o-transform: rotate(-135deg);
            -ms-transform: rotate(-135deg);
            transform: rotate(-135deg);
            position: absolute;
            bottom: 150px;
            right: 150px;
            background-color: #ca9ca9;
        }

        #innerchest {
            display: table-cell;
            height: 105px;
            width: 70px;
            outline-style: solid;
            outline-color: #000000;
            outline-width: 4px;
            position: absolute;
            top: 10px;
            left: 10px;
            font-size: 14px;
            background-color: #ca9ca9;
            text-align: center;
            vertical-align: middle;
        }


        #corners {
            display: table-cell;
            filter: brightness(100%);
            width: 60px;
            height: 60px;
            outline-style: solid;
            outline-color: #000000;
            outline-width: 1px;
            text-align: center;
            font-size: 10px;
            color: #000000;
            vertical-align: middle;
        }

        #houses {
            display: table-cell;
            filter: opacity(1);
            width: 53px;
            height: 60px;
            outline-style: solid;
            outline-color: #000000;
            outline-width: 1px;
            text-align: center;
            font-size: 10px;
            color: #000000;
            vertical-align: middle;
        }

        #colour-bar {
            filter: opacity(1);
            height: 10px;
            outline-style: solid;
            outline-width: 1px;
            position: absolute;
            bottom: 1px;
            left: 1px;
            right: 1px;
        }

        #interactions {
            display: table-cell;
            filter: opacity(1);
            width: 53px;
            height: 60px;
            outline-style: solid;
            outline-color: #000000;
            outline-width: 1px;
            text-align: center;
            font-size: 10px;
            color: #000000;
            vertical-align: middle;
        }
    </style>
</head>

<body>
    <div id="boardgame">
        <div id="board">
            <div id="top">
                <div id="corners">Free Parking <i class="fas fa-car fa-2"></i></div>
                <div id="houses">Kentucky Ave<br>$220<div id="colour-bar"
                        style="outline-color:#000000; background-color:#ff0000"></div>
                </div>
                <div id="interactions">Chance <br><i class="fas fa-question fa-2"></i></div>
                <div id="houses">Indiana Ave<br>$220<div id="colour-bar"
                        style="outline-color:#000000; background-color:#ff0000"></div>
                </div>
                <div id="houses">Illinois Ave<br>$240<div id="colour-bar"
                        style="outline-color:#000000; background-color:#ff0000"></div>
                </div>
                <div id="interactions"><i class="fas fa-train"></i> B&amp;O Railroad<br>$200</div>
                <div id="houses">Atlantic Ave<br>$260<div id="colour-bar"
                        style="outline-color:#000000; background-color:#fffb00"></div>
                </div>
                <div id="houses">Ventnor Ave<br>$260<div id="colour-bar"
                        style="outline-color:#000000; background-color:#fffb00"></div>
                </div>
                <div id="interactions"><i class="fas fa-water"></i> Water Works<br>$150</div>
                <div id="houses">Marvin Gardens<br>$280<div id="colour-bar"
                        style="outline-color:#000000; background-color:#fffb00"></div>
                </div>
                <div id="corners">Go To Jail <i class="fas fa-helicopter fa-2"></i></div>
            </div>
            <div id="left">
                <div id="houses">St. Charles Place<br>$140<div id="colour-bar"
                        style="outline-color:#000000; background-color:#a200ff"></div>
                </div>
                <div id="interactions"><i class="fas fa-lightbulb"></i> Electric Company<br>$150</div>
                <div id="houses">States Ave<br>$140<div id="colour-bar"
                        style="outline-color:#000000; background-color:#a200ff"></div>
                </div>
                <div id="houses">Virginia Ave<br>$160<div id="colour-bar"
                        style="outline-color:#000000; background-color:#a200ff"></div>
                </div>
                <div id="interactions" style='font-size:8px'><i class="fas fa-train"></i> Pennsylvania Railroad<br>$200
                </div>
                <div id="houses">St. James Place<br>$180<div id="colour-bar"
                        style="outline-color:#000000; background-color:#ffc400"></div>
                </div>
                <div id="interactions">Community Chest <i class="fas fa-charging-station fa-2"></i></div>
                <div id="houses">Tennessee Ave<br>$180<div id="colour-bar"
                        style="outline-color:#000000; background-color:#ffc400"></div>
                </div>
                <div id="houses">New York Ave<br>$200<div id="colour-bar"
                        style="outline-color:#000000; background-color:#ffc400"></div>
                </div>
            </div>
            <div id="bottom">
                <div id="corners"><b><u>Go</u></b><br><b>Collect $200</b><br><i
                        class="fas fa-long-arrow-alt-right fa-2"></i></div>
                <div id="houses">Mediter-ranean Avenue<br>$60<div id="colour-bar"
                        style="outline-color:#000000; background-color:#6e5231"></div>
                </div>
                <div id="interactions">Community Chest <i class="fas fa-charging-station fa-2"></i></div>
                <div id="houses">Baltic Avenue<br>$60<div id="colour-bar"
                        style="outline-color:#000000; background-color:#6e5231"></div>
                </div>
                <div id="interactions"><i class="fas fa-money-bill-wave fa-2"></i> Income Tax<br>(pay $200)</div>
                <div id="interactions"><i class="fas fa-train"></i> Reading Railroad<br>$200</div>
                <div id="houses">Oriental Avenue<br>$100<div id="colour-bar"
                        style="outline-color:#000000; background-color:#5dcefa"></div>
                </div>
                <div id="interactions">Chance <br><i class="fas fa-question fa-2"></i></div>
                <div id="houses">Vermont Avenue<br>$100<div id="colour-bar"
                        style="outline-color:#000000; background-color:#5dcefa"></div>
                </div>
                <div id="houses">Connecticut Avenue<br>$120<div id="colour-bar"
                        style="outline-color:#000000; background-color:#5dcefa"></div>
                </div>
                <div id="corners"><i class="fas fa-dice-three fa-2"></i><br>In Jail/Just Visiting</div>
            </div>
            <div id="center">
                <div id="logo"></div>
                <div id="chance">
                    <div id="innerchance">Chance<br><br><i class="fas fa-question fa-2"></i><br><br></div>
                </div>
                <div id="cchest">
                    <div id="innerchest">Community<br>Chest <br><br> <i class="fas fa-charging-station fa-2"></i></div>
                </div>
            </div>
            <div id="right">
                <div id="houses">Pacific Avenue<br>$300<div id="colour-bar"
                        style="outline-color:#000000; background-color:#2c812c"></div>
                </div>
                <div id="houses">North Carolina Avenue<br>$300<div id="colour-bar"
                        style="outline-color:#000000; background-color:#2c812c"></div>
                </div>
                <div id="interactions">Community Chest <i class="fas fa-charging-station fa-2"></i></div>
                <div id="houses">Pennsylvania Avenue<br>$320<div id="colour-bar"
                        style="outline-color:#000000; background-color:#2c812c"></div>
                </div>
                <div id="interactions">Short Line<br>$200 <i class="fas fa-ruler fa-2"></i></div>
                <div id="interactions">Chance <br><i class="fas fa-question fa-2"></i></div>
                <div id="interactions">Park Place<br>$350<div id="colour-bar"
                        style="outline-color:#000000; background-color:#0026ff"></div>
                </div>
                <div id="interactions"><i class="fas fa-money-bill fa-2"></i> Luxury Tax<br>(pay $200)</div>
                <div id="interactions">Boardwalk<br>$400<div id="colour-bar"
                        style="outline-color:#000000; background-color:#0026ff"></div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
