<!DOCTYPE html>
<head>
</head>
<body>
  <p style="font-size:40px">Random Stats :</p></br>
  <p style="font-size:30px">O!Std : 
  <?php 
  $url = 'http://old.ppy.sh/api/get_user?u=N1sO&m=0&k=b9cc04896a054a42d63ac8648de26b8ea93ddf1b';
  echo .$url[0]['pp_raw'] ;
  var_dump(parse_url($url));?>
</body>
