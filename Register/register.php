<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edu4All</title>
    <link rel="icon" href="../images/logo.png">
    <link rel="stylesheet" href="register.css">
    <link rel="stylesheet" href="navigationBar.css">
</head>

<body>

<section class="NavigationBar">
        
        <nav>
            <a href="/Website/main/NavigationLinks/HomePage.php"><img src="/Website/main/images/logo.png"> </a>
            <div class="nav-bar">
                <ul>
                    <li><a href="/Website/main/NavigationLinks/Courses.php">Courses</a></li>
                    <li><a href="/Website/main/NavigationLinks/NewsPage1.php">News</a></li>
                    <li><a href="/Website/main/NavigationLinks/Contact.php">Contact</a></li>
                    <li><a href="/Website/main/NavigationLinks/Login.php">Login/Register</a></li>
                </ul>
            </div>
        </nav>
    </section>
    <section class="register">
        <div class="form-box">
            <div class="register-title">
                <h1 class="inside-register">Sign up to continue</h1>
            </div>
            <form class="register-bar" method="POST">
                <div class="register-cat">
                    <input type="text" class="input-field" placeholder="Username" name='Username' required>
                    <input type="email" class="input-field" placeholder="Email" name='email' required>
                    <input type="password" class="input-field" placeholder="Password" name="password" required>
                    <input type="password" class="input-field" placeholder="Repeat Password" name="password-repeat"
                        required>
                </div>



                <div class="role-cat">
                    <input type="checkbox" class="check-box"><span>Sign up as a teacher</span>
                </div>

                <div class="question-cat">
                    <div class="tooltip">
                        <label for="question"><span>What is the name of your birthplace?</span></label>
                        <span class="tooltiptext">Authentication factor</span>
                    </div>
                    <input type="text" class="input-field" id="question" placeholder="Your answer" required>
                </div>


                <button type="submit" class="submit-button">Sign Up</button>

            </form>



        </div>

        <div class="footer">
            <p class="footer-par">©PSPI. 2021.</p>
        </div>


    </section>


</body>



<script>

    let item = document.querySelector('.register');

    var back_img = new Array('url(../images/photo1.jpg)', 'url(../images/photo2.jpg)', 'url(../images/photo5.jpg)');

    var current = 0;

    function changeImg() {
        current++;
        current = current % back_img.length;
        item.style.backgroundImage = back_img[current];
    }

    setInterval(changeImg, 10000);

    item.style.backgroundImage = back_img[0];


</script>

</html>