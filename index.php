


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>SKIOT</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.min.css" rel="stylesheet">
  <style type="text/css">
    .view{
      background-image: url('images/bg7.jpg');
      background-repeat: no-repeat;
      background-size: cover;
      animation: change 120s infinite ease;
    }
    @keyframes change {
      0%{
        background-image: url('images/bg7.jpg');
      }
      10%{
        background-image: url('images/bg1.jpg');
      }
      20%{
        background-image: url('images/bg2.jpg');
      }
      30%{
        background-image: url('images/bg3.jpg');
      }
      40%{
        background-image: url('images/bg4.jpg');
      }
      50%{
        background-image: url('images/bg5.jpg');
      }
      60%{
        background-image: url('images/bg6.jpg');
      }
      70%{
        background-image: url('images/bg7.jpg');
      }
      80%{
        background-image: url('images/bg8.jpg');
      }
      90%{
        background-image: url('images/bg9.jpg');
      }
      100%{
        background-image: url('images/bg10.jpg');
      }
    }
    @media (min-width: 800px) and (max-width: 850px) {
      .navbar:not(.top-nav-collapse) {
        background: #1C2331 !important;
      }
    }

  </style>
  
</head>

<body>

  <!-- Navbar -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
    <div class="container">

      <!-- Brand -->
      <a class="navbar-brand" href="#" target="_blank">
        <strong>SKIOT</strong>
      </a>

      <!-- Collapse -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Links -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <!-- Left -->
        <ul class="navbar-nav mr-auto">
          
        </ul>

        <!-- Right -->
        <ul class="navbar-nav nav-flex-icons">
          <li class="nav-item">
            <a href="#" class="nav-link border border-light rounded"
              target="_blank">
              <i class="fab fa-github mr-2"></i>MDB GitHub
            </a>
          </li>
        </ul>

      </div>

    </div>
  </nav>
  <!-- Navbar -->

  <!--Carousel Wrapper-->
  <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">

    <!--Indicators-->
    
    <!--/.Indicators-->

    <!--Slides-->
    <div class="carousel-inner" role="listbox">

      <!--First slide-->
      <div class="carousel-item active">
        <div class="view">

          <!-- Mask & flexbox options-->
          <div class="mask rgba-black-light d-flex justify-content-center align-items-center" style="background-color: rgba(0, 0, 0, 0.6);">

            <!-- Content -->
            <div class="text-center white-text mx-5 wow fadeIn">
              <h1 class="mb-4">
                <strong class="jam_digital" id="jam_digital" style="font-size: 100px;"></strong> &nbsp;<span style="text-transform: uppercase;"><?= date('a') ?></span>
                <strong class="form-text"><?php echo date('d-m-Y') ?></strong>
              </h1>

              <div class="row d-md-flex justify-content-center mb-5">
                <div class="mr-4 col-md-3">
                  <i class="fas fa-temperature-high"></i>
                  
                    <strong id="temperature-celcius"></strong> 
                  
                </div>
                  
                <div class="col-md-3">
                  <i class="fas fa-temperature-low"></i>
                  <strong id="lpg"></strong>
                </div>
                
                <div class="col-md-3">
                  <i class="fas fa-temperature-low"></i>
                  <strong id="humidity"></strong>
                </div>
                
              </div>

              <div class="">
                <a href="#home" class="btn btn-outline-white btn-lg" style="width: 150; height: 150;">
                  <i class="fas fa-arrow-down"></i>
                </a>
              </div>
            </div>
            <!-- Content -->

          </div>
          <!-- Mask & flexbox options-->

        </div>
      </div>
      <!--/First slide-->

      

    </div>
    <!--/.Slides-->

    

  </div>
  <!--/.Carousel Wrapper-->

  <!--Main layout-->
  <main id="home">
    <div class="container">

      <!--Section: Main info-->
      <section class="mt-5 wow fadeIn">

        <!--Grid row-->
        <div class="row">
          <div class="col-md-3">
            <div class="card">
              <div class="card-body">
                <div class="card-title">
                  <h4>Living Room</h4>
                </div>
                <div>
                  <input type="hidden" id="off" value="1">
                  <input type="hidden" id="on" value="0">
                  <button class="btn btn-md btn-danger btn-block mb-1" value="1" id="lamp-off">off</button>
                  <button class="btn btn-md btn-primary btn-block" value="0" id="lamp-on">on</button>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card">
              <div class="card-body">
                <div class="card-title">
                  <h4>My Room</h4>
                </div>
                <div>
                  <input type="hidden" id="off" value="1">
                  <input type="hidden" id="on" value="0">
                  <button class="btn btn-md btn-danger btn-block mb-1" value="1" id="lamp-off">off</button>
                  <button class="btn btn-md btn-primary btn-block" value="0" id="lamp-on">on</button>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card">
              <div class="card-body">
                <div class="card-title">
                  <h4>Kitchen Room</h4>
                </div>
                <div>
                  <input type="hidden" id="off" value="1">
                  <input type="hidden" id="on" value="0">
                  <button class="btn btn-md btn-danger btn-block mb-1" value="1" id="kitchen-room-off">off</button>
                  <button class="btn btn-md btn-primary btn-block" value="0" id="kitchen-room-on">on</button>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card">
              <div class="card-body">
                <div class="card-title">
                  <h4>All Room</h4>
                </div>
                <div>
                  <input type="hidden" id="off" value="1">
                  <input type="hidden" id="on" value="0">
                  <button class="btn btn-md btn-danger btn-block mb-1" value="1" id="lamp-off">off</button>
                  <button class="btn btn-md btn-primary btn-block" value="0" id="lamp-on">on</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--Grid row-->

      </section>
      <!--Section: Main info-->

      <hr class="my-5">

      <!--Section: Main features & Quick Start-->
      <section class="">
        <div class="row">
          <div class="col-md-6 h-100">
            <h1 class="mb-3">Sensor Gas (MQ-2)</h2>
            <div class="row">
              <div class="col-md-12 mb-3">
                <div class="card">
                  <div class="card-body">
                    <div class="card-title">
                      <h4>Gas LPG</h4>
                    </div>
                    <div class="d-flex justify-content-around">
                      <div>
                        <strong style="font-size: 42px" id="gas-lpg"></strong>   
                      </div>
                      <div>
                        <i class="fas fa-temperature-low" style="font-size: 60px;"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-12 mb-3">
                <div class="card">
                  <div class="card-body">
                    <div class="card-title">
                      <h4>Gas CO</h4>
                    </div>
                    <div class="d-flex justify-content-around">
                      <div>
                        <p class="font-weight-bold" style="font-size: 42px" id="gas-co"></p>   
                      </div>
                      <div>
                        <i class="fas fa-temperature-low" style="font-size: 60px;"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-12">
                <div class="card">
                  <div class="card-body">
                    <div class="card-title">
                      <h4>Smoke</h4>
                    </div>
                    <div class="d-flex justify-content-around">
                      <div>
                        <p class="font-weight-bold" style="font-size: 42px" id="gas-smoke"></p>   
                      </div>
                      <div>
                        <i class="fas fa-temperature-low" style="font-size: 60px;"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
          <div class="col-md-6 h-100">
            <h1 class="mb-3">Sensor Suhu (DHT11)</h1>
            <div class="row">
              <div class="col-md-6">
                <div class="card">
                  <div class="card-body">
                    <div class="card-title">
                      <h4>Derajat Celcius</h4>
                    </div>
                    <div class="d-flex justify-content-around">
                      <div>
                        <p class="font-weight-bold" style="font-size: 42px" id="cel"></p>   
                      </div>
                      <div>
                        <i class="fas fa-temperature-low" style="font-size: 60px;"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <div class="card">
                  <div class="card-body">
                    <div class="card-title">
                      <h4>Heat Celcius</h4>
                    </div>
                    <div class="d-flex justify-content-around">
                      <div>
                        <p class="font-weight-bold" style="font-size: 42px" id="heat-celcius"></p>   
                      </div>
                      <div>
                        <i class="fas fa-temperature-low" style="font-size: 60px;"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="card">
                  <div class="card-body">
                    <div class="card-title">
                      <h4>Derajat Fahrenheit</h4>
                    </div>
                    <div class="d-flex justify-content-around">
                      <div>
                        <p class="font-weight-bold" style="font-size: 42px" id="fahrenheit"></p>   
                      </div>
                      <div>
                        <i class="fas fa-temperature-low" style="font-size: 60px;"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <div class="card">
                  <div class="card-body">
                    <div class="card-title">
                      <h4>Heat Fahrenheit</h4>
                    </div>
                    <div class="d-flex justify-content-around">
                      <div>
                        <p class="font-weight-bold" style="font-size: 42px" id="heat-fahrenheit"></p>   
                      </div>
                      <div>
                        <i class="fas fa-temperature-low" style="font-size: 60px;"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="card">
                  <div class="card-body">
                    <div class="card-title text-center">
                      <h4>Kelembapan</h4>
                    </div>
                    <div class="d-flex justify-content-around">
                      <div>
                        <p class="font-weight-bold" style="font-size: 42px" id="heat-humidity"></p>   
                      </div>
                      <div>
                        <i class="fas fa-temperature-low" style="font-size: 60px;"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--Section: Main features & Quick Start-->

      <hr class="my-5">

      <!--Section: Not enough-->
      <section>
        <div class="row wow fadeIn">
          <div class="col-md-12 col-md-6 mb-4">

          <!--Card-->
          <div class="card">

            <!-- Card header -->
            <div class="card-header">Line chart</div>

            <!--Card content-->
            <div class="card-body">

              <canvas id="lineChart"></canvas>

            </div>

          </div>
          <!--/.Card-->

        </div>
        </div>
      </section>
      <!--Section: Not enough-->

      <hr class="mb-5">

      <!--Section: More-->
      
      <!--Section: More-->

    </div>
  </main>
  <!--Main layout-->

  <!--Footer-->
  <footer class="page-footer text-center font-small mt-4 wow fadeIn">

    <!--Call to action-->
    <div class="pt-4">
      <a class="btn btn-outline-white" href="https://mdbootstrap.com/docs/jquery/getting-started/download/" target="_blank"
        role="button">Download MDB
        <i class="fas fa-download ml-2"></i>
      </a>
      <a class="btn btn-outline-white" href="https://mdbootstrap.com/education/bootstrap/" target="_blank" role="button">Start
        free tutorial
        <i class="fas fa-graduation-cap ml-2"></i>
      </a>
    </div>
    <!--/.Call to action-->

    <hr class="my-4">

    <!-- Social icons -->
    <div class="pb-4">
      <a href="https://www.facebook.com/mdbootstrap" target="_blank">
        <i class="fab fa-facebook-f mr-3"></i>
      </a>

      <a href="https://twitter.com/MDBootstrap" target="_blank">
        <i class="fab fa-twitter mr-3"></i>
      </a>

      <a href="https://www.youtube.com/watch?v=7MUISDJ5ZZ4" target="_blank">
        <i class="fab fa-youtube mr-3"></i>
      </a>

      <a href="https://plus.google.com/u/0/b/107863090883699620484" target="_blank">
        <i class="fab fa-google-plus-g mr-3"></i>
      </a>

      <a href="https://dribbble.com/mdbootstrap" target="_blank">
        <i class="fab fa-dribbble mr-3"></i>
      </a>

      <a href="https://pinterest.com/mdbootstrap" target="_blank">
        <i class="fab fa-pinterest mr-3"></i>
      </a>

      <a href="https://github.com/mdbootstrap/bootstrap-material-design" target="_blank">
        <i class="fab fa-github mr-3"></i>
      </a>

      <a href="http://codepen.io/mdbootstrap/" target="_blank">
        <i class="fab fa-codepen mr-3"></i>
      </a>
    </div>
    <!-- Social icons -->

    <!--Copyright-->
    <div class="footer-copyright py-3">
      © 2019 Copyright:
      <a href="https://mdbootstrap.com/education/bootstrap/" target="_blank"> MDBootstrap.com </a>
    </div>
    <!--/.Copyright-->

  </footer>
  <!--/.Footer-->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script>
    $(document).ready(function(){
      $('#kitchen-room-on').on('click', function(){
        $.getJSON('https://sgp1.blynk.cloud/external/api/get?token=M8r1JtoTj2zF7UwGxDo9FUyBr-4Di7U7&V8', function(data){
          console.log(data);
          $.getJSON('https://sgp1.blynk.cloud/external/api/get?token=M8r1JtoTj2zF7UwGxDo9FUyBr-4Di7U7&V7', function(result){
              console.log(result)
          })
        })
      })
    })
  </script>
  <script>
    $(document).ready(function(){
      setInterval(function(){
                    $.getJSON('https://blynk.cloud/external/api/get?token=M8r1JtoTj2zF7UwGxDo9FUyBr-4Di7U7&V0', function(data){
                      //console.log(data);
                      $('#humidity').html('<span>' + data + ' %</span>')
                    })

                    $.getJSON('https://blynk.cloud/external/api/get?token=M8r1JtoTj2zF7UwGxDo9FUyBr-4Di7U7&V1', function(data){
                      // console.log(data);
                      $('#cel').html('<span>' + data + ' C</span>')
                    })

                    $.getJSON('https://blynk.cloud/external/api/get?token=M8r1JtoTj2zF7UwGxDo9FUyBr-4Di7U7&V2', function(data){
                      // console.log(data);
                      $('#heat-celcius').html('<span>' + data + ' C</span>')
                    })

                    $.getJSON('https://blynk.cloud/external/api/get?token=M8r1JtoTj2zF7UwGxDo9FUyBr-4Di7U7&V11', function(data){
                      // console.log(data);
                      $('#fahrenheit').html('<span>' + data + ' F</span>')
                    })

                    $.getJSON('https://blynk.cloud/external/api/get?token=M8r1JtoTj2zF7UwGxDo9FUyBr-4Di7U7&V12', function(data){
                      // console.log(data);
                      $('#heat-fahrenheit').html('<span>' + data + ' F</span>')
                    })

                    $.getJSON('https://blynk.cloud/external/api/get?token=M8r1JtoTj2zF7UwGxDo9FUyBr-4Di7U7&V0', function(data){
                      // console.log(data);
                      $('#heat-humidity').html('<span>' + data + ' %</span>')
                    })
      }, 1000)
    })
                </script>
                <script>
                  setInterval(function(){
                    $.getJSON('https://blynk.cloud/external/api/get?token=M8r1JtoTj2zF7UwGxDo9FUyBr-4Di7U7&V13', function(data){
                      // console.log(data);
                      $('#lpg').html('<span>' + data + ' mg</span>')
                    })

                    $.getJSON('https://blynk.cloud/external/api/get?token=M8r1JtoTj2zF7UwGxDo9FUyBr-4Di7U7&V1', function(data){
                      // console.log(data);
                      $('#temperature-celcius').html('<span>' + data + ' C</span>')
                    })
                  }, 1000)

                  setInterval(function(){
                    
                  }, 1000)
                </script>
                <script>
    $(document).ready(function(){
      setInterval(function(){
                    $.getJSON('https://blynk.cloud/external/api/get?token=M8r1JtoTj2zF7UwGxDo9FUyBr-4Di7U7&V13', function(data){
                      // console.log(data);
                      $('#gas-lpg').html('<span>' + data + ' mg</span>')
                    })
      }, 1000)
    })
                </script>
                <script>
    $(document).ready(function(){
      setInterval(function(){
                    $.getJSON('https://blynk.cloud/external/api/get?token=M8r1JtoTj2zF7UwGxDo9FUyBr-4Di7U7&V14', function(data){
                      // console.log(data);
                      $('#gas-co').html('<span>' + data + ' mg</span>')
                    })
      }, 1000)
    })
                </script>
                <script>
    $(document).ready(function(){
      setInterval(function(){
                    $.getJSON('https://blynk.cloud/external/api/get?token=M8r1JtoTj2zF7UwGxDo9FUyBr-4Di7U7&V15', function(data){
                      // console.log(data);
                      $('#gas-smoke').html('<span>' + data + ' mg</span>')
                    })
      }, 1000)
    })
                </script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js"></script>
  <!-- Initializations -->
  <script src="javascript.js"></script>
  
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();

  </script>
  <!-- <script>
    $(document).ready(function(){
      setInterval(function(){
        $.getJSON('https://blynk.cloud/external/api/get?token=M8r1JtoTj2zF7UwGxDo9FUyBr-4Di7U7&V13', function(data){
        $('#temperature-celcius').html('<span>' + data + ' C</span>');
      }, 1000);
    });
  });
  </script> -->
  <!-- <script>
    $(document).ready(function(){
      setInterval(function(){
        $.getJSON('https://blynk.cloud/external/api/get?token=M8r1JtoTj2zF7UwGxDo9FUyBr-4Di7U7&V13', function(lpg){
        $('#lpg').html('<span>' + lpg + ' C</span>');
        console.log(lpg)
      }, 1000)
    })
  </script> -->
  <script>
    $(document).ready(function(){
      setInterval(function(){
        $("#celcius").load('celcius.php');
      }, 1000)
    });
  </script>
  <script>
    $(document).ready(function(){
      setInterval(function(){
        $("#smoke").load('smoke.php');
      }, 1000)
    });
  </script>
  
  <script>
      window.onload = function() { jam(); }
      function jam() {
              var e = document.getElementById('jam_digital'),
              d = new Date(), h, m, s;
              h = d.getHours();
              m = set(d.getMinutes());
              s = set(d.getSeconds());
         
              e.innerHTML = h +':'+ m +':'+ s;
         
              setTimeout('jam()', 1000);
          }
          function set(e) {
            e = e < 10 ? '0'+ e : e;
            return e;
        }
  </script> 
<!--   <script>
    $(document).ready(function(){
        var bg=[0,1,2,3,4,5,6,7,8,9];
            var index=0;
            setInterval(function(){
            index=(index + 1) % bg.length;
        $('.view').css('background-image','url("images/bg'+index+'.jpg")');
        },8000);
      });
  </script> -->
  <script>
    //line
    var ctxL = document.getElementById("lineChart").getContext('2d');
    var myLineChart = new Chart(ctxL, {
      type: 'line',
      data: {
        labels: ["January", "February", "March", "April", "May", "June", "July"],
        datasets: [{
            label: "My First dataset",
            backgroundColor: [
              'rgba(105, 0, 132, .2)',
            ],
            borderColor: [
              'rgba(200, 99, 132, .7)',
            ],
            borderWidth: 2,
            data: [65, 59, 80, 81, 56, 55, 40]
          },
          {
            label: "My Second dataset",
            backgroundColor: [
              'rgba(0, 137, 132, .2)',
            ],
            borderColor: [
              'rgba(0, 10, 130, .7)',
            ],
            data: [28, 48, 40, 19, 86, 27, 90]
          }
        ]
      },
      options: {
        responsive: true
      }
    });
  </script>
</body>

</html>
