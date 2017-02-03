
<?php
    get_header();
    $currentlang = get_bloginfo('language');
    $directory = get_bloginfo('template_directory');
?>
<link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
<input type="hidden" id="curlanguage" value="<?php echo $currentlang; ?>">
<?php
    $intro = '';
    $subTitleCompass='';
    $valueStatement1=$valueStatement2=$valueStatement3=$valueStatement4=$valueStatement5='';
    $ltStatement1=$ltStatement2=$ltStatement3=$ltStatement4=$ltStatement5='';
    $growthStatement1=$growthStatement2=$growthStatement3=$growthStatement4=$growthStatement5='';
    $stStatement1=$stStatement2=$stStatement3=$stStatement4=$stStatement5='';
    $buttonText ='';
    $selectSomething='';

    $option = array();
    
    if($currentlang == 'en-US')
    {
        $subTitleCompass = 'Investor’s  compass';
        $intro = 'What kind of investor are you?';
        $valueStatement1='If a company is cheap enough, no matter what popular opinion is, I would still be interested in buying it.';
        $valueStatement2='I prefer to invest in a highly profitable business than a high profile company.';
        $valueStatement3='When evaluating a company, I look at how much the assets of a company are worth; if the assets are worth more than the company itself, there might be an opportunity.';
        $valueStatement4='I’m interested in companies that lost a big percentage of their market capitalization over in the last month because they could be undervalued by the market.';
        $valueStatement5='I want to invest in companies that are not only profitable, but that have been consistently for years.';
        $ltStatement1='I don’t care about what happens to my investment in the next quarter; I care about what will happen between now and my retirement.';
        $ltStatement2='When everyone panics, I sit on my investments because I know that the stock market follows the economic cycle; market rallies always follow recessions.';
        $ltStatement3='When I look into the management of a company, I search for a CEO who is not managing for the next quarter, but for the next decade.';
        $ltStatement4='I do not buy stocks to sell them for a higher price; I buy them to become owner of a company and to get a percentage of their future profits.';
        $ltStatement5='I buy companies that will be relevant in 50 years.';
        $growthStatement1='I would rather own a money-losing company building something that will disrupt an entire industry than a money-making company building boring stuff.';
        $growthStatement2='I prefer to invest in smaller companies because they have more potential than large, mature companies.';
        $growthStatement3='I am willing to pay a premium for a company’s present business, as long as I believe its growth will compensate me at some point in the future.';
        $growthStatement4='When I invest, I’m looking for companies that have the potential to grow exponentially.';
        $growthStatement5='I prefer to invest in high-growth sectors such as technology and life sciences.';
        $stStatement1='When the price of one of my stocks begin to plummet, I sell it sooner rather than later to limit my losses.';
        $stStatement2='I’m interested in investing in securities whose prices will be impacted by predictable events such as a stock-split or a spin-off.';
        $stStatement3='Before buying a security, it’s important to have a good understanding of the market sentiment toward it.';
        $stStatement4='When I make an investment, I always know approximately when I will sell it.';
        $stStatement5='I often buy and sell the same securities in the span of a few months.';
        $option = array('Strongly Disagree','Disagree','Agree','Strongly Agree');
        $buttonText ='Find out';
        $selectSomething = 'Select an answer';
    }
    else{
        $subTitleCompass = 'Boussole de l’investisseur';
        $intro = 'Quel genre d’investisseur êtes-vous?';
        $valueStatement1='Si une entreprise n’est pas chère, peu importe ce que les gens disent à son sujet, je serai disposé à l&#39;acheter.';
        $valueStatement2='Je préfère investir dans une entreprise très rentable que dans une société bien en vue.';
        $valueStatement3='Lorsque j’évalue une entreprise, je regarde combien les actifs d&#39;une entreprise valent; si ces actifs valent plus que la société elle-même, il pourrait y avoir une occasion d’affaires.';
        $valueStatement4='Je suis intéressé par les entreprises qui ont perdu un grand pourcentage de leur capitalisation boursière au cours du dernier mois, car elles pourraient être sous-évaluées par le marché.';
        $valueStatement5='Je veux investir dans des entreprises qui ne sont pas seulement rentables, mais qui l’ont été de manière constante au courant des dernières années.';
        
        $ltStatement1='Je ne me soucie pas de ce qui se passe avec mes investissements durant le prochain trimestre; je me soucie de ce qui se passera entre maintenant et ma retraite.';
        $ltStatement2='Quand tout le monde panique, je suis assis sur mes investissements, parce que je sais que les marchés boursiers suivent le cycle économique; les marchés haussiers suivent toujours les récessions.';
        $ltStatement3='Lorsque j’examine la direction d’une entreprise, je suis à la recherche d&#39;un PDG qui ne gère pas pour le prochain trimestre, mais pour la prochaine décennie.';
        $ltStatement4='Je n&#39;achète pas les actions pour les revendre à un prix plus élevé; je les achète pour devenir propriétaire d&#39;une entreprise et obtenir un pourcentage de leurs bénéfices.';
        $ltStatement5='J&#39;achète des entreprises qui seront encore pertinentes dans 50 ans.';
        
        $growthStatement1='Je préfère posséder une entreprise qui perd de l&#39;argent en construisant quelque chose qui va bouleverser toute une industrie qu&#39;une entreprise qui fait de l&#39;argent en construisant des trucs ennuyeux.';
        $growthStatement2='Je préfère investir dans les petites entreprises, car elles ont plus de potentiel qu’une grande entreprise plus mature.';
        $growthStatement3='Je suis prêt à payer très cher pour une entreprise aujourd’hui, pourvu que je considère que sa croissance future justifiera éventuellement le prix que j’ai payé.';
        $growthStatement4='Lorsque j&#39;investis, je suis à la recherche d’entreprises qui ont le potentiel de croître de façon exponentielle.';
        $growthStatement5='Je préfère investir dans des secteurs à forte croissance tels que la technologie et les sciences de la vie.';
        
        $stStatement1='Lorsque le prix de l’une de mes actions commence à baisser, j’appuie sur la gâchette le plus vite possible pour limiter mes pertes.';
        $stStatement2='Je souhaite investir dans des titres dont le prix sera influencé par un événement prévisible, comme un fractionnement d’actions ( <i>stock-split</i> ), un essaimage ( <i>spin-off</i> ), etc.';
        $stStatement3='Avant d&#39;acheter un titre, il est important d&#39;avoir une bonne compréhension du sentiment des marchés à son égard.';
        $stStatement4='Quand je fais un investissement, je sais toujours à peu près quand je vais le vendre.';
        $stStatement5='J&#39;achète et je vends souvent les mêmes titres à l’intérieur d’une période de quelques mois.';
        $option = array('Pas du tout d’accord','Pas d’accord','D’accord','Tout à fait d’accord');
        $buttonText ='Faites le test';
        $selectSomething = 'Choisir une réponse';
    }
?>
<div class="compass_body container">
    <span id="close_compass" class="close_compass close">v</span>
    <br>
    <img class="compass_hb_logo" src="<?php echo $directory; ?>/img/logo.png">
    <img class="compass_green_logo" src="<?php echo $directory;?>/img/logo_compass.png" hidden="hidden">
    <div class="compass_subtitle">
        <?php echo $subTitleCompass; ?>
    </div>
<div class="compass_statements">
    <div class="compass_intro">
    <br>
    <p class="intro container"><?php echo $intro; ?></p>
    </div>
</div>

<form class="compass" action="<?php bloginfo('url'); ?>/compass-results" method="post">
    <div class="compass_statements container">
    <form class="statement value_investor">
        <p class="text-center "><?php echo $valueStatement5; ?></p>
        <div class="options">
            <label><input class="optionX" type="radio" name="optionX" value=1>&nbsp;&nbsp;<?php echo $option[0]; ?></label><br>
            <label><input class="optionX" type="radio" name="optionX" value=0.5>&nbsp;&nbsp;<?php echo $option[1]; ?></label><br>
            <label><input class="optionX" type="radio" name="optionX" value=-0.5>&nbsp;&nbsp;<?php echo $option[2]; ?></label><br>
            <label><input class="optionX" type="radio" name="optionX" value=-1>&nbsp;&nbsp;<?php echo $option[3]; ?></label>
        </div>
    </form>
</div>
    <div class="compass_statements container">
    <form class="statement short_term">
        <p class="text-center "><?php echo $stStatement4; ?></p>
        <div class="options">
            <label><input class="optionY" type="radio" name="optionY" value=1>&nbsp; <?php echo $option[0]; ?></label><br>
            <label><input class="optionY" type="radio" name="optionY" value=0.5>&nbsp; <?php echo $option[1]; ?></label><br>
            <label><input class="optionY" type="radio" name="optionY" value=-0.5>&nbsp; <?php echo $option[2]; ?></label><br>
            <label><input class="optionY" type="radio" name="optionY" value=-1>&nbsp; <?php echo $option[3]; ?></label>
        </div>
    </form>
</div>
    <div class="compass_statements container">
    <form class="statement long_term">
        <p class="text-center "><?php echo $ltStatement3; ?></p>
        <div class="options">
            <label><input class="optionY" type="radio" name="optionY" value=-1>&nbsp; <?php echo $option[0]; ?></label><br>
            <label><input class="optionY" type="radio" name="optionY" value=-0.5>&nbsp; <?php echo $option[1]; ?></label><br>
            <label><input class="optionY" type="radio" name="optionY" value=0.5>&nbsp; <?php echo $option[2]; ?></label><br>
            <label><input class="optionY" type="radio" name="optionY" value=1>&nbsp; <?php echo $option[3]; ?></label>
        </div>
    </form>
</div>
    <div class="compass_statements container">
    <form class="statement growth">
        <p class="text-center "><?php echo $growthStatement3; ?></p>
        <div class="options">
            <label><input class="optionX" type="radio" name="optionX" value=-1>&nbsp; <?php echo $option[0]; ?></label><br>
            <label><input class="optionX" type="radio" name="optionX" value=-0.5>&nbsp; <?php echo $option[1]; ?></label><br>
            <label><input class="optionX" type="radio" name="optionX" value=0.5>&nbsp; <?php echo $option[2]; ?></label><br>
            <label><input class="optionX" type="radio" name="optionX" value=1>&nbsp; <?php echo $option[3]; ?></label>
        </div>
    </form>
</div>
    <div class="compass_statements container">
    <form class="statement short_term">
        <p class="text-center "><?php echo $stStatement5; ?></p>
        <div class="options">
            <label><input class="optionY" type="radio" name="optionY" value=1>&nbsp; <?php echo $option[0]; ?></label><br>
            <label><input class="optionY" type="radio" name="optionY" value=0.5>&nbsp; <?php echo $option[1]; ?></label><br>
            <label><input class="optionY" type="radio" name="optionY" value=-0.5>&nbsp; <?php echo $option[2]; ?></label><br>
            <label><input class="optionY" type="radio" name="optionY" value=-1>&nbsp; <?php echo $option[3]; ?></label>
        </div>
    </form>
</div>
    <div class="compass_statements container">
    <form class="statement short_term">
        <p class="text-center "><?php echo $stStatement1; ?></p>
        <div class="options">
            <label><input class="optionY" type="radio" name="optionY" value=1>&nbsp; <?php echo $option[0]; ?></label><br>
            <label><input class="optionY" type="radio" name="optionY" value=0.5>&nbsp; <?php echo $option[1]; ?></label><br>
            <label><input class="optionY" type="radio" name="optionY" value=-0.5>&nbsp; <?php echo $option[2]; ?></label><br>
            <label><input class="optionY" type="radio" name="optionY" value=-1>&nbsp; <?php echo $option[3]; ?></label>
        </div>
    </form>
</div>
    <div class="compass_statements container">
    <form class="statement grow">
        <p class="text-center "><?php echo $growthStatement2; ?></p>
        <div class="options">
            <label><input class="optionX" type="radio" name="optionX" value=-1>&nbsp; <?php echo $option[0]; ?></label><br>
            <label><input class="optionX" type="radio" name="optionX" value=-0.5>&nbsp; <?php echo $option[1]; ?></label><br>
            <label><input class="optionX" type="radio" name="optionX" value=0.5>&nbsp; <?php echo $option[2]; ?></label><br>
            <label><input class="optionX" type="radio" name="optionX" value=1>&nbsp; <?php echo $option[3]; ?></label>
        </div>
    </form>
</div>
    <div class="compass_statements container">
    <form class="statement long_term">
        <p class="text-center "><?php echo $ltStatement4; ?></p>
        <div class="options">
            <label><input class="optionY" type="radio" name="optionY" value=-1>&nbsp; <?php echo $option[0]; ?></label><br>
            <label><input class="optionY" type="radio" name="optionY" value=-0.5>&nbsp; <?php echo $option[1]; ?></label><br>
            <label><input class="optionY" type="radio" name="optionY" value=0.5>&nbsp; <?php echo $option[2]; ?></label><br>
            <label><input class="optionY" type="radio" name="optionY" value=1>&nbsp; <?php echo $option[3]; ?></label>
        </div>
    </form>
</div>
    <div class="compass_statements container">
    <form class="statement short_term">
        <p class="text-center "><?php echo $stStatement2; ?></p>
        <div class="options">
            <label><input class="optionY" type="radio" name="optionY" value=1>&nbsp; <?php echo $option[0]; ?></label><br>
            <label><input class="optionY" type="radio" name="optionY" value=0.5>&nbsp; <?php echo $option[1]; ?></label><br>
            <label><input class="optionY" type="radio" name="optionY" value=-0.5>&nbsp; <?php echo $option[2]; ?></label><br>
            <label><input class="optionY" type="radio" name="optionY" value=-1>&nbsp; <?php echo $option[3]; ?></label>
        </div>
    </form>
</div>
    <div class="compass_statements container">
    <form class="statement value_investor">
        <p><?php echo $valueStatement4; ?></p>
        <div class="options">
            <label><input class="optionX" type="radio" name="optionX" value=1>&nbsp;<?php echo $option[0]; ?></label><br>
            <label><input class="optionX" type="radio" name="optionX" value=0.5>&nbsp;<?php echo $option[1]; ?></label><br>
            <label><input class="optionX" type="radio" name="optionX" value=-0.5>&nbsp;<?php echo $option[2]; ?></label><br>
            <label><input class="optionX" type="radio" name="optionX" value=-1>&nbsp;<?php echo $option[3]; ?></label>
        </div>
    </form>
</div>
    <div class="compass_statements container">
    <form class="statement growth">
        <p class="text-center "><?php echo $growthStatement4; ?></p>
        <div class="options">
            <label><input class="optionX" type="radio" name="optionX" value=-1>&nbsp; <?php echo $option[0]; ?></label><br>
            <label><input class="optionX" type="radio" name="optionX" value=-0.5>&nbsp; <?php echo $option[1]; ?></label><br>
            <label><input class="optionX" type="radio" name="optionX" value=0.5>&nbsp; <?php echo $option[2]; ?></label><br>
            <label><input class="optionX" type="radio" name="optionX" value=1>&nbsp; <?php echo $option[3]; ?></label>
        </div>
    </form>
</div>
    <div class="compass_statements container">
    <form class="statement long_term">
        <p class="text-center "><?php echo $ltStatement5; ?></p>
        <div class="options">
            <label><input class="optionY" type="radio" name="optionY" value=-1>&nbsp; <?php echo $option[0]; ?></label><br>
            <label><input class="optionY" type="radio" name="optionY" value=-0.5>&nbsp; <?php echo $option[1]; ?></label><br>
            <label><input class="optionY" type="radio" name="optionY" value=0.5>&nbsp; <?php echo $option[2]; ?></label><br>
            <label><input class="optionY" type="radio" name="optionY" value=1>&nbsp; <?php echo $option[3]; ?></label>
        </div>
    </form>
</div>
    <div class="compass_statements container">
    <form class="statement value_investor">
        <p class="text-center "><?php echo $valueStatement1; ?></p>
        <div class="options">
            <label><input class="optionX" type="radio" name="optionX" value=1>&nbsp;<?php echo $option[0]; ?></label><br>
            <label><input class="optionX" type="radio" name="optionX" value=0.5>&nbsp;<?php echo $option[1]; ?></label><br>
            <label><input class="optionX" type="radio" name="optionX" value=-0.5>&nbsp;<?php echo $option[2]; ?></label><br>
            <label><input class="optionX" type="radio" name="optionX" value=-1>&nbsp;<?php echo $option[3]; ?></label>
        </div>
    </form>
</div>
    <div class="compass_statements container">
    <form class="statement growth">
        <p class="text-center "><?php echo $growthStatement1; ?></p>
        <div class="options">
            <label><input class="optionX" type="radio" name="optionX" value=-1>&nbsp; <?php echo $option[0]; ?></label><br>
            <label><input class="optionX" type="radio" name="optionX" value=-0.5>&nbsp; <?php echo $option[1]; ?></label><br>
            <label><input class="optionX" type="radio" name="optionX" value=0.5>&nbsp; <?php echo $option[2]; ?></label><br>
            <label><input class="optionX" type="radio" name="optionX" value=1>&nbsp; <?php echo $option[3]; ?></label>
        </div>
    </form>
</div>
    <div class="compass_statements container">
    <form class="statement long_term">
        <p class="text-center "><?php echo $ltStatement2; ?></p>
        <div class="options">
            <label><input class="optionY" type="radio" name="optionY" value=-1>&nbsp; <?php echo $option[0]; ?></label><br>
            <label><input class="optionY" type="radio" name="optionY" value=-0.5>&nbsp; <?php echo $option[1]; ?></label><br>
            <label><input class="optionY" type="radio" name="optionY" value=0.5>&nbsp; <?php echo $option[2]; ?></label><br>
            <label><input class="optionY" type="radio" name="optionY" value=1>&nbsp; <?php echo $option[3]; ?></label>
        </div>
    </form>
</div>
    <div class="compass_statements container">
    <form class="statement value_investor">
        <p class="text-center "><?php echo $valueStatement3; ?></p>
        <div class="options">
            <label><input class="optionX" type="radio" name="optionX" value=1>&nbsp;<?php echo $option[0]; ?></label><br>
            <label><input class="optionX" type="radio" name="optionX" value=0.5>&nbsp;<?php echo $option[1]; ?></label><br>
            <label><input class="optionX" type="radio" name="optionX" value=-0.5>&nbsp;<?php echo $option[2]; ?></label><br>
            <label><input class="optionX" type="radio" name="optionX" value=-1>&nbsp;<?php echo $option[3]; ?></label>
        </div>
    </form>
</div>
    <div class="compass_statements container">
    <form class="statement growth">
        <p class="text-center "><?php echo $growthStatement5; ?></p>
        <div class="options">
            <label><input class="optionX" type="radio" name="optionX" value=-1>&nbsp; <?php echo $option[0]; ?></label><br>
            <label><input class="optionX" type="radio" name="optionX" value=-0.5>&nbsp; <?php echo $option[1]; ?></label><br>
            <label><input class="optionX" type="radio" name="optionX" value=0.5>&nbsp; <?php echo $option[2]; ?></label><br>
            <label><input class="optionX" type="radio" name="optionX" value=1>&nbsp; <?php echo $option[3]; ?></label>
        </div>
    </form>
</div>
    <div class="compass_statements container">
    <form class="statement short_term">
        <p class="text-center "><?php echo $stStatement3 ?></p>
        <div class="options">
            <label><input class="optionY" type="radio" name="optionY" value=1>&nbsp; <?php echo $option[0]; ?></label><br>
            <label><input class="optionY" type="radio" name="optionY" value=0.5>&nbsp; <?php echo $option[1]; ?></label><br>
            <label><input class="optionY" type="radio" name="optionY" value=-0.5>&nbsp; <?php echo $option[2]; ?></label><br>
            <label><input class="optionY" type="radio" name="optionY" value=-1>&nbsp; <?php echo $option[3]; ?></label>
        </div>
    </form>
</div>
    <div class="compass_statements container">
    <form class="statement long_term">
        <p class="text-center "><?php echo $ltStatement1; ?></p>
        <div class="options">
            <label><input class="optionY" type="radio" name="optionY" value=-1>&nbsp;<?php echo $option[0]; ?></label><br>
            <label><input class="optionY" type="radio" name="optionY" value=-0.5>&nbsp;<?php echo $option[1]; ?></label><br>
            <label><input class="optionY" type="radio" name="optionY" value=0.5>&nbsp;<?php echo $option[2]; ?></label><br>
            <label><input class="optionY" type="radio" name="optionY" value=1>&nbsp;<?php echo $option[3]; ?></label>
        </div>
    </form>
</div>
    <div class="compass_statements container">
    <form class="statement value_investor">
        <p class="text-center "><?php echo $valueStatement2; ?></p>
        <div class="options">
            <label><input class="optionX" type="radio" name="optionX" value=1>&nbsp;<?php echo $option[0]; ?></label><br>
            <label><input class="optionX" type="radio" name="optionX" value=0.5>&nbsp;<?php echo $option[1]; ?></label><br>
            <label><input class="optionX" type="radio" name="optionX" value=-0.5>&nbsp;<?php echo $option[2]; ?></label><br>
            <label><input class="optionX" type="radio" name="optionX" value=-1>&nbsp;<?php echo $option[3]; ?></label>
        </div>
    </form>
</div> 
    <input type="button" id="next" name="next" value="<?php echo $buttonText; ?>">
    <br>
</form>
    <span class="alert" hidden style="color:red; text-transform: uppercase;"><?php echo $selectSomething; ?></span>
     <div class="progress">
        <div class="progress-bar" aria-valuenow="0"
  aria-valuemin="0" aria-valuemax="100" style="width:0%;">0%
        </div>
    </div>
</div>

