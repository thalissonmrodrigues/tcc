<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
  <title>NSA On-line</title>
</head>
<body>
  <div class="container d-flex flex-column justify-content-center align-items-center pb-5 h-100">
    <p class="mb-3 display-5">NSA On-line</p>

    <div class="box-login mt-5 mb-5">
      <span class="icon-user">
        <i class="bi bi-person"></i>
      </span>

      <form  action="#" method="POST">
        <label>
          <div class="user-input">
            <i class="bi bi-person-fill"></i>
          </div>
          <input type="text" placeholder="RGM" name="rgm" required>
        </label>

        <label>
          <div class="block-input">
            <i class="bi bi-lock-fill"></i>
          </div>
          <input type="password" placeholder="Password" name="password" required>
        </label>

        <input type="submit" value="ENTRAR">
      </form>
    </div>

    <div class="nsa-info">
      <div class="info d-none">
        Para mais informações entre em contato com <span>nsaonline@tcc.com</span>
      </div>
      <i class="bi bi-question"></i>
    </div>

  </div>

  <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
</body>
</html>
