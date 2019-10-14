<html lang="en">
<head>
    <title>Calculate your age</title>
    <link rel="stylesheet" href="Theme/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Merienda&display=swap" rel="stylesheet">

</head>

<body>


<section class="nav-bar">

    <a href="https://github.com/Alshabak?tab=repositories"> <img src="Theme/img/github.png" alt="logo-image"></a>


    <button type="submit">about us</button>


</section>


<section class="sections">

    <h1>Calculate your age </h1>


    <div class="form-calculate">

        <form action="php/form.php" method="post">


            <select name="years" id="" class="select-form">
                <?php for($i=1990 ; $i<2020 ; $i++){ ?>
                    <option value="<?php echo $i?>"><?php echo $i ?></option>
                <?php } ?>
            </select>



            <!------months---->
            <select name="months" id="" class="select-form">
                <?php for($i=1 ; $i<13 ; $i++){ ?>
                    <option value="<?php echo $i?>"><?php echo $i ?></option>
                <?php } ?>
            </select>

            <!---_____________________days______________________-->

            <select name="days" id="" class="select-form">
                <?php for($i=1 ; $i<32 ; $i++){ ?>
                    <option value="<?php echo $i?>"><?php echo $i ?></option>
                <?php } ?>
            </select>

            <br>

<button type="submit" >calculate your age</button>





    </form>

    </div>


</section>



<footer>
    <hr>
    <p><a href="https://web.facebook.com/Islam Al-shabak"> Designed By : Islam al-shabak </a></p>
</footer>




</body>















</html>
