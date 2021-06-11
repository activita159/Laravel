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
    <div class="container mt-0 d-flex flex-wrap" >
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto" >
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
                <img src="./img/shop.jpg" width="36px" height="30px" alt="" style="margin-right:20px;">
              </li>    
              <li>
                <img src="./img/login.jpg" id="Link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" width="36px" height="34px" alt="">
                <div class="dropdown-menu" aria-labelledby="Link" style="width: 100px;position: absolute;top:90%;left: 85%;">
                  <a class="dropdown-item" href="#" style="text-align: center;">Login</a>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </div>


    <div class="container-fluid" style="height: 1400px;background-color: rgb(209, 209, 209); padding: 48px 0;">
        
        <div class="main" style="max-width: 64rem; height:100%; background-color: white;margin:0 auto;border-radius: 10px;">   
            
            <div class="container" style="padding: 40px;margin: 0;">
                <p style="font-size: 30px;font-weight: 600;" style="margin: 0;">購物車</p>
                <div class="row">
                    <div class="container progresssss d-flex justify-content-between align-items-center" style="height: 72px;padding: 0;">
                      <div class="col">                      
                        <div class="first" style="margin: 0 auto;line-height: 40px;text-align: center ;width:40px;height:40px;background-color: rgb(0, 199, 50);border-radius: 50%; color: honeydew;">1</div>
                      </div>
                      <div class="col">
                        <div class="progress" style="width: 100%;">
                          <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="first" style="margin: 0 auto;line-height: 40px;text-align: center ;width:40px;height:40px;background-color: rgb(0, 199, 50);border-radius: 50%;color: honeydew;">2</div>
                      </div>
                      <div class="col">
                        <div class="progress" style="width: 100%;">
                          <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="first" style="margin: 0 auto; line-height: 40px;text-align: center ;width:40px;height:40px;background-color: rgb(0, 199, 50);border-radius: 50%;color: honeydew;">3</div>
                      </div>
                      <div class="col">
  
                        <div class="progress" style="width: 100%;">
                          <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="first" style="margin: 0 auto; line-height: 40px;text-align: center ;width:40px;height:40px;background-color: rgb(0, 199, 50);border-radius: 50%;color: honeydew;">4</div>
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
                    <hr><h1><p style="text-align: center;">訂單成立</h1></p>
                    <p style="font-size: 24px;">訂單明細</p>

                    <div class="container"style="padding: 0; height: 84px; display:flex;b">                        
                        <img src="./img/H1-1.jpg" alt=""  style="border-radius: 50%; width: 60px;height: 60px;margin-top:12px;">
                        <div class="containerL d-flex align-items-center" >
                            Chicken momo 
                            <br>#41551                           
                        </div>
                        <div class="containerR" style="line-height: 84px; margin-left: auto;padding-right: 32px;">                           
                            $10.50                             
                        </div>
                    </div>
                </div>
                <hr><div class="container" style="padding: 0; margin-top: 20px;">                    
                    <div class="container"style="padding: 0; height: 84px; display:flex;b">                        
                        <img src="./img/H1-1.jpg" alt=""  style="border-radius: 50%; width: 60px;height: 60px;margin-top:12px">
                        <div class="containerL d-flex align-items-center">
                        
                            Chicken momo 
                            <br>#41551                           
                        </div>
                        
                        <div class="containerR" style="line-height: 84px; margin-left: auto;padding-right: 32px;">                           
                            $10.50                            
                        </div>
                    </div>
                </div>
                <hr><div class="container" style="padding: 0; margin-top: 20px;">                   
                    <div class="container"style="padding: 0; height: 84px; display:flex;">    
                        <img src="./img/H1-1.jpg" alt=""  style="border-radius: 50%; width: 60px;height: 60px;margin-top:12px">                    
                        <div class="containerL d-flex align-items-center">
                            Chicken momo 
                            <br>#41551                           
                        </div>
                        <div class="containerR" style="line-height: 84px; margin-left: auto;padding-right: 32px;">                           
                            $10.50                             
                        </div>
                    </div>
                </div>

                <div class="container p-0 pt-4">
                    <h4>寄送資料</h4>
                    <h5><table>
                        <tr>
                            <th style="padding-top: 30px;">姓名</th>
                            <td style="padding-top: 30px;">神臍小捲毛</td>
                        </tr>
                        <tr>
                            <th style="padding-top: 30px;">電話</th>
                            <td style="padding-top: 30px;">099991111</td>
                        </tr>
                        <tr>
                            <th style="padding-top: 30px;">Email</th>
                            <td style="padding-top: 30px;">cartoonNetwork@gmail.com</td>
                        </tr>
                        <tr>
                            <th style="padding-top: 30px;">地址</th>
                            <td style="padding-top: 30px;">阿甘妙世界市海綿寶寶路醃黃瓜先生街5566號5樓-20</td>
                        </tr>
                    </table></h5>
                </div>



                <hr><div class="container" style="display: flex;flex-direction: column;align-items: flex-end;padding:0;padding: 24px 0px 0px;">
                    <div class="container" style="width: 236px;text-align: end;margin: 0;padding:0;display: flex;justify-content: space-between;">
                        <span>數量:</span>
                        <span><h5>3</span>
                    </div>
                    <div class="container" style="width: 236px;text-align: end;margin: 0;padding:0;display: flex;justify-content: space-between;">
                        <span>小計:</span>
                        <span><h5>$24.90</span>
                    </div>
                    <div class="container" style="width: 236px;text-align: end;margin: 0;padding:0;display: flex;justify-content: space-between;">
                        <span>運費:</span>
                        <span><h5>$24.90</span>
                    </div>
                    <div class="container" style="width: 236px;text-align: end;margin: 0;padding:0;display: flex;justify-content: space-between;">
                        <span>總計:</span>
                        <span><h5>$24.90</span>
                    </div>
                </div>
                <hr><div class="container d-flex pt-2" style="padding: 0;">   
                  <a href="./bootstrap_digipack_index.html" class="ml-auto">
                    <button style="width:144px;background-color: rgb(37 , 99, 235);color:white">返回首頁  </button>
                  </a>           
                </div>
            </div>
               
        </div>

    </div>
</body>
</html>