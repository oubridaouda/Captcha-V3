<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://www.google.com/recaptcha/api.js?render=SITE_KEY"></script>
    <title>Document</title>
</head>
<body>
<h1>My captcha</h1>
<form>
    <input class="input" type="hidden" value="" name="INPUT_TOKEN"/>
    <input class="input" type="text" name="name"/>
    <input class="input" type="email" name="emaim"/>
    <input class="submit g-recaptcha" type="email" value="Submit"/>
</form>

</body>
<script>
    grecaptcha.ready(function () {
        grecaptcha.execute('SITE_KEY', {action: 'submit'}).then(function (token) {
// Add your logic to submit to your backend server here.
            document.getElementById('INPUT_TOKEN').value = token;
        });
    });
</script>
</html>