<?php
require_once ("class/CONFIG.php");
?>

<!DOCTYPE html>
<html lang="en-Us">
<head>
    <script type="b4d8b2c50c2536be0e4a56e7-text/javascript">
        dataLayer = [];
    </script>

            <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-120637619-4" type="b4d8b2c50c2536be0e4a56e7-text/javascript"></script>
<script type="b4d8b2c50c2536be0e4a56e7-text/javascript">
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());

gtag('config', 'UA-120637619-4', { 'optimize_id': 'GTM-WW86V4F'});
</script>
        <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-param" content="_csrf">
<meta name="csrf-token" content="0yqCKPSD0M4ARzvJTHqkZcPQ10PVtBcAvDnM_qZaHheAErZLxbeKkW0MUagAEPxWhue9EbzYc0XMT6vO5BRfcw==">
    <title>Questionário sobre dieta ceto personalizada</title>
    <link href="<?= CONF_URL_BASE; ?>/css/sliding-form-style.css" rel="stylesheet">
<link href="<?= CONF_URL_BASE; ?>/css/bootstrap.css" rel="stylesheet">
<link href="<?= CONF_URL_BASE; ?>/css/site_v1.css" rel="stylesheet">
<link href="<?= CONF_URL_BASE; ?>/css/all.min.css" rel="stylesheet">
<link href="<?= CONF_URL_BASE; ?>/css/style.css" rel="stylesheet">
<script type="text/javascript">
  var createDietUserUrl = "<?= CONF_URL_BASE; ?>/create.php";</script>
                </head>

<body>

<!-- Preloader -->
<!--<div class="spinner-area" id="preloader">
    <div class="spinner_a"></div>
</div>-->
<!-- ./Preloader -->
<div class="cover-get-diet  container-fluid">
    <div class="keto-logo-row">
        <span class="keto-logo"></span>
    </div>
    <div class="clearfix"></div>



<div class="keto-form-wrap row" id="wrapper" style="display: none">
    <div id="steps">

        <form id="formElem" name="formElem" action="/get-diet" method="post">
<input type="hidden" name="_csrf" value="0yqCKPSD0M4ARzvJTHqkZcPQ10PVtBcAvDnM_qZaHheAErZLxbeKkW0MUagAEPxWhue9EbzYc0XMT6vO5BRfcw==">        <transition name="slide-fade" :duration="1000" appear mode="out-in">
        <fieldset v-if="step == 1" class="step">

            <div class="keto-step-form-wrap">
                <h1>Obtenha sua dieta Keto</h1>
                <ul class="m-list-reasons homepage-list">
                  <li><div>1.</div>Selecione o seu gênero</li>
                  <li><div>2.</div>Defina o seu estilo de vida</li>
                  <li><div>3.</div>Escolha os tipos de carnes</li>
                  <li><div>4.</div>Escolha os tipos de vegestais</li>
                  <li><div>5.</div>Escolha os seus alimentos preferidos</li>
                  <li><div>6.</div>Insira as suas medidas</li>
                  <li><div>7.</div>Obtenha o seu plano personalizado</li>
                </ul>
                <div id="gender-select">
                    <label id="gender-male-label" for="gender-male" class="radio-label" :class="getCheckboxClass('Male','gender')">
                        Homem                        <input type="radio" name="gender" id="gender-male" v-model="form.gender" value="Male" @click="goToNext()" class="">
                    </label>
                    <span>OU</span>
                    <label id="gender-female-label" for="gender-female" class="radio-label" :class="getCheckboxClass('Female','gender')" >
                        Mulher                        <input type="radio" name="gender" id="gender-female" v-model="form.gender" value="Female" @click="goToNext()"
                               class="">
                    </label>
                </div>
            </div>

        </fieldset>
        <fieldset v-if="step == 2" class="step">
            <div class="keto-step-form-wrap">
                <h1>Nível de atividade diária</h1>
                <div id="activity-select">

                    
                        <div class="gradient-input-container ">
                            <label for="activity-level-12"
                                   :class="getCheckboxClass('12','activity_level')">
                                <input type="radio"
                                       name="activity_level"
                                       v-model="form.activity_level"
                                       @click="goToNext()"
                                       id="activity-level-12"
                                       value="12">
                                Preguiçoso                            </label>
                        </div>

                    
                        <div class="gradient-input-container ">
                            <label for="activity-level-13"
                                   :class="getCheckboxClass('13','activity_level')">
                                <input type="radio"
                                       name="activity_level"
                                       v-model="form.activity_level"
                                       @click="goToNext()"
                                       id="activity-level-13"
                                       value="13">
                                Um pouco ativo                           </label>
                        </div>

                    
                        <div class="gradient-input-container ">
                            <label for="activity-level-14"
                                   :class="getCheckboxClass('14','activity_level')">
                                <input type="radio"
                                       name="activity_level"
                                       v-model="form.activity_level"
                                       @click="goToNext()"
                                       id="activity-level-14"
                                       value="14">
                                Atividade Média                            </label>
                        </div>

                    
                        <div class="gradient-input-container ">
                            <label for="activity-level-15"
                                   :class="getCheckboxClass('15','activity_level')">
                                <input type="radio"
                                       name="activity_level"
                                       v-model="form.activity_level"
                                       @click="goToNext()"
                                       id="activity-level-15"
                                       value="15">
                                Muito ativo                           </label>
                        </div>

                    
                        <div class="gradient-input-container ">
                            <label for="activity-level-16"
                                   :class="getCheckboxClass('16','activity_level')">
                                <input type="radio"
                                       name="activity_level"
                                       v-model="form.activity_level"
                                       @click="goToNext()"
                                       id="activity-level-16"
                                       value="16">
                                Extremamente Ativo                        </label>
                        </div>

                                    </div>
            </div>

        </fieldset>
        <fieldset v-if="step == 3" class="step">
            <div class="keto-step-form-wrap">
                <h1>  Carne</h1>
                <div class="sub-header-info">Selecione qual carne você gostaria de ser incluída</div>
                <div id="meat-select">
                    
                        <div class="gradient-round-input-container "
                             :class="getCheckboxArrClass('chicken','meal_tag_meat')">
                            <label for="meal-chicken">
                                <!-- click-to-next-->
                                <input type="checkbox" @change="resetNoMeat" name="meal[]" v-model="form.meal_tag_meat" id="meal-chicken"
                                       value="chicken">
                                <span class="chicken-icon"></span>
                                <p>Frango</p>
                            </label>
                        </div>


                    
                        <div class="gradient-round-input-container "
                             :class="getCheckboxArrClass('pork','meal_tag_meat')">
                            <label for="meal-pork">
                                <!-- click-to-next-->
                                <input type="checkbox" @change="resetNoMeat" name="meal[]" v-model="form.meal_tag_meat" id="meal-pork"
                                       value="pork">
                                <span class="pork-icon"></span>
                                <p>Porco</p>
                            </label>
                        </div>


                    
                        <div class="gradient-round-input-container "
                             :class="getCheckboxArrClass('beef','meal_tag_meat')">
                            <label for="meal-beef">
                                <!-- click-to-next-->
                                <input type="checkbox" @change="resetNoMeat" name="meal[]" v-model="form.meal_tag_meat" id="meal-beef"
                                       value="beef">
                                <span class="beef-icon"></span>
                                <p>Bovina</p>
                            </label>
                        </div>


                    <div class="clear hidden-xs"></div>
                        <div class="gradient-round-input-container "
                             :class="getCheckboxArrClass('fish','meal_tag_meat')">
                            <label for="meal-fish">
                                <!-- click-to-next-->
                                <input type="checkbox" @change="resetNoMeat" name="meal[]" v-model="form.meal_tag_meat" id="meal-fish"
                                       value="fish">
                                <span class="fish-icon"></span>
                                <p>Peixe</p>
                            </label>
                        </div>


                    
                        <div class="gradient-round-input-container "
                             :class="getCheckboxArrClass('bacon','meal_tag_meat')">
                            <label for="meal-bacon">
                                <!-- click-to-next-->
                                <input type="checkbox" @change="resetNoMeat" name="meal[]" v-model="form.meal_tag_meat" id="meal-bacon"
                                       value="bacon">
                                <span class="bacon-icon"></span>
                                <p>Bacon</p>
                            </label>
                        </div>


                    
                        <div class="gradient-round-input-container "
                             :class="getCheckboxArrClass('no-meat','meal_tag_meat')">
                            <label for="meal-no-meat">
                                <!-- click-to-next-->
                                <input type="checkbox" @change="checkMeat" name="meal[]" v-model="form.meal_tag_meat" id="meal-no-meat"
                                       value="no-meat">
                                <span class="no-meat-icon"></span>
                                <p>Sem carne</p>
                            </label>
                        </div>


                    
                    <div>
                        <a class="download-ebook-button"  @click="goToNext"
                           href="javascript:void(0);">Próximo&nbsp;&rarr;</a>
                    </div>
                    <div class="error-msg">{{error_msg}}</div>

                </div>
            </div>


        </fieldset>
        <fieldset v-if="step == 4" class="step">
            <div class="keto-step-form-wrap">
                <h1>Vegetais</h1>
                <div class="sub-header-info">
Selecione quais vegetais você gostaria de ser incluído                </div>
                <div id="veggies-select">
                    
                        <div class="gradient-round-input-container "
                             :class="getCheckboxArrClass('broccoli','meal_tag_veg')">
                            <label for="meal-broccoli" class="">
                                <input type="checkbox" name="meal[]" v-model="form.meal_tag_veg" id="meal-broccoli"
                                       value="broccoli">
                                <span class="broccoli-icon"
                                      style="background-image: url('img/broccoli-icon.png');"></span>
                                <p>Brócolis</p>
                            </label>
                        </div>


                    
                        <div class="gradient-round-input-container "
                             :class="getCheckboxArrClass('mushrooms','meal_tag_veg')">
                            <label for="meal-mushrooms" class="">
                                <input type="checkbox" name="meal[]" v-model="form.meal_tag_veg" id="meal-mushrooms"
                                       value="mushrooms">
                                <span class="mushrooms-icon"
                                      style="background-image: url('img/mushrooms-icon.png');"></span>
                                <p>Cogumelos</p>
                            </label>
                        </div>


                    
                        <div class="gradient-round-input-container "
                             :class="getCheckboxArrClass('zucchini','meal_tag_veg')">
                            <label for="meal-zucchini" class="">
                                <input type="checkbox" name="meal[]" v-model="form.meal_tag_veg" id="meal-zucchini"
                                       value="zucchini">
                                <span class="zucchini-icon"
                                      style="background-image: url('img/zucchini-icon.png');"></span>
                                <p>Abobrinha</p>
                            </label>
                        </div>


                    <div class="clear hidden-xs"></div>
                        <div class="gradient-round-input-container "
                             :class="getCheckboxArrClass('cauliflower','meal_tag_veg')">
                            <label for="meal-cauliflower" class="">
                                <input type="checkbox" name="meal[]" v-model="form.meal_tag_veg" id="meal-cauliflower"
                                       value="cauliflower">
                                <span class="cauliflower-icon"
                                      style="background-image: url('img/cauliflower-icon.png');"></span>
                                <p>Couve-flor</p>
                            </label>
                        </div>


                    
                        <div class="gradient-round-input-container "
                             :class="getCheckboxArrClass('asparagus','meal_tag_veg')">
                            <label for="meal-asparagus" class="">
                                <input type="checkbox" name="meal[]" v-model="form.meal_tag_veg" id="meal-asparagus"
                                       value="asparagus">
                                <span class="asparagus-icon"
                                      style="background-image: url('img/asparagus-icon.png');"></span>
                                <p>Espargos</p>
                            </label>
                        </div>


                    
                        <div class="gradient-round-input-container "
                             :class="getCheckboxArrClass('avocado','meal_tag_veg')">
                            <label for="meal-avocado" class="">
                                <input type="checkbox" name="meal[]" v-model="form.meal_tag_veg" id="meal-avocado"
                                       value="avocado">
                                <span class="avocado-icon"
                                      style="background-image: url('img/avocado-icon.png');"></span>
                                <p>Abacate</p>
                            </label>
                        </div>


                                        <div>
                        <a class="download-ebook-button "  @click="goToNext"
                           href="javascript:void(0);">Próximo&nbsp;&rarr;</a>
                    </div>
                    <div class="error-msg">{{error_msg}}</div>
                </div>
            </div>


        </fieldset>
        <fieldset v-if="step == 5" class="step">
            <div class="keto-step-form-wrap">
                <h1>Outra comida</h1>
                <div class="sub-header-info">Selecione os outros alimentos que gostaria de incluir             </div>
                <div id="products-select" style="">

                    
                        <div class="gradient-round-input-container  "
                             :class="getCheckboxArrClass('egg','meal_tag_other')">
                            <label for="meal-egg" class="">
                                <input type="checkbox" name="meal[]" v-model="form.meal_tag_other" id="meal-egg"
                                       value="egg">
                                <span class="egg-icon"
                                      style="background-image: url('img/egg-icon.png');"></span>
                                <p>Ovo</p>
                            </label>
                        </div>


                    
                        <div class="gradient-round-input-container  "
                             :class="getCheckboxArrClass('nuts','meal_tag_other')">
                            <label for="meal-nuts" class="">
                                <input type="checkbox" name="meal[]" v-model="form.meal_tag_other" id="meal-nuts"
                                       value="nuts">
                                <span class="nuts-icon"
                                      style="background-image: url('img/nuts-icon.png');"></span>
                                <p>Nozes</p>
                            </label>
                        </div>


                    
                        <div class="gradient-round-input-container  "
                             :class="getCheckboxArrClass('cheese','meal_tag_other')">
                            <label for="meal-cheese" class="">
                                <input type="checkbox" name="meal[]" v-model="form.meal_tag_other" id="meal-cheese"
                                       value="cheese">
                                <span class="cheese-icon"
                                      style="background-image: url('img/cheese-icon.png');"></span>
                                <p>Queijo</p>
                            </label>
                        </div>


                    
                        <div class="gradient-round-input-container  "
                             :class="getCheckboxArrClass('cottage_cheese','meal_tag_other')">
                            <label for="meal-cottage_cheese" class="">
                                <input type="checkbox" name="meal[]" v-model="form.meal_tag_other" id="meal-cottage_cheese"
                                       value="cottage_cheese">
                                <span class="cottage_cheese-icon"
                                      style="background-image: url('img/cottage_cheese-icon.png');"></span>
                                <p>Requeijão</p>
                            </label>
                        </div>


                    <div class="clear"></div>
                        <div class="gradient-round-input-container  "
                             :class="getCheckboxArrClass('butter','meal_tag_other')">
                            <label for="meal-butter" class="">
                                <input type="checkbox" name="meal[]" v-model="form.meal_tag_other" id="meal-butter"
                                       value="butter">
                                <span class="butter-icon"
                                      style="background-image: url('img/butter-icon.png');"></span>
                                <p>Manteiga</p>
                            </label>
                        </div>


                    
                        <div class="gradient-round-input-container  "
                             :class="getCheckboxArrClass('coconut','meal_tag_other')">
                            <label for="meal-coconut" class="">
                                <input type="checkbox" name="meal[]" v-model="form.meal_tag_other" id="meal-coconut"
                                       value="coconut">
                                <span class="coconut-icon"
                                      style="background-image: url('img/coconut-icon.png');"></span>
                                <p>Coco</p>
                            </label>
                        </div>


                                        <div>
                        <a class="download-ebook-button "  @click="goToNext"
                           href="javascript:void(0);">Próximo&nbsp;&rarr;</a>
                    </div>
                    <div class="error-msg">{{error_msg}}</div>
                </div>
            </div>
        </fieldset>
        <!-- <fieldset class="step">
             <legend>Account</legend>
         </fieldset>-->

        <fieldset v-if="step == 6" class="step">
            <div class="keto-step-form-wrap">
                <h1>Sua Medidas</h1>
                <div class="switch6" style="border:none">
                    <label class="switch6-light" onclick="if (!window.__cfRLUnblockHandlers) return false; " data-cf-modified-b4d8b2c50c2536be0e4a56e7-="">
                        <input id="metric" name="imperial_metric" v-model="form.imperial_metric" type="checkbox" checked="checked">
                        <span>
                            <span>Métrico</span>
                            <span>Imperial</span>
                        </span>
                        <a class="btn blue-gradient-button btn-primary"></a>
                    </label>
                </div>
                <div id="imperial-form" v-if="form.imperial_metric" class="mt-3  metric-form">
                    <div>
                        <div class="input-field-row ">
                            <input class="cake-icon inner-icon"
                                   id="input-age_i"
                                   v-model="form.age"
                                   name="age_i"
                                   type="number"
                                   @change="validateInput"
                                   placeholder="Idade" min="14" max="100">
                            <div class="a-input__unit">Idade</div>
                            <span class="a-input__input--error"></span>
                        </div>
                    </div>
                    <div>
                        <div class="input-field-row">
                            <input class="height-icon inner-icon-5 "
                                   id="input-height_i_ft"
                                   v-model="form.height_i_ft"
                                   @change="validateInput"
                                   name="height_i_ft"
                                   type="number"
                                   placeholder="ft" min="4" max="7">
                            <div class="a-input__unit">ft</div>
                            <span class="a-input__input--error"></span>
                        </div>

                        <div class="input-field-row">
                            <input class="height-icon inner-icon-5 "
                                   id="input-height_i_inh"
                                   v-model="form.height_i_inh"
                                   name="height_i_inh"
                                   type="number"
                                   @change="validateInput"
                                   placeholder="inch" min="0" max="11">
                            <div class="a-input__unit">inch</div>
                            <span class="a-input__input--error"></span>
                        </div>
                    </div>
                    <div>
                        <div class="input-field-row">
                            <input class="weight-icon inner-icon"
                                   id="input-weight_i"
                                   name="current_i_weight"
                                   v-model="form.current_i_weight"
                                   @change="validateInput"
                                   type="number"
                                   placeholder="Peso(lb)" min="88" max="400">
                            <div class="a-input__unit">lb</div>
                            <span class="a-input__input--error"></span>
                        </div>
                    </div>
                    <div>
                        <div class="input-field-row">
                            <input class="weight-icon inner-icon"
                                   id="input-target_weight_i"
                                   name="target_i_weight"
                                   v-model="form.target_i_weight"
                                   @change="validateInput"
                                   type="number"
                                   placeholder="Peso alvo (lb)" min="88"
                                   max="400">
                            <div class="a-input__unit">lb</div>
                            <span class="a-input__input--error"></span>
                        </div>
                    </div>
                </div>

                <div id="metric-form" v-if="!form.imperial_metric" class="mt-3  metric-form">
                    <div>
                        <div class="input-field-row">
                            <input class="cake-icon inner-icon"
                                   id="input-age"
                                   name="age"
                                   v-model="form.age"
                                   @change="validateInput"
                                   type="number"
                                   placeholder="Idade" min="14" max="100">
                            <div class="a-input__unit">Idade</div>
                            <span class="a-input__input--error"></span>
                        </div>
                    </div>
                    <div>
                        <div class="input-field-row">
                            <input class="height-icon inner-icon"
                                   id="input-height"
                                   v-model="form.height"
                                   @change="validateInput"
                                   name="height"
                                   type="number"
                                   placeholder="Altura(CM)" min="130" max="242">
                            <div class="a-input__unit">cm</div>
                            <span class="a-input__input--error"></span>
                        </div>
                    </div>
                    <div>
                        <div class="input-field-row">

                            <input class="weight-icon inner-icon"
                                   id="input-weight"
                                   name="weight"
                                   v-model="form.weight"
                                   @change="validateInput"
                                   type="number"
                                   placeholder="Peso(KG)"
                                   min="40"
                                   max="180">
                            <div class="a-input__unit">kg</div>
                            <span class="a-input__input--error"></span>
                        </div>
                    </div>
                    <div>
                        <div class="input-field-row">
                            <input class="weight-icon inner-icon"
                                   id="input-target_weight"
                                   v-model="form.target_weight"
                                   @change="validateInput"
                                   name="target_weight"
                                   type="number"
                                   placeholder="Peso alvo (KG)"
                                   min="40"
                                   max="180">
                            <div class="a-input__unit">kg</div>
                            <span class="a-input__input--error"></span>
                        </div>
                    </div>
                </div>

                <div class="mt-3">
                    <a class="download-ebook-button"
                       id="continue"
                       href="javascript:void(0);"
                       @click="createUser"
                    >Continue&nbsp;&rarr;</a>
                </div>
            </div>


            <div class="error-msg">{{error_msg}}</div>
        </fieldset>
        </transition>

        </form>    </div>
    <!--  Step 1 -->

    <div id="navigation" >
        <a class="gray-round" @click="goToPrev">&larr;</a>
        <ul>
            <li class="selected first-nav-step">
                <a class="nav" :class="getNavPointStyle(1)" href="#"></a>
            </li>
            <li class="selected nav-step">
                <a class="nav" :class="getNavPointStyle(2)" href="#"></a>
            </li>
            <li class="selected">
                <a class="nav" :class="getNavPointStyle(3)" href="#"></a>
            </li>
            <li class="selected">
                <a class="nav" :class="getNavPointStyle(4)" href="#"></a>
            </li>
            <li class="selected">
                <a class="nav" :class="getNavPointStyle(5)" href="#"></a>
            </li>

            <li class="selected">
                <a class="nav" :class="getNavPointStyle(6)" href="#"></a>
            </li>
        </ul>
    </div>
</div>
<img width="0" height="0" src="//rtb.mfadsrvr.com/pixel?id=371146&type=img" />
<div class="steps-progress-wrap">

</div>
<div class="modal" id="spinner" style="display: block">
    <div class="sk-circle">
        <div class="sk-circle1 sk-child"></div>
        <div class="sk-circle2 sk-child"></div>
        <div class="sk-circle3 sk-child"></div>
        <div class="sk-circle4 sk-child"></div>
        <div class="sk-circle5 sk-child"></div>
        <div class="sk-circle6 sk-child"></div>
        <div class="sk-circle7 sk-child"></div>
        <div class="sk-circle8 sk-child"></div>
        <div class="sk-circle9 sk-child"></div>
        <div class="sk-circle10 sk-child"></div>
        <div class="sk-circle11 sk-child"></div>
        <div class="sk-circle12 sk-child"></div>
    </div>
</div>

<!--<div style="display: none;">
    <form method="post" class="af-form-wrapper" id="af-form" accept-charset="UTF-8"
          action="https://www.aweber.com/scripts/addlead.pl">
        <div style="display: none;">
            <input type="hidden" name="meta_web_form_id" value="902123027"/>
            <input type="hidden" name="meta_split_id" value=""/>
            <input type="hidden" name="listname" value="awlist5250264"/>
            <input type="hidden" name="redirect" value="" id="redirect_989a1d8800533edd15d50472d9465d48"/>
            <input type="hidden" name="meta_redirect_onlist" value="https://www.google.com"/>
            <input type="hidden" name="meta_adtracking" value="Keto_Sales_Form"/>
            <input type="hidden" name="meta_message" value="1"/>
            <input type="hidden" name="meta_required" value="name,email"/>
            <input type="hidden" name="meta_tooltip" value=""/>
        </div>
        <input id="awf_field-name" type="text" name="name" class="text" value=""/>
        <input class="text" id="awf_field-email" type="text" name="email" value="" tabindex="501"/>
    </form>
</div>-->

<div class="footer text-center">

</div>
</div>

<script src="<?= CONF_URL_BASE; ?>/js/md5.js" type="b4d8b2c50c2536be0e4a56e7-text/javascript"></script>
<script src="<?= CONF_URL_BASE; ?>/js/lajax.js" type="b4d8b2c50c2536be0e4a56e7-text/javascript"></script>
<script src="<?= CONF_URL_BASE; ?>/js/jquery.js" type="b4d8b2c50c2536be0e4a56e7-text/javascript"></script>
<script src="<?= CONF_URL_BASE; ?>/js/yii.js" type="b4d8b2c50c2536be0e4a56e7-text/javascript"></script>
<script src="<?= CONF_URL_BASE; ?>/js/vue.js" type="b4d8b2c50c2536be0e4a56e7-text/javascript"></script>
<script src="<?= CONF_URL_BASE; ?>/js/index-form.js" type="b4d8b2c50c2536be0e4a56e7-text/javascript"></script>
<script src="<?= CONF_URL_BASE; ?>/js/TouchTimerWorkaround.js" type="b4d8b2c50c2536be0e4a56e7-text/javascript"></script>
<script src="<?= CONF_URL_BASE; ?>/js/yii.activeForm.js" type="b4d8b2c50c2536be0e4a56e7-text/javascript"></script>
<script src="<?= CONF_URL_BASE; ?>/js/js/bootstrap.js" type="b4d8b2c50c2536be0e4a56e7-text/javascript"></script>
<script type="b4d8b2c50c2536be0e4a56e7-text/javascript">jQuery(function ($) {

 $('.meat-checkbox').on('click',function () {
                      if($(this).find('input').prop('checked')){
                      console.log('uncheck no meal');
                          if($('#meal-no-meat').prop('checked')){
                          $('#meal-no-meat').click();
                          };
                      }else{
                      console.log('not checked');
                      }
                  });
                  $('.meal-no-meat-label').on('click', function(){
                      if($('#meal-no-meat').prop('checked')){
                          $('.meat-checkbox input[type=checkbox]').each(function () {
                              if($(this).prop('checked')){
                              $(this).click();
                              };
                          });
                      }
                  });
                  
                  $(document).ready(function () {
                    vm.form.imperial_metric = 0
                    });
 
jQuery('#formElem').yiiActiveForm([], []);

$(window).on('load',function() {
    $('#preloader').fadeOut('100');
});


});</script><script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="b4d8b2c50c2536be0e4a56e7-|49" defer=""></script></body>
</html>
