<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">


  <style>
    * {
      font-family: inherit;
    }

    .navbar {
      width: 100%;
      height: 92px;
    }

    .containerL {
      margin-left: 10px;
    }

  </style>
</head>

<body>
  <div class="container mt-0 d-flex flex-wrap">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ml-auto">
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
            <a href="/shopping_cart/list">
              <img src="./img/shop.jpg" width="36px" height="30px" alt="" style="margin-right:20px;">
            </a>
          </li>
          <li>
            <img src="./img/login.jpg" id="Link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false" width="36px" height="34px" alt="">
            <div class="dropdown-menu" aria-labelledby="Link"
              style="width: 100px;position: absolute;top:90%;left: 85%;">
              <a class="dropdown-item" href="#" style="text-align: center;">Login</a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
  </div>



  <div class="container-fluid" style="height: 970px;background-color: rgb(209, 209, 209); padding: 48px 0;">

    <div class="main" style="max-width: 64rem; height:100%; background-color: white;margin:0 auto;border-radius: 10px;">

      <div class="container" style="padding: 40px;margin: 0;">

        <p style="font-size: 30px;font-weight: 600;" style="margin: 0;">購物車</p>

        <div class="row">
          <div class="container progresssss d-flex justify-content-between align-items-center"
            style="height: 72px;padding: 0;">
            <div class="col">
              <div class="first"
                style="margin: 0 auto;line-height: 40px;text-align: center ;width:40px;height:40px;background-color: rgb(0, 199, 50);border-radius: 50%; color: honeydew;">
                1</div>
            </div>
            <div class="col">
              <div class="progress" style="width: 100%;">
                <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="25"
                  aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <div class="col">
              <div class="first"
                style="margin: 0 auto;line-height: 40px;text-align: center ;width:40px;height:40px;background-color: rgb(0, 199, 50);border-radius: 50%;color: honeydew;">
                2</div>
            </div>
            <div class="col">
              <div class="progress" style="width: 100%;">
                <div class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="25"
                  aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <div class="col">
              <div class="first"
                style="margin: 0 auto; line-height: 40px;text-align: center ;width:40px;height:40px;background-color: rgb(0, 199, 50);border-radius: 50%;color: honeydew;">
                3</div>
            </div>
            <div class="col">

              <div class="progress" style="width: 100%;">
                <div class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="25"
                  aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <div class="col">
              <div class="first"
                style="margin: 0 auto; line-height: 40px;text-align: center ;width:40px;height:40px;background-color: rgb(0, 199, 50);border-radius: 50%;color: honeydew;">
                4</div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col" style="text-align: center;">確認購物車</div>
          <div class="col"></div>
          <div class="col" style="text-align: center;">付款與運送方式</div>
          <div class="col"></div>
          <div class="col" style="text-align: center;">填寫資料</div>
          <div class="col"></div>
          <div class="col" style="text-align: center;">完成訂購</div>
        </div>


        <div class="container" style="padding: 0;">
          <hr>
          <p style="font-size: 24px;">訂單明細</p>
          @foreach ($cartCollection as $product)

            <div class="container" style="padding: 0; height: 84px; display:flex;b">
              <button type="button" class="del-btn" data-id="{{$product->id}}">X</button>
              <img src="{{ asset($product->attributes->img) }}" alt=""
                style="border-radius: 50%; width: 60px;height: 60px;margin-top:12px;">
              <div class="containerL d-flex align-items-center">
                {{ $product->name }}
                <br>#41551
              </div>
              <div class="containerR d-flex justify-content-end align-items-center"
                style="margin-left: auto; line-height: 84px;">
                <button class="minus" style="line-height:10px;margin-left: auto;height: 20px;">-</button>
                <input type="text" class="qty" data-id="{{ $product->id }}" value="{{ $product->quantity }}"
                  style="line-height: normal;text-align: center;width: 10%;">
                <button class="plus" style="line-height:10px;height: 20px;">+</button>
              </div>
              <div class="price" data-price='{{ $product->price }}' style="line-height:84px">$
                {{ number_format($product->price * $product->quantity) }} </div>
            </div>
            <hr>
          @endforeach

        </div>

        <div class="container" style="display: flex;flex-direction: column;align-items: flex-end;padding:0;">
          <div class="container"
            style="width: 236px;text-align: end;margin: 0;padding:0;display: flex;justify-content: space-between;">
            <span>數量:</span>
            <span id="total-qty">
              
            </span>
          </div>
          <div class="container"
            style="width: 236px;text-align: end;margin: 0;padding:0;display: flex;justify-content: space-between;">
            <span>小計:</span>
            <span id="sub-price">
              
            </span>
          </div>
          <div class="container"
            style="width: 236px;text-align: end;margin: 0;padding:0;display: flex;justify-content: space-between;">
            <span>運費:</span>
            <span id="shipment-price">
              
            </span>
          </div>
          <div class="container"
            style="width: 236px;text-align: end;margin: 0;padding:0;display: flex;justify-content: space-between;">
            <span>總計:</span>
            <span id="total-price">
              
            </span>
          </div>
        </div>
        <hr>
        <div class="container d-flex pt-2" style="padding: 0;">
          <a href="/"><div class="left">←返回購物</div></a>

          <a href="/shopping_cart/payment" class="ml-auto">
            <button style="width:144px;background-color: rgb(37 , 99, 235);color:white">下一步 </button>
          </a>
        </div>
      </div>

    </div>

  </div>



  <div class="container-fluid" style="padding:96px 20px;">
    <div class="row" style="margin: auto;">
      <div class="col-lg-4 col-md-6" style="text-align: center;">
        數位方塊<br>
        Air plant banjo lyft occupy retro adaptogen indego
      </div>
      <div class="col-lg-8 col-md-6" style="text-align: center;">
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <p>CATEGORIES</p>
            First Link
            <br>Second Link
            <br>Third Link
            <br>Fourth Link
          </div>
          <div class="col-lg-3 col-md-6">
            <p>CATEGORIES</p>
            First Link
            <br>Second Link
            <br>Third Link
            <br>Fourth Link
          </div>
          <div class="col-lg-3 col-md-6">
            <p>CATEGORIES</p>
            First Link
            <br>Second Link
            <br>Third Link
            <br>Fourth Link
          </div>
          <div class="col-lg-3 col-md-6">
            <p>CATEGORIES</p>
            First Link
            <br>Second Link
            <br>Third Link
            <br>Fourth Link
          </div>
        </div>
      </div>

    </div>
  </div>

  <footer style="width: 100%;height: 60px;background-color: #F3F4F6;display: flex;justify-content: center;">
    <div class="container-fluid"
      style="width: 80%;height: 100%;background-color: #F3F4F6;display: flex;justify-content: space-between;align-items: center;margin: 0;">
      <div class="left">© 2020 Tailblocks — @knyttneve</div>
      <div class="right" style="margin-left: auto;">
        <img src="./img/f.jpg" alt="">
        <img src="./img/t.jpg" alt="">
        <img src="./img/Unknow.jpg" alt="">
        <img src="./img/i.jpg" alt="">
      </div>
    </div>
  </footer>


  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
    integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous">
  </script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script>
    window.addEventListener('load',shoppingCart())
    var minusBtns = document.querySelectorAll('.minus');
    var plusBtns = document.querySelectorAll('.plus');
    var qtyBtns = document.querySelectorAll('.qty');
    var delBtns = document.querySelectorAll('.del-btn');

    plusBtns.forEach(function(plusBtn) {
      plusBtn.addEventListener('click', function() {
        
        var input = this.previousElementSibling;       
        var qty = 1;
        var productId = input.getAttribute('data-id');
        var formData = new FormData();
        formData.append('_token','{{csrf_token()}}')
        formData.append('productId',productId)
        formData.append('qty',qty)

        fetch('/shopping_cart/update',{
          'method':'POST',
          'body':formData
        })
        .then(function (response) {
          
          return response.text();
        })
        .then(function (data) {
         
          input.value = data;
        })          
        // 取得price元素
        // var price = this.parentElement.nextElementSibling;
        getprice(this);
        shoppingCart()
      })
    })
    minusBtns.forEach(function(minusBtn) {
      minusBtn.addEventListener('click', function() {
        var input = this.nextElementSibling;
        if(input.value>1){

          var qty =  -1;
          var productId = input.getAttribute('data-id');
          var formData = new FormData();
          formData.append('_token','{{csrf_token()}}')
          formData.append('productId',productId)
          formData.append('qty',qty)

          fetch('/shopping_cart/update',{
            'method':'POST',
            'body':formData
          })
          .then(function (response) {
            return response.text();
          })
          .then(function (data) {
            input.value = data;
          })          
        }
        
        getprice(this);
        shoppingCart()
      })
    })

    qtyBtns.forEach(function (qtyInput) {
      qtyInput.addEventListener('change',function () {
        var input = this;
        if(input.value<1){
          input.value=-1;
        }
        getprice(this);
        shoppingCart()
      })
    })

    function getprice(Element) {      
      var control = Element.parentElement;
      var input = control.querySelector('.qty');
      var price = control.nextElementSibling;
      var newPrice = (price.getAttribute('data-price') * input.value).toLocaleString();
      price.innerText = "$ " + newPrice;
    }


    function shoppingCart(){
      var totalQty = 0 
      var subPrice = 0
      var shipmentPrice = 60 
      var totalPrice = 0

      var qtyInputs = document.querySelectorAll('.qty');
      qtyInputs.forEach(function (qtyInput) {

        totalQty += Number(qtyInput.value);

        var price = qtyInput.parentElement.nextElementSibling.getAttribute('data-price');
        subPrice += price * qtyInput.value;
     
      })
      document.querySelector('#total-qty').innerText = totalQty.toLocaleString();
      document.querySelector('#sub-price').innerText = subPrice.toLocaleString();
 
      if(subPrice>1000){
        shipmentPrice = 0;
      }
      document.querySelector('#shipment-price').innerText = shipmentPrice.toLocaleString();

      totalPrice = subPrice + shipmentPrice;

      document.querySelector('#total-price').innerText = totalPrice.toLocaleString();
    }


    delBtns.forEach(function (delBtn) {
      delBtn.addEventListener('click',function () {
        var formData = new FormData();
        formData.append('_token','{{csrf_token()}}')
        formData.append('productId',this.getAttribute('data-id'))
        delBtnElement = this;
        fetch('/shopping_cart/delete',{
          'method':'POST',
          'body':formData
        })
        .then(function (response) {
          return response.text()
        })
        .then(function (data) {
          
          if(data == 'success'){
            delBtnElement.parentElement.nextElementSibling.remove();
            delBtnElement.parentElement.remove();
            shoppingCart()
            swal({
              icon: "success",
              title: "移除成功",
              showConfirmButton: false,
              timer: 700
            })
          }
          else{
            swal({
              icon: "erroe",
              title: "移除失敗",
              showConfirmButton: false,
              timer: 700
            });
          }
        })
      })
    })

  </script>


</body>

</html>
