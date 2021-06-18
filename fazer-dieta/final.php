<?php
require_once("class/autoload.php");
if (isset($_GET['link'])) :
    $array = [
        "link" => $_GET['link']
    ];
    $consulta = $funcoes->consulta(TABLE_OBTER_DIETA, $array);
    if ($consulta->rowCount() != 0) :
        $resultado = $consulta->fetchObject();
        $infos = $dieta->resultados();
?>
        <!DOCTYPE html>
        <html lang="en-Us">

        <head>
            <script type="c0630722199f150a42e58da2-text/javascript">
                dataLayer = [];
            </script>

            <!-- Global site tag (gtag.js) - Google Analytics -->
            <script async src="https://www.googletagmanager.com/gtag/js?id=UA-120637619-4" type="c0630722199f150a42e58da2-text/javascript"></script>
            <script type="c0630722199f150a42e58da2-text/javascript">
                window.dataLayer = window.dataLayer || [];

                function gtag() {
                    dataLayer.push(arguments);
                }
                gtag('js', new Date());

                gtag('config', 'UA-120637619-4', {
                    'optimize_id': 'GTM-WW86V4F'
                });
            </script>
            <script type="c0630722199f150a42e58da2-text/javascript">
                fbq('track', 'CompleteRegistration', {
                    value: 0,
                    currency: 'USD',
                });
            </script>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="csrf-param" content="_csrf">
            <meta name="csrf-token" content="8JtUAqCg2k5xpbHUwNvfg8gcOk1q_V69Q8XlCGowlUqZ8Tt47fPoLAnp--SGr6_qmitODiTFJ8QmkaleBWjCOQ==">
            <title>Página final do questionário personalizado da dieta Keto</title>
            <link href="<?= CONF_URL_BASE; ?>/css/bootstrap.css" rel="stylesheet">
            <link href="<?= CONF_URL_BASE; ?>/css/site_v1.css" rel="stylesheet">
            <link href="<?= CONF_URL_BASE; ?>/css/all.min.css" rel="stylesheet">
            <script type="c0630722199f150a42e58da2-text/javascript">
                var createDietUserUrl = "\/profiles\/create";
            </script>

        </head>

        <body>


            <div class="cover-get-diet">
                <div class="keto-logo-row">
                    <span class="keto-logo"></span>
                </div>
                <div class="clearfix"></div>
                <div class="container-fluid">
                    <div class="mobile-full-scrn">
                        <div class=" text-center mt-5">
                            <!-- <h1 class=" " style="text-transform: capitalize"></h1>-->
                            <h2 class="big-mobile-header hidden-xs">SUA DIETA DE KETO PESSOAL DE 60 DIAS ESTÁ PRONTA</h2>
                            <h2 class="big-mobile-header visible-xs">SUA DIETA DE KETO PESSOAL DE 60 DIAS ESTÁ PRONTA</h2>
                        </div>
                        <div class="row text-center">

                            <div class="summary-header inline">
                                <button class="blue-gradient big-btn top-btn btn" id="top-pay-button">Clique aqui para o seu plano</button>
                                <!-- <a href="" class="blue-gradient btn big-btn">Click
                here for access</a>-->
                            </div>
                        </div>
                    </div>
                    <div class="row text-center ">


                        <div class="summary-header ">
                            <h1 class="" style="text-transform: capitalize;font-size: 300%;"> Aqui está o seu resumo</h1>
                        </div>

                        <div class="summary-blocks">
                            <div class="summary-block text-left">
                                <div class="summary-info"><a href="javascript:void(0);"></a></div>
                                <div class="info">
                                    <div class="summary-header">
                                        <h2>Calorias Diárias</h2>
                                    </div>
                                    <div class="summary-diagramm text-center">
                                        <div class="blue-round-diagram round-diagram">
                                            <div class="blue-gradient-text bottom-centered">
                                                <?php
                                                if ($resultado->gender == "male") {
                                                    $calorias = (13.75 * $resultado->weight) + (5 * $resultado->height) - (6.76 * $resultado->age) + 66.5;
                                                } else {
                                                    $calorias = (9.56 * $resultado->weight) + (1.85 * $resultado->height) - (4.68 * $resultado->age) + 665;
                                                }
                                                ?>
                                                <?= number_format($calorias, 0, "", ""); ?>&nbsp;-&nbsp;<?= number_format($calorias + 100, 0, "", ""); ?>
                                                <p>Calorias</p>
                                            </div>

                                        </div>
                                        <div class="diagram-range">
                                            <span class="left gray ">0 Calorias</span>
                                            <span class="right gray">5000 Calorias</span>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                    <div class="summary-summary text-center">Calorias Recomendada:<p class="blue-gradient-text">2800&nbsp;-&nbsp;2900</p>
                                    </div>
                                </div>
                                <div class="help">Suas calorias diárias foram calculadas com base em sua altura, peso, idade e níveis de atividade diária.
                                    Seus planos de refeição ceto foram personalizados automaticamente para este número para que você possa com segurança e
                                    perder peso de forma eficiente com base em seus objetivos pessoais. </div>

                            </div>
                            <div class="summary-block text-left">
                                <div class="summary-info"><a href="javascript:void(0);"></a></div>
                                <div class="info">
                                    <div class="summary-header">
                                        <h2>Gorduras</h2>
                                    </div>
                                    <div class="summary-diagramm text-center">
                                        <div class="violet-round-diagram round-diagram">
                                            <div class="violet-gradient-text bottom-centered">
                                                <?= $infos['gorduras']['min'] . ' - ' . $infos['gorduras']['max'] . 'g' ?>
                                                <p>Gorduras</p>
                                            </div>
                                        </div>
                                        <div class="diagram-range">
                                            <span class="left gray ">0g Gorduras</span>
                                            <span class="right gray">300g Gorduras</span>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                    <div class="summary-summary text-center"> Gorduras Recomendada:<p class="violet-gradient-text">
                                            <?= $infos['gorduras']['min'] . ' - ' . $infos['gorduras']['max'] . 'g' ?></p>
                                    </div>
                                </div>
                                <div class="help">
                                    Com uma dieta ceto, as gorduras são mantidas ALTAS. Ao manter as gorduras e os carboidratos baixos, forçamos seu corpo a começar a usar FAT para combustível. A gordura se torna a nova fonte de energia do seu corpo e você se torna muito mais eficiente em queimá-la assim
                                    perder peso mais rápido e mais fácil do que uma dieta regular.
                                </div>
                            </div>
                            <div class="clear hidden-xs"></div>
                            <div class="summary-block text-left">
                                <div class="summary-info"><a href="javascript:void(0);"></a></div>
                                <div class="info">
                                    <div class="summary-header">
                                        <h2>Proteína Diária</h2>
                                    </div>
                                    <div class="summary-diagramm text-center">
                                        <div class="green-round-diagram round-diagram">
                                            <div class="green-gradient-text bottom-centered">
                                                <?= $infos['proteinaDiaria']['min'] . ' - ' . $infos['proteinaDiaria']['max'] . 'g' ?>
                                                <p>Proteína</p>
                                            </div>

                                        </div>
                                        <div class="diagram-range">
                                            <span class="left gray ">0g Proteína</span>
                                            <span class="right gray">400g Proteína</span>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                    <div class="summary-summary text-center">Proteína Recomendada:<p class="green-gradient-text">
                                            <?= $infos['proteinaDiaria']['min'] . ' - ' . $infos['proteinaDiaria']['max'] . 'g' ?></p>
                                    </div>
                                </div>
                                <div class="help">
                                    A proteína é mantida em 20-25% de sua oferta calórica diária.
                                    A proteína ajuda a preservar e construir músculos e é essencial na dieta para garantir o seu corpo
                                    composição permanece e níveis ideais para uma boa aparência e se sentir saudável. </div>

                            </div>
                            <div class="summary-block text-left">
                                <div class="summary-info"><a href="javascript:void(0);"></a></div>
                                <div class="info">
                                    <div class="summary-header">
                                        <h2>Carboidratos diários</h2>
                                    </div>
                                    <div class="summary-diagramm text-center">
                                        <div class="yellow-round-diagram round-diagram">
                                            <div class="yellow-gradient-text bottom-centered">
                                                <?= $infos['carboidratos']['min'] . ' - ' . $infos['carboidratos']['max'] . 'g' ?>
                                                <p>Carboidratos</p>
                                            </div>

                                        </div>
                                        <div class="diagram-range">
                                            <span class="left gray ">0g Carboidratos</span>
                                            <span class="right gray">60g Carboidratos</span>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                    <div class="summary-summary text-center">Carboidratos Recomendada:<p class="yellow-gradient-text">
                                            <?= $infos['carboidratos']['min'] . ' - ' . $infos['carboidratos']['max'] . 'g' ?></p>
                                    </div>
                                </div>
                                <div class="help">
                                    Os carboidratos devem ser mantidos em 5% ou menos de sua oferta calórica diária para que você permaneça em cetose
                                    para máxima queima de gordura.
                                </div>

                            </div>
                            <div class="clear hidden-xs"></div>
                            <div class="summary-block text-left">
                                <div class="summary-info"><a href="javascript:void(0);"></a></div>
                                <div class="info">
                                    <div class="summary-header">
                                        <h2>Ingestão Diária de Água</h2>
                                    </div>
                                    <div class="summary-diagramm text-center">
                                        <div class="water-diagram round-diagram">
                                            <div class="water-centered"><?= $infos['ingestaoAgua']['min'] . 'L' ?>
                                            </div>
                                        </div>
                                        <div class="diagram-range">

                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                    <div class="summary-summary text-center">Água Recomendada:<p class="red-gradient-text"><?= $infos['ingestaoAgua']['min'] . 'L' ?></p>
                                    </div>
                                </div>
                                <div class="help">
                                    Beber bastante água pode ajudar a manter sua pele saudável, aumentar seu metabolismo e garantir que seu
                                    sistema digestivo está funcionando corretamente.
                                    É importante que você beba a quantidade correta em uma dieta cetônica e é por isso que damos a você uma
                                    quantidade recomendada.
                                    Beber quantidades excessivas de água pode causar um desequilíbrio eletrolítico, o que faz com que você sinta
                                    cansado, fraco e tonto e beber muito pouco pode causar desidratação. </div>

                            </div>
                            <div class="summary-block text-left">
                                <div class="summary-info"><a href="javascript:void(0);"></a></div>
                                <div class="info">
                                    <div class="summary-header">
                                        <h2>Seu IMC</h2>
                                    </div>
                                    <div class="summary-diagramm text-center">
                                        <div class="bmi-diagram Obese round-diagram">
                                            <div class="blue-gradient-text bmi-centered"><?= $infos['imc']['min'] ?> </div>
                                        </div>

                                        <div class="clear"></div>
                                    </div>
                                    <div class="summary-summary text-center">Seu IMC:<p class="blue-gradient-text">Obesa</p>
                                    </div>
                                </div>
                                <div class="help">
                                    O índice de massa corporal (IMC) é uma medida que usa sua altura e peso para calcular se o seu peso
                                    é saudável. A menos que você seja excepcionalmente musculoso, o IMC mais frequentemente do que não se correlaciona com a gordura corporal total. Isso significa que, conforme a pontuação do IMC aumenta, também aumenta a gordura corporal total de uma pessoa. </div>

                            </div>
                            <div class="clear hidden-xs"></div>
                            <div class="summary-block text-left">
                                <div class="summary-info"><a href="javascript:void(0);"></a></div>
                                <div class="info">
                                    <div class="summary-header">
                                        <h2>Nível de atividade diária</h2>
                                    </div>
                                    <div class="summary-diagramm text-center">
                                        <div class="heart-diagram round-diagram">
                                            <div class="water-centered">
                                            </div>
                                        </div>
                                        <div class="diagram-range">

                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                    <div class="summary-summary text-center">Seu nível de atividade diária:<p class="pink-gradient-text">
                                            <?= $infos['nivelAtividade']['valor'] ?></p>
                                    </div>
                                </div>
                                <div class="help">Esta é a quantidade de atividade física que você nos disse que faz atualmente a cada dia. Isso nos ajuda a calcular suas calorias diárias gerais, pois quanto mais atividade diária você faz, mais
                                    você pode comer e vice-versa. Esta configuração pode ser ajustada na área de membros </div>

                            </div>
                            <div class="summary-block text-left">
                                <div class="summary-info"><a href="javascript:void(0);"></a></div>
                                <div class="info">
                                    <div class="summary-header">
                                        <h2>Peso alcançável de 30 dias</h2>
                                    </div>
                                    <div class="summary-diagramm text-center">
                                        <div class="scale-diagram round-diagram">
                                            <div class="blue-gradient-text bmi-centered">
                                            </div>

                                        </div>

                                        <div class="clear"></div>
                                    </div>
                                    <div class="summary-summary text-center">Peso alcançável:<p class="lgrn-gradient-text">
                                            <?= $infos['pesoAlcancavel']['peso'] ?></p>
                                    </div>
                                </div>
                                <div class="help">Você estimou o peso após 30 dias de seguir sua dieta cetônica personalizada. Os resultados podem variar</div>

                            </div>
                        </div>

                        <div class="summary-header">

                            <h1 class="bold">Elas fizeram isso</h1>
                        </div>

                        <div class="success-stories">
                            <div class="success-story">
                                <div class="story-headers">
                                    <div class="story-header">ANTES</div>
                                    <div class="story-header">DEPOIS</div>
                                </div>
                                <div class="story-photos">
                                    <div class="story-photo story-photo1-1"></div>
                                    <div class="story-photo story-photo1-2"></div>
                                </div>
                                <div class="clear"></div>
                                <div class="story-content">
                                    <p> Pediram-me para dar a minha opinião sobre o plano de dieta ceto personalizado I
                                        recebido e devo dizer que funciona REALMENTE ...
                                        A partir de hoje perdi 15 quilos, não sinto mais dores de fome e mentalmente me sinto como um alfinete. Esta
                                        definitivamente vai se tornar um "estilo de vida" para mim, pois é tão fácil de seguir ... </p>
                                    <p>
                                        Todas as minhas refeições são planejadas para mim e eu até recebo um
                                        lista de compras para download com todos os ingredientes de que preciso
                                        para a loja semanal, então é realmente um doddle. </p>
                                    <br />
                                    <h3 class="bold mt-2">Katy Thompson</h3>
                                    <h3 class="gray">U.K</h3>
                                </div>


                            </div>

                            <div class="success-story">
                                <div class="story-headers">
                                    <div class="story-header">ANTES</div>
                                    <div class="story-header">DEPOIS</div>
                                </div>
                                <div class="story-photos">
                                    <div class="story-photo story-photo2-1"></div>
                                    <div class="story-photo story-photo2-2"></div>
                                </div>
                                <div class="clear"></div>
                                <div class="story-content">
                                    <p>Depois de tentar tantas dietas ao longo dos anos, posso dizer honestamente que a Dieta Keto mudou minha vida.</p>
                                    <p>Em menos de 2 meses, perdi quase 33 libras e notei melhorias significativas no meu tom de pele e níveis de energia.</p>
                                    <p> Eu também me tornei mais ativo do que nunca.</p>
                                    <p>Meu plano de dieta ceto personalizada torna isso tão fácil e coloca tudo em etapas fáceis para que eu não possa falhar</p>
                                    <p>Definitivamente, vale a pena tentar se quiser perder peso.</p>
                                    <br />
                                    <h3 class="bold mt-2">Gabriella</h3>
                                    <h3 class="gray">Texas U.S</h3>
                                </div>


                            </div>
                            <div class="clickbank-text"> * Os resultados obtidos não são típicos, os resultados do consumidor podem variar.</div>
                        </div>

                        <div class="container-fluid">
                            <div class="summary-header">

                                <h1 class="bold">Alguns de nossos recursos</h1>
                            </div>

                            <div class="features-blocks row">
                                <div class="feature-row">
                                    <div class="feature-icon col-md-2 col-sm-2">
                                        <img src="img/icons/gear-icon-vi.png">
                                    </div>
                                    <div class="feature-content col-md-10 col-sm-10">
                                        <div class="feature-header">Totalmente automatizado e editável</div>
                                        <div>Usamos algoritmos sofisticados para criar nossos planos,
                                            isso significa que tudo é totalmente editável em sua área de membros, então se você quiser ajustar algo em seu plano
                                            nosso sistema irá recalcular tudo para você imediatamente.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="features-blocks row">
                                <div class="feature-row">
                                    <div class="feature-icon col-md-2 col-sm-2">
                                        <img src="img/icons/fast-food-icon-ye.png">
                                    </div>
                                    <div class="feature-content col-md-10  col-sm-10">
                                        <div class="feature-header">Restaurantes fast food</div>
                                        <div>Entendemos que as pessoas não podem cozinhar para todas as refeições,
                                            é por isso que somos o único plano cetônico que permite incorporar fast food "amigo do ceto"
                                            de lugares como Mcdonalds, Subway, Burger King, In & Out Burger, Wendys e muitos mais.</div>
                                        <div class="fast-food-icons">
                                            <div class="fast-food-icon">
                                                <img src="img/icons/subway-icon.png">
                                            </div>
                                            <div class="fast-food-icon">
                                                <img src="img/icons/mac-icon.png">
                                            </div>
                                            <div class="fast-food-icon">
                                                <img src="img/icons/burger-king-icon.png">
                                            </div>
                                            <div class="fast-food-icon">
                                                <img src="img/icons/wendys-icon.png">
                                            </div>
                                            <div class="fast-food-icon">
                                                <img src="img/icons/taco-bell-icon.png">
                                            </div>
                                            <div class="fast-food-icon">
                                                <img src="img/icons/chipotle-icon.png">
                                            </div>
                                            <div class="fast-food-icon">
                                                <img src="img/icons/in-out-icon.png">
                                            </div>
                                        </div>
                                        <div class="fast-food-icons">
                                            <div class="fast-food-icon">
                                                <img src="img/icons/starbucks-icon.png">
                                            </div>
                                            <div class="fast-food-icon">
                                                <img src="img/icons/arbys-icon.png">
                                            </div>
                                            <div class="fast-food-icon">
                                                <img src="img/icons/j-j-icon.png">
                                            </div>
                                            <div class="fast-food-icon">
                                                <img src="img/icons/kfc-icon.png">
                                            </div>
                                            <div class="fast-food-icon">
                                                <img src="img/icons/popeyes-icon.png">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="features-blocks">
                                <div class="feature-row">
                                    <div class="feature-icon col-md-2 col-sm-2">
                                        <img src="img/icons/clk-icon-blue.png">
                                    </div>
                                    <div class="feature-content col-md-10  col-sm-10">
                                        <div class="feature-header">Jejum intermitente</div>
                                        <div>Quer pular uma refeição? Claro, sem problemas, sua dieta cetônica personalizada torna mais fácil pular refeições para que você possa planejar
                                            comer de acordo com sua programação, em vez de se tornar um escravo de sua dieta.</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- <div class="summary-header">

             <h1 class="bold">Why Keto?</h1>
         </div>

         <div class="why-keto-blocks">
             <div class="why-keto-block col-md-4">
                 <div class="wk-icon scale-icon">

                 </div>
                 <div class="gray">Lose Body Fat Effortlessly
                 </div>
                 <div>Scientific studies have shown
                     significant faster fat loss from a
                     keto diet than a high carb low fat diet
                 </div>
             </div>
             <div class="why-keto-block col-md-4">
                 <div class="wk-icon trade-icon">

                 </div>
                 <div class="gray">Reduced hunger Cravings
                 </div>
                 <div><p> Scientific studies show that hunger can be significantly reduced on a ketogenic diet.</p>
                     This greatly reduces the chances of 'bingeing' you may have encountered on other diet plans
                 </div>
             </div>
             <div class="why-keto-block col-md-4">
                 <div class="wk-icon brain-icon">

                 </div>
                 <div class="gray">Mentally Sharper & More Energy

                 </div>
                 <div>
                     Many members have reported
                     heightened mental clarity and increased energy levels while on a ketogenic diet
                 </div>
             </div>
         </div>
         <div class="clearfix"></div>-->
                        <!-- Delicious -->
                        <!--  <div class="summary-header">

            <h1 class="bold">Here’s Some Of The Delicious Keto Recipes We Have For You</h1>
        </div>

        <div class="delicious-block">
                        <div class="col-sm-6 ">
                <div class="recipe-promo">
                    <div class="recipe-promo-img"
                         style="background-image: url('')" >

                    </div>
                    <div class="recipe-promo-label">
                        <p></p>
                    </div>
                </div>

            </div>
                    </div>-->
                        <!--End  Delicious -->
                        <div class="clearfix"></div>
                        <div class="summary-header mt-5" id="what-you-get">

                            <h1 class="bold">O que você ganha</h1>
                        </div>

                        <div class="what-you-get-blocks">
                            <div class="wyg-block col-md-6 ">
                                <div class="mac-iphone"></div>
                            </div>
                            <div class="wyg-block col-md-6 ">
                                <!--<div class="wyg-list">
                    <ul>
                        <li>8 week fully customized keto meal plan for your weight loss goals and food preferences.</li>
                        <li>Full instructions on how to prepare and cook each delicious meal.</li>
                        <li>Correct amount of calories, fat, protein & carbs per meal to lose weight.</li>
                        <li>Edit your food preferences at any time in your custom members area.</li>
                        <li>Every week as you lose weight we recalculate your daily meal requirements for continuous weight
                            loss.
                        </li>
                        <li>Weekly shopping list of ingredients needed for every meal.</li>
                    </ul>
                </div>-->

                                <div class="m-item-reason o-section-benefits__reason">
                                    <img data-src="https://assets.appsforfit.com/assets/img/keto/icons/reason-1.svg" class="a-icon m-item-reason__icon" src="https://assets.appsforfit.com/assets/img/keto/icons/reason-1.svg" style="visibility: visible;">
                                    <div class="m-item-reason__text">Os tamanhos das porções foram calculados especificamente para você</div>
                                </div>
                                <div class="m-item-reason o-section-benefits__reason">
                                    <img data-src="https://assets.appsforfit.com/assets/img/keto/icons/reason-2.svg" class="a-icon m-item-reason__icon" src="https://assets.appsforfit.com/assets/img/keto/icons/reason-2.svg" style="visibility: visible;">
                                    <div class="m-item-reason__text">A dieta ceto mais popular</div>
                                </div>
                                <div class="m-item-reason o-section-benefits__reason">
                                    <img data-src="https://assets.appsforfit.com/assets/img/keto/icons/reason-3.svg" class="a-icon m-item-reason__icon" src="https://assets.appsforfit.com/assets/img/keto/icons/reason-3.svg" style="visibility: visible;">
                                    <div class="m-item-reason__text">Receitas fáceis de preparar as refeições</div>
                                </div>

                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div id="final-payment-box">
                            <div>
                                <a href="/signup" class="rounded-pink-rec">
                                    <div class="big-price mt-2">Obtê-lo agora</div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="footer text-center">
                    <ul class="footer-links">
                        <li><a href="/privacy.html" target="_blank">Privacidade</a></li>
                        <li><a href="/site/terms.html" target="_blank">Trmos e Condições</a></li>
                        <!--  <li></li>-->
                        <li><a href="/affiliates.html" target="_blank">Afiliados</a></li>
                    </ul>

                </div>
            </div>
            <!-- ClickBank Trust Badge -->

            <script src="<?= CONF_URL_BASE; ?>/js/md5.js" type="c0630722199f150a42e58da2-text/javascript"></script>
            <script src="<?= CONF_URL_BASE; ?>/js/lajax.js" type="c0630722199f150a42e58da2-text/javascript"></script>
            <script src="<?= CONF_URL_BASE; ?>/js/jquery.js" type="c0630722199f150a42e58da2-text/javascript"></script>
            <script src="<?= CONF_URL_BASE; ?>/js/yii.js" type="c0630722199f150a42e58da2-text/javascript"></script>
            <script src="<?= CONF_URL_BASE; ?>/js/bootstrap.js" type="c0630722199f150a42e58da2-text/javascript"></script>
            <script type="c0630722199f150a42e58da2-text/javascript">
                jQuery(function($) {
                    $("#top-pay-button").click(function() {
                        $('html, body').animate({
                            scrollTop: $("#what-you-get").offset().top
                        }, 2000);
                    });

                    $('.summary-info').click(function(t) {

                        t.preventDefault(), $(this).closest(".summary-block").toggleClass("summary-block--active")

                    });


                });
            </script>
            <script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="c0630722199f150a42e58da2-|49" defer=""></script>
        </body>

        </html>
    <?php endif; ?>
<?php endif; ?>