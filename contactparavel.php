<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
    <link rel="stylesheet" href="paravel.css" </head>

    <body>
        <?php
        include("header.html");
        ?>

            <hr class="cleareur">
            <img class="flat" src="https://web.archive.org/web/20160321000939im_/http://paravelinc.com/img/paravel-flag.png" STYLE="float:left;padding:50px;padding-bottom:530px;padding-right:80px;padding-left:120px;" class="logo" />
            <form class="formulaire" STYLE="float:left;" action="mailto:votrenom@provider.com" method="post" name="contact">
                First name:<br>
                <input name="votre nom">
                <p>
                    <br> Last name:<br>
                    <input name="votre nom">
                    <p>
                        Email:<br>
                        <input name="votre nom">
                        <p>
                            Tell us about your project / engagement :<br>
                            <textarea name="message" rows="5" cols="70"></textarea>
                            <p>

                                What is the timeline for your project / engagement? :<br>
                                <textarea name="message" rows="5" cols="70"></textarea>
                                <p>
                                    Tell us about your budget :
                                    <SELECT name="nom" size="1">
<OPTION>Please select
<OPTION>$25,000 or less
<OPTION>$25,000 - $50,000
<OPTION>$$50,000 - $100,000
<OPTION>$100,000 +
</SELECT>
                                    <br>
                                    <input type="submit" value="Send">
            </form>
    <?php
        include("footer.html");
    ?>
    </body>

</html>