<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title; ?></title>
    <link rel="shortcut icon" type="image/icon" href="<?= base_url('/src/img/tasbiha.png'); ?>"/>
    <link rel="stylesheet" href="<?= base_url('src/css/styles.css'); ?>">
    <?php $this->load->view("template/Css"); ?>
    <style>
        body {
            background-image: url('<?= base_url('src/img/bg.png'); ?>');
            background-size: cover;
            background-position: center;
        }

        .card, .card-header, .card-body {
            background: transparent;
            backdrop-filter: blur(8px);
        }

        .card-header img {
            max-width: 50%;
            margin-bottom: 10px;
            margin-top: 10px;
        }

        .input-group .form-control, .input-group .input-group-text {
            background: transparent;
            border: 1px solid;
        }

        .btn {
            background-image: linear-gradient(180deg, black 50%, purple 50%);
            background-size: 200% 200%;
            background-position: bottom;
            transition: background-position 0.3s;
        }
        .btn:hover {
            background-position: top;
            color: white;
        }
    </style>
</head>

<body class="hold-transition login-page">
  <div class="login-box" id="loginForm">
    <div class="card card-outline">
      <div class="card-header text-center">
        <img src="<?= base_url('src/img/tasbiha.png'); ?>" alt="Login Logo" width="150px">
      </div>
      <div class="card-body">
        <div class="text-danger text-center">
        <form action="<?= base_url('login/cek'); ?>" method="post">
          <div class="input-group mb-3">
            <input type="text" class="form-control" name="username" autocomplete="off" placeholder="Username">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" name="password" autocomplete="off" placeholder="Password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-4">
              <button type="submit" class="btn btn-primary btn-block">Masuk</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>