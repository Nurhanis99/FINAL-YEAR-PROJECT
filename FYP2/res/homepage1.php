<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="hhtp://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <script src="https://kit.fontawesome.com/1dd357b823.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../style/style.css">

    <title>Homepage1</title>

</head>
<style>
    @import url("@import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap");
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }
    
    section {
        position: relative;
        width: 100%;
        height: 100vh;
        display: flex;
    }
    
    section .imgBx {
        position: relative;
        width: 50%;
        height: 100%;
    }
    
    section .imgBx:before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(225deg, #e91e63, #03a9f4);
        z-index: 1;
        mix-blend-mode: screen;
    }
    
    section .imgBx img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    
    section .contentBx {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 150%;
        height: 100%;
    }
    
    section .contentBx .formBx {
        width: 100%;
        padding: 40px;
        width: 100%;
        background: rgb(255 255 255 / 0.9);
        margin: 50px;
    }
    
    section .contentBx .formBx h2 {
        color: #607d8b;
        font-weight: 600;
        font-size: 1.5em;
        text-transform: uppercase;
        margin-bottom: 20px;
        border-bottom: 4px solid #ff4584;
        display: inline-block;
        letter-spacing: 1px;
    }
    
    section .contentBx .formBx .inputBx {
        margin-bottom: 20px;
    }
    
    section .contentBx .formBx .inputBx span {
        font-size: 16px;
        margin-bottom: 5px;
        display: inline-block;
        color: #607d8b;
        font-weight: 300;
        font-size: 16px;
        letter-spacing: 1px;
    }
    
    section .contentBx .formBx .inputBx input {
        width: 100%;
        padding: 10px 20px;
        outline: none;
        font-weight: 400;
        border: 1px solid #607d8b;
        font-size: 16px;
        letter-spacing: 1px;
        color: #607d8b;
        background: transparent;
        border-right: 30px;
    }
    
    section .contentBx .formBx .inputBx input[type="submit"] {
        background: #ff4584;
        color: #fff;
        outline: none;
        border: none;
        font-weight: 500;
        cursor: pointer;
    }
    
    section .contentBx .formBx .inputBx input[type="submit"]:hover {
        background: #f53677;
    }
    
    section .contentBx .formBx .remember {
        margin-bottom: 10px;
        color: #607d8b;
        font-weight: 400;
        font-size: 14px;
    }
    
    section .contentBx .formBx .inputBx p {
        color: #607d8b;
    }
    
    section .contentBx .formBx .inputBx p a {
        color: #ff4584;
    }
    
    @media (max-width:768px) {
        section .imgBx {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
        section .contentBx {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100%;
            z-index: 1;
        }
        section .contentBx .formBx {
            width: 100%;
            padding: 40px;
            width: 100%;
            background: rgb(255 255 255 / 0.9);
            margin: 50px;
        }
        section .contentBx .formBx h3 {
            color: #607d8b;
            text-align: center;
            font-weight: 500;
        }
    }
</style>

<body>
    <section>
        <div class="imgBx">
            <img src="../res/picuum.jpg">
        </div>
        <div class="contentBx">
            <div class="formBx">
                <h2>Login</h2>
                <form>
                    <div class="inputBx">
                        <span> Username</span>
                        <input type="text" name="">

                    </div>
                    <div class="inputBx">
                        <span> Password</span>
                        <input type="password" name="">

                    </div>
                    <div class="remember">
                        <label><input type="checkbox" name="">Remember me</label>
                    </div>
                    <div class="inputBx">
                        <input type="submit" value="Sign in" name="">

                    </div>
                    <div class="inputBx">
                        <p> Don't have an account? <a href="#">Sign up</a></p>

                    </div>
                </form>

            </div>
        </div>
    </section>
</body>

</html>