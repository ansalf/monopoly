<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/login.css">
    <title>MOPUTA</title>
</head>

<body>
    <div id="wrapper">
        <h1>THE LOGO</h1>
        <h2>A cool headline.</h2>
        <form>
            <input type="radio" id="login" name="action" value="login" checked>
            <input type="radio" id="register" name="action" value="register">
            <input type="radio" id="reset" name="action" value="reset">
            <div id="inputs">
                <div>
                    <input type="text" placeholder="email" autofocus>
                    <div>
                        <input type="password" placeholder="password">
                        <div>
                            <input type="password" placeholder="repeat password">
                            <input type="submit" value="reset password">
                            <div>
                                <input type="submit" value="register">
                                <input type="submit" value="login">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="labels">
                <label for="login">Already registered? <span>Login</span></label>
                <label for="reset">Password lost? <span>Reset</span></label>
                <label for="login"><span>Back</span></label>
                <label for="register">Not registered? <span>Create an account</span></label>
            </div>
        </form>
    </div>

    <div id="hint">click on the links</div>
</body>

</html>
