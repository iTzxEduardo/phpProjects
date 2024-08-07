<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @include('components.nav-bar')
    @include('components.header')
    <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4f4f4;
    }
    .container {
      width: 80%;
      margin: auto;
      overflow: hidden;
      padding: 20px;
      background: #fff;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      margin-top: 30px;
    }
    h1 {
      text-align: center;
      color: #333;
    }
    form {
      display: flex;
      flex-direction: column;
    }
    label {
      margin-bottom: 5px;
      color: #333;
    }
    input, textarea {
      margin-bottom: 15px;
      padding: 10px;
      font-size: 16px;
      border: 1px solid #ccc;
      border-radius: 5px;
      width: 100%;
      box-sizing: border-box;
    }
    input[type="submit"] {
      background-color: #5cb85c;
      color: white;
      border: none;
      cursor: pointer;
      padding: 15px;
    }
    input[type="submit"]:hover {
      background-color: #4cae4c;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Contato</h1>
    <form action="/submit_form" method="POST">
      <label for="name">Name</label>
      <input type="text" id="name" name="name" required>
      
      <label for="email">Email</label>
      <input type="email" id="email" name="email" required>
      
      <label for="subject">Assunto</label>
      <input type="text" id="assunto" name="assunto" required>
      
      <label for="message">Mensagem</label>
      <textarea id="mensagem" name="mensagem" rows="5" required></textarea>
      
      <input type="submit" value="Enviar">
    </form>
  </div>

    @include('components.footer')
</body>
</html>