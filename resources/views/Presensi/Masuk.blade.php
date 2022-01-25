@extends('layouts.main')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <script>
    function getServerTime() {
      return $.ajax({ async: false }).getResponseHeader('Date');
    }
    function realtimeClock() {
        var rtClock = new Date();
        // var rtClock = new Date(getServerTime());

        var hours = rtClock.getHours();
        var minutes = rtClock.getMinutes();
        var seconds = rtClock.getSeconds();

        // menampilkan AM PM
        // var amPm = (hours < 12) ? "AM" : "PM";
        // hours = (hours > 12) ? hours - 12 : hours;

        hours = ("0" + hours).slice(-2);
        minutes = ("0" + minutes).slice(-2);
        seconds = ("0" + seconds).slice(-2);

        document.getElementById("clock").innerHTML =
            hours + " : " + minutes + " : " + seconds;
        // + "  " + amPm;
        var jamnya = setTimeout(realtimeClock, 500);
    }
  </script>

  <style>
    #watch {
      color: rgb(252, 150, 65);
      position: absolute;
      z-index: 1;
      height: 40px;
      width: 700px;
      overflow: show;
      margin: auto;
      top: 0;
      left: 0;
      bottom: 0;
      right: 0;
      font-size: 10vw;
      -webkit-text-stroke: 3px rgb(210, 65, 36);
      text-shadow: 4px 4px 10px rgb(210, 65, 36, 0.4),
        4px 4px 20px rgba(210, 45, 26, 0.4),
        4px 4px 30px rgba(210, 25, 16, 0.4),
        4px 4px 40px rgba(210, 15, 06, 0.4);
    }
  </style>
</head>

    <body class="hold-transition sidebar-mini" onload="realtimeClock()">
          <section class="section">
              <div class="section-header">
                <h1>Presensi Masuk</h1>
              </div>
          </section>

          <div class="section-body">
            <div class="card">
              
               <div class="content">
                <div class="row justify-content-center">
                    <div class="card card-info card-outline">
                        <div class="card-header">Presensi Masuk</div>
                        <div class="card-body">
                            <form action="{{ route('simpan-masuk') }}" method="post">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <center>
                                        <label id="clock" style="font-size: 100px; color: #0A77DE; -webkit-text-stroke: 3px #00ACFE;
                                                    text-shadow: 4px 4px 10px #36D6FE,
                                                    4px 4px 20px #36D6FE,
                                                    4px 4px 30px#36D6FE,
                                                    4px 4px 40px #36D6FE;">
                                        </label>
                                    </center>
                                </div>
                                <center>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Klik Untuk Presensi Masuk</button>
                                    </div>
                                </center>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
            <!-- /.content -->

              <div class="card-footer bg-whitesmoke">
                This is card footer
              </div>
              
            </div>
        </div>
  </body>
</html>        
@endsection