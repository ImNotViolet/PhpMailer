<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    body{
      height: 100vh;
      display: flex;
      align-items:center;
      justify-content:center;
      background-color:bisque

    }
    .formCon{
      background-color:white;
      height:500px;
      width:500px;
      display:flex;
      flex-direction:column;
    }
    .formCon form{
      height: 100%;
      padding: 40px;
      display:flex;
      flex-direction:column;
      align-items:center;
      justify-content:space-around;
    }
    label{
      text-align: center;
      font-size: 2rem;
      letter-spacing: 2px;
      margin-bottom: 20px;
    }
    input{
      width:100%;
      padding:10px;
    }
    button{
      width:100%;
      height:30px;
      border-radius: 100px;
      background-color: aliceblue;
      cursor: pointer;
    }
  </style>

</head>
<body>
  <div class="formCon">
  <form action="requestEmail.php" method="post">
    <label for="emal">receive email using phpmailer</label>
    <input type="email" name="email" placeholder="Email"/>
    <button type="submit" name="submit">Send Email</button>
  </form>
  </div>
</body>
</html>