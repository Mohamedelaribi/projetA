
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 
    <link href="inscription.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>
<div class="inscriptionDiv">
        <div class="upDiv">
                    <h1>Get Started</h1>
        <span>Already have an Account ?<a href="login.php"> Log in</a></span><br>
        </div>
        
        <label for="lastName"class="label">Nom:</label>
            <input type="text" id="lastName" class="inputs" name="firstName"><br>

            <label for="firstName" class="label">Prénom:</label>
            <input type="text" id="firstName" class="inputs" name="lastName"><br>

            <label for="Email" class="label">Email:</label>
            <input type="text" id="Email" class="inputs" name="Email"><br>

            <label for="telephone" class="label">Telephone:</label>
            <input type="text" id="telephone" class="inputs"name="Telephone"><br>

            <label for="password" class="label">Mot De Passe:</label>
            <input type="password" id="password" class="inputs" name="Password"><br>

            <label for="type1">Utilisateur</label>
            <input type="radio" id="type" value="1" name="type"><br>
            <label for="type2">Administrateur</label>
            <input type="radio" id="type" value="0" name="type">

            <button type="submit" name="submit" id="submit">Inscription</button>
            <p class="message" id="message"></p>
        </form>

        </div>

</body>
<script src="inscription.js"></script>
<script src="ajax.js"></script>

</body>
</html>