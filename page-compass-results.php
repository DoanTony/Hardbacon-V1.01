<?php
    get_header();
    $directory = get_bloginfo('template_directory');
    $currentlang = get_bloginfo('language');
?>
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
<?php
    $GSBio;
    $WBBio;
    $BGBio;
    $PFBio;
    $PTJBio;

    $subTitleCompass;
    $shareLink;
    if($currentlang == 'en-US'){
        $subTitleCompass = 'Investor’s compass';
        $NomPH = 'Name';
        $courrielPH = 'email';
        
        $newsletterQ = 'If you are interested in investing, leave us your email address and Hardbacon’s CEO Julien will send you exclusive content you’ll never find on Hardbacon.ca!';
        $ouiForm = ' Subscribe';
        $textBouton = 'SHOW ME THE RESULTS';
        
        $GSBio = 'George Soros is an American investor originally from Hungary known as a non-standard speculator, but also best known as the investor who broke down the bank of England in 1992. To achieve this, he shorted the pound sterling (in other words, he speculated on the fall in value of the British currency), pocketing a profit of over a billion US dollars. According to Soros, the current financial system is detrimental to the development of the poorest countries, but he took advantage of it amply since its debut as an investor, by accumulating a fortune of 24.9 billion US dollars.';
        $WBBio='Warren Buffett, one of the richest men in the world, is known for his prudence as much as by his patience. Buffett is known for investing in companies that are undervalued but have a good growth potential. In 1965, when Buffett bought Berkshire Hathaway, a former textile company, its stock was worth barely 12 $. Today, that same stock is worth more than $ 219,000 and Berkshire Hathaway operates businesses in a variety of fields, including the fast-food and the insurance industries. It is not for nothing that he was nicknamed the Oracle of Omaha.';
        $BGBio='Benjamin Graham is an economist and a globally recognized investor. As a matter of fact, he has been called the &quot;most gifted&quot; of the world and nothing less. Mentor of Warren Buffett, he is also recognized as the father of one of the most popular approaches for investors: value investing, which states that the key to doing well on the stock market is to invest in companies whose actual value is higher than its market price. Seeking cheap companies, Benjamin Graham was ready to buy the securities of companies with little future, as long as their price was right.';
        $PFBio='Philip Fisher is known for his long-term growth investments in well-managed and high quality companies. He is not a speculator as George Soros. For example, Fisher has acquired the majority of Motorola’s shares in 1955 and kept it until his death in 2004. Before investing in a company, Fisher accumulates the maximum of information on it in order to understand its activities. Therefore, he became the master of networking and had an incredible contact network in order to obtain all possible information before investing in a company.';
        $PTJBio="Paul Tudor Jones is known for having predicted Black Monday, the stock market crash of October 1987. This turned out to be a real score for him, because he managed to make an outstanding return by leveraging the downturn of the stock market. His hedge fund, Tudor Investment Company, has never stopped growing since. Today, he has an estimated net worth of 4.6 billion dollars. Tudor is not concerned with evaluating the growth potential of individual companies. As an investment strategy, he focuses on profiting from economic trends that have worldwide effects.";

        $shareLink = 'http://hardbacon.ca/compass/';
        
        $Shrfbjs = "//connect.facebook.net/en_US/sdk.js";
    }
    else{
        $subTitleCompass = 'Boussole de l’investisseur';
        $NomPH = 'Nom';
        $courrielPH = 'courriel';
        $newsletterQ = 'Si vous êtes intéressés par l’investissement, laissez-nous votre adresse courriel et le pdg de Hardbacon va vous envoyer du contenu exclusif que vous ne verrez jamais sur notre site Web. ';
        $ouiForm = ' S’inscrire';
        $textBouton = 'Afficher la boussole';
        
        $GSBio = 'George Soros est un investisseur américain d’origine hongroise reconnu pour être un spéculateur hors-norme, mais il est surtout reconnu pour avoir fait « sauter la Banque d’Angleterre » en 1992. Pour y parvenir, il a vendu des milliards de livres sterling à découvert (ce qui revient à spéculer sur la baisse de valeur de cette dernière), empochant un profit de plus d’un milliard de dollars US. Selon Soros, le système financier actuel est néfaste pour le développement des pays les plus pauvres, mais il en a profité amplement depuis ses débuts en accumulant une fortune de 24,9 milliards de dollars américains.';
        $WBBio ='Warren Buffett, l’un des hommes les plus riches du monde, est reconnu pour sa prudence autant que par sa patience. Buffett a ainsi l’habitude de concentrer ses investissements dans des entreprises qui sont sous-évaluées et qui possédent un bon potentiel de croissance à long terme. En 1965, lorsque Buffett a acheté Berkshire Hathaway, une ancienne compagnie de textile, son action valait 12 $ à peine. Aujourd’hui, cette même action vaut plus de 219 000 $ et Berkshire Hathaway exploite des entreprises dans une panoplie d’industries, incluant celles du matelas, de l’assurance et de la restauration rapide. Ce n’est pas pour rien qu’on le surnomme l’Oracle d’Omaha.';
        $BGBio='Benjamin Graham est un économiste de formation et un investisseur reconnu mondialement comme étant le « plus doué » du monde et rien de moins. Mentor de Warren Buffett, il est reconnu comme étant le père d’une des approches les plus populaires chez les investisseurs : l’investissement axé sur la valeur, qui stipule que la clé pour s’enrichir est d’investir dans des entreprises dont la valeur réelle est supérieure à son prix sur le marché. Recherchant à tout prix les entreprises à bas prix, Benjamin Graham était prêt à acheter les titres d’entreprises ayant peu d’avenir, pourvu que son prix soit assez alléchant.';
        $PFBio='Philip Fisher est reconnu pour ses investissements de croissance à long terme dans des compagnies bien gérées et de hautes qualités. Il est loin d’être un spéculateur comme George Soros l’est. Par exemple, Fisher a fait l’acquisition de la majorité des actions de Motorola en 1955 et il les a gardées jusqu’à sa mort en 2004. Avant d’investir dans une compagnie, Fisher accumule le plus d’informations possible sur cette dernière afin de bien comprendre ses activités. Ainsi, il est devenu le maître du réseautage et détenait un réseau de contacts incroyable dans le but d’obtenir toutes les informations possibles avant d’investir dans une entreprise.';
        $PTJBio="Paul Tudor Jones est connu pour avoir prévu le krach boursier d’octobre 1987. Ce fût un coup marquant pour lui, car il est parvenu à faire un rendement exceptionnel en misant sur la baisse des marchés boursiers. Son fonds de couverture, Tudor Investment Corporation, n’a depuis lors jamais cessé de croître. Aujourd’hui, il est à la tête d’une fortune personnelle de 4,6 milliards de dollars. Tudor ne tente pas de déterminer la valeur ou le potentiel de croissances des entreprises dans lesquelles il investit. Il tente d’identifier les grandes tendances économiques mondiales et d’en bénéficier grâce à ses investissements.";
        
        $shareLink = 'http://hardbacon.ca/fr/boussole/';
        $Shrfbjs = "//connect.facebook.net/fr_CA/sdk.js";
    }
?>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1242984649085774',
      xfbml      : true,
      version    : 'v2.7'
    });
    FB.AppEvents.activateApp();
  };
  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
<?php
    $X = 0;
    $Y = 0;
    $Y = (float)$_POST['submitValueY'];
    $X = (float)$_POST['submitValueX'];

/* test values de X et Y ici 
    $X = -3.5;
    $Y = -10;
*/

    $explainGraph = '';
    $shareText = '';
    $shareGraphImg = 'http://hardbaconmedia.hardbacon.ca/media/2016/09/';

    //Coordonnées des investisseurs
    //George Soros
    $GSX = -5;
    $GSY = -10;
    $GSNom = "George Soros";

    //Warren Buffett
    $WBNom = "Warren Buffett";
    $WBX = 4;
    $WBY = 10;
    
    //Benjamin Graham
    $BGNom = "Benjamin Graham";
    $BGX = 10;
    $BGY = 6;

    //Philip Fisher
    $PFNom = "Philip Fisher";
    $PFX = -10;
    $PFY = 10;

    //Paul Tudor Jones
    $PTJNom = "Paul Tudor Jones";
    $PTJX = -0.5;
    $PTJY = -6;
?>
<div class="compass_body compass_result container">
    <img class="compass_hb_logo" src="http://hardbaconmedia.hardbacon.ca/media/2016/09/hardbacon-logo.png">    
    <div class="compass_intro">
        <?php echo $subTitleCompass; ?>
        <br>
    </div>
<?php
    //fichiers pour le diagramme
    require_once('jpgraph/jpgraph.php');
    require_once('jpgraph/jpgraph_scatter.php');
    require_once('jpgraph/jpgraph_line.php');
    require_once('jpgraph/jpgraph_plotline.php');

    //Creation d'un nouveau graphique
    $graph = new Graph(1200,800);

    $nom = $prenom = '';
    
    //Transformation des données accumulés pour les inclures dans le graphique
    $Xaxe = array($X);
    $Yaxe = array($Y);

    //Array de données des investisseurs connus
    $invGSX = array($GSX);
    $invGSY = array($GSY);
    
    $invWBX = array($WBX);
    $invWBY = array($WBY);
    
    $invBGX = array($BGX);
    $invBGY = array($BGY);
    
    $invPFX = array($PFX);
    $invPFY = array($PFY);
    
    $invPTJX = array($PTJX);
    $invPTJY = array($PTJY);

    $txtGS = new Text($GSNom);
    $txtGS->SetPos(0,0,'center','center');
    $txtGS->SetScalePos($GSX,$GSY+2.5);
    $txtGS->SetFont(FF_LATO,FS_NORMAL,14);
    $txtGS->SetColor('#404040');
    $graph->AddText($txtGS);
        
    $txtWB = new Text($WBNom);
    $txtWB->SetPos(0,0,'center','center');
    $txtWB->SetScalePos($WBX,$WBY+2.7);
    $txtWB->SetFont(FF_LATO,FS_NORMAL,14);
    $txtWB->SetColor('#404040');
    $graph->AddText($txtWB);
    
    $txtBG = new Text($BGNom);
    $txtBG->SetPos(0,0,'center','center');
    $txtBG->SetScalePos($BGX,$BGY+2.7);
    $txtBG->SetFont(FF_LATO,FS_NORMAL,14);
    $txtBG->SetColor('#404040');
    $graph->AddText($txtBG);
    
    $txtPF = new Text($PFNom);
    $txtPF->SetPos(0,0,'center','center');
    $txtPF->SetScalePos($PFX+0.1,$PFY+2.5);
    $txtPF->SetFont(FF_LATO,FS_NORMAL,14);
    $txtPF->SetColor('#404040');
    $graph->AddText($txtPF);

    $txtPTJ = new Text($PTJNom);
    $txtPTJ->SetPos(0,0,"center","center");
    $txtPTJ->SetScalePos($PTJX,$PTJY+2.5);
    $txtPTJ->SetFont(FF_LATO,FS_NORMAL,14);
    $txtPTJ->SetColor("#404040");
    $graph->AddText($txtPTJ);
    
    if(isset($_POST['fin']))
    { 
?>
    <script>
        jQuery(document).ready(function(){
            jQuery('.navbar').show();
        });
    </script>
    <div class="final container">
<?php
        $nom = $_POST['nom'];
              
        //Creation du diagramme
        $graph->SetScale("linlin",-10,10,-10,10);
        $graph->yscale->ticks->Set(2,2);
        $graph->xscale->ticks->Set(2,2);
        
        //Marges (gauche, droite, haut, bas)
        $graph->img->SetMargin(100,100,100,100);
        
        //Couleur du background        
        $graph->SetMarginColor('#3EC6BD@0.3');
        $graph->SetFrame(true,'#3EC6BD@0.3');
        
        //Axe 'X' est sur la ligne Y=0
        $graph->xaxis->SetPos(0);
        $graph->xaxis->SetWeight(3);
        $graph->xaxis->SetColor('#FFF');
        $graph->xaxis->HideZeroLabel();
        $graph->yaxis->SetWeight(3);
        $graph->yaxis->SetColor('#FFF');
        $graph->yaxis->HideZeroLabel();
        
        //Affichage du grillage
        $graph->xgrid->SetColor('#FFF');
        $graph->xgrid->Show();
        
        $graph->ygrid->SetColor('#FFF');
        $graph->ygrid->SetFill(true,'#3EC6BD@0.3','#3EC6BD@0.3');
        
        $graph->xaxis->SetFont(FF_LATO,FS_NORMAL,15);
        $graph->yaxis->SetFont(FF_LATO,FS_NORMAL,15);
                
        //Nom des axes
        $longTerm;
        $shortTerm;
        $grwInvestor;
        $valInvestor;
        if($currentlang == 'en-US')
        {
            $longTerm = new Text('LONG TERM',537,48);
            $shortTerm = new Text('SHORT TERM',535,740);
            $grwInvestor = new Text('GROWTH',58,350);
            $valInvestor = new Text('VALUE',1140,360);
        }
        else{
            $longTerm = new Text('LONG TERME',535,48);
            $shortTerm = new Text('COURT TERME',533,740);
            $grwInvestor = new Text('CROISSANCE',58,325);
            $valInvestor = new Text('VALEUR',1140,355);
        }
        
        $valInvestor->SetColor('#fff');
        $valInvestor->SetFont(FF_LATO,FS_NORMAL, 15);
        $valInvestor->SetAngle(270);
        $graph->Add($valInvestor);
        
        $grwInvestor->SetColor('#fff');
        $grwInvestor->SetFont(FF_LATO,FS_NORMAL, 15);
        $grwInvestor->SetAngle(90);
        $graph->Add($grwInvestor);
        
        $shortTerm->SetColor('#fff');
        $shortTerm->SetFont(FF_LATO,FS_NORMAL, 15);
        $graph->Add($shortTerm);
        
        $longTerm->SetColor('#fff');
        $longTerm->SetFont(FF_LATO,FS_NORMAL, 15);
        $graph->Add($longTerm);
        
        //Nom du participant
        $txtNom;
        $spCoverImg;
        if(!empty($_POST['nom']))
        {
            $txtNom = new Text($nom);
        }
        else
        {
            if($currentlang == 'en-US')
            {
                $txtNom = new Text("YOU");
            }
            else{
                $txtNom = new Text("VOUS");
            }
        }

        //Coord pour réduire la visibilité des investisseurs, si le participant a un résultat proche ou identique
        if($X !=0 && $Y!=0){
            $spCoverImg = new ScatterPlot($Yaxe,$Xaxe);
            
            if(($Y>=7.5) && ($X<=-9)){
                $spCoverImg = new ScatterPlot($invPFY,$invPFX);
            }
            if(($Y>=7.5) && (($X>=3) && ($X<=5))){
                $spCoverImg = new ScatterPlot($invWBY,$invWBX);
            }
            if((($Y>=3.5) && ($Y<=8)) && ($X >9)){
                $spCoverImg = new ScatterPlot($invBGY,$invBGX);
            }
            if((($Y>=-8.5) && ($Y<=-4)) && (($X>-2) && ($X<1))){
                $spCoverImg = new ScatterPlot($invPTJY,$invPTJX);
            }
            if(($Y<=-8) && (($X>=-6) && ($X<=-4))){
                $spCoverImg = new ScatterPlot($invGSY,$invGSX);
            }
            $spCoverImg->mark->SetType(MARK_IMG,'http://hardbaconmedia.hardbacon.ca/media/2016/09/compass_cover.png',0.31);
            $spCoverImg->mark->SetFillColor("#3EC6BD@0.2");
            $spCoverImg->mark->SetWidth(60);
        }

        $txtNom->SetColor('#ff7f00');
        $txtNom->SetScalePos($X-0.025,$Y+1.2);
        $txtNom->SetPos(0,0,'center','center');
        $txtNom->SetFont(FF_LATO,FS_NORMAL, 18);
        
        //Creation des points nuagique
        //Résultat du participant
        $sp1 = new ScatterPlot($Yaxe,$Xaxe);
        $sp1->mark->SetType(MARK_IMG,'http://hardbaconmedia.hardbacon.ca/media/2016/09/compass_you.png',0.1);
        $sp1->mark->SetFillColor('#ff7f00');
        $sp1->mark->SetWidth(15);
        
        //Investisseurs connus
        $spWB = new ScatterPlot($invWBY,$invWBX);
        $spWB->mark->SetType(MARK_IMG,'http://hardbaconmedia.hardbacon.ca/media/2016/09/warren_buffet.png',0.3);
        $spWB->mark->SetFillColor('#00C6BD');
        $spWB->mark->SetWidth(8);
        
        $spPF = new ScatterPlot($invPFY,$invPFX);
        $spPF->mark->SetType(MARK_IMG,'http://hardbaconmedia.hardbacon.ca/media/2016/09/philip_fisher.png',0.7);
        $spPF->mark->SetFillColor('#00C6BD');
        $spPF->mark->SetWidth(8);
        
        $spBG = new ScatterPlot($invBGY,$invBGX);
        $spBG->mark->SetType(MARK_IMG,'http://hardbaconmedia.hardbacon.ca/media/2016/09/benjamin_graham.png',0.3);
        $spBG->mark->SetFillColor('#00C6BD');
        $spBG->mark->SetWidth(8);
        
        $spGS = new ScatterPlot($invGSY,$invGSX);
        $spGS->mark->SetType(MARK_IMG,'http://hardbaconmedia.hardbacon.ca/media/2016/09/georges_soros.png',0.3);
        $spGS->mark->SetFillColor('#00C6BD');
        $spGS->mark->SetWidth(8);

        $spPTJ = new ScatterPlot($invPTJY,$invPTJX);
        $spPTJ->mark->SetType(MARK_IMG,"http://hardbaconmedia.hardbacon.ca/media/2016/10/paul_tudor_jones.png",0.3);
        $spPTJ->mark->SetFillColor("#00C6BD");
        $spPTJ->mark->SetWidth(8);
        
        $graph->AddText($txtNom);
        $graph->Add($spWB);
        $graph->Add($spPF);
        $graph->Add($spBG);
        $graph->Add($spGS);
        $graph->Add($spPTJ);

        /*Si les coordonnées du participant se retrouvent sur un investisseur existant,
        l'investisseur est partiellement caché*/
        if(($Y >=8 && $X<=-9)||(($Y>=8) && (($X>=3) && ($X<=5)))||(($Y<=-8) && (($X>=-6) && ($X<=-4)))||((($Y>=3.5) && ($Y<=8)) && ($X >9))||((($Y>=-8.5) && ($Y<=-4)) && (($X>-2) && ($X<1)))){$graph->Add($spCoverImg);}

        $graph->Add($sp1);
        
        $imagecontainer = $graph->Stroke(_IMG_HANDLER);
        
        ob_start();
        imagejpeg($graph->img->Stream());
        $testResult = ob_get_clean();
        //$testResult = ob_get_contents();
        //ob_end_clean();
?>
        
        <div class="result_explain">
            <p class="explain_graph text-center">
<?php
           if($X > 0)
            {
                if($Y > 0)
                {
                    if($currentlang == 'en-US')
                    {
                        $explainGraph = 'Congratulations! You are a <b>long-term value</b> investor.';
                        $shareText = 'According to Hardbacon’s Investors Compass, I am a long-term value investor! If you want to find out what kind of investor you are, click the link below!';
                    }
                    else{
                        $explainGraph = 'Félicitations! Vous êtes un investisseur à <b>long terme</b> axé sur la <b>valeur</b>.';
                        $shareText = 'Selon la boussole de l’investisseur de Hardbacon, je suis un investisseur à long terme axé sur la valeur! Si vous voulez savoir quel type d’investisseur vous êtes, cliquez sur le lien ci-dessous!';
                    }
                    $shareGraphImg = $shareGraphImg.'graph_value-long.png';
                    
                    ?>
                    <script>
                        jQuery(document).ready(function ($) {
                            $('.resume').removeAttr('hidden');
                            $('.resume_long_term').removeAttr('hidden');
                            $('.resume_value').removeAttr('hidden');
                        });
                    </script>
                    <?php                    
                }
                else if($Y < 0)
                {
                    if($currentlang == 'en-US')
                    {
                        $explainGraph = 'Congratulations! You are a <b>short-term value</b> investor.';
                        $shareText = 'According to Hardbacon’s Investors Compass, I am a short-term value investor! If you want to find out what kind of investor you are, click the link below!';
                    }
                    else{
                        $explainGraph = 'Félicitations! Vous êtes un investisseur à <b>court terme</b> axé sur la <b>valeur</b>.';
                        $shareText = 'Selon la boussole de l’investisseur de Hardbacon, je suis un investisseur à court terme axé sur la valeur! Si vous voulez savoir quel type d’investisseur vous êtes, cliquez sur le lien ci-dessous!';
                    }
                    $shareGraphImg = $shareGraphImg.'graph_value-short.png';
                    
                    ?>
                    <script>
                        jQuery(document).ready(function ($) {
                            $('.resume').removeAttr('hidden');
                            $('.resume_short_term').removeAttr('hidden');
                            $('.resume_value').removeAttr('hidden');
                        });
                    </script>
                    <?php 
                    
                }
                else{
                    if($currentlang == 'en-US')
                    {
                        $explainGraph = 'Congratulations! You are a <b>value</b> investor.';
                        $shareText = 'According to Hardbacon’s Investors Compass, I am a value investor! If you want to find out what kind of investor you are, click the link below!';
                    }
                    else{
                        $explainGraph = 'Félicitations! Vous êtes un investisseur axé sur la <b>valeur</b>.';
                        $shareText = 'Selon la boussole de l’investisseur de Hardbacon, je suis un investisseur axé sur la valeur! Si vous voulez savoir quel type d’investisseur vous êtes, cliquez sur le lien ci-dessous!';
                    }
                    $shareGraphImg = $shareGraphImg.'graph_value.png';
                    
                    ?>
                    <script>
                        jQuery(document).ready(function ($) {
                            $('.resume').removeAttr('hidden');
                            $('.resume_value').removeAttr('hidden');
                            $('.val-grwth').attr('class','col-sm-12');
                        });
                    </script>
                    <?php 
                }
            }
            else if($X < 0)
            {        
                if($Y > 0)
                {
                    if($currentlang == 'en-US')
                    {
                        $explainGraph = 'Congratulations! You are a <b>long-term growth</b> investor.';
                        $shareText = 'According to Hardbacon’s Investors Compass, I am a long-term growth investor! If you want to find out what kind of investor you are, click the link below!';
                    }
                    else{
                        $explainGraph = 'Félicitations! Vous êtes un investisseur à <b>long terme</b> axé sur la <b>croissance</b>.';
                        $shareText = 'Selon la boussole de l’investisseur de Hardbacon, je suis un investisseur à long terme axé sur la croissance! Si vous voulez savoir quel type d’investisseur vous êtes, cliquez sur le lien ci-dessous!';
                    }
                    $shareGraphImg = $shareGraphImg.'graph_growth-long.png';
                    ?>
                    <script>
                        jQuery(document).ready(function ($) {
                            $('.resume').removeAttr('hidden');
                            $('.resume_long_term').removeAttr('hidden');
                            $('.resume_growth').removeAttr('hidden');
                        });
                    </script>
                    <?php 
                }
                else if($Y < 0)
                {
                    if($currentlang == 'en-US')
                    {
                        $explainGraph = 'Congratulations! You are a <b>short-term growth</b> investor.';
                        $shareText = 'According to Hardbacon’s Investors Compass, I am a short-term growth investor! If you want to find out what kind of investor you are, click the link below!';
                    }
                    else{
                        $explainGraph = 'Félicitations! Vous êtes un investisseur à <b>court terme</b> axé sur la <b>croissance</b>.';
                        $shareText = 'Selon la boussole de l’investisseur de Hardbacon, je suis un investisseur à court terme axé sur la croissance! Si vous voulez savoir quel type d’investisseur vous êtes, cliquez sur le lien ci-dessous!';
                    }
                    $shareGraphImg = $shareGraphImg.'graph_growth-short.png';
                    ?>
                    <script>
                        jQuery(document).ready(function ($) {
                            $('.resume').removeAttr('hidden');
                            $('.resume_short_term').removeAttr('hidden');
                            $('.resume_growth').removeAttr('hidden');
                        });
                    </script>
                    <?php 
                }
                else{
                    if($currentlang == 'en-US')
                    {
                        $explainGraph = 'Congratulations! You are a <b>growth</b> investor.';
                        $shareText = 'According to Hardbacon’s Invegrowthstors Compass, I am a growth investor! If you want to find out what kind of investor you are, click the link below!';
                    }
                    else{
                        $explainGraph = 'Félicitations! Vous êtes un investisseur axé sur la <b>croissance</b>.';
                        $shareText = 'Selon la boussole de l’investisseur de Hardbacon, je suis un investisseur axé sur la croissance! Si vous voulez savoir quel type d’investisseur vous êtes, cliquez sur le lien ci-dessous!';
                    }
                    $shareGraphImg = $shareGraphImg.'graph_growth.png';           
                    ?>
                    <script>
                        jQuery(document).ready(function ($) {
                            $('.resume').removeAttr('hidden');
                            $('.resume_growth').removeAttr('hidden');
                            $('.val-grwth').attr('class','col-sm-12');
                        });
                    </script>
                    <?php 
                }
            }
            else //If $X=0
            {
            if($Y > 0)
            {
                if($currentlang == 'en-US')
                {
                    $explainGraph = 'Congratulations! You are a <b>long-term</b> investor.';
                    $shareText = 'According to Hardbacon’s Investors Compass, I am a long-term investor! If you want to find out what kind of investor you are, click the link below!';
                }
                else{
                    $explainGraph = 'Félicitations! Vous êtes un investisseur à <b>long terme</b>.';
                    $shareText = 'Selon la boussole de l’investisseur de Hardbacon, je suis un investisseur à long terme! Si vous voulez savoir quel type d’investisseur vous êtes, cliquez sur le lien ci-dessous!';
                }
                $shareGraphImg = $shareGraphImg.'graph_longterm.png';
                ?>
                <script>
                    jQuery(document).ready(function ($) {
                        $('.resume').removeAttr('hidden');
                        $('.resume_long_term').removeAttr('hidden');
                        $('.lt-st').attr('class','col-sm-12');
                    });
                </script>
            <?php 
            }
            else if($Y < 0)
            {
                if($currentlang == 'en-US')
                {
                    $explainGraph = 'Congratulations! You are a <b>short-term investor</b>.';
                    $shareText = 'According to Hardbacon’s Investors Compass, I am a short-term investor! If you want to find out what kind of investor you are, click the link below!';
                }
                else{
                    $explainGraph = 'Félicitations! Vous êtes un investisseur à <b>court terme</b>.';
                    $shareText = 'Selon la boussole de l’investisseur de Hardbacon, je suis un investisseur à court terme! Si vous voulez savoir quel type d’investisseur vous êtes, cliquez sur le lien ci-dessous!';
                }
                $shareGraphImg = $shareGraphImg.'graph_shortterm.png';        
             ?>
            <script>
                jQuery(document).ready(function ($) {
                    $('.resume').removeAttr('hidden');
                    $('.resume_short_term').removeAttr('hidden');
                    $('.lt-st').attr('class','col-sm-12');
                });
            </script>
            <?php
        }
        else{
            //0,0
            if($currentlang == 'en-US')
            {
                $explainGraph = 'Congratulations! You are among the very very few investors that we can’t actually define. We are not sure how it’s possible, but you seem to be both a long term and short term investor, and both a growth and value investor.';
                $shareText = 'According to Hardbacon’s Investors Compass, my investment style is impossible to define! If you want to find out what kind of investor you are, click the link below!';
            }
            else{
                $explainGraph = 'Félicitations! Vous faites partie du club très très sélect des investisseurs que nous ne sommes pas capables de qualifier. Nous ne sommes pas sûrs comment c’est possible, mais il semble que vous soyez à la fois un investisseur axé sur la croissance ET sur la valeur, ainsi qu’un investisseur à long terme ET à court terme!';
                $shareText = 'Selon la boussole de l’investisseur de Hardbacon, je suis un investisseur inqualifiable! Si vous voulez savoir quel type d’investisseur vous êtes, cliquez sur le lien ci-dessous!';
            }
            $shareGraphImg = $shareGraphImg.'graph_zero.png';
        }
    }

        if($currentlang == 'en-US')
        {
            echo $explainGraph.' Now, check out the compass to see where you stand in comparison to legendary investors.';
        }
        else
        {
            echo $explainGraph.' Maintenant, consultez la boussole de l’investisseur de Hardbacon ci-dessous pour voir où vous vous situez par rapport à une poignée d’investisseurs légendaires.';
        }
?>
            </p>
        <div class="resume container">
<?php
        $resume_short=
        $resume_long=
        $resume_growth=
        $resume_value=
        $resume_short_title=
        $resume_long_title=
        $resume_growth_title=
        $resume_value_title='';
        
        if($currentlang == "en-US"){
            $resume_short_title = 'What is a short term investor?';
            $resume_short = 'Short-term investors want quick gains on their investments. It may be investors who seek to benefit from special events such as an IPO or a merger, or investors who seek to take advantage of short term market fluctuations. Short-term investors can keep their securities for only a few minutes, as do day traders, or a few months, as do investors focused on momentum.';
            $resume_long_title = 'What is a long term investor? ';
            $resume_long = 'Investors with a long-term investment perspective have a significant advantage over their less patient counterparts. In the long term, the stock market historically tends to appreciate by about 7% per year. Therefore, the losses caused by the economic depressions tend to be offset by the rising markets that usually follow. These investors do not give in to panic when their investments are temporarily floundering on the stock market.';
            $resume_value_title = 'What is a value investor?';
            $resume_value = 'A value investor is looking to buy stocks when their market value are lower than their intrinsic value. Therefore, value investors actively seek stocks that are undervalued by the market in relation to their &quot;true&quot; value. Moreover, this type of investor believes the market reacts irrationally to good and bad news, which generates investment opportunity when the price of a stock is low compared to its intrinsic value. ';
            $resume_growth_title = 'What is a growth investor?';
            $resume_growth = 'Growth investors will agree to pay a higher price to get hold of the shares of a company that has excellent growth potential. They tend to invest in growing sectors, such as technology and life sciences. Thomas Rowe Price, Jr., who was a chemist by trade, is considered as the father of this approach to investing.';            
        }
        else{
            $resume_short_title = 'Qu’est-ce qu’un investisseur à cour terme?';
            $resume_short = 'Les investisseurs à court terme veulent avoir des gains sur leurs investissements rapidement. Il peut s’agir d’investisseurs qui visent à profiter d’événements spéciaux comme une entrée en Bourse, ou une fusion, ou encore des investisseurs qui visent à profiter des fluctuations du marché à court terme. Les investisseurs à court terme peuvent garder leurs titres financiers pour aussi peu que quelques minutes, comme le font les day traders, ou encore quelques mois, comme le font les investisseurs axés sur le momentum.';
            $resume_long_title = 'Qu’est-ce qu’un investisseur à long terme?';
            $resume_long = 'Les investisseurs qui ont une perspective de placement à long terme ont un avantage de taille sur leurs homologues moins patients. À long terme, le marché boursier tend historiquement à s’apprécier d’environ 7% par année, de sorte que les pertes causées par les dépressions économiques tendent à être épongées par les marchés haussiers qui y succèdent. Ces investisseurs ne cèdent ainsi pas à la panique lorsque leurs investissements battent temporairement de l’aile sur les marchés boursiers.';
            $resume_growth_title = 'Qu’est-ce qu’un investisseur axé sur la croissance?';
            $resume_growth = 'Les investisseurs axés sur la croissance vont accepter de payer un prix élevé pour mettre la main sur les actions d’une compagnie qui a un excellent potentiel de croissance. Ils ont ainsi tendance à investir dans des secteurs eux-mêmes en croissance, comme ceux des technologies et des sciences de la vie. D’ailleurs, celui qu’on considère comme le père de cette manière d’investir, Thomas Rowe Price, Jr., était chimiste de formation.';
            $resume_value_title = 'Qu’est-ce qu’un investisseur axé sur la valeur?';
            $resume_value = 'Un investisseur de valeur vise à acheter des actions lorsque leur valeur est inférieure à leur valeur intrinsèque. Ainsi, les investisseurs de valeur recherchent activement des titres qui croient sous-évaluer par le marché par rapport à leur « vraie » valeur. De plus, ce type d’investisseur croit que le marché réagit souvent de manière irrationnelle aux bonnes et mauvaises nouvelles, ce qui créé des opportunité d’investissement lorsque le prix d’une action est faible par rapport à sa valeur intrinsèque.';
        }
?>
            <div class="row">
                <div class="lt-st col-sm-6">
                    <div class="row">
                        <p class="resume_short_term resume_title text-center text-uppercase" hidden="hidden"><?php echo $resume_short_title; ?></p>
                        <p class="resume_long_term resume_title text-center text-uppercase" hidden="hidden"><?php echo $resume_long_title; ?></p>
                    </div>
                    <div class="row">
                        <p class="resume_short_term" hidden="hidden"><?php echo $resume_short; ?></p>
                        <p class="resume_long_term" hidden="hidden"><?php echo $resume_long; ?></p>
                    </div>
                </div>
                <div class="val-grwth col-sm-6">
                    <div class="row">
                        <p class="resume_value resume_title text-center text-uppercase" hidden="hidden"><?php echo $resume_value_title; ?></p>
                        <p class="resume_growth resume_title text-center text-uppercase" hidden="hidden"><?php echo $resume_growth_title; ?></p>
                    </div>
                    <div class="row">
                        <p class="resume_value" hidden="hidden"><?php echo $resume_value; ?></p>
                        <p class="resume_growth" hidden="hidden"><?php echo $resume_growth; ?></p>
                    </div>
                </div>
            </div>
            </div>
        </div>
<?php
        $src = base64_encode($testResult);
?>
        <br><img id="scatterGraph" src="data:image/jpeg;base64,<?php echo $src; ?>" usemap="#compass_map" height="512" width="768">
        <br><br>
<?php
        $shareIfULike = ''; 
        $imgSrcFB = '';
        $imgSrcLKIN = '';
?>
        <map id="scatterGraphMap" name="compass_map">
            <area id="PF" shape="circle" coords="64,64,39" alt="PhilipFisher" title="Philip Fisher" href="#PhilipFisher">
            <area id="GS" shape="circle" coords="224,449,39" alt="GeorgesSoros" title="George Soros" href="#GeorgesSoros">
            <area id="WB" shape="circle" coords="512,64,39" alt="WarrenBuffett" title="Warren Buffett" href="#WarrenBuffett">
            <area id="BG" shape="circle" coords="704,141,39" alt="BenjaminGraham" title="Benjamin Graham" href="#BenjaminGraham">
            <area id="PTJ" shape="circle" coords="368,371,39" alt="PaulTudorJones" title="Paul Tudor Jones" href="#PaulTudorJones">
            
            <area id="stMap" shape="rect" coords="322,462,442,497" alt="resume_short_term" href="#resume_short_term">
            <area id="ltMap" shape="rect" coords="325,20,435,55" alt="resume_long_term" href="#resume_long_term">
            <area id="valueMap" shape="rect" coords="715,210,755,300" alt="resume_value" href="#resume_value">
            <area id="growthMap" shape="rect" coords="15,210,55,310" alt="resume_growth" href="#resume_growth">
        </map>
        
        <div id="resume_short_term" class="modal" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <span class="close">x</span>
                        <h4 class="modal-title"><b><?php echo $resume_short_title; ?></b></h4>
                    </div>
                    <div class="modal-body text-center text-justify">
                        <p><?php echo $resume_short; ?></p>
                    </div>
                </div>
            </div>
        </div>
        <div id="resume_long_term" class="modal" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <span class="close">x</span>
                        <h4 class="modal-title"><b><?php echo $resume_long_title; ?></b></h4>
                    </div>
                    <div class="modal-body text-center text-justify">
                        <p><?php echo $resume_long; ?></p>
                    </div>
                </div>
            </div>
        </div>
        <div id="resume_value" class="modal" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <span class="close">x</span>
                        <h4 class="modal-title"><b><?php echo $resume_value_title; ?></b></h4>
                    </div>
                    <div class="modal-body text-center text-justify">
                        <p><?php echo $resume_value; ?></p>
                    </div>
                </div>
            </div>
        </div>
        <div id="resume_growth" class="modal" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <span class="close">x</span>
                        <h4 class="modal-title"><b><?php echo $resume_growth_title; ?></b></h4>
                    </div>
                    <div class="modal-body text-center text-justify">
                        <p><?php echo $resume_growth; ?></p>
                    </div>
                </div>
            </div>
        </div>
        
        <div id="PhilipFisher" class="modal" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <span class="close">x</span>
                        <h4 class="modal-title"><b>Philip Fisher</b></h4>
                    </div>
                    <div class="modal-body text-center text-justify">
                        <p><?php echo $PFBio; ?></p>
                    </div>
                </div>
            </div>
        </div>
        <div id="GeorgesSoros" class="modal" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <span class="close">x</span>
                        <h4 class="modal-title"><b>George Soros</b></h4>
                    </div>
                    <div class="modal-body text-center text-justify">
                        <p><?php echo $GSBio; ?></p>
                    </div>
                </div>
            </div>
        </div>
        <div id="WarrenBuffett" class="modal" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <span class="close">x</span>
                        <h4 class="modal-title"><b>Warren Buffett</b></h4>
                    </div>
                    <div class="modal-body text-center text-justify">
                        <p><?php echo $WBBio; ?></p>
                    </div>
                </div>
            </div>
        </div>
        <div id="BenjaminGraham" class="modal" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <span class="close">x</span>
                        <h4 class="modal-title"><b>Benjamin Graham</b></h4>
                    </div>
                    <div class="modal-body text-center text-justify">
                        <p><?php echo $BGBio; ?></p>
                    </div>
                </div>
            </div>
        </div>
        <div id="PaulTudorJones" class="modal" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <span class="close">x</span>
                        <h4 class="modal-title"><b>Paul Tudor Jones</b></h4>
                    </div>
                    <div class="modal-body text-center text-justify">
                        <p><?php echo $PTJBio; ?></p>
                    </div>
                </div>
            </div>
        </div>
<?php
        if($currentlang == 'en-US')
        {
            $shareIfULike = 'If you like what you see, share your results with your friends!';
            $imgSrcFB = 'http://hardbaconmedia.hardbacon.ca/media/2016/09/facebook-share-button.png';
            $shareFbTitle="Compass - Hardbacon";
            $shareFBDesc="";
            $imgSrcLKIN = 'http://hardbaconmedia.hardbacon.ca/media/2016/09/linkedin-share.png';
            $shareLKIN = "http://hardbacon.ca/compass/&title=Investor’s compass";
        }
        else{
            $shareIfULike = 'Si vous aimez ce que vous voyez, partagez vos résultats avec vos amis!';
             $imgSrcFB = 'http://hardbaconmedia.hardbacon.ca/media/2016/09/Facebook-partage-fr.png';
            $shareFbTitle="Boussole - Hardbacon";
            $shareFBDesc="";
            $imgSrcLKIN = 'http://hardbaconmedia.hardbacon.ca/media/2016/09/linkedin-share-fr.png';
            $shareLKIN = "http://hardbacon.ca/boussole/&title=Boussole de l’investisseur";
        }
?>
        <div class="share">
            <p class='shareFriend'><?php echo $shareIfULike; ?></p>
            <div id="shareButn">
                <img id="FBshareButn" src="<?php echo $imgSrcFB; ?>" alt="Facebook"/>

                <a class="linkedin_share" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo $shareLKIN; ?>&summary=<?php echo $shareText ?>&source=hardbacon.ca"><img id="LKINshareButn" src="<?php echo $imgSrcLKIN; ?>" alt="LinkedIn"/></a>
            </div>

            <script>
                document.getElementById('FBshareButn').onclick = function() {
                    FB.ui({
                        method: 'share',
                        display: 'popup',
                        href: '<?php echo $shareLink; ?>',
                        quote:'<?php echo $shareText; ?>', 
                        picture:'<?php echo $shareGraphImg; ?>',
                    }, function(response){});
                }
            </script>
        </div>
    </div>
    <br>
<?php
    }
     else
    {
?>
    <br>
    <div class="compass_sub">
        <div>
            <label><?php echo $newsletterQ; ?></label>
        </div>
        <div class="form_info">
    <form id="info" action="#" method="post" >
        <div class="input_info">
            <input type="text" name="nom" id="nomFI" style="color: #000;" placeholder="<?php echo $NomPH; ?>allo"><br>
            <br>
            <input type="email" name="email" id="emailFI" style="color: #000;" placeholder="<?php echo $courrielPH; ?>@domain.com">
        </div>
        <br>
        <?php
            echo "<input type='hidden' name='submitValueX' value='".$X."' />";
            echo "<input type='hidden' name='submitValueY' value='".$Y."' />";
        ?>
        <br>
        <input type='hidden' name='fin' />
    </form>
            <input type="submit" id="fin" name="fin" value="<?php echo $textBouton; ?>" onclick="<?php 
                if($currentlang == "en-US"){
                    echo "submitForm()";
                }
                else{
                    echo "submitFormFR()";
                }
            ?>">
        </div>
        <div class="sendinblu_form" hidden="hidden">
            <?php 
                if($currentlang == "en-US"){
                    echo do_shortcode('[sibwp_form id=1]');
                }
                else{
                    echo do_shortcode('[sibwp_form id=2]');
                }
            ?>
        </div>
    </div>
<?php
     }
?>
</div>
<script src="<?php echo $directory; ?>/js/resizeImageMaps.min.js"></script>
<script>
jQuery(document).ready(function(e) {
	jQuery('img[usemap]').resizeImgMap();
});
</script>

<?php wp_footer();?>