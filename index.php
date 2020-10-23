<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <form action="form.php" method="post" class="form-control mt-5">
        <div class="form-group">
            <label for="email">Your Email</label>
            <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Enter Email">
        </div>
        <div class="form-group">
            <label for="Text">Password</label>
            <textarea name="comment" class="form-control" rows="8" cols="39" placeholder="Text"></textarea>
        </div>
        <div class="form-group form-check">
            <input  type="submit" name="submit" class="btn btn-primary" value="Check Please" id="Save">
        </div>
        <div class="g-recaptcha" data-sitekey="6LdsrtgZAAAAAJn9era88xaoM9DAJ8-1XPJvpfkC"></div>
        <script src="https://www.google.com/recaptcha/api.js"></script>
    </form>
</div>
</body>
</html>