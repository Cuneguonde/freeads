<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APPINDEX</title>
</head>
<body>
    <h1>APPINDEX</h1>
    <h2>test</h2>
    <form action="/user/create" method="get">
    <div>
        <label for="mail">e-mail&nbsp;:</label>
        <input type="email" id="mail" name="user_mail">
    </div>

    <fieldset>
    <legend>Choose your monster's features:</legend>

    <div>
      <input type="checkbox" id="scales" name="scales" checked>
      <label for="scales">Scales</label>
    </div>

    <div>
      <input type="checkbox" id="horns" name="horns">
      <label for="horns">Horns</label>
    </div>
</fieldset>
        <label for="password"></label>
        <input type="password" id="password" name="password">
    </div>
    <input type="submit" value="Submit">
</form>

</body>
</html>