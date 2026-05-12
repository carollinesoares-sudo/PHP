<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <style> 

body {
    font-family: 'Inter', sans-serif;
    background-color: #f4f1f1; /* Um cinza mais suave e menos "sujo" que o original */
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center; /* Centraliza verticalmente sem precisar de padding fixo */
    min-height: 100vh;
    margin: 0;
    padding: 20px;
}

form, table {
    background-color: #d178c5;
    padding: 40px;
    border-radius: 16px;
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1); /* Sombra mais realista */
    width: 100%;
    max-width: 500px; /* Evita que o formulário fique gigante em telas largas */
    color: white;
    margin-bottom: 30px;
}

label {
    display: block;
    margin-bottom: 8px;
    font-weight: 600;
    font-size: 14px;
    letter-spacing: 0.5px;
}

input {
    width: 100%;
    padding: 12px;
    margin-bottom: 20px;
    border: 2px solid transparent; /* Borda invisível para não "pular" no focus */
    border-radius: 8px;
    box-sizing: border-box;
    font-size: 16px;
    background-color: rgba(255, 255, 255, 0.9);
    transition: all 0.3s ease;
}

input:focus {
    outline: none;
    border-color: #424a53;
    background-color: #ffffff;
}

button {
    width: 100%;
    padding: 14px;
    background-color: #424a53; /* Inverti as cores para dar mais destaque ao botão */
    color: white;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    font-size: 16px;
    font-weight: bold;
    text-transform: uppercase;
    letter-spacing: 1px;
    transition: transform 0.2s, background-color 0.3s;
}

button:hover {
    background-color: #2d3436;
    transform: translateY(-2px); /* Efeito de elevação */
}

button:active {
    transform: translateY(0);
}

.resultado {
    margin-top: 20px;
    padding: 20px;
    background-color: #ffffff;
    color: #2d3436;
    border-left: 5px solid #d882cd; /* Detalhe lateral elegante */
    border-radius: 8px;
    width: 100%;
    max-width: 460px;
    box-shadow: 0 4px 6px rgba(0,0,0,0.05);
}

table {
    width: 100%;
    max-width: 600px;
    border-collapse: separate;
    border-spacing: 0;
    overflow: hidden; /* Para o border-radius funcionar na tabela */
}

th, td {
    padding: 12px;
    text-align: left;
    border-bottom: 1px solid rgba(148, 37, 37, 0.3);
}

th {
    background-color: rgba(51, 27, 27, 0.1);
}
    </style>
</head>
<body>
    <h1>CADASTRO EMPRESA</h1>
    <form method="POST">
    <label>Nome: </label>
    <input type="text" name="usuario">
     <label>E-mail: </label>
    <input type="email" name="email">
    <label>Telefone</label>
    <input type="tel" name="telefone">

    <button type="submit">Enviar Dados</button>
   </form>

   <?php
   if ($_SERVER["REQUEST_METHOD"] == "POST") {

   $nome = $_POST["usuario"];
   $email = $_POST ["email"];
   $tel = $_POST ["telefone"];
    echo"
    <table>
    <tr> 
    
    <th> usuario </th>
    <th> email </th>
    <th> telefone </th>
   </tr>
   <tr>
    <td> $nome </td>
    <td> $email</td>
    <td> $tel </td>
   </tr>
   </table>
   ";
   }
   ?>

</body>
</html>