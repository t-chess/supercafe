<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once('../req/metadata.php') ?>
    <title>Sign In | SuperCafé</title>
</head>

<body>
    <?php $activePage = "signin";
    include_once("../req/header.php") ?>
    <main id='signin'>
        <form @submit.prevent='sendForm'>
            <label>
                <p>Email</p><input type="email" v-model='user.email'>
            </label>
            <label>
                <p>Password</p><input type="password" v-model='user.password'>
            </label>
            <button type="submit">Signup</button>
        </form>
    </main>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v13.0&appId=YOUR_APP_ID&autoLogAppEvents=1" nonce="YOUR_NONCE_VALUE"></script>
    <script src='./script.js'></script>
</body>

</html>