<!doctype html>


<!--


	***** HAYO.. Mau Ngapain Buka Inpect Element? *****
   *********** JANGAN ISENG BUKA BUKA KODENYA ***********

//=========================================================//
//         //\\       ||====    ||      ||==========       //
//        //  \\      ||  //    ||      ||                 //
//       //    \\     || //     ||      ||========         //
//      //======\\    || \\     ||      ||                 //
//     //        \\   ||  \\    ||      ||                 //
//    //          \\  ||   \\   ||      ||                 //
//                                                         //
//        Created By Arif Puji Nugroho (Indonesia)         //
//     Website    : https://arifpujin.com/                 //
//     GitHub     : https://Github.com/arifpujin           //
//     Facebook   : https://facebook.com/arifpn            //
//     Instagram  : https://instagram.com/reallifeapn      //
//     Whatsapp   : +6285885994505                         //
//     Email      : arifpujinugroho@gmail.com              //
//=========================================================//

//    *****Inventory Management System for LAB TV FT UNY 2019**********
//        *****Proyek Akhir Skripsi || Proyek Mandiri UNY**********
//             ***** 5 Maret 2019 - Thesis Finish **********





-->






<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Maintenance | UNYtechTV</title>
	<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <meta name="author" content="Arif Puji Nugroho">

    <!-- Favicon -->
    <link rel="icon" href="https://unytechtv.com/wp-content/uploads/2018/12/cropped-favicon-32x32.png" sizes="32x32" />
    <link rel="icon" href="https://unytechtv.com/wp-content/uploads/2018/12/cropped-favicon-192x192.png" sizes="192x192" />
    <link rel="apple-touch-icon-precomposed" href="https://unytechtv.com/wp-content/uploads/2018/12/cropped-favicon-180x180.png" />
    <meta name="msapplication-TileImage" content="https://unytechtv.com/wp-content/uploads/2018/12/cropped-favicon-270x270.png" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

	<style type="text/css">
    
	body,
html {
    padding: 0;
    margin: 0;
    font-family: 'Quicksand', sans-serif;
    font-weight: 400;
    overflow: hidden;
}

.btn > .caret,
  .dropup > .btn > .caret {
    border-top-color: #000 !important;
  }

.btn {
  display: inline-block;
  padding: 6px 12px;
  margin-bottom: 0;
  font-size: 14px;
  font-weight: normal;
  line-height: 1.42857143;
  text-align: center;
  white-space: nowrap;
  vertical-align: middle;
  -ms-touch-action: manipulation;
      touch-action: manipulation;
  cursor: pointer;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
  background-image: none;
  border: 1px solid transparent;
  border-radius: 4px;
}
.btn:focus,
.btn:active:focus,
.btn.active:focus,
.btn.focus,
.btn:active.focus,
.btn.active.focus {
  outline: 5px auto -webkit-focus-ring-color;
  outline-offset: -2px;
}
.btn:hover,
.btn:focus,
.btn.focus {
  color: #333;
  text-decoration: none;
}
.btn:active,
.btn.active {
  background-image: none;
  outline: 0;
  -webkit-box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125);
          box-shadow: inset 0 3px 5px rgba(0, 0, 0, .125);
}
.btn.disabled,
.btn[disabled],
fieldset[disabled] .btn {
  cursor: not-allowed;
  filter: alpha(opacity=65);
  -webkit-box-shadow: none;
          box-shadow: none;
  opacity: .65;
}
a.btn.disabled,
fieldset[disabled] a.btn {
  pointer-events: none;
}
.btn-default {
  color: #333;
  background-color: #fff;
  border-color: #ccc;
}
.btn-primary {
  color: #fff;
  background-color: #337ab7;
  border-color: #2e6da4;
}
.btn-primary:focus,
.btn-primary.focus {
  color: #fff;
  background-color: #286090;
  border-color: #122b40;
}
.btn-primary:hover {
  color: #fff;
  background-color: #286090;
  border-color: #204d74;
}
.btn-primary:active,
.btn-primary.active,
.open > .dropdown-toggle.btn-primary {
  color: #fff;
  background-color: #286090;
  border-color: #204d74;
}
.btn-primary:active:hover,
.btn-primary.active:hover,
.open > .dropdown-toggle.btn-primary:hover,
.btn-primary:active:focus,
.btn-primary.active:focus,
.open > .dropdown-toggle.btn-primary:focus,
.btn-primary:active.focus,
.btn-primary.active.focus,
.open > .dropdown-toggle.btn-primary.focus {
  color: #fff;
  background-color: #204d74;
  border-color: #122b40;
}
.btn-primary:active,
.btn-primary.active,
.open > .dropdown-toggle.btn-primary {
  background-image: none;
}
.btn-primary.disabled:hover,
.btn-primary[disabled]:hover,
fieldset[disabled] .btn-primary:hover,
.btn-primary.disabled:focus,
.btn-primary[disabled]:focus,
fieldset[disabled] .btn-primary:focus,
.btn-primary.disabled.focus,
.btn-primary[disabled].focus,
fieldset[disabled] .btn-primary.focus {
  background-color: #337ab7;
  border-color: #2e6da4;
}
.btn-primary .badge {
  color: #337ab7;
  background-color: #fff;
}

.tooltip {
    position: relative;
    display: inline-block;
    border-bottom: 1px dotted black;
}

.tooltip .tooltiptext {
    visibility: hidden;
    width: 120px;
    background-color: black;
    color: #fff;
    text-align: center;
    border-radius: 6px;
    padding: 5px 0;
    position: absolute;
    z-index: 1;
    top: 150%;
    left: 50%;
    margin-left: -60px;
}

.tooltip .tooltiptext::after {
    content: "";
    position: absolute;
    bottom: 100%;
    left: 50%;
    margin-left: -5px;
    border-width: 5px;
    border-style: solid;
    border-color: transparent transparent black transparent;
}

.tooltip:hover .tooltiptext {
    visibility: visible;
}
  

.writing {
    width: 320px;
    height: 200px;
    background-color: #3f3f3f;
    border: 1px solid #bbbbbb;
    border-radius: 6px 6px 4px 4px;
    position: relative;
}

.writing .topbar{
    position: absolute;
    width: 100%;
    height: 12px;
    background-color: #f1f1f1;
    border-top-left-radius: 4px;
    border-top-right-radius: 4px;
}

.writing .topbar div{
    height: 6px;
    width: 6px;
    border-radius: 50%;
    margin: 3px;
    float: left;
}

.writing .topbar div.green{
    background-color: #60d060;
}
.writing .topbar div.red{
    background-color: red;
}
.writing .topbar div.yellow{
    background-color: #e6c015;
}

.writing .code {
    padding: 15px;
}

.writing .code ul {
    list-style: none;
    margin: 0;
    padding: 0;
}

.writing .code ul li {
    background-color: #9e9e9e;
    width: 0;
    height: 7px;
    border-radius: 6px;
    margin: 10px 0;
}

.container {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
    height: 100vh;
    width: 100%;
    -webkit-transition: -webkit-transform .5s;
    transition: -webkit-transform .5s;
    transition: transform .5s;
    transition: transform .5s, -webkit-transform .5s;
}

.stack-container {
    position: relative;
    width: 420px;
    height: 210px;
    -webkit-transition: width 1s, height 1s;
    transition: width 1s, height 1s;
}

.pokeup {
    -webkit-transition: all .3s ease;
    transition: all .3s ease;
}

.pokeup:hover {
    -webkit-transform: translateY(-10px);
            transform: translateY(-10px);
    -webkit-transition: .3s ease;
    transition: .3s ease;
}


.error {
    width: 400px;
    padding: 40px;
    text-align: center;
}

.error h1 {
    font-size: 125px;
    padding: 0;
    margin: 0;
    font-weight: 700;
}

.error h2 {
    margin: -30px 0 0 0;
    padding: 0px;
    font-size: 47px;
    letter-spacing: 12px;
}

.perspec {
    -webkit-perspective: 1000px;
            perspective: 1000px;
}

.writeLine{
    -webkit-animation: writeLine .4s linear forwards;
            animation: writeLine .4s linear forwards;
}

.explode{
    -webkit-animation: explode .5s ease-in-out forwards;
            animation: explode .5s ease-in-out forwards;
}

.card {
    -webkit-animation: tiltcard .5s ease-in-out 1s forwards;
            animation: tiltcard .5s ease-in-out 1s forwards;
    position: absolute;
}

@-webkit-keyframes tiltcard {
    0% {
        -webkit-transform: rotateY(0deg);
                transform: rotateY(0deg);
    }

    100% {
        -webkit-transform: rotateY(-30deg);
                transform: rotateY(-30deg);
    }
}

@keyframes tiltcard {
    0% {
        -webkit-transform: rotateY(0deg);
                transform: rotateY(0deg);
    }

    100% {
        -webkit-transform: rotateY(-30deg);
                transform: rotateY(-30deg);
    }
}

@-webkit-keyframes explode {
    0% {
        -webkit-transform: translate(0, 0) scale(1);
                transform: translate(0, 0) scale(1);
    }

    100% {
        -webkit-transform: translate(var(--spreaddist), var(--vertdist)) scale(var(--scaledist));
                transform: translate(var(--spreaddist), var(--vertdist)) scale(var(--scaledist));
    }
}

@keyframes explode {
    0% {
        -webkit-transform: translate(0, 0) scale(1);
                transform: translate(0, 0) scale(1);
    }

    100% {
        -webkit-transform: translate(var(--spreaddist), var(--vertdist)) scale(var(--scaledist));
                transform: translate(var(--spreaddist), var(--vertdist)) scale(var(--scaledist));
    }
}

@-webkit-keyframes writeLine {
    0% {
        width:0;
    }

    100% {
        width: var(--linelength);
    }
}

@keyframes writeLine {
    0% {
        width:0;
    }

    100% {
        width: var(--linelength);
    }
}

@media screen and (max-width: 1000px) {
    .container {
      -webkit-transform: scale(.85);
              transform: scale(.85);
    }
  }

  @media screen and (max-width: 850px) {
    .container {
      -webkit-transform: scale(.75);
              transform: scale(.75);
    }
  }

  @media screen and (max-width: 775px) {
    .container {
      -ms-flex-wrap: wrap-reverse;
          flex-wrap: wrap-reverse;
      -webkit-box-align: inherit;
          -ms-flex-align: inherit;
              align-items: inherit;
    }
  }

  @media screen and (max-width: 370px) {
    .container {
        -webkit-transform: scale(.6);
                transform: scale(.6);
      }
  }
	}



	</style>

</head>
<body>




<div class="container">
        <div class="error">
            
        	<h2>Sorry</h2>
            <h3 style="color: red;"><strong>"Mohon maaf sistem ditutup sementara karena sedang ada perbaikan dan penambahan fitur"</strong></h3><br>
            <br>
            <h4 style="text-align: center;">Jika ingin mendownload atau informasi berkaitan dengan PKM bisa ke Web Penalaran UNY</h4>
    	<a href="https://unyku.ga/SITUSBIDANGPENALARAN/"><button type="button" class="btn btn-primary">Link WEB Penalaran UNY</button></a><br><br>
        </div>
        <div class="stack-container">
            <div class="card-container">
                <div class="perspec" style="--spreaddist: 125px; --scaledist: .75; --vertdist: -25px;">
                    <div class="card">
                        <div class="writing">
                            <div class="topbar">
                                <div class="red"></div>
                                <div class="yellow"></div>
                                <div class="green"></div>
                            </div>
                            <div class="code">
                                <ul>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-container">
                <div class="perspec" style="--spreaddist: 100px; --scaledist: .8; --vertdist: -20px;">
                    <div class="card">
                        <div class="writing">
                            <div class="topbar">
                                <div class="red"></div>
                                <div class="yellow"></div>
                                <div class="green"></div>
                            </div>
                            <div class="code">
                                <ul>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-container">
                <div class="perspec" style="--spreaddist:75px; --scaledist: .85; --vertdist: -15px;">
                    <div class="card">
                        <div class="writing">
                            <div class="topbar">
                                <div class="red"></div>
                                <div class="yellow"></div>
                                <div class="green"></div>
                            </div>
                            <div class="code">
                                <ul>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-container">
                <div class="perspec" style="--spreaddist: 50px; --scaledist: .9; --vertdist: -10px;">
                    <div class="card">
                        <div class="writing">
                            <div class="topbar">
                                <div class="red"></div>
                                <div class="yellow"></div>
                                <div class="green"></div>
                            </div>
                            <div class="code">
                                <ul>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-container">
                <div class="perspec" style="--spreaddist: 25px; --scaledist: .95; --vertdist: -5px;">
                    <div class="card">
                        <div class="writing">
                            <div class="topbar">
                                <div class="red"></div>
                                <div class="yellow"></div>
                                <div class="green"></div>
                            </div>
                            <div class="code">
                                <ul>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-container">
                <div class="perspec" style="--spreaddist: 0px; --scaledist: 1; --vertdist: 0px;">
                    <div class="card">
                        <div class="writing">
                            <div class="topbar">
                                <div class="red"></div>
                                <div class="yellow"></div>
                                <div class="green"></div>
                            </div>
                            <div class="code">
                                <ul>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <footer>
    	<h4 style="text-align: center;">Kepada Para Pejuang PKM. Jika ingin mendownload atau informasi berkaitan dengan PKM bisa ke Web Penalaran UNY. Terima Kasih</h4><br>
    	<a href="https://unyku.ga/SITUSBIDANGPENALARAN/"><button type="button" class="btn btn-primary">Link WEB Penalaran UNY</button></a>
    </footer>

    <script type="text/javascript">
    	const stackContainer = document.querySelector('.stack-container');
const cardNodes = document.querySelectorAll('.card-container');
const perspecNodes = document.querySelectorAll('.perspec');
const perspec = document.querySelector('.perspec');
const card = document.querySelector('.card');

let counter = stackContainer.children.length;

//function to generate random number
function randomIntFromInterval(min, max) {
    return Math.floor(Math.random() * (max - min + 1) + min);
}

//after tilt animation, fire the explode animation
card.addEventListener('animationend', function () {
    perspecNodes.forEach(function (elem, index) {
        elem.classList.add('explode');
    });
});

//after explode animation do a bunch of stuff
perspec.addEventListener('animationend', function (e) {
    if (e.animationName === 'explode') {
        cardNodes.forEach(function (elem, index) {

            //add hover animation class
            elem.classList.add('pokeup');

            //add event listner to throw card on click
            elem.addEventListener('click', function () {
                let updown = [800, -800]
                let randomY = updown[Math.floor(Math.random() * updown.length)];
                let randomX = Math.floor(Math.random() * 1000) - 1000;
                elem.style.transform = `translate(${randomX}px, ${randomY}px) rotate(-540deg)`
                elem.style.transition = "transform 1s ease, opacity 2s";
                elem.style.opacity = "0";
                counter--;
                if (counter === 0) {
                    stackContainer.style.width = "0";
                    stackContainer.style.height = "0";
                }
            });

            //generate random number of lines of code between 4 and 10 and add to each card
            let numLines = randomIntFromInterval(5, 10);

            //loop through the lines and add them to the DOM
            for (let index = 0; index < numLines; index++) {
                let lineLength = randomIntFromInterval(25, 97);
                var node = document.createElement("li");
                node.classList.add('node-' + index);
                elem.querySelector('.code ul').appendChild(node).setAttribute('style', '--linelength: ' + lineLength + '%;');

                //draw lines of code 1 by 1
                if (index == 0) {
                    elem.querySelector('.code ul .node-' + index).classList.add('writeLine');
                } else {
                    elem.querySelector('.code ul .node-' + (index - 1)).addEventListener('animationend', function (e) {
                        elem.querySelector('.code ul .node-' + index).classList.add('writeLine');
                    });
                }
            }
        });
    }
});

    </script>
</body>
</html>