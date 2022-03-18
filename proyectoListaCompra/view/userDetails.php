<?php
include_once("model/user.php");
$user=new user(1,"Nom usuari", "correu@correu.com", "https://pm1.narvii.com/6821/a516b902b0e3b5826e5de60905153c0818cdb776v2_hq.jpg"/*"https://gravatar.com/avatar/b3b00f7ff897d0761582eac881253706?s=200&d=robohash&r=x"*/);
?>

<article class="panel is-primary">
    <p class="panel-heading">
        Informació de l'usuari
    </p>
    <div class="box">
        <div>
            <h2><?=$user->getName()?></h2>
            <h3><?=$user->getEmail()?></h3>
            <div style="text-align: center;"><img src=<?=$user->getAvatarImage()?> width="200" height="200"></div>
        </div>
    </div>
</article>