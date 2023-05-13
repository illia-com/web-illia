<?php
    $firstName = "Ілля";
    $lastName = "Тасмінський";
    $email = "illia@gmail.com";
    $password = "password123";
    $country = "Україна";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма bootstrap</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container pt-5">
        <h2>Форма Bootstrap</h2>
        <form>
            <div class="form-group">
                <label for="firstName">Ім'я:</label>
                <input type="text" class="form-control" id="firstName" name="firstName" value="<?php echo $firstName; ?>" placeholder="Введіть ім'я">
            </div>
            <div class="form-group">
                <label for="lastName">Прізвище:</label>
                <input type="text" class="form-control" id="lastName" name="lastName" value="<?php echo $lastName; ?>" placeholder="Введіть прізвище">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo $email; ?>" placeholder="Введіть email">
            </div>
            <div class="form-group">
                <label for="password">Пароль:</label>
                <input type="password" class="form-control" id="password" name="password" value="<?php echo $password; ?>" placeholder="Введіть пароль">
            </div>
            <div class="form-group">
                <label for="confirmPassword">Повторіть пароль:</label>
                <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" value="<?php echo $password; ?>" placeholder="Підтвердіть пароль">
            </div>
            <div class="form-group">
                <label for="country">Країна:</label>
                <input type="text" class="form-control" id="country" name="country" value="<?php echo $country; ?>" placeholder="Введіть країну">
            </div>
            
            <button type="submit" class="btn btn-primary">Зареєструватись</button>
        </form>
    </div>
</body>
</html>