<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <style>
     *{
        font-family: inherit;
      }
      .navbar{
        width: 100%;
        height: 92px;
      }
      .box{
        width: 70px;
        height: 3px;
        background-color :rgb(0, 9, 128) ;
        margin-top: 1.5rem;
      }
      .container{
        margin-top: 86.5px;

      }
      button{
        width: 100px;
        height: 40px;
        background-color: rgb(68, 124, 230);
        color: white;
        border-radius: 5px;
      }
      .B-2{
        margin-left: auto;
      }
      .btn{
        display: flex;
        justify-content: center;
      }


    </style>
    @yield('css')
</head>
<body>
  <div class="container mt-0 d-flex flex-wrap" >
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="/">Navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ml-auto" >
            <li class="nav-item active mr-3">
                <a class="nav-link " href="/news">News <span class="sr-only">(current)</span></a>
            </li>
          <li class="nav-item active mr-3">
            <a class="nav-link " href="#">Blog <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active mr-3">
            <a class="nav-link" href="#">Potfoloio <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active mr-3">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item active mr-3">
            <a class="nav-link" href="#">Contact</a>
          </li>
          <li>
            <img src="{{ asset('./img/shop.jpg') }}" width="36px" height="30px" alt="" style="margin-right:20px;">
          </li>
          <li>
            <img src="{{ asset('./img/login.jpg') }}" id="Link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" width="36px" height="34px" alt="">
            <div class="dropdown-menu" aria-labelledby="Link" style="width: 100px;position: absolute;top:90%;left: 85%;">
              <a class="dropdown-item" href="/login" style="text-align: center;">Login</a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
  </div>

  <main>
      @yield('main')
  </main>

  <footer style="width: 100%;height: 60px;background-color: #F3F4F6;display: flex;justify-content: center;">
    <div class="container-fluid m-0 d-flex flex-wrap align-items-center justify-content-between" style="width: 80%;height: 100%;background-color: #F3F4F6;">
        <div class="left">© 2020 Tailblocks — @knyttneve</div>
        <div class="right" style="margin-left: auto;">
            <img src="{{ asset('./img/f.jpg') }}" alt="">
            <img src="{{ asset('./img/t.jpg') }}" alt="">
            <img src="{{ asset('./img/Unknow.jpg') }}" alt="">
            <img src="{{ asset('./img/i.jpg') }}" alt="">
        </div>
    </div>
  </footer>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
  @yield('js')
</body>
</html>
