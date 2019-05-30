<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>KitCat</title>
  <script src="/js/app.js" defer></script>
</head>
<body>

  <div id="app">
    <router-view></router-view>
  </div>
  <footer id="footer">
    <div id="footer-title">
      <div class="row justify-content-md-center">
        <div class="col-xs-12 col-md-6">
          <h1> <a href="/#/">KitCat</a> </h1>
        </div>
      </div>
      <div class="row justify-content-md-center">
        <div class="col-xs-12 col-md-6">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec dolor libero, congue quis lacus vel, sodales sollicitudin ipsum.<br/>
        </div>
      </div>
      <div class="row justify-content-md-center">
        <div class="col-xs-12 col-md-6">
          <a href="/#/cats/creation"> + Ajouter un chat</a></p>
        </div>
      </div>
    </div>
  </footer>
</body>
</html>
