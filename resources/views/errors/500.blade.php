<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>404 - Erro</title>
  <style>
    body {
      background: rgb(34,152,195);
background: linear-gradient(0deg, rgba(34,152,195,1) 0%, rgba(45,179,253,1) 100%); 
    font-family: sans-serif
    }
    .container {
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }
    .container h1 {
      font-size : 60px;
      color : #fff;
    }
    .container h1 span {
      color : #0d485d;
      animation: color infinite linear 1s;
      font-size: 100px;
    }
    @keyframes color {
      from {
        color : #09384b;
      }
      to {
        color: #02709c;
      }
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Error <span>500</span> Acesso negado</h1>
  </div>
</body>
</html>

