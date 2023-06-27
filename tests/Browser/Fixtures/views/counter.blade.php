<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <script src="//unpkg.com/alpinejs" defer></script>
</head>
<body>
<div @data({ public $counter = 0; })>
  <button @click="$counter++" dusk="increment">Increment</button>
  <span x-text="$counter" dusk="count"></span>
</div>
@pinebladeScripts
</body>
</html>
