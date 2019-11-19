                    <li class="">
<?php
if($lang_link == "/?lang=en"){
?>
                    
                        <div class="lang">
                            <img src="./img/france_flag.png" alt="french version">
                        </div>   
                        <a class="d-inline lang" id="lang" href="<?php echo $lang_link?>">
                            <img src="./img/en_flag.png" alt="english version">
                        </a>
                   
<?php
}else{
?>

                        <a class="lang" id="lang" href="<?php echo $lang_link?>">
                            <img src="./img/france_flag.png" alt="french version">
                        </a>
                        <div class="lang">
                            <img src="./img/en_flag.png" alt="english version">
                        </div>   
                  
<?php
}
?>
                    </li>