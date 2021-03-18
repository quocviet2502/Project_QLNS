<!DOCTYPE html>
    <html>
    <head>
        <title></title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>
    <body>
   <!--   ajax chuyen doi data tu frontend -> backend va nguoc lai, k load lai trang
      id product => backend(php) -> session tuy e.
      backend co ket qua roi -> tra ve frontend >

      ajax chay ngam ben duoi  -->


     <!-- ajax: chuyen doi data ngầm giua backend va frontend.

     click mua hang o frontend (js)
     truyen id qua backend (php)  -->

      <!-- dang form dc viet bang code -->
      <a id="btn_register">click</a>

     <script type="text/javascript">
        $("#btn_register").click(function(){
          var abc = 1;
          

          $.ajax({
            method: "POST",// phương thức dữ liệu được truyền đi
            url: "demo2.php",// gọi đến file server show_data.php để xử lý
            // data: $("#fr_form").serialize(),//lấy toàn thông tin các fields trong form bằng hàm serialize của jqueryinput
            data: {
                demo: abc
            },
            success : function(response){//kết quả trả về từ server nếu gửi thành công
              console.log(response);
            }
          });
        });
        
    </script>

    </body>
    </html>
    <!-- frontend -> backend
    frontend: man hinh html css, js
    backend: php

    - k load trang khi click mua
    - lay id cua product bang js
      + AJAX (chay ngâm bên dưới)
    - truyen id nay qua php


  [
    1: [
      id:,
      qty: 1

    ],
    2: [
      id:,
      qty: 1

    ],
    3: [
      id:,
      qty: 1

    ]
  ]
 => SS 
=> cart.php

select product lay het all product co id nam trong mang kia:
=> array all prodyct







    [
      pro1: [
        img, title...
      ],
      pro1: [
        img, title...
      ]
      pro1: [
        img, title...
      ]
    ]


 -->