<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MOPUTA</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            background-image: "white";
            background-position: center;
            background-repeat: repeat;
            background-size: 100px;
            font-family: "Oswald", sans-serif;
            font-weight: 400;
            font-size: 10px;
            color: #080808;
            text-transform: uppercase;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            margin: 0;
        }

        .dark-purple {
            background: #5e3577;
        }

        .light-blue {
            background: #d2eaf5;
        }

        .purple {
            background: #b02f7c;
        }

        .orange {
            background: #fa811d;
        }

        .red {
            background: #f50c2b;
        }

        .yellow {
            background: #ffed20;
        }

        .green {
            background: #41994e;
        }

        .dark-blue {
            background: #5a6dba;
        }

        .table {
            padding-left: 50px;
            padding-right: 50px;
        }

        .board {
            display: grid;
            grid-template-columns: 125px repeat(9, 80px) 125px;
            grid-template-rows: 125px repeat(9, 80px) 125px;
            grid-gap: 2px;
            margin: 50px auto;
            width: 994px;
            height: 994px;
            background: #080808;
            border: 2px solid #080808;
        }

        .center {
            grid-column: 2 / 11;
            grid-row: 2 / 11;
            background: #fafaf8;
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            grid-template-rows: repeat(7, 1fr);
            justify-items: center;
            align-items: center;
        }

        .title {
            grid-column: 1 / 9;
            grid-row: 4;
            font-size: 90px;
            font-weight: 400;
            letter-spacing: 12px;
        }

        .community-chest-deck {
            grid-column: 2 / 4;
            grid-row: 2 / 4;
            transform: rotate(135deg);
            margin-bottom: 60px;
            margin-right: 60px;
        }

        .chance-deck {
            grid-column: 5 / 7;
            grid-row: 5 / 7;
            transform: rotate(315deg);
            margin-top: 60px;
            margin-left: 60px;
        }

        .label {
            text-align: center;
            font-weight: 500;
            letter-spacing: 3px;
            padding-bottom: 10px;
            padding-right: 3px;
        }

        .deck {
            border: 2px dashed #080808;
            width: 160px;
            height: 120px;
        }

        .row {
            display: grid;
            grid-gap: 2px;
        }

        .horizontal-row {
            grid-template-columns: repeat(9, 80px);
            grid-template-rows: 125px;
        }

        .vertical-row {
            grid-template-columns: 125px;
            grid-template-rows: repeat(9, 80px);
        }

        .vertical-row .container {
            top: 50%;
            left: 50%;
        }

        .bottom-row {
            grid-column: 2 / 11;
            grid-row: 11;
        }

        .left-row {
            grid-column: 1;
            grid-row: 2 / 11;
        }

        .left-row .container {
            transform: translate(-50%, -50%) rotate(90deg);
        }

        .top-row {
            grid-column: 2 / 11;
            grid-row: 1;
        }

        .top-row .container {
            transform: rotate(180deg);
        }

        .right-row {
            grid-column: 11;
            grid-row: 2 / 11;
        }

        .right-row .container {
            transform: translate(-50%, -50%) rotate(270deg);
        }

        .space {
            background: #fafaf8;
            text-align: center;
        }

        .space .container {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            position: relative;
            transform-origin: center;
            height: 125px;
            width: 80px;
        }

        .space .name,
        .space .instructions {
            text-align: center;
        }

        .space .price {
            font-size: 10px;
            font-weight: 400;
            padding-bottom: 5px;
        }

        .corner .container {
            justify-content: space-around;
            height: 100%;
            width: 100%;
        }

        .corner .name {
            padding: 0;
        }

        .property .color-bar {
            height: 25px;
            border-bottom: 2px solid #080808;
        }

        .property .name {
            padding-bottom: 50px;
            font-size: 10px;
        }

        .railroad .name {
            padding-top: 10px;
        }

        .railroad .drawing {
            font-size: 55px;
            color: #080808;
        }

        .utility .name {
            padding-top: 10px;
        }

        .utility .drawing {
            font-size: 70px;
        }

        .fee .name {
            padding-top: 10px;
            font-size: 14px;
        }

        .fee .instructions {
            font-size: 10px;
        }

        .go {
            grid-column: 11;
            grid-row: 11 / 12;
            position: relative;
        }

        .go .container {
            justify-content: flex-start;
            transform: rotate(315deg);
        }

        .go .instructions {
            padding-top: 40px;
            font-size: 9px;
        }

        .go .go-word {
            font-size: 20px;
            color: #080808;
        }

        .go .arrow {
            font-size: 45px;
            color: #f50c2b;
            position: absolute;
            bottom: -10px;
            left: 60px;
        }

        .jail {
            grid-column: 1;
            grid-row: 11 / 12;
            display: grid;
            grid-template-columns: repeat(10, 12.5px);
            grid-template-rows: repeat(10, 12.5px);
            justify-content: center;
            align-items: center;
        }

        .jail .drawing {
            grid-column: 4 / 11;
            grid-row: 1 / 8;
            width: 87.5px;
            height: 87.5px;
            background: #fa811d;
            border-bottom: 2px solid #080808;
            border-left: 2px solid #080808;
        }

        .jail .just {
            grid-column: 3;
            grid-row: 4;
            transform: rotate(90deg);
            padding-top: 25px;
        }

        .jail .visiting {
            grid-column: 6;
            grid-row: 8;
            padding-top: 25px;
        }

        .jail .container {
            align-items: center;
            transform: rotate(45deg);
        }

        .jail .name {
            font-size: 14px;
        }

        .jail .window {
            display: flex;
            justify-content: space-around;
            align-items: center;
            position: relative;
            width: 55px;
            height: 55px;
            background: #fafaf8;
            border: 2px solid #080808;
        }

        .jail .person {
            position: absolute;
            transform: translate(-50%, -50%);
            top: 50%;
            left: 50%;
            font-size: 40px;
        }

        .jail .bar {
            height: 55px;
            width: 2px;
            background: #080808;
        }

        .free-parking {
            grid-column: 1;
            grid-row: 1 / 2;
        }

        .free-parking .container {
            justify-content: center;
            transform: rotate(135deg);
        }

        .free-parking .name {
            font-size: 16px;
        }

        .free-parking .drawing {
            font-size: 60px;
            color: #f50c2b;
            padding-top: 5px;
            padding-bottom: 5px;
        }

        .go-to-jail {
            grid-column: 11;
            grid-row: 1 / 1;
        }

        .go-to-jail .container {
            justify-content: center;
            transform: rotate(225deg);
        }

        .go-to-jail .name {
            font-size: 15px;
            padding: 2;
        }

        .go-to-jail .drawing {
            font-size: 90px;
            color: #b02f7c;
            padding-top: 5px;
            padding-bottom: 5px;
            transform: rotate(135deg);
        }

        .chance .container {
            justify-content: center;
        }

        .chance .drawing {
            font-size: 100px;
            padding-bottom: 0px;
            color: #f50c2b;
        }

        .chance .blue {
            color: #d2eaf5;
        }

        .community-chest .container {
            justify-content: space-around;
        }

        .community-chest .drawing {
            font-size: 70px;
            padding-bottom: 10px;
            color: #d2eaf5;
        }

        .community-chest .instructions {
            font-size: 8px;
        }

        .electric-company .drawing {
            font-size: 50px;
            color: #5a6dba;
        }

        .waterworks .drawing {
            font-size: 50px;
            color: #5a6dba;
        }

        .income-tax .container {
            justify-content: center;
            align-items: center;
        }

        .income-tax .name {
            padding-bottom: 5px;
        }

        .income-tax .diamond {
            width: 5px;
            height: 5px;
            background: #080808;
            transform: rotate(45deg);
            display: inline-block;
        }

        .income-tax .instructions {
            padding-top: 5px;
            padding-bottom: 5px;
        }

        .luxury-tax .name {
            padding-bottom: -10px;
        }

        .luxury-tax .drawing {
            padding-top: 5px;
            font-size: 50px;
            color: #ffed20;
        }

        .luxury-tax .instructions {
            padding-bottom: 5px;
            padding-top: 30ox;
            font-size: 8px;
        }

        .long-name {
            padding-left: 0 !important;
            padding-right: 0 !important;
        }

        .long-railroad {
            padding-top: 15px;
            font-size: 10px;
            padding-left: 0px !important;
            padding-right: 4px !important;
        }

        .two-line-name {
            padding-top: 5px;
            padding-left: 3px !important;
            padding-right: 3px !important;
            top: 10px;
        }
    </style>
</head>

<body>
    <div class="table">
        <div class="board">
            <div class="center">
                <div class="community-chest-deck">
                    <h2 class="label">Community Chest</h2>
                    <div class="deck"></div>
                </div>
                <h1 class="title">MOPUTA</h1>
                <div class="chance-deck">
                    <h2 class="label">Chance</h2>
                    <div class="deck"></div>
                </div>
            </div>

            <div class="space corner go">
                <div class="container">
                    <div class="instructions">Collect £200 as you pass</div>
                    <div class="go-word">HOME</div>
                </div>
                <div class="arrow fa fa-long-arrow-left"></div>
            </div>

            <div class="row horizontal-row bottom-row">
                <div class="space property">
                    <div class="container">
                        <div class="color-bar light-blue"></div>
                        <div class="name">Bayer</div>
                        <div class="price">£120</div>
                    </div>
                </div>
                <div class="space property">
                    <div class="container">
                        <div class="color-bar light-blue"></div>
                        <div class="name">Nocil</div>
                        <div class="price">£100</div>
                    </div>
                </div>
                <div class="space chance">
                    <div class="container">
                        <div class="name">Chance</div>
                        <i class="drawing fa fa-question"></i>
                    </div>
                </div>
                <div class="space property">
                    <div class="container">
                        <div class="color-bar light-blue"></div>
                        <div class="name">St. John</div>
                        <div class="price">£100</div>
                    </div>
                </div>
                <div class="space railroad">
                    <div class="container">
                        <div class="name long-railroad">Jal Darshan</div>
                        <i class="drawing fa fa-building"></i>
                        <div class="price">£200</div>
                    </div>
                </div>
                <div class="space fee income-tax">
                    <div class="container">
                        <div class="name">Income Tax</div>
                        <div class="diamond"></div>
                        <div class="instructions">Pay $200</div>
                    </div>
                </div>
                <div class="space property">
                    <div class="container">
                        <div class="color-bar dark-purple"></div>
                        <div class="name">Wakatobi</div>
                        <div class="price">£60</div>
                    </div>
                </div>
                <div class="space community-chest">
                    <div class="container">
                        <div class="name">Community Chest</div>
                        <i class="drawing fa fa-key"></i>
                    </div>
                </div>
                <div class="space property">
                    <div class="container">
                        <div class="color-bar dark-purple"></div>
                        <div class="name">Bunaken</div>
                        <div class="price">£60</div>
                    </div>
                </div>
            </div>

            <div class="space corner jail">
                <div class="just">Just</div>
                <div class="drawing">
                    <div class="container">
                        <div class="name">In</div>
                        <div class="window">
                            <div class="bar"></div>
                            <div class="bar"></div>
                            <div class="bar"></div>
                            <i class="person fa fa-frown-o"></i>
                        </div>
                        <div class="name">Jail</div>
                    </div>
                </div>
                <div class="visiting">Visiting</div>
            </div>

            <div class="row vertical-row left-row">
                <div class="space property">
                    <div class="container">
                        <div class="color-bar orange"></div>
                        <div class="name">DGC</div>
                        <div class="price">£200</div>
                    </div>
                </div>
                <div class="space property">
                    <div class="container">
                        <div class="color-bar orange"></div>
                        <div class="name">Lado Sarai</div>
                        <div class="price">£180</div>
                    </div>
                </div>
                <div class="space community-chest">
                    <div class="container">
                        <div class="name">Community Chest</div>
                        <i class="drawing fa fa-key"></i>
                    </div>
                </div>
                <div class="space property">
                    <div class="container">
                        <div class="color-bar orange"></div>
                        <div class="name">Jaypee Greens</div>
                        <div class="price">£180</div>
                    </div>
                </div>
                <div class="space railroad">
                    <div class="container">
                        <div class="name">Landmark</div>
                        <i class="drawing fa fa-building"></i>
                        <div class="price">£200</div>
                    </div>
                </div>
                <div class="space property">
                    <div class="container">
                        <div class="color-bar purple"></div>
                        <div class="name">BPGC</div>
                        <div class="price">£160</div>
                    </div>
                </div>
                <div class="space property">
                    <div class="container">
                        <div class="color-bar purple"></div>
                        <div class="name">Willingdon</div>
                        <div class="price">£140</div>
                    </div>
                </div>
                <div class="space utility electric-company">
                    <div class="container">
                        <div class="name">JP Morgan</div>
                        <i class="drawing fa fa-university"></i>
                        <div class="price">£150</div>
                    </div>
                </div>
                <div class="space property">
                    <div class="container">
                        <div class="color-bar purple"></div>
                        <div class="name">Oxford</div>
                        <div class="price">£140</div>
                    </div>
                </div>
            </div>

            <div class="space corner free-parking">
                <div class="container">
                    <div class="name">Free</div>
                    <i class="drawing fa fa-car"></i>
                    <div class="name">Parking</div>
                </div>
            </div>

            <div class="row horizontal-row top-row">
                <div class="space property">
                    <div class="container">
                        <div class="color-bar red"></div>
                        <div class="name">Saayba</div>
                        <div class="price">£220</div>
                    </div>
                </div>
                <div class="space chance">
                    <div class="container">
                        <div class="name">Chance</div>
                        <i class="drawing fa fa-question blue"></i>
                    </div>
                </div>
                <div class="space property">
                    <div class="container">
                        <div class="color-bar red"></div>
                        <div class="name">Bombay Canteen</div>
                        <div class="price">£220</div>
                    </div>
                </div>
                <div class="space property">
                    <div class="container">
                        <div class="color-bar red"></div>
                        <div class="name long-name">Oh! Calcutta</div>
                        <div class="price">£240</div>
                    </div>
                </div>
                <div class="space railroad">
                    <div class="container">
                        <div class="name">Kalpataru</div>
                        <i class="drawing fa fa-building"></i>
                        <div class="price">£200</div>
                    </div>
                </div>
                <div class="space property">
                    <div class="container">
                        <div class="color-bar yellow"></div>
                        <div class="name">DD's Flat</div>
                        <div class="price">£260</div>
                    </div>
                </div>
                <div class="space property">
                    <div class="container">
                        <div class="color-bar yellow"></div>
                        <div class="name">Joy's Flat</div>
                        <div class="price">£260</div>
                    </div>
                </div>
                <div class="space utility waterworks">
                    <div class="container">
                        <div class="name">Stan C</div>
                        <i class="drawing fa fa-university"></i>
                        <div class="price">£150</div>
                    </div>
                </div>
                <div class="space property">
                    <div class="container">
                        <div class="color-bar yellow"></div>
                        <div class="name long-name">Vishal's Flat</div>
                        <div class="price">£280</div>
                    </div>
                </div>
            </div>

            <div class="space corner go-to-jail">
                <div class="container">
                    <div class="name">Go To</div>
                    <i class="drawing fa fa-gavel"></i>
                    <div class="name">Jail</div>
                </div>
            </div>

            <div class="row vertical-row right-row">
                <div class="space property">
                    <div class="container">
                        <div class="color-bar green"></div>
                        <div class="name">Raja Ampat</div>
                        <div class="price">£300</div>
                    </div>
                </div>
                <div class="space property">
                    <div class="container">
                        <div class="color-bar green"></div>
                        <div class="name">Galápagos</div>
                        <div class="price">£300</div>
                    </div>
                </div>
                <div class="space community-chest">
                    <div class="container">
                        <div class="name">Community Chest</div>
                        <i class="drawing fa fa-key"></i>
                    </div>
                </div>
                <div class="space property">
                    <div class="container">
                        <div class="color-bar green"></div>
                        <div class="name two-line-name">Great Barrier Reef</div>
                        <div class="price">£320</div>
                    </div>
                </div>
                <div class="space railroad">
                    <div class="container">
                        <div class="name">Sunteck </div>
                        <i class="drawing fa fa-building"></i>
                        <div class="price">£200</div>
                    </div>
                </div>
                <div class="space chance">
                    <div class="container">
                        <div class="name">Chance</div>
                        <i class="drawing fa fa-question"></i>
                    </div>
                </div>
                <div class="space property">
                    <div class="container">
                        <div class="color-bar dark-blue"></div>
                        <div class="name">Aalis</div>
                        <div class="price">£350</div>
                    </div>
                </div>
                <div class="space fee luxury-tax">
                    <div class="container">
                        <div class="name">GST</div>
                        <div class="drawing fa fa-database"></div>
                        <div class="instructions">Pay £200</div>
                    </div>
                </div>
                <div class="space property">
                    <div class="container">
                        <div class="color-bar dark-blue"></div>
                        <div class="name">64A</div>
                        <div class="price">£400</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
