<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="form-container">

<form action="https://api.web3forms.com/submit" method="POST">

<input type="hidden" name="access_key" value="83a20c1d-30f8-47b5-a643-219dd21c9719">
<h3>Kontakt</h3>
<input type="text" name="name" required placeholder="enter name" class="box">
<input type="email" name="email" required placeholder="enter email" class="box">
<input type="text" name="message" required placeholder="message" class="box">
<div class="h-captcha" data-captcha="true"></div>
<input type="submit" name="submit" class="btn" value="Send message"> <a href="main.html" id="amogus" class="btn">back →</a>

</form>
</div>
<script src="https://web3forms.com/client/script.js" async defer></script>
</body>
</html>