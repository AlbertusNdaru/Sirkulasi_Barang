<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Argon Dashboard - Free Dashboard for Bootstrap 4</title>
  <!-- Favicon -->
  <link href="<?php echo base_url('') ?>assets/img/brand/favicon.png" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="<?php echo base_url('') ?>assets/vendor/nucleo/css/nucleo.css" rel="stylesheet">
  <link href="<?php echo base_url('') ?>assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
  <!-- Argon CSS -->
  <link type="text/css" href="<?php echo base_url('') ?>assets/css/argon.css?v=1.0.0" rel="stylesheet">


</head>

<body class="bg-default" style="overflow:hidden">
  <div class="main-content">
    <!-- Navbar -->
    <nav class="navbar navbar-top navbar-horizontal navbar-expand-md navbar-dark">
      <div class="container" style=" margin-top: 17px; margin: auto;  width: auto;">
        <a class="navbar-brand" href="../index.html">
          <img style="margin-top: 15px;width: 170px; height: auto !important;" src="<?php echo base_url() ?>assets/img/logo.png" />
        </a>
        <!-- Navbar items -->
      </div>
    </nav>
    <!-- Header -->
    <div class="header py-7 py-lg-8" style="background-color: honeydew">
      <div class="container">
        <div class="header-body text-center mb-7">
          <div class="row justify-content-center">
          </div>
        </div>
      </div>
      <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </div>
    <!-- Page content -->
    <div class="container" style="margin-top: -12rem !important;">
      <div class="row justify-content-center">
        <div class="col-lg-5 col-md-7">
          <div class="card bg-secondary shadow border-0">
            <div class="card-body px-lg-5 py-lg-5">
              <div class="text-center text-muted mb-4">
                <small>Please Register</small>
              </div>
              <form role="form" action="<?= base_url('ControllerAdmin/Reg_admin/add_admin') ?>" id="appointment-form" method="post">
                <div class="form-group">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-circle-08"></i></span>
                    </div>
                    <input class="form-control" placeholder="Name" type="name" name="Name" id="Name" require onclick='validasi("Name","Name")' required>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <select style="width:100%" name="Gender" class="form-control selectpicker">
                        <option>Select Gender</option>
                        <option value='L'>Laki-Laki</option>
                        <option value='P'>Perempuan</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-circle-08"></i></span>
                    </div>
                    <input class="form-control" placeholder="Alamat" type="Alamat" name="Alamat" id="Alamat" require onclick='validasi("Alamat","Alamat")' required>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input class="form-control" placeholder="Email" type="Email" name="email" id="email" require onclick='validasi("email","email")' required>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-circle-08"></i></span>
                    </div>
                    <input class="form-control" placeholder="Username" type="Username" name="Username" id="Username" require onclick='validasi("Username","username")' required>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input class="form-control" placeholder="Password" type="password" name="Password" id="Password" require onclick='validasi("Password","password")' required>
                  </div>
                </div>
                <!-- <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <select style="width:100%" name="level" class="form-control selectpicker">
                        <option>Select Hak Akses</option>
                        <?php foreach ($usergroup as $k) {
                          echo "<option value='$k->id_level'>$k->Description</option>";
                        } ?>
                      </select>
                    </div>
                  </div>
                </div> -->
                <div class="text-center">
                  <button type="submit" class="btn btn-primary my-4">Register</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer -->
  <footer class="py-5">
    <div class="container" style=" margin: auto;  width: auto;">

      <div class="col-xl-12">
        <div class="copyright text-center text-xl-center text-muted">
          &copy; 2019 Sirkulasi Barang PT. Gapura Angkasa
        </div>
      </div>

    </div>
  </footer>
  <!-- Argon Scripts -->

  <!-- Core -->
  <script src="<?php echo base_url('') ?>assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="<?php echo base_url('') ?>assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Argon JS -->
  <script src="<?php echo base_url('') ?>assets/js/argon.js?v=1.0.0"></script>
  <script src="<?= base_url() ?>assets/js/bootstrap-notify.js"></script>
</body>

</html>
<script>
  var form = document.querySelector("#appointment-form");


  function validasi(textbox, text) {
    var input = document.getElementById(textbox);

    var cek = form.checkValidity()
    if (cek == false) {
      input.oninvalid = function(e) {
        if (e.target.validity.valueMissing) {
          e.target.setCustomValidity(text.toUpperCase() + " HARUS DI ISI");
          return;
        }
      }
      input.oninput = function(e) {
        e.target.setCustomValidity("")
      }
      form.reportValidity();
      console.log(cek);
    }

  }

  <?php if (!empty($this->session->flashdata('Error'))) { ?>
    setnotifstatus('<?php echo $this->session->flashdata('Error') ?>');
  <?php } ?>

  function setnotifstatus(err) {
    if (err == 'Input Succes' || err == 'Edit Succes' || err == 'Delete Succes') {
      ttp = 'success';
    } else {
      ttp = 'danger';
    }

    $.notify({
      // options
      message: err,
    }, {
      // settings
      element: 'body',
      position: null,
      type: ttp,
      allow_dismiss: true,
      newest_on_top: false,
      showProgressbar: false,
      placement: {
        from: "top",
        align: "center"
      },
      offset: 20,
      spacing: 10,
      z_index: 1031,
      delay: 2000,
      timer: 500,
      url_target: '_blank',
      mouse_over: null,
      animate: {
        enter: 'animated bounceIn',
        exit: 'animated bounceOut'
      },
      onShow: null,
      onShown: null,
      onClose: null,
      onClosed: null,
      icon_type: 'class',
      template: '<div data-notify="container" class="col-xs-11 col-sm-3 alert alert-{0}" role="alert">' +
        '<button type="button" aria-hidden="true" class="close" data-notify="dismiss">×</button>' +
        '<span data-notify="icon"></span> ' +
        '<span data-notify="title">{1}</span> ' +
        '<span data-notify="message">{2}</span>' +
        '<div class="progress" data-notify="progressbar">' +
        '<div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
        '</div>' +
        '<a href="{3}" target="{4}" data-notify="url"></a>' +
        '</div>'
    });

  }
</script>