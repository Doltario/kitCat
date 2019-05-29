<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>KitCat</title>
  <script src="/js/app.js" defer></script>
</head>
<body>
  <header>
    <div id="header">
    </div>
    <div id="header-title">
      <h1> <a href="/#/"> kitCat</a> </h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec dolor libero, congue quis lacus vel, sodales sollicitudin ipsum.<br/>
      <a href="/#/catCreation"> + Ajouter un chat</a></p>

    </div>

  </header>

  <div id="app">
    <router-view>
    </router-view>
  </div>
</body>
</html>
