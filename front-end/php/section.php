

<section>
    <a href="./admin.php">
        <button class="statusactive">&nbsp;</button>
        <button class="LoginButtons"> Placeholder |
            <?php echo date("Y/m/d") ?>
        </button><button class="hoogurgent">Hoog urgent</button>
    </a>
</section>
<section>
    <a href="./admin.php">
        <button class="statushandeld">&nbsp;</button>
        <button class="LoginButtons"> Placeholder |
            <?php echo date("Y/m/d") ?>
        </button><button class="urgent">Hoog urgent</button>
    </a>
</section>

<!-- 

section
a href admin.php?uuid=$melding_spoed_uuid
connects to database
get table information tb_melding_spoed tb_melding_info where melding_spoed_uuid = melding_info_uuid
if sql error 
    stop table join
    $type_ongeval = 0

else
    $type_ongeval = type_ongeval database


    $username = $_SESSION['login']
    if tb_melding_spoed row status = 1
        echo <button class="statusactive">&nbsp;</button>
    else
        <button class="statushandeld">&nbsp;</button>
    <button class="statusactive">$username | $tijd_melding </button>
    if $type_ongeval = 0
        </button><button class="urgent">Hoog urgent</button>
    elif $type_ongeval = 1
        </button><button class="hoogurgent">Hoog urgent</button>
    else 
         </button><button class="hoogurgent"> Geen info</button>
        









 -->