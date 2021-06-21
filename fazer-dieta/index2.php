<?php
require_once("class/CONFIG.php");
?>

<!DOCTYPE html>
<html class="no-js" lang="en-Us">

<head>
    <script type="8487073e58850e68bc0fda36-text/javascript">
        dataLayer = [];
    </script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-120637619-4" type="8487073e58850e68bc0fda36-text/javascript"></script>
    <script type="8487073e58850e68bc0fda36-text/javascript">
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-120637619-4', {
            'optimize_id': 'GTM-WW86V4F'
        });
    </script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-param" content="_csrf">
    <meta name="csrf-token" content="UcONk2KPe55klOfLRatUzU8JBxZFapuP4-gzV1BkzBwyoL3SEuQN9hyjrLwd2G39JnlqcRcy7d_QglgINRCHUg==">
    <link href="<?= CONF_URL_BASE; ?>/dashboard/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?= CONF_URL_BASE; ?>/dashboard/css/component.css" rel="stylesheet">
    <link href="<?= CONF_URL_BASE; ?>/dashboard/css/style.css" rel="stylesheet">
    <style>
        .preparation-list li::before {
            content: "step "counter(number);
        }
    </style>
    <script type="8487073e58850e68bc0fda36-text/javascript">
        var jwt_token = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiIsImp0aSI6IjRmMWcyM2ExMmFhIn0.eyJpc3MiOiJodHRwOlwvXC9rZXRvLnZhbnlvay5pbi51YSIsImF1ZCI6Imh0dHA6XC9cL2tldG8udmFueW9rLmluLnVhIiwianRpIjoiNGYxZzIzYTEyYWEiLCJpYXQiOjE2MjM3MjgyMzUsIm5iZiI6MTYyMzcyODIzNSwiZXhwIjoxNjI0MDg4MjM1LCJ1aWQiOjI4NTQ5ODR9.i733tcScPAs5OiXULDYudPFgGrXHg1pOgTnJTi01s3Y";


        var diet_week = {
            "1": {
                "week_id": 1,
                "day_num": 1,
                "breakfast": [],
                "lunch": [],
                "dinner": [],
                "snacks": [],
                "breakfast_portions": null,
                "lunch_portions": null,
                "dinner_portions": null,
                "snacks_portions": null
            },
            "2": {
                "week_id": 1,
                "day_num": 2,
                "breakfast": [],
                "lunch": [],
                "dinner": [],
                "snacks": [],
                "breakfast_portions": null,
                "lunch_portions": null,
                "dinner_portions": null,
                "snacks_portions": null
            },
            "3": {
                "week_id": 1,
                "day_num": 3,
                "breakfast": [],
                "lunch": [],
                "dinner": [],
                "snacks": [],
                "breakfast_portions": null,
                "lunch_portions": null,
                "dinner_portions": null,
                "snacks_portions": null
            },
            "4": {
                "week_id": 1,
                "day_num": 4,
                "breakfast": [],
                "lunch": [],
                "dinner": [],
                "snacks": [],
                "breakfast_portions": null,
                "lunch_portions": null,
                "dinner_portions": null,
                "snacks_portions": null
            },
            "5": {
                "week_id": 1,
                "day_num": 5,
                "breakfast": [],
                "lunch": [],
                "dinner": [],
                "snacks": [],
                "breakfast_portions": null,
                "lunch_portions": null,
                "dinner_portions": null,
                "snacks_portions": null
            },
            "6": {
                "week_id": 1,
                "day_num": 6,
                "breakfast": [],
                "lunch": [],
                "dinner": [],
                "snacks": [],
                "breakfast_portions": null,
                "lunch_portions": null,
                "dinner_portions": null,
                "snacks_portions": null
            },
            "7": {
                "week_id": 1,
                "day_num": 7,
                "breakfast": [],
                "lunch": [],
                "dinner": [],
                "snacks": [],
                "breakfast_portions": null,
                "lunch_portions": null,
                "dinner_portions": null,
                "snacks_portions": null
            }
        };


        var profile_data = {
            "current_weight": 80,
            "target_weight": 69,
            "height": 120,
            "height_in": 4,
            "height_ft": 5,
            "activity_level": "Muito ativo",
            "activity_level_val": 16,
            "daily_calories": 2095,
            "nutrients_breakdown": "131 - 163 - 26",
            "water_intake": 3.5,
            "expected_weight": 75,
            "imperial_metric": 0,
            "weeks": 8
        };


        var user_filters = {
            "1": {
                "skipped": {
                    "breakfast": 0,
                    "lunch": 0,
                    "dinner": 0,
                    "snacks": 0
                }
            },
            "2": {
                "skipped": {
                    "breakfast": 0,
                    "lunch": 0,
                    "dinner": 0,
                    "snacks": 0
                }
            },
            "3": {
                "skipped": {
                    "breakfast": 0,
                    "lunch": 0,
                    "dinner": 0,
                    "snacks": 0
                }
            },
            "4": {
                "skipped": {
                    "breakfast": 0,
                    "lunch": 0,
                    "dinner": 0,
                    "snacks": 0
                }
            },
            "5": {
                "skipped": {
                    "breakfast": 0,
                    "lunch": 0,
                    "dinner": 0,
                    "snacks": 0
                }
            },
            "6": {
                "skipped": {
                    "breakfast": 0,
                    "lunch": 0,
                    "dinner": 0,
                    "snacks": 0
                }
            },
            "7": {
                "skipped": {
                    "breakfast": 0,
                    "lunch": 0,
                    "dinner": 0,
                    "snacks": 0
                }
            }
        };


        var video_items = [{
            "header": "Keto Introduction",
            "video": "https:\/\/i.vimeocdn.com\/video\/791199868.jpg",
            "onclick": "",
            "video_url": "https:\/\/player.vimeo.com\/video\/342314594",
            "button_txt": "Watch Now"
        }, {
            "header": "What is the ketogenic diet",
            "video": "https:\/\/i.vimeocdn.com\/video\/791162060.jpg",
            "onclick": "",
            "video_url": "https:\/\/player.vimeo.com\/video\/342312359",
            "button_txt": "Watch Now"
        }, {
            "header": "Benefits of the ketogenic diet",
            "video": "https:\/\/i.vimeocdn.com\/video\/791163506.jpg",
            "onclick": "",
            "video_url": "https:\/\/player.vimeo.com\/video\/342313996",
            "button_txt": "Watch Now"
        }, {
            "header": "Keto diet and blood pressure",
            "video": "https:\/\/i.vimeocdn.com\/video\/791164667.jpg",
            "onclick": "",
            "video_url": "https:\/\/player.vimeo.com\/video\/342314166",
            "button_txt": "Watch Now"
        }, {
            "header": "What do I eat on a keto diet",
            "video": "https:\/\/i.vimeocdn.com\/video\/791169215.jpg",
            "onclick": "",
            "video_url": "https:\/\/player.vimeo.com\/video\/342314204",
            "button_txt": "Watch Now"
        }, {
            "header": "How does the keto diet work?",
            "video": "https:\/\/i.vimeocdn.com\/video\/791168972.jpg",
            "onclick": "",
            "video_url": "https:\/\/player.vimeo.com\/video\/342314251",
            "button_txt": "Watch Now"
        }, {
            "header": "Getting started on the keto diet",
            "video": "https:\/\/i.vimeocdn.com\/video\/791168742.jpg",
            "onclick": "",
            "video_url": "https:\/\/player.vimeo.com\/video\/342314323",
            "button_txt": "Watch Now"
        }, {
            "header": "Keto Recipes",
            "video": "https:\/\/i.vimeocdn.com\/video\/791168279.jpg",
            "onclick": "",
            "video_url": "https:\/\/player.vimeo.com\/video\/342314393",
            "button_txt": "Watch Now"
        }, {
            "header": "Keto tips hacks and conclusion",
            "video": "https:\/\/i.vimeocdn.com\/video\/791167978.jpg",
            "onclick": "",
            "video_url": "https:\/\/player.vimeo.com\/video\/342314545",
            "button_txt": "Watch Now"
        }];


        var recipe_items = [{
            "picture": "img\/area\/keto_bacon_recipes.jpg",
            "header": "Receitas de Keto Bacon",
            "content": "\u003Cp\u003ESim, é verdade que com uma dieta Keto você PODE comer muitos alimentos gordurosos deliciosos e ainda FORÇAR \nseu corpo a queimar gordura como combustível, perdendo quilos a cada semana.\u003C\/p\u003E\n\u003Cp\u003EIf you\u0027re a bacon lover then this is the recipe book for you, 30 delicious keto friendly bacon recipes that you can enjoy\nwhile still burning body fat FAST!\u003C\/p\u003E\n\u003Cp\u003EEven that stubborn belly and thigh fat won\u0027t stand a chance because your body will have NO CHOICE but to burn that fat for fuel!\u003C\/p\u003E",
            "href": "https:\/\/recipebooks.customketodiet.com\/Ketobaconrecipes.pdf",
            "download": "download",
            "onclick": ""
        }, {
            "picture": "img\/area\/keto_fat_bombs.jpg",
            "header": "Keto Fat Bombs",
            "content": "\u003Cp\u003EFat bombs are one of the most satisfying and convenient snacks you can make if you\u0027re following a keto diet.\u003C\/p\u003E\n\u003Cp\u003EThey contain over 90% fat, are easy to make, and come in a variety of different flavours from savoury to sweet.\u003C\/p\u003E\n\u003Cp\u003EYou\u0027ll find 30 delicious fat bomb recipes in this book, from pecan pie fudge to macadamia chocolate, this cookbook will cover all your needs.\u003C\/p\u003E\n\u003Cp\u003ESatisfy your sweet tooth while staying in ketosis and burning fat.\u003C\/p\u003E",
            "href": "https:\/\/recipebooks.customketodiet.com\/Ketofatbombs.pdf",
            "download": "download",
            "onclick": ""
        }, {
            "picture": "img\/area\/keto_snacks.jpg",
            "header": "Keto Party Snacks",
            "content": "\u003Cp\u003EEating a keto diet doesn\u0027t mean you still throw a party and stick to your diet.\u003C\/p\u003E\n\u003Cp\u003EThese easy to make \u0027Keto Party Snack\u0027 recipes are sure to be a crowd pleaser!\u003C\/p\u003E\n\u003Cp\u003EHere\u0027s a collection of my recipes that you\u0027ll be able to serve as snacks and appetizers allowing you to stay in keto \nwhile still pleasing all your carb-loving guests.\u003C\/p\u003E",
            "href": "https:\/\/recipebooks.customketodiet.com\/Ketopartysnacks.pdf",
            "download": "download",
            "onclick": ""
        }, {
            "picture": "img\/area\/keto_smoothie.jpg",
            "header": "Keto Superfood Smoothie Recipes",
            "content": "\u003Cp\u003EGulp down these burning Superfood Smoothie Recipes to supercharge your keto fat loss,\n boost energy levels and put that \u0027healthy glow\u0027 back into your skin.\u003C\/p\u003E\n\u003Cp\u003E\nSmoothies are a great breakfast or snack that will keep you full for hours and help detoxify your body and boost your metabolism.\n\u003C\/p\u003E\u003Cp\u003E\nDiscover 20 hand picked \u0027keto friendly\u0027 recipes for maximum benefit inside this special edition.\u003C\/p\u003E",
            "href": "https:\/\/recipebooks.customketodiet.com\/Ketosuperfoodsmoothierecipes.pdf",
            "download": "download",
            "onclick": ""
        }, {
            "picture": "img\/area\/keto_butter.jpg",
            "header": "Keto Peanut Butter Treats",
            "content": "\u003Cp\u003EAre you nuts for peanut butter? Then get ready to fall in love with these easy peanut butter keto recipes.\n\u003C\/p\u003E\u003Cp\u003E\n30 easy to make recipes such as \u0027KETO PEANUT BUTTER CHOCOLATE BARS\u0027, \u0027PEANUT BUTTER SWIRL BROWNIES\u0027,\n PEANUT BUTTER CHOCOLATE CHIP COOKIE DOUGH and many more.\n\u003C\/p\u003E\u003Cp\u003E\nWho says losing weight has to be hard when you can eat delicious recipes like this and still effortlessly burn fat?\u003C\/p\u003E",
            "href": "https:\/\/recipebooks.customketodiet.com\/Ketopeanutbuttertreats.pdf",
            "download": "download",
            "onclick": ""
        }, {
            "picture": "img\/area\/keto_s_foods.jpg",
            "header": "Keto Savoury Foods",
            "content": "\u003Cp\u003E30 Keto Lunch\/Dinner Recipes That Everyone In The Family Will Enjoy\u003C\/p\u003E\n\u003Cp\u003E\nIt can be difficult to find savoury keto recipes that the whole family will enjoy.\n\u003C\/p\u003E\u003Cp\u003E\nWell, I\u0027ve put together 30 of my favourite, all delicious and easy to make and even carb addicts will enjoy to eat them!\u003C\/p\u003E",
            "href": "https:\/\/recipebooks.customketodiet.com\/Ketosavouryfoods.pdf",
            "download": "download",
            "onclick": ""
        }, {
            "picture": "img\/area\/keto_chocolate_treats.jpg",
            "header": "Keto Chocolate Treats",
            "content": "\u003Cp\u003EThe good news: You can still have chocolate on the keto diet... \n\u003C\/p\u003E\u003Cp\u003E\nBut you have to know exactly which ones otherwise you could undo all your hard work.\n\u003C\/p\u003E\u003Cp\u003E\nThis book of 30 recipes includes some of the best \u0027Keto friendly\u0027 chocolate treats around. \n\u003C\/p\u003E\nNot only are they delicious, they are guilt-free and won\u0027t knock you out of ketosis.\u003C\/p\u003E",
            "href": "https:\/\/recipebooks.customketodiet.com\/Ketochocolatetreats.pdf",
            "download": "download",
            "onclick": ""
        }, {
            "picture": "img\/area\/keto_avocado_recipes.jpg",
            "header": "Keto Avocado Recipes",
            "content": "\u003Cp\u003EThis list of 30 Keto avocado recipes will kick start your avocado obsession with delicious \nrecipes for breakfast, lunch, and dinner.\u003C\/p\u003E\n\u003Cp\u003E\nFrom avocado deviled eggs to easy avocado boats, these Keto avocado recipes will show you just how easy it is to include \nthis delicious ingredient in almost every meal.\n\u003C\/p\u003E\u003Cp\u003E\nIf you didn’t love them before, you will now!\u003C\/p\u003E",
            "href": "https:\/\/recipebooks.customketodiet.com\/Ketoavocadorecipes.pdf",
            "download": "download",
            "onclick": ""
        }, {
            "picture": "img\/area\/keto_desserts.jpg",
            "header": "Keto Deserts",
            "content": "\u003Cp\u003EBecause dessert should be a part of every diet.\u003C\/p\u003E\n\u003Cp\u003E30 of the most delicious and satisfying keto desserts all in one place to satisfy that sweet tooth! \u003C\/p\u003E\n\u003Cp\u003EYou can find everything from fudgy keto brownies to decadent sugar free ice cream to special occasion layer cakes\n inside this special edition.\u003C\/p\u003E",
            "href": "https:\/\/recipebooks.customketodiet.com\/Ketodeserts.pdf",
            "download": "download",
            "onclick": ""
        }, {
            "picture": "img\/area\/keto_cookies.jpg",
            "header": "Keto Cookies",
            "content": "\u003Cp\u003ECookies on the keto diet?! Heck yes! I’ve handpicked 30 of the best keto cookie recipes out \nthere right now to help you satisfy your cookie craving without ruining your keto diet\u003C\/p\u003E\n\u003Cp\u003E\nThese healthy keto cookie recipes are the perfect combination of soft chewiness with a crunchy edge. \n\u003C\/p\u003E\u003Cp\u003E\nYou’ll never guess they are sugar free! \n\u003C\/p\u003E\u003Cp\u003E\nPro tip: Enjoy with a piping hot cup of \u0027keto bullet proof coffee\u0027, and these cookies melt in your mouth.\u003C\/p\u003E",
            "href": "https:\/\/recipebooks.customketodiet.com\/Ketocookies.pdf",
            "download": "download",
            "onclick": ""
        }, {
            "picture": "img\/area\/fast_keto_recipes.png",
            "header": "Fast Keto Recipes",
            "content": "\u003Cp\u003ETime is precious, but we still want to eat healthy and delicious keto food. \u003C\/p\u003E\n\u003Cp\u003E\nIn this book you will discover 30 of our top rated recipes you can prepare in 5 minutes or less.\n\u003C\/p\u003E\u003Cp\u003E\nIn a hurry? Too busy? Traveling? Or maybe just not in the mood for cooking? What ever the reason, \nwe have the solution in this special edition recipe book.\u003C\/p\u003E",
            "href": "https:\/\/recipebooks.customketodiet.com\/Fastketorecipes.pdf",
            "download": "download",
            "onclick": ""
        }];
        var suppliments_list = [{
            "image": "\/newdesignimg\/1-btl.png",
            "title": "Bioslim Probiotics",
            "subtitle": "",
            "content": "\u003Cp\u003EThe BioSlim supplement is packed with all the specific probiotic strains that have been scientifically proven to burn body fat and get your body in the best shape you\u0027ve ever seen. \u003C\/p\u003E\n\u003Cspan id=\u0022dots\u0022\u003E...\u003C\/span\u003E\u003Cspan id=\u0022more\u0022\u003E\n\u003Cp\u003EAnd unlike a lot of probiotics on the market that will kick you out of ketosis and ruin all your hard work BioSlim works in synergy with the ketogenic diet to supercharge the fat burning effects.\u003C\/p\u003E\n\n\u003Cp\u003EFat burning bacteria in BioSlim include:  \u003C\/p\u003E \n\n\u003Cp\u003E1.\tBacillus Subtilus - Referred to as the “king of probiotics” due to its spore like form. In clinical trials, it was shown to “significantly reduce weight without changes in food intake”.\u003C\/p\u003E\n\n\u003Cp\u003E2.\tLactobacillus Rhamnosus - Another powerhouse probiotic, this is strain has been shown in studies to “significantly reduced fat mass and achieve sustainable weight loss”.\u003C\/p\u003E\n\n\u003Cp\u003E3.\tLactobacillus Plantarum - This special strain was found to “inhibit diet-induced weight gain”, and even more impressively, support healthy cholesterol and blood sugar levels.\u003C\/p\u003E \n\n\u003Cp\u003E4.\tBifidobacterium Breve - Which was found to “significantly lower body fat percentage and significantly lower waist circumference”, again, without changes to their diets. \u003C\/p\u003E\n\n\u003Cp\u003EAll of which work together to rebalance your gut bacteria and help shed unwanted body fat. \u003C\/p\u003E\n\n\u003Cp\u003EBioSlim is natural, free of additives and made right here in the USA. \u003C\/p\u003E\n\u003C\/span\u003E\n",
            "url1": "https:\/\/1keto.pay.clickbank.net\/?cbitems=20\u0026cbur=a",
            "url2": "https:\/\/1keto.pay.clickbank.net\/?cbitems=21\u0026cbur=a",
            "url3": "https:\/\/1keto.pay.clickbank.net\/?cbitems=22\u0026cbur=a"
        }, {
            "image": "\/acceleratorimg\/biosim.png",
            "title": "Keto Accelerator - Coconut Derived MCT Oil (capsules)",
            "subtitle": "",
            "content": "\u003Cp\u003EYour body produces ketones when it’s burning fat for fuel, aka ketosis. When you supplement your diet with MCTs, your body ups ketone production putting you in a deeper state of ketosis.\n\u003C\/p\u003E\n\u003Cspan id=\u0022dots\u0022\u003E...\u003C\/span\u003E\u003Cspan id=\u0022more\u0022\u003E\n\u003Cp\u003E\nAnd that deepened state means even faster fat loss results.\n\u003C\/p\u003E\n\u003Cp\u003E\nKetones have also been shown to help curb food cravings, increase your energy levels and increase your metabolism\n\u003C\/p\u003E\n\u003Cp\u003E\nMCT oil can also help put your body back into a state of ketosis (and fat burning) faster if you slip up and happen to consume some carbs.\n\u003C\/p\u003E\n\u003Cp\u003E\nMany manufacturers supply cheap but poor-quality MCTs to make a quick buck, something that’s not only ineffective for fat loss, but also bad for your health!\n\u003C\/p\u003E\n\u003Cp\u003E\nThat’s why it’s crucial that you invest in the right MCT product...\n\u003C\/p\u003E\n\u003Cp\u003E\nKeto Accelerator is manufactured in the USA with an FDA approved facility under the strictest of standards and under clean sterile conditions.\n\u003C\/p\u003E\n\u003Cp\u003E\nThat’s why countless clients and I myself take Keto Accelerator every single day.\n\u003C\/p\u003E\n\u003C\/span\u003E",
            "url1": "https:\/\/1keto.pay.clickbank.net\/?cbitems=35\u0026cbur=a\u0026cbrblaccpt=true",
            "url2": "https:\/\/1keto.pay.clickbank.net\/?cbitems=36\u0026cbur=a\u0026cbrblaccpt=true",
            "url3": "https:\/\/1keto.pay.clickbank.net\/?cbitems=37\u0026cbur=a\u0026cbrblaccpt=true"
        }, {
            "image": "\/dashboardimg\/ingredients\/electrolyte1.jpg",
            "title": "Keto Electrolytes",
            "subtitle": "no Sugar, no Carbs, no Calories, Keto, Gluten-Free, Paleo, Non-GMO, Vegan, with Magnesium, Potassium, Calcium",
            "content": "\u003Cp\u003E\nOne of the main reasons why people experience ill-effects from the ketogenic diet is because they aren’t replenishing their electrolytes after carb restriction.\n\u003C\/p\u003E\n\u003Cspan id=\u0022dots\u0022\u003E...\u003C\/span\u003E\u003Cspan id=\u0022more\u0022\u003E\n\u003Cp\u003E\nThe several changes that your body goes through as you adopt keto alters the way you handle electrolytes and water.\n\u003C\/p\u003E\n\u003Cp\u003E\nWith that said, having electrolyte imbalances can make your ketogenic efforts a struggle.\n\u003C\/p\u003E\n\u003Cp\u003E\nFortunately, knowing this can help you prevent it.\n\u003C\/p\u003E\n\u003Cp\u003E\nMake sure you grab a trusted electrolyte blend such as Keto K1000 Electrolyte Powder to breeze through your keto diet.\n\u003C\/p\u003E\n\u003C\/span\u003E",
            "url": "https:\/\/www.amazon.com\/gp\/product\/B07KDRL5ZD\/ref=as_li_tl?ie=UTF8\u0026camp=1789\u0026creative=9325\u0026creativeASIN=B07KDRL5ZD\u0026linkCode=as2\u0026tag=332554-20\u0026linkId=2fc1af1bd7be5896a14541c4f24fe643"
        }, {
            "image": "\/dashboardimg\/ingredients\/enzime1.jpg",
            "title": "Digestive Enzymes",
            "subtitle": "Probiotics - Natural Support for Better Digestion \u0026 Lactose Absorption - for Bloating \u0026 Constipation",
            "content": "\u003Cp\u003EOne of the main complaints of those new to the ketogenic diet is that the high fat content of this eating pattern is tough on their digestive system.\n\u003C\/p\u003E\n\u003Cspan id=\u0022dots\u0022\u003E...\u003C\/span\u003E\u003Cspan id=\u0022more\u0022\u003E\n\u003Cp\u003E\nTaking a good digestive supplement which break down protein and fat respectively, may help relieve digestive symptoms related to transitioning to a keto diet.\n\u003C\/p\u003E\n\u003Cp\u003E\nBecause Keto meals are so high in fat and low in carbohydrates, your body needs an enzyme blend that differs dramatically from those demanded by other eating plans.\n\u003C\/p\u003E\n\u003Cp\u003E\nThe best way to optimize digestion and maximize the nutritional value of foods while on a Keto diet is to fuel your body with a good digestive enzyme supplement such as NOW Super Enzymes.\n\u003C\/p\u003E\n\u003C\/span\u003E",
            "url": "https:\/\/www.amazon.com\/gp\/product\/B0013OXKHC\/ref=as_li_tl?ie=UTF8\u0026camp=1789\u0026creative=9325\u0026creativeASIN=B0013OXKHC\u0026linkCode=as2\u0026tag=332554-20\u0026linkId=d20aae0791c4873a00b9a333d368664c"
        }, {
            "image": "\/dashboardimg\/ingredients\/exogenous1.jpg",
            "title": "Exogenous Ketones",
            "subtitle": "Beta Hydroxybutyrate Ketone Salt Pills",
            "content": "\u003Cp\u003EThere are two different kinds of exogenous ketone supplements: ketone salts and ketone esters.\u003C\/p\u003E\n\u003Cspan id=\u0022dots\u0022\u003E...\u003C\/span\u003E\u003Cspan id=\u0022more\u0022\u003E\n\u003Cp\u003E\nKetone salts are the ones that have been heavily commercialized and marketed to the public over recent years partly because ketone esters have an almost unbearable taste to them so are harder to market.\n\u003C\/p\u003E\n\u003Cp\u003EYou can take ketone supplements alongside your ketogenic diet, this reduces the time it takes to reach ketosis and lessens the unpleasant effects that may come from transitioning from a standard, higher-carb diet to a ketogenic one.\n\u003C\/p\u003E\n\u003Cp\u003E\nTo choose a good exogenous ketone source you need to check the BHB content, this is the quantity of the Beta-Hydroxybutyrate (exogenous ketone).\n\u003C\/p\u003E\n\u003Cp\u003EThe higher the BHB, the more ketones you’ll have in your body and the more ketone energy you will have available to fuel your body.\n\u003C\/p\u003E\n\u003Cp\u003EWe recommend exogenous ketones from Kiss My Keto.\u003C\/p\u003E\n\u003C\/span\u003E",
            "url": "https:\/\/www.amazon.com\/gp\/product\/B083WPK7JB\/ref=as_li_tl?ie=UTF8\u0026camp=1789\u0026creative=9325\u0026creativeASIN=B083WPK7JB\u0026linkCode=as2\u0026tag=332554-20\u0026linkId=29f8bb827a40a3621cbbc49f3ed20b43"
        }, {
            "image": "\/dashboardimg\/ingredients\/greens_powder1.jpg",
            "title": "Greens Powder",
            "subtitle": "Super Micro Green Drink \u0026 MCT Oil, Best as Low Carb Ketogenic Diet Supplement for Ketosis, Amazing for Ketones and Athletic Diets (Lemon) ",
            "content": "\u003Cp\u003EA greens powder is a delicious and convenient way for keto dieters to ensure adequate micronutrient intake.\u003C\/p\u003E\n\u003Cspan id=\u0022dots\u0022\u003E...\u003C\/span\u003E\u003Cspan id=\u0022more\u0022\u003E\n\u003Cp\u003EGreens powders contain powdered forms of healthy plants like spinach, spirulina and kale.\n\u003C\/p\u003E\n\u003Cp\u003E\nThey can provide a convenient source of nutrients to those following ketogenic diets.\n\u003C\/p\u003E\n\u003Cp\u003E\nGreen Vibrance from Vibrant health is the best product we have found, it delivers a multitude of nutrients that can be used by each cell to support efficient cellular metabolism, and maintain health.\n\u003C\/p\u003E\n\u003C\/span\u003E",
            "url": "https:\/\/www.amazon.com\/gp\/product\/B0786Q851W\/ref=as_li_tl?ie=UTF8\u0026camp=1789\u0026creative=9325\u0026creativeASIN=B0786Q851W\u0026linkCode=as2\u0026tag=332554-20\u0026linkId=2ded8db9304723c84f5273fbf5f29e17"
        }, {
            "image": "\/dashboardimg\/ingredients\/water.jpg",
            "title": "Water",
            "subtitle": "",
            "content": "\u003Cp\u003EBut let’s not forget the most important ketogenic supplement. \u003C\/p\u003E\u003Cspan id=\u0022dots\u0022\u003E...\u003C\/span\u003E\u003Cspan id=\u0022more\u0022\u003E\n\u003Cp\u003EThis one’s a bonus, and it will blow your mind. It’s super important, but it’s also very cheap. You can even get it for free in some public buildings. Are you ready?\u003C\/p\u003E\n\u003Cp\u003EIt’s water. Since the ketogenic diet puts your kidneys into overdrive, you’ll be peeing a lot more than you used to. \u003C\/p\u003E\n\u003Cp\u003EIt’s important to replace that water, especially when you’re taking electrolyte supplements. \u003C\/p\u003E\n\u003Cp\u003ENot only that, but water can help you feel more full, reducing snack food cravings.\u003C\/p\u003E\u003C\/span\u003E",
            "url": false,
            "free": true
        }];
        var ingredients_list = [{
            "image": "\/dashboardimg\/ingredients\/Erythritol1.jpg",
            "title": "Erythritol Sweetener",
            "subtitle": "Perfect for Diabetics and Low Carb Dieters - No Calorie Sweetener, Non-GMO, Natural Sugar Substitute ",
            "content": "    \u003Cp\u003E\n\t\t\t\t\t\t\tZERO CALORIE \u0026amp; ZERO CARB - Natural sweetener that tastes and bakes like sugar\n\t\t\t\t\t\t\u003C\/p\u003E\n\t\t\t\t\t\t\u003Cspan id=\u0022dots\u0022\u003E...\u003C\/span\u003E\u003Cspan id=\u0022more\u0022\u003E\n\t\t\t\t        \u003Cp\u003E\n\t\t\t\t\t\t\tNO BITTER AFTERTASTE - This erythritol is not only healthier than sugar, it also has almost no aftertaste. In a blind taste test you might mistake it for sugar.\n\t\t\t\t\t\t\u003C\/p\u003E\n\t\t\t\t\t\n\t\t\t\t\t\t\u003Cp\u003E\n\t\t\t\t\t\t\t100% MONEY BACK GUARANTEE! We stand behind our granulated erythritol 100%. If for any reason you decide our erythritol isn\u0027t for you, email us \u0026amp; we’ll refund you 100% of your money, no questions asked.\n\t\t\t\t\t\t\t\n\t\t\t\t\t\t\u003C\/p\u003E\n\t\t\t\t\t\n\t\t\t\t\t\t\u003Cp\u003E \n\t\t\t\t\t\t\tGLUTEN-FREE, VEGAN, NON-GMO \u0026amp; TOOTH-FRIENDLY!\n\t\t\t\t\t\t\t\n\t\t\t\t\t\t\u003C\/p\u003E\n\t\t\t\t\t\n\t\t\t\t\t\t\u003Cp\u003E \n\t\t\t\t\t\t\tZERO GLYCEMIC IMPACT - Suitable for Diabetics \u0026amp; Low Carb Dieters\n\t\t\t\t\t\t\u003C\/p\u003E\u003C\/span\u003E",
            "url": "https:\/\/www.amazon.com\/gp\/product\/B007XA49BG\/ref=as_li_tl?ie=UTF8\u0026camp=1789\u0026creative=9325\u0026creativeASIN=B007XA49BG\u0026linkCode=as2\u0026tag=332554-20\u0026linkId=773c03e5d5b282892efc5e7292e1ed07"
        }, {
            "image": "\/dashboardimg\/ingredients\/coconut_milk.jpg",
            "title": "Aroy-d Coconut Milk 100% Original Net 8.5 Oz.",
            "subtitle": "Gluten Free, Vegan, Soy Free, Dairy Free ",
            "content": "\u003Cp\u003EThis 100% pure coconut milk in aseptic packs with no stabilizers, thickeners, gums, or preservatives has won many awards for taste and quality. \u003C\/p\u003E\n\u003Cspan id=\u0022dots\u0022\u003E...\u003C\/span\u003E\u003Cspan id=\u0022more\u0022\u003E\n\u003Cp\u003EAroy-D coconut milk is not diluted, which means no additives are needed. \u003C\/p\u003E\u003C\/span\u003E",
            "url": "https:\/\/www.amazon.com\/gp\/product\/B00JUB8N3G\/ref=as_li_tl?ie=UTF8\u0026camp=1789\u0026creative=9325\u0026creativeASIN=B00JUB8N3G\u0026linkCode=as2\u0026tag=332554-20\u0026linkId=dfe84c11eba0acfc926a6c7481086a34"
        }, {
            "image": "\/dashboardimg\/ingredients\/Almound_milk.jpg",
            "title": "Silk Almond Milk",
            "subtitle": "Vanilla Flavored Non-Dairy Almond Milk, Dairy-free Milk",
            "content": "\u003Cp\u003EWHOLESOME AND NOURISHING: Silk believes in the goodness (and good-for-you-ness) of plant-based foods. \u003C\/p\u003E\n\u003Cspan id=\u0022dots\u0022\u003E...\u003C\/span\u003E\u003Cspan id=\u0022more\u0022\u003E \u003Cp\u003EOur soymilk, almondmilk, coconutmilk, cashewmilk and other delicious, plant-based products are simple, wholesome and nourishing, as nature intended.\u003C\/p\u003E\n\u003Cp\u003ENo need to be afraid of the big bad sweetness craving anymore. Silk Vanilla Almondmilk will save you with its smooth rich vanilla goodness \u0026 more calcium than dairy milk. \u003C\/p\u003E\n\u003Cp\u003ESilk Pure Almondmilk is the smart way to indulge your sweet tooth on keto.\u003C\/p\u003E\u003C\/span\u003E\n",
            "url": "https:\/\/www.amazon.com\/gp\/product\/B00PGXQ68Q\/ref=as_li_tl?ie=UTF8\u0026camp=1789\u0026creative=9325\u0026creativeASIN=B00PGXQ68Q\u0026linkCode=as2\u0026tag=332554-20\u0026linkId=20c320f25b3eb830db0ddac8102202e1"
        }, {
            "image": "\/dashboardimg\/ingredients\/Stevia.jpg",
            "title": "NOW Foods Better Stevia Liquid",
            "subtitle": "",
            "content": "\u003Cp\u003E Zero-Calorie liquid natural sweetener\n\t\t\t\t\t\t\t\u003C\/p\u003E\n\t\t\t\t\t\n\t\t\t\t\t\t\u003Cp\u003E\n\t\t\t\t\t\t\tSubstitute for table sugar and artificial sugars\n\t\t\t\t\t\t\u003C\/p\u003E\n\t\t\t\t\t\u003Cp\u003E\n\t\t\t\t\t\t\tDairy-free, egg-free, nut-free, soy-free, and sugar-free\n\t\t\t\t\t\t\u003C\/p\u003E\n\t\t\t\t\t\u003Cspan id=\u0022dots\u0022\u003E...\u003C\/span\u003E\u003Cspan id=\u0022more\u0022\u003E\n\t\t\t\t\t\t\u003Cp\u003E\n\t\t\t\t\t\t\tKosher, Non-GMO, and made without gluten\n\t\t\t\t\t\u003C\/p\u003E\n\t\t\t\t\t\u003Cp\u003E\n\t\t\t\t\t\t\tVegan\/Vegetarian\n\t\t\t\t\t\u003C\/p\u003E\u003C\/span\u003E",
            "url": "https:\/\/www.amazon.com\/gp\/product\/B0013OUULG\/ref=as_li_tl?ie=UTF8\u0026camp=1789\u0026creative=9325\u0026creativeASIN=B0013OUULG\u0026linkCode=as2\u0026tag=332554-20\u0026linkId=4556cc5a1319d12308e2d0a7348e314a"
        }, {
            "image": "\/dashboardimg\/ingredients\/Macadamia_nuts1.jpg",
            "title": "Macadamia Nuts",
            "subtitle": "Raw, Chopped, Unsalted, Unroasted, Kosher, Vegan, Bulk, Great for Baking",
            "content": "\u003Cp\u003EHighest Quality, Large Size, Delicious \u0026 Healthy.\u003C\/p\u003E\n\u003Cp\u003EThese are a true nut lover\u0027s delight! The uniquely flavorful and creamy taste of a raw Macadamia Nuts Pieces is incomparable. \u003C\/p\u003E\n\u003Cspan id=\u0022dots\u0022\u003E...\u003C\/span\u003E\u003Cspan id=\u0022more\u0022\u003E\n\u003Cp\u003EThese crunchy little guys are perfect for baking (in savory dishes too - oh wow, try them on grilled mahi mahi...) and loaded with protein and calcium.\u003C\/p\u003E\n\u003Cp\u003EMacadamia Nut Pieces are high in monounsaturated fatty acid, perfect for your keto diet plan\u003C\/p\u003E\u003C\/span\u003E\n",
            "url": "https:\/\/www.amazon.com\/gp\/product\/B005BRY84G\/ref=as_li_tl?ie=UTF8\u0026camp=1789\u0026creative=9325\u0026creativeASIN=B005BRY84G\u0026linkCode=as2\u0026tag=332554-20\u0026linkId=91d7efa7e4374a641cd4e4283fc6e002"
        }, {
            "image": "\/dashboardimg\/ingredients\/coconut_flour1.jpg",
            "title": "Organic Coconut Flour",
            "subtitle": "Batch Tested Gluten Free, Non GMO, Vegan, Keto Friendly",
            "content": "\u003Cp\u003EHigh in Fiber \u0026 Protein with Low Moisture Content - Finest Milled Coconut Flour Available\u003C\/p\u003E\n\u003Cp\u003EPlant Based Alternative to Conventional Wheat Flour\u003C\/p\u003E\u003Cspan id=\u0022dots\u0022\u003E...\u003C\/span\u003E\u003Cspan id=\u0022more\u0022\u003E\n\u003Cp\u003EGreat for Plant Based, Gluten Free, Vegan, Paleo, Keto and Organic recipes!\u003C\/p\u003E\u003C\/span\u003E",
            "url": "https:\/\/www.amazon.com\/gp\/product\/B01GL6PRTK\/ref=as_li_tl?ie=UTF8\u0026camp=1789\u0026creative=9325\u0026creativeASIN=B01GL6PRTK\u0026linkCode=as2\u0026tag=332554-20\u0026linkId=00cf3f7698ebe28912440c049eee18c1"
        }, {
            "image": "\/dashboardimg\/ingredients\/almond_flour1.jpg",
            "title": "Blanched Almond Flour",
            "subtitle": "",
            "content": "\u003Cp\u003EYou can use this amazing low carb flour for baking, breading, and more.\u003C\/p\u003E\n\u003Cp\u003EIt\u0027s the easiest to work with out of all low carb flours.\u003C\/p\u003E\u003Cspan id=\u0022dots\u0022\u003E...\u003C\/span\u003E\u003Cspan id=\u0022more\u0022\u003E\n\u003Cp\u003EKeto almond flour recipes often turn out the most similar to wheat flour versions.\u003C\/p\u003E\n\u003Cp\u003EGreat for Plant Based, Gluten Free, Vegan, Paleo, Keto and Organic recipes!\u003C\/p\u003E\u003C\/span\u003E",
            "url": "https:\/\/www.amazon.com\/gp\/product\/B07L9Q45HG\/ref=as_li_tl?ie=UTF8\u0026camp=1789\u0026creative=9325\u0026creativeASIN=B07L9Q45HG\u0026linkCode=as2\u0026tag=332554-20\u0026linkId=9abb9ae38adde9da725d73e53d4e23ed"
        }, {
            "image": "\/dashboardimg\/ingredients\/chocolate_chips.jpg",
            "title": "Sugar Free Chocolate Chips Sweetened",
            "subtitle": "Keto, Zero Net Carbs, Great for Diabetics, No Artificial Sweeteners, No Sugar Alcohol, No Stevia, Gluten Free, Soy Free, Vegan, Non-GMO",
            "content": "\n       \u003Cp\u003EPremium sugar-free semi-sweet chocolate chips, made with allulose, the revolutionary sugar alternative that has 90% less calories than regular sugar and no impact on blood glucose levels\u003C\/p\u003E\n       \u003Cspan id=\u0022dots\u0022\u003E...\u003C\/span\u003E\u003Cspan id=\u0022more\u0022\u003E\n\u003Cp\u003E0g sugar, 0g net carbs and just 43 calories per serving. 0g net carbs = 8g total carbs - 7g allulose - 1g fiber. Allulose is not metabolized by the human body and has no effect on blood sugar levels, therefore it doesn\u0027t count as net carbs.\u003C\/p\u003E\n\u003Cp\u003EGluten Free, Non GMO, Vegan. Great for keto diets and diabetics. A fit for every healthy lifestyle!\u003C\/p\u003E\u003C\/span\u003E",
            "url": "https:\/\/www.amazon.com\/gp\/product\/B083B6N42Q\/ref=as_li_tl?ie=UTF8\u0026camp=1789\u0026creative=9325\u0026creativeASIN=B083B6N42Q\u0026linkCode=as2\u0026tag=332554-20\u0026linkId=f5a4e21c461ebe4710b82765bd18cebc"
        }, {
            "image": "\/dashboardimg\/ingredients\/chia_seeds.jpg",
            "title": "Organic Chia Seeds",
            "subtitle": "Raw \u0026 Non-GMO",
            "content": "\u003Cp\u003ENutrient-Dense Superfood - Chia Seeds are an excellent source for Vitamin E, Protein, Calcium, Iron, Niacin, and Omega-3 fatty acids.\u003C\/p\u003E\n\u003Cspan id=\u0022dots\u0022\u003E...\u003C\/span\u003E\u003Cspan id=\u0022more\u0022\u003E\n\u003Cp\u003ESuitable for All Diet - Chia seeds supports all dietary restrictions considering they are gluten-free, vegan, nut-free, raw, and low-carb.\u003C\/p\u003E\u003C\/span\u003E",
            "url": "https:\/\/www.amazon.com\/gp\/product\/B00WTQC2FE\/ref=as_li_tl?ie=UTF8\u0026camp=1789\u0026creative=9325\u0026creativeASIN=B00WTQC2FE\u0026linkCode=as2\u0026tag=332554-20\u0026linkId=052a6286e3a41aac03ba64d95b488c50"
        }, {
            "image": "\/dashboardimg\/ingredients\/cacao_nibs1.jpg",
            "title": "Cacao Nibs",
            "subtitle": "Raw | Keto | Vegan",
            "content": "\u003Cp\u003EMade from 100% Criollo Beans, which are the most highly prized cacao beans\u003C\/p\u003E\n\u003Cspan id=\u0022dots\u0022\u003E...\u003C\/span\u003E\u003Cspan id=\u0022more\u0022\u003E\n\u003Cp\u003ECacao nibs make a great substitute for chocolate chips in any keto recipe and taste great sprinkled on just about anything.\u003C\/p\u003E\u003C\/span\u003E",
            "url": "https:\/\/www.amazon.com\/gp\/product\/B000OQ4A3S\/ref=as_li_tl?ie=UTF8\u0026camp=1789\u0026creative=9325\u0026creativeASIN=B000OQ4A3S\u0026linkCode=as2\u0026tag=332554-20\u0026linkId=e60ae593f57c51c572d0c2663df5b93f"
        }, {
            "image": "\/dashboardimg\/ingredients\/cinnamon1.jpg",
            "title": "Cinnamon Powder",
            "subtitle": "Ground, Gluten Free, Non GMO, Non Irradiated, Keto Friendly ",
            "content": "\u003Cp\u003EThis wonderfully aromatic spice is ideal for baking, making tea, and is used in many of our keto recipes to add a wonderful scent and flavour\u003C\/p\u003E",
            "url": "https:\/\/www.amazon.com\/gp\/product\/B00ASD2F8O\/ref=as_li_tl?ie=UTF8\u0026camp=1789\u0026creative=9325\u0026creativeASIN=B00ASD2F8O\u0026linkCode=as2\u0026tag=332554-20\u0026linkId=97b41cd09fcf057496835529d341c525"
        }, {
            "image": "\/dashboardimg\/ingredients\/tofu.jpg",
            "title": "Mori-Nu Silken Organic Tofu",
            "subtitle": "",
            "content": "\u003Cp\u003EHeart-healthy vegetable protein with soy isoflavones\u003C\/p\u003E\n\u003Cp\u003EGreat alternative to meat, eggs, and dairy.\u003C\/p\u003E\n\u003Cspan id=\u0022dots\u0022\u003E...\u003C\/span\u003E\u003Cspan id=\u0022more\u0022\u003E\n\u003Cp\u003ENo Preservatives. Non-Dairy. Gluten-Free and perfect for \u0027meat free\u0027 keto recipes.\u003C\/p\u003E\u003C\/span\u003E",
            "url": "https:\/\/www.amazon.com\/gp\/product\/B004DBRANM\/ref=as_li_tl?ie=UTF8\u0026camp=1789\u0026creative=9325\u0026creativeASIN=B004DBRANM\u0026linkCode=as2\u0026tag=332554-20\u0026linkId=f871d0c7925e0b23aac7b1524d76481c"
        }];
        var faq_list = [
            [{
                "question": "Tenho que comer minhas refeições em determinados horários?",
                "answer": "\u003Cp\u003ENão, você pode comer suas refeições como e quando se encaixa sua programação. \u003C\/p\u003E\n\u003Cp\u003EAs calorias e macronutrientes diários gerais são os mais importantes, e não o horário das refeições em particular.\u003C\/p\u003E\n\u003Cp\u003EMuitos de nossos clientes incorporam o jejum intermitente aos seus planos e não comem a primeira refeição antes do meio-dia ou mais tarde.\u003C\/p\u003E"
            }, {
                "question": "Meus planos de alimentação desaparecem após 8 semanas?",
                "answer": "\u003Cp\u003ENão, você tem acesso vitalício ao seu plano de alimentação e pode acessá-lo a qualquer momento.\u003C\/p\u003E"
            }, {
                "question": "Com que frequência devo me pesar?",
                "answer": "\u003Cp\u003ESugerimos que você se pese 1 vez por semana; depois de pesar-se, você precisa atualizar seu 'Peso Atual' em seu plano para que possamos recalcular suas refeições com base em seu novo peso.\u003C\/p\u003E"
            }, {
                "question": "Quanto peso posso esperar perder ao seguir meu plano?",
                "answer": "\u003Cp\u003EOne study found that men and women between 30-69 years who weighed between \n                90-100 kg lost a total of 14 kg (30.8 pounds) with the keto diet.\u003C\/p\u003E\n               \u003Cp\u003E Most of that weight was lost in the early stages of keto. They:\u003C\/p\u003E\n\u003Cp\u003ELost 7 kg (15 pounds) after 4 weeks\u003C\/p\u003E\n\u003Cp\u003ELost another 5 kg (11 pounds) between weeks 4 and 12\u003C\/p\u003E\n\u003Cp\u003Efrom 12 weeks to 12 months continued to lose 2-4 pounds per month\u003C\/p\u003E\n\u003Cp\u003EThis means the keto diet is effective for fast and sustained fat loss. \u003C\/p\u003E\n\u003Cp\u003EYou’ll see the biggest changes if you stick with it for a few months, and you won’t gain the weight back if you stick with it for the long-term.\u003C\/p\u003E"
            }, {
                "question": "Other keto calculators have my calories higher or lower than your plan?",
                "answer": "\u003Cp\u003ECalculating calories is not an exact science as there are so many variables and everyone is different.\u003C\/p\u003E\n\u003Cp\u003EWe do our best but also appreciate some people may need more or less so that\u0027s why we allow you to alter everything in the members area.\u003C\/p\u003E\n\u003Cp\u003EIf you need more or less calories you can change the input and your meals will be recalculated using the new calorie values.\u003C\/p\u003E"
            }, {
                "question": "I want more or less variety in my meal plan",
                "answer": "\u003Cp\u003EWe realize everyone is different, some people want to eat the same thing every day for simplicity while others want to have a lot of variety. \u003C\/p\u003E\n\u003Cp\u003EYou can alter your plan to suit your individual preferences by using the \u0027Swap Meal\u0027 button by each meal and\/or using the filter to set certain parameters for your plan.\u003C\/p\u003E\n"
            }],
            [{
                "question": "I\u0027m not losing weight as fast as I want?",
                "answer": "\u003Cp\u003ELosing weight can take time but you should be losing 2-4 pounds per week, if you are not then you may need to reduce your daily calories by 200.\u003C\/p\u003E\n\u003Cp\u003ETo do this simply edit the amount of calories in plan and reduce it by 200, this will re-calculate your meals and put you back on track with your weight loss goals.\u003C\/p\u003E"
            }, {
                "question": "Will I get keto Flu?",
                "answer": "\u003Cp\u003ENot everyone will experience the \u0027keto flu\u0027 but you can help combat it by staying hydrated, replacing electrolytes, getting plenty of sleep and avoiding strenuous activities.\u003C\/p\u003E\n\u003Cp\u003ECheck out our supplements page for a great electrolyte product that will replace your sodium, potassium and magnesium and help ward off any flu like symptoms.\u003C\/p\u003E"
            }, {
                "question": "What are the recipe books for.",
                "answer": "\u003Cp\u003EThe recipe books are \u0027optional extras\u0027 you do not have to use these at all but if you want to swap some of your plan meals for ones in the recipe books you can do that no problem.\u003C\/p\u003E \n\u003Cp\u003EWe have included a short guide on how to do that on the \u0027Recipe Books\u0027 page\u003C\/p\u003E"
            }, {
                "question": "Do I need to watch\/read keto 101?",
                "answer": "\u003Cp\u003EThat\u0027s entirely up to you, keto 101 is for informational purposes only and you DO NOT have to read\/watch it for your plan to work.\u003C\/p\u003E"
            }, {
                "question": "Which supplements to you recommend for the keto diet?",
                "answer": "\u003Cp\u003ECheck out our supplements page from the menu where we list our recommended and most effective keto supplements\u003C\/p\u003E"
            }]
        ];


        var keto_user = {
            "id": 2854984,
            "username": "huyclly@gmail.com",
            "password": null,
            "authKey": null,
            "accessToken": "-eHY-TwDYICyUb6-0NYRfaWPelsBHJvL",
            "email": null,
            "enabled": 1,
            "member_access_is_sent": 1,
            "created_at": 1621268645,
            "updated_at": 1621272692,
            "member_access_resend": null
        };

        var keto_user_profile = {
            "id": 2854101,
            "first_name": "HUYCLLY",
            "last_name": "MOUMDJIAN",
            "work_at": null,
            "current_weight": 80,
            "target_weight": 69,
            "gender": "Male",
            "height": 120,
            "activity_level": 16,
            "gym_per_week": 8,
            "daily_calories": null,
            "protein_brake_downs": null,
            "fats_brake_downs": null,
            "carbs_brake_down": null,
            "expected_30d_weight": null,
            "role": null,
            "group_id": null,
            "user_id": 2854984,
            "email": "huyclly@gmail.com",
            "age": "25",
            "imperial_metric": 0,
            "workout_access_token": null,
            "more_variety": 1,
            "optin_email": "huyclly@gmail.com",
            "height_i_ft": 5,
            "height_i_inh": 4,
            "current_i_weight": 160,
            "target_i_weight": 154,
            "weeks": 8
        };

        var users_ingredients = {
            "chicken": {
                "slug": "chicken",
                "value": true
            },
            "pork": {
                "slug": "pork",
                "value": false
            },
            "beef": {
                "slug": "beef",
                "value": true
            },
            "fish": {
                "slug": "fish",
                "value": true
            },
            "bacon": {
                "slug": "bacon",
                "value": true
            },
            "no-meat": {
                "slug": "no-meat",
                "value": false
            },
            "broccoli": {
                "slug": "broccoli",
                "value": true
            },
            "mushrooms": {
                "slug": "mushrooms",
                "value": true
            },
            "zucchini": {
                "slug": "zucchini",
                "value": true
            },
            "cauliflower": {
                "slug": "cauliflower",
                "value": true
            },
            "asparagus": {
                "slug": "asparagus",
                "value": true
            },
            "avocado": {
                "slug": "avocado",
                "value": true
            },
            "egg": {
                "slug": "egg",
                "value": false
            },
            "nuts": {
                "slug": "nuts",
                "value": true
            },
            "cheese": {
                "slug": "cheese",
                "value": true
            },
            "cottage_cheese": {
                "slug": "cottage_cheese",
                "value": true
            },
            "butter": {
                "slug": "butter",
                "value": true
            },
            "coconut": {
                "slug": "coconut",
                "value": true
            },
            "no-dairy": {
                "slug": "no-dairy",
                "value": false
            }
        };

        var meat_list = [{
            "slug": "chicken",
            "title": "Chicken"
        }, {
            "slug": "pork",
            "title": "Pork"
        }, {
            "slug": "beef",
            "title": "Beef"
        }, {
            "slug": "fish",
            "title": "Fish"
        }, {
            "slug": "bacon",
            "title": "Bacon"
        }];
        var veggies_list = [{
            "slug": "broccoli",
            "title": "Broccoli"
        }, {
            "slug": "mushrooms",
            "title": "Mushrooms"
        }, {
            "slug": "zucchini",
            "title": "Zucchini"
        }, {
            "slug": "cauliflower",
            "title": "Cauliflower"
        }, {
            "slug": "asparagus",
            "title": "Asparagus"
        }, {
            "slug": "avocado",
            "title": "Avocado"
        }];

        var products_list = [{
            "slug": "egg",
            "title": "Eggs"
        }, {
            "slug": "nuts",
            "title": "Nuts"
        }, {
            "slug": "cheese",
            "title": "Cheese"
        }, {
            "slug": "cottage_cheese",
            "title": "Cottage Cheese"
        }, {
            "slug": "butter",
            "title": "Butter"
        }, {
            "slug": "coconut",
            "title": "Coconut"
        }];

        var infoblocks = {
            "weight": {
                "header": "Current Weight",
                "content": "This is your current weight and is partially what we base the amount of calories that you need to eat\n               per day to lose weight. We suggest you weight yourself once per week and adjust this number as your weight falls,\n               this means we can recalculate your calories and macronutrients to ensure you continue to lose weight in a steady and sustained manner."
            },
            "Target Weight": {
                "header": "Target Weight",
                "content": "This is the weight you wish to achieve with your Keto Diet,\n               our customised diet will make sure you reach this weight as safely and rapidly as is possible."
            },
            "Height": {
                "header": "Height",
                "content": "Your height, this is used to work out your BMI (body mass index) and helps to calculate the\n               required calories and macronutrients required each day to lose weight."
            },
            "Activity level": {
                "header": "Activity level",
                "content": "We have based your activity level on the questions you answered whilst registering,\n               if you find that you are not losing weight as fast as you would like we suggest moving this down slightly,\n               conversely if you are losing weight too fast you can move the activity level up slightly so each day you will be allowed more calories.\n               Optimal weight loss should be 1-2 pounds per week."
            },
            "Water Intake": {
                "header": "Water Intake",
                "content": "This is the amount of water we suggest you drink daily, water is essential for weight loss and is very often overlooked.\n               One study found that subjects who drank 500 ml of water temporarily boosted their metabolism by as much as 30%.\n               Researchers from the study estimated that drinking two liters of water each day can help you increase your energy expenditure by 96 calories."
            },
            "Daily Calories": {
                "header": "Daily Calories",
                "content": "This is the daily calorie intake we have calculated you need to eat to lose 1-2 pounds per week, we have based this on your age,\n               height, weight, target weight and daily activity level."
            },
            "Breakdown": {
                "header": "Protein\/Fats\/Carbs Breakdown",
                "content": "This is the amount of protein, fats and carbohydrates you will be eating per day, we have based these numbers firstly on the amount\n               of calories that you need to eat to lose weight and secondly breaking down the macronutrients based on an optimal ketogenic diet."
            },
            "Expected 30 day weight": {
                "header": "Expected 30 day weight",
                "content": "This is your estimated weight in 30 days IF YOU FOLLOW YOUR CUSTOM KETO DIET TO THE LETTER,\n               this means no cheat meals and no straying from the diet plan.\n               Please note that this is just an estimate, results may vary and are in no way absolute."
            }
        };
    </script>
    <link rel="icon" href="/favicon.ico" type="image/png">
    <title>Custom Keto Diet</title>
</head>

<body>
    <div class="modal fade show loading-screen" id="loading-screen" style="display: block">
        <div class="text text-center">
            <div class="text-center"> <span class="keto-logo"><img src="/img/logo_gray.png" alt=""></span></div>
            Loading...
        </div>
    </div>

    <div v-cloak id="dashboard-area" class="kdb-sec">
        <div class="kdb-left">
            <nav-sidebar />
        </div>
        <div class="kdb-right alice-blue-bg">
            <div class="kdb-right-content">
                <div class="">
                    <div class="tab-content">
                        <div id="home" class="tab-pane active show" role="tabpanel">
                            <div class="kdb-header d-flex justify-content-between align-items-center flex-wrap px-3 px-lg-4 py-2 bg-white e-sticky">
                                <div class="py-2">
                                    <h4 class="h-logo">Começando</h4>
                                </div>
                                <div class="py-2">
                                    <div class="h-profile">
                                        <div class="p-img">
                                            <a href="#"><img src="img/avatar.svg" alt="avatar"></a>
                                        </div>
                                        <div class="p-text d-none d-sm-block">
                                            <p>Olá, <span>{{ user_profile.first_name  }}</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="kdb-content p-3 p-lg-4">
                                <div class="bg-white px-3 px-lg-4 py-2">
                                    <div class="row">
                                        <div class="col-lg-6 py-3">
                                            <h6>Olá {{ user_profile.first_name }}, </h6>
                                            <p>Parabéns e bem-vindo à sua área de membros da dieta ceto personalizada e ao início do seu
                                                jornada de perda de peso :).
                                            <p>You've made a great decision to choose the keto diet, the health benefits and the speed
                                                at which I see my clients bodies change still astound me even now.</p>
                                            <p>Eu estarei com você em cada passo do caminho enquanto você completa sua transformação cetônica
                                                e acredite em mim, se você seguir o plano, verá os resultados RAPIDAMENTE!</p>
                                            <p>Antes de mais nada, certifique-se de assistir ao seu vídeo de boas-vindas nesta página que
                                                explica tudo que você precisa saber sobre seu plano cetônico personalizado e como obter
                                                começado.</p>
                                            <p>Se você tiver alguma dúvida, estou sempre disponível e apenas um e-mail de distância.</p>
                                            <a v-on:click.prevent="show_plan()" class="btn btn-gradient mt-4 d-none d-sm-inline-block">Leve-me à minha dieta Keto personalizada<i class="fa fa-angle-right ml-2"></i></a>
                                        </div>
                                        <div class="col-lg-6 py-3">
                                            <div class="embed-responsive embed-responsive-16by9">
                                                <!--<iframe class="embed-responsive-item" src="https://player.vimeo.com/video/361613463"
                                        allowfullscreen></iframe>-->
                                                <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/361613463" allowfullscreen></iframe>
                                            </div>
                                            <div class="mt-4 d-block d-sm-none">
                                                <a v-on:click.prevent="show_plan()" class="btn btn-gradient">
                                                    Leve-me à minha dieta Keto personalizada <i class="fa fa-angle-right ml-2"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="kdb-content p-3 p-lg-4">
                                <div class="bg-white px-3 px-lg-4 py-2">
                                    <div class="row">
                                        <div class="col-lg-12 py-3">
                                            <h2>
                                                <span class="text-red text-uppercase">Bônus grátis </span>
                                                - Jejum intermitente para pessoas que fazem dieta ceto 101
                                            </h2>
                                        </div>
                                        <div class="col-lg-3 py-3">
                                            <img src="<?= CONF_URL_BASE; ?>/img/area/Intermittent_Fasting_for_Keto_Dieters_101.png" height="300px">
                                        </div>
                                        <div class="col-lg-9 py-3">
                                            <h5 class="text-red">Aprenda como o jejum intermitente pode:</h5>
                                            <ul class="mt-3 learn-how">
                                                <li><i class="fa fa-check-square-o" aria-hidden="true"></i>
                                                    Aumente o seu metabolismo, mobilize ácidos graxos, aumente o HGH e reduza a fome para perder peso quase sem esforço.</li>
                                                <li><i class="fa fa-check-square-o" aria-hidden="true"></i>
                                                    Reduz a inflamação, melhora a sensibilidade à insulina (ajuda com diabetes tipo 2), melhora a saúde do coração e fornece benefícios anti-envelhecimento.</li>
                                                <li><i class="fa fa-check-square-o" aria-hidden="true"></i>
                                                    Combine com seu plano de Dieta Ceto Personalizada para aprofundar a cetose e transformar seu corpo em uma máquina de queimar gordura.</li>
                                            </ul>
                                            <div class="download-bottom-button">
                                                <a href="/uploads/Intermittent_Fasting_for_Keto_Dieters_101.pdf" download class="btn btn-gradient">
                                                    Baixe Agora <i class="fa fa-angle-right ml-2"></i>
                                                </a>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="plan" class="tab-pane" role="tabpanel">


                            <div class="kdb-header d-flex justify-content-between align-items-center flex-wrap px-3 px-lg-4 py-2 bg-white e-sticky" xmlns:v-on="http://www.w3.org/1999/xhtml">
                                <div class="py-2">
                                    <h4 class="h-logo">Seu plano</h4>
                                </div>
                                <div class="py-2 align-items-center d-flex">
                                    <div>
                                        <!-- https://player.vimeo.com/video/364615173-->
                                        <a class="learn-more mr-3 mr-lg-5 video-popup" href="https://player.vimeo.com/video/364615173">
                                            <img src="img/info.svg" alt="">
                                            <span class="d-none d-sm-inline-block">Saber mais <span class="d-none d-md-inline-block"> sobre o seu plano</span></span>
                                        </a>

                                    </div>
                                    <div class="h-profile">
                                        <div class="p-img">
                                            <a href="#"><img src="img/avatar.svg" alt="avatar"></a>
                                        </div>
                                        <div class="p-text d-none d-sm-block">
                                            <p>Olá, {{ user_profile.first_name  }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="p-3 p-lg-4">
                                <div class="">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-6 pb-4">
                                            <div class="plan-block">
                                                <div class="pb-left">
                                                    <div class="pb-img">
                                                        <img src="img/p1.svg" alt="">
                                                    </div>
                                                    <div class="pb-text pb-input" v-if="input_current_weight_is_shown">
                                                        <input v-model.number="form.current_weight" id="current_weight">
                                                        <p>peso atual, {{ weight_unit }}</p>
                                                    </div>
                                                    <div class="pb-text" v-else="">
                                                        <h4>{{profile_data.current_weight}} <span>{{ weight_unit }} <a v-on:click="show_info('weight')"><img src="img/question.svg"></a></span> </h4>
                                                        <p>peso atual</p>
                                                    </div>
                                                </div>
                                                <div class="pb-right" v-if="!input_current_weight_is_shown">
                                                    <a v-on:click="toggle_weight_input()"><img src="img/pencil.svg" alt=""></a>
                                                </div>
                                                <div class="pb-right" v-else="">
                                                    <a v-on:click="update_user_profile()"><i class="fa fa-check-circle-o"></i></a>
                                                </div>
                                            </div>
                                            <div class="plan-block border-top">
                                                <div class="pb-left">
                                                    <div class="pb-img">
                                                        <img src="img/p2.svg" alt="">
                                                    </div>
                                                    <div class="pb-text pb-input" v-if="input_target_weight_is_shown">
                                                        <input v-model.number="form.target_weight" id="target_weight">
                                                        <p>Peso alvo, {{ weight_unit }}</p>
                                                    </div>
                                                    <div class="pb-text" v-else="">
                                                        <h4>{{ profile_data.target_weight }} <span>{{ weight_unit }} <a v-on:click="show_info('Target Weight')"><img src="img/question.svg"></a></span></h4>
                                                        <p>Peso alvo</p>
                                                    </div>
                                                </div>
                                                <div class="pb-right" v-if="!input_target_weight_is_shown">
                                                    <a v-on:click.prevent="toggle_target_weight_input()"><img src="img/pencil.svg" alt=""></a>
                                                </div>
                                                <div class="pb-right" v-else="">
                                                    <a v-on:click.prevent="update_user_profile()"><i class="fa fa-check-circle-o"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 pb-4">
                                            <div class="plan-block">
                                                <div v-if="user_profile.imperial_metric" class="pb-left">
                                                    <div class="pb-img">
                                                        <img src="img/p3.svg" alt="">
                                                    </div>
                                                    <div class="pb-text pb-input" v-if="input_height_is_shown">
                                                        <input v-model.number="form.height_ft" id="height_ft"> <span>ft</span>
                                                        <input v-model.number="form.height_in" id="height_in"><span>in</span>
                                                        <p>altura</p>
                                                    </div>
                                                    <div v-else="" class="pb-text">
                                                        <h4>{{ profile_data.height_ft }} <span>ft</span> {{ profile_data.height_in }} <span>in <a v-on:click="show_info('Height')"><img src="img/question.svg"></a></span></h4>
                                                        <p>altura</p>
                                                    </div>

                                                </div>
                                                <div v-else="" class="pb-left">
                                                    <div class="pb-img">
                                                        <img src="img/p3.svg" alt="">
                                                    </div>
                                                    <div class="pb-text pb-input" v-if="input_height_is_shown">
                                                        <input v-model.number="form.height" id="height">

                                                        <p>altura, cm</p>
                                                    </div>
                                                    <div v-else="" class="pb-text">
                                                        <h4>{{ profile_data.height }} <span>cm <a v-on:click="show_info('Height')"><img src="img/question.svg"></a></span></h4>
                                                        <p>altura</p>
                                                    </div>
                                                </div>
                                                <div class="pb-right" v-if="!input_height_is_shown">
                                                    <a v-on:click="toggle_height_input()"><img src="img/pencil.svg" alt=""></a>
                                                </div>
                                                <div class="pb-right" v-else="">
                                                    <a v-on:click.prevent="update_user_profile()"><i class="fa fa-check-circle-o"></i></a>
                                                </div>
                                            </div>
                                            <div class="plan-block border-top">
                                                <div class="pb-left">
                                                    <div class="pb-img">
                                                        <img src="img/p4.svg" alt="">
                                                    </div>
                                                    <div class="pb-text pb-input" v-if="input_activity_level_is_shown">
                                                        <select v-model="form.activity_level" id="activity-level">
                                                            <option value="12">Muito baixo</option>
                                                            <option value="13">baixo</option>
                                                            <option value="14">Moderate</option>
                                                            <option value="15">Alto</option>
                                                            <option value="16">Muito alto</option>
                                                        </select>
                                                        <p>nível de atividade</p>
                                                    </div>
                                                    <div v-else="" class="pb-text">
                                                        <h4>{{ profile_data.activity_level }} <span><a v-on:click="show_info('Activity level')"><img src="img/question.svg"></a></span></h4>
                                                        <p>nível de atividade</p>
                                                    </div>
                                                </div>
                                                <div class="pb-right" v-if="!input_activity_level_is_shown">
                                                    <a v-on:click.prevent="toggle_activity_level_input()"><img src="img/pencil.svg" alt=""></a>
                                                </div>
                                                <div class="pb-right" v-else="">
                                                    <a v-on:click.prevent="update_user_profile()"><i class="fa fa-check-circle-o"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 pb-4">
                                            <div class="plan-block">
                                                <div class="pb-left">
                                                    <div class="pb-img">
                                                        <img src="img/p5.svg" alt="">
                                                    </div>
                                                    <div class="pb-text pb-input" v-if="daily_calories_is_shown">
                                                        <input v-model.number="form.daily_calories" id="daily_calories">
                                                        <p>calorias diárias</p>
                                                    </div>
                                                    <div class="pb-text" v-else="">
                                                        <h4>{{ profile_data.daily_calories }} <a v-on:click="show_info('Daily Calories')"><img src="img/question.svg"></a></h4>
                                                        <p>calorias diárias</p>
                                                    </div>
                                                </div>
                                                <div class="pb-right" v-if="!daily_calories_is_shown">
                                                    <a v-on:click.prevent="toggle_daily_calories_input()"><img src="img/pencil.svg" alt=""></a>
                                                </div>
                                                <div class="pb-right" v-else="">
                                                    <a v-on:click.prevent="update_user_profile()"><i class="fa fa-check-circle-o"></i></a>
                                                </div>
                                            </div>
                                            <div class="plan-block border-top">
                                                <div class="pb-left">
                                                    <div class="pb-img">
                                                        <img src="img/p6.svg" alt="">
                                                    </div>
                                                    <div class="pb-text">
                                                        <h4>{{ profile_data.nutrients_breakdown }} <a v-on:click="show_info('Breakdown')"><img src="img/question.svg"></a></h4>
                                                        <p>Proteína / gorduras / carboidratos </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 pb-4">
                                            <div class="plan-block">
                                                <div class="pb-left">
                                                    <div class="pb-img">
                                                        <img src="img/p7.svg" alt="">
                                                    </div>
                                                    <div class="pb-text">
                                                        <h4>{{ profile_data.water_intake }} <span>l <a v-on:click="show_info('Water Intake')"><img src="img/question.svg"></a></span></h4>
                                                        <p>ingestão de água</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="plan-block border-top">
                                                <div class="pb-left">
                                                    <div class="pb-img">
                                                        <img src="img/p8.svg" alt="">
                                                    </div>
                                                    <div class="pb-text">
                                                        <h4>{{ profile_data.expected_weight }} <span>{{ weight_unit }} <a v-on:click="show_info('Expected 30 day weight')"><img src="img/question.svg"></a></span></h4>
                                                        <p>peso esperado para 30 dias</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center flex-wrap">
                                    <div class="mr-3">
                                        <h4>Seu plano de refeições personalizado</h4>
                                    </div>
                                    <div class="d-flex flex-wrap align-items-center pb-2">
                                        <div class="cp-week-wrap py-2 mt-1 mr-2">
                                            <div class="cp-week">
                                                <div class="week-carousel owl-carousel">
                                                    <div v-for="n in profile_data.weeks" class="">
                                                        <p>Semana {{ n }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="p-2">
                                            <a href="#ingredients-modal" data-toggle="modal" class="cp-filter"><img src="img/refresh.svg" alt=""> mudar ingredientes</a>
                                        </div>
                                        <div class="p-2">
                                            <a href="#filter-modal" data-toggle="modal" class="cp-filter"><img src="img/filter.svg" alt=""> filtro</a>
                                        </div>
                                        <!-- <div class="p-2" >
                <a href="#new-recipe-modal" id="swap-meal-btn" data-toggle="modal" data-target="#new-recipe-modal" class="cp-filter"><img src="img//filter.svg" alt=""> swap</a>
            </div>-->
                                        <div class="p-2">
                                            <a :href="'/print/plan/' + user.accessToken + '/' + week_num " class="cp-filter" target="_blank">
                                                <img src="img/printer.svg" alt=""> imprimir meu plano de refeição</a>
                                        </div>
                                        <div class="p-2">
                                            <a target="_blank" :href="'/shopping-list/' + jwt_token + '/' + week_num + '/2019'" class="cp-filter btn-gradient">
                                                <img src="img/download.svg" alt="">Baixar lista de compras</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive d-none d-md-block">
                                    <table class="table bg-white meal-table">
                                        <tbody>
                                            <tr>
                                                <td></td>
                                                <th>Café da manhã</th>
                                                <th>Almoço</th>
                                                <th>Jantar</th>
                                                <th>Lanches</th>
                                            </tr>

                                            <tr>
                                                <td>Dia 1</td>
                                                <td v-for="day_time in day_times">
                                                    <meal-item v-bind:recipe="diet_week[1][day_time]" v-bind:day_num="1" v-bind:day_time="day_time" v-bind:portions="diet_week[1][day_time + '_portions']" v-on:init-swap-recipe="init_swap_recipe" v-on:show-recipe="showRecipe" />
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>Dia 2</td>
                                                <td v-for="day_time in day_times">
                                                    <meal-item v-bind:recipe="diet_week[2][day_time]" v-bind:day_num="2" v-bind:day_time="day_time" v-bind:portions="diet_week[2][day_time + '_portions']" v-on:init-swap-recipe="init_swap_recipe" v-on:show-recipe="showRecipe" />
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>Dia 3</td>
                                                <td v-for="day_time in day_times">
                                                    <meal-item v-bind:recipe="diet_week[3][day_time]" v-bind:day_num="3" v-bind:day_time="day_time" v-bind:portions="diet_week[3][day_time + '_portions']" v-on:init-swap-recipe="init_swap_recipe" v-on:show-recipe="showRecipe" />
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>Dia 4</td>
                                                <td v-for="day_time in day_times">
                                                    <meal-item v-bind:recipe="diet_week[4][day_time]" v-bind:day_num="4" v-bind:day_time="day_time" v-bind:portions="diet_week[4][day_time + '_portions']" v-on:init-swap-recipe="init_swap_recipe" v-on:show-recipe="showRecipe" />
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>Dia 5</td>
                                                <td v-for="day_time in day_times">
                                                    <meal-item v-bind:recipe="diet_week[5][day_time]" v-bind:day_num="5" v-bind:day_time="day_time" v-bind:portions="diet_week[5][day_time + '_portions']" v-on:init-swap-recipe="init_swap_recipe" v-on:show-recipe="showRecipe" />
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>Dia 6</td>
                                                <td v-for="day_time in day_times">
                                                    <meal-item v-bind:recipe="diet_week[6][day_time]" v-bind:day_num="6" v-bind:day_time="day_time" v-bind:portions="diet_week[6][day_time + '_portions']" v-on:init-swap-recipe="init_swap_recipe" v-on:show-recipe="showRecipe" />
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>Dia 7</td>
                                                <td v-for="day_time in day_times">
                                                    <meal-item v-bind:recipe="diet_week[7][day_time]" v-bind:day_num="7" v-bind:day_time="day_time" v-bind:portions="diet_week[7][day_time + '_portions']" v-on:init-swap-recipe="init_swap_recipe" v-on:show-recipe="showRecipe" />
                                                </td>

                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- Meal plans for mobile devices -->
                                <div class="meal-table row d-block d-md-none">
                                    <!-- Single Day meal -->
                                    <div class="single-day py-4">


                                        <div class="col-sm-12 py-3 bg-white mb-3">
                                            <h4 class="mb-0">Dia 1</h4>
                                        </div>
                                        <div class="mobile-meals">
                                            <div class="d-flex flex-wrap align-items-center single-meal-item">
                                                <div class="col-3">
                                                    <span>Café da manhã</span>
                                                </div>
                                                <div class="col-9">
                                                    <mobile-meal-item v-bind:recipe="diet_week[1]['breakfast']" v-bind:day_num="1" v-bind:day_time="'breakfast'" v-bind:portions="diet_week[1]['breakfast_portions']" v-on:init-swap-recipe="init_swap_recipe" v-on:show-recipe="showRecipe" />
                                                </div>
                                            </div>
                                            <div class="d-flex flex-wrap align-items-center single-meal-item">
                                                <div class="col-3">
                                                    <span>Almoço</span>
                                                </div>
                                                <div class="col-9">
                                                    <mobile-meal-item v-bind:recipe="diet_week[1]['lunch']" v-bind:day_num="1" v-bind:day_time="'lunch'" v-bind:portions="diet_week[1]['lunch_portions']" v-on:init-swap-recipe="init_swap_recipe" v-on:show-recipe="showRecipe" />
                                                </div>
                                            </div>
                                            <div class="d-flex flex-wrap align-items-center single-meal-item">
                                                <div class="col-3">
                                                    <span>Jantar</span>
                                                </div>
                                                <div class="col-9">
                                                    <mobile-meal-item v-bind:recipe="diet_week[1]['dinner']" v-bind:day_num="1" v-bind:day_time="'dinner'" v-bind:portions="diet_week[1]['dinner_portions']" v-on:init-swap-recipe="init_swap_recipe" v-on:show-recipe="showRecipe" />
                                                </div>
                                            </div>
                                            <div class="d-flex flex-wrap align-items-center single-meal-item">
                                                <div class="col-3">
                                                    <span>Lanches</span>
                                                </div>
                                                <div class="col-9">
                                                    <mobile-meal-item v-bind:recipe="diet_week[1]['snacks']" v-bind:day_num="1" v-bind:day_time="'snacks'" v-bind:portions="diet_week[1]['snacks_portions']" v-on:init-swap-recipe="init_swap_recipe" v-on:show-recipe="showRecipe" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Day meal -->
                                    <div class="single-day py-4">


                                        <div class="col-sm-12 py-3 bg-white mb-3">
                                            <h4 class="mb-0">Dias 2</h4>
                                        </div>
                                        <div class="mobile-meals">
                                            <div class="d-flex flex-wrap align-items-center single-meal-item">
                                                <div class="col-3">
                                                    <span>Breakfast</span>
                                                </div>
                                                <div class="col-9">
                                                    <mobile-meal-item v-bind:recipe="diet_week[2]['breakfast']" v-bind:day_num="2" v-bind:day_time="'breakfast'" v-bind:portions="diet_week[2]['breakfast_portions']" v-on:init-swap-recipe="init_swap_recipe" v-on:show-recipe="showRecipe" />
                                                </div>
                                            </div>
                                            <div class="d-flex flex-wrap align-items-center single-meal-item">
                                                <div class="col-3">
                                                    <span>Lunch</span>
                                                </div>
                                                <div class="col-9">
                                                    <mobile-meal-item v-bind:recipe="diet_week[2]['lunch']" v-bind:day_num="2" v-bind:day_time="'lunch'" v-bind:portions="diet_week[2]['lunch_portions']" v-on:init-swap-recipe="init_swap_recipe" v-on:show-recipe="showRecipe" />
                                                </div>
                                            </div>
                                            <div class="d-flex flex-wrap align-items-center single-meal-item">
                                                <div class="col-3">
                                                    <span>Dinner</span>
                                                </div>
                                                <div class="col-9">
                                                    <mobile-meal-item v-bind:recipe="diet_week[2]['dinner']" v-bind:day_num="2" v-bind:day_time="'dinner'" v-bind:portions="diet_week[2]['dinner_portions']" v-on:init-swap-recipe="init_swap_recipe" v-on:show-recipe="showRecipe" />
                                                </div>
                                            </div>
                                            <div class="d-flex flex-wrap align-items-center single-meal-item">
                                                <div class="col-3">
                                                    <span>Snacks</span>
                                                </div>
                                                <div class="col-9">
                                                    <mobile-meal-item v-bind:recipe="diet_week[2]['snacks']" v-bind:day_num="2" v-bind:day_time="'snacks'" v-bind:portions="diet_week[2]['snacks_portions']" v-on:init-swap-recipe="init_swap_recipe" v-on:show-recipe="showRecipe" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Day meal -->
                                    <div class="single-day py-4">


                                        <div class="col-sm-12 py-3 bg-white mb-3">
                                            <h4 class="mb-0">DIA 3</h4>
                                        </div>
                                        <div class="mobile-meals">
                                            <div class="d-flex flex-wrap align-items-center single-meal-item">
                                                <div class="col-3">
                                                    <span>Breakfast</span>
                                                </div>
                                                <div class="col-9">
                                                    <mobile-meal-item v-bind:recipe="diet_week[3]['breakfast']" v-bind:day_num="3" v-bind:day_time="'breakfast'" v-bind:portions="diet_week[3]['breakfast_portions']" v-on:init-swap-recipe="init_swap_recipe" v-on:show-recipe="showRecipe" />
                                                </div>
                                            </div>
                                            <div class="d-flex flex-wrap align-items-center single-meal-item">
                                                <div class="col-3">
                                                    <span>Lunch</span>
                                                </div>
                                                <div class="col-9">
                                                    <mobile-meal-item v-bind:recipe="diet_week[3]['lunch']" v-bind:day_num="3" v-bind:day_time="'lunch'" v-bind:portions="diet_week[3]['lunch_portions']" v-on:init-swap-recipe="init_swap_recipe" v-on:show-recipe="showRecipe" />
                                                </div>
                                            </div>
                                            <div class="d-flex flex-wrap align-items-center single-meal-item">
                                                <div class="col-3">
                                                    <span>Dinner</span>
                                                </div>
                                                <div class="col-9">
                                                    <mobile-meal-item v-bind:recipe="diet_week[3]['dinner']" v-bind:day_num="3" v-bind:day_time="'dinner'" v-bind:portions="diet_week[3]['dinner_portions']" v-on:init-swap-recipe="init_swap_recipe" v-on:show-recipe="showRecipe" />
                                                </div>
                                            </div>
                                            <div class="d-flex flex-wrap align-items-center single-meal-item">
                                                <div class="col-3">
                                                    <span>Snacks</span>
                                                </div>
                                                <div class="col-9">
                                                    <mobile-meal-item v-bind:recipe="diet_week[3]['snacks']" v-bind:day_num="3" v-bind:day_time="'snacks'" v-bind:portions="diet_week[3]['snacks_portions']" v-on:init-swap-recipe="init_swap_recipe" v-on:show-recipe="showRecipe" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Day meal -->
                                    <div class="single-day py-4">


                                        <div class="col-sm-12 py-3 bg-white mb-3">
                                            <h4 class="mb-0">DIA 4</h4>
                                        </div>
                                        <div class="mobile-meals">
                                            <div class="d-flex flex-wrap align-items-center single-meal-item">
                                                <div class="col-3">
                                                    <span>Breakfast</span>
                                                </div>
                                                <div class="col-9">
                                                    <mobile-meal-item v-bind:recipe="diet_week[4]['breakfast']" v-bind:day_num="4" v-bind:day_time="'breakfast'" v-bind:portions="diet_week[4]['breakfast_portions']" v-on:init-swap-recipe="init_swap_recipe" v-on:show-recipe="showRecipe" />
                                                </div>
                                            </div>
                                            <div class="d-flex flex-wrap align-items-center single-meal-item">
                                                <div class="col-3">
                                                    <span>Lunch</span>
                                                </div>
                                                <div class="col-9">
                                                    <mobile-meal-item v-bind:recipe="diet_week[4]['lunch']" v-bind:day_num="4" v-bind:day_time="'lunch'" v-bind:portions="diet_week[4]['lunch_portions']" v-on:init-swap-recipe="init_swap_recipe" v-on:show-recipe="showRecipe" />
                                                </div>
                                            </div>
                                            <div class="d-flex flex-wrap align-items-center single-meal-item">
                                                <div class="col-3">
                                                    <span>Dinner</span>
                                                </div>
                                                <div class="col-9">
                                                    <mobile-meal-item v-bind:recipe="diet_week[4]['dinner']" v-bind:day_num="4" v-bind:day_time="'dinner'" v-bind:portions="diet_week[4]['dinner_portions']" v-on:init-swap-recipe="init_swap_recipe" v-on:show-recipe="showRecipe" />
                                                </div>
                                            </div>
                                            <div class="d-flex flex-wrap align-items-center single-meal-item">
                                                <div class="col-3">
                                                    <span>Snacks</span>
                                                </div>
                                                <div class="col-9">
                                                    <mobile-meal-item v-bind:recipe="diet_week[4]['snacks']" v-bind:day_num="4" v-bind:day_time="'snacks'" v-bind:portions="diet_week[4]['snacks_portions']" v-on:init-swap-recipe="init_swap_recipe" v-on:show-recipe="showRecipe" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Day meal -->
                                    <div class="single-day py-4">


                                        <div class="col-sm-12 py-3 bg-white mb-3">
                                            <h4 class="mb-0">DIA 5</h4>
                                        </div>
                                        <div class="mobile-meals">
                                            <div class="d-flex flex-wrap align-items-center single-meal-item">
                                                <div class="col-3">
                                                    <span>Breakfast</span>
                                                </div>
                                                <div class="col-9">
                                                    <mobile-meal-item v-bind:recipe="diet_week[5]['breakfast']" v-bind:day_num="5" v-bind:day_time="'breakfast'" v-bind:portions="diet_week[5]['breakfast_portions']" v-on:init-swap-recipe="init_swap_recipe" v-on:show-recipe="showRecipe" />
                                                </div>
                                            </div>
                                            <div class="d-flex flex-wrap align-items-center single-meal-item">
                                                <div class="col-3">
                                                    <span>Lunch</span>
                                                </div>
                                                <div class="col-9">
                                                    <mobile-meal-item v-bind:recipe="diet_week[5]['lunch']" v-bind:day_num="5" v-bind:day_time="'lunch'" v-bind:portions="diet_week[5]['lunch_portions']" v-on:init-swap-recipe="init_swap_recipe" v-on:show-recipe="showRecipe" />
                                                </div>
                                            </div>
                                            <div class="d-flex flex-wrap align-items-center single-meal-item">
                                                <div class="col-3">
                                                    <span>Dinner</span>
                                                </div>
                                                <div class="col-9">
                                                    <mobile-meal-item v-bind:recipe="diet_week[5]['dinner']" v-bind:day_num="5" v-bind:day_time="'dinner'" v-bind:portions="diet_week[5]['dinner_portions']" v-on:init-swap-recipe="init_swap_recipe" v-on:show-recipe="showRecipe" />
                                                </div>
                                            </div>
                                            <div class="d-flex flex-wrap align-items-center single-meal-item">
                                                <div class="col-3">
                                                    <span>Snacks</span>
                                                </div>
                                                <div class="col-9">
                                                    <mobile-meal-item v-bind:recipe="diet_week[5]['snacks']" v-bind:day_num="5" v-bind:day_time="'snacks'" v-bind:portions="diet_week[5]['snacks_portions']" v-on:init-swap-recipe="init_swap_recipe" v-on:show-recipe="showRecipe" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Day meal -->
                                    <div class="single-day py-4">


                                        <div class="col-sm-12 py-3 bg-white mb-3">
                                            <h4 class="mb-0">DIA 6</h4>
                                        </div>
                                        <div class="mobile-meals">
                                            <div class="d-flex flex-wrap align-items-center single-meal-item">
                                                <div class="col-3">
                                                    <span>Breakfast</span>
                                                </div>
                                                <div class="col-9">
                                                    <mobile-meal-item v-bind:recipe="diet_week[6]['breakfast']" v-bind:day_num="6" v-bind:day_time="'breakfast'" v-bind:portions="diet_week[6]['breakfast_portions']" v-on:init-swap-recipe="init_swap_recipe" v-on:show-recipe="showRecipe" />
                                                </div>
                                            </div>
                                            <div class="d-flex flex-wrap align-items-center single-meal-item">
                                                <div class="col-3">
                                                    <span>Lunch</span>
                                                </div>
                                                <div class="col-9">
                                                    <mobile-meal-item v-bind:recipe="diet_week[6]['lunch']" v-bind:day_num="6" v-bind:day_time="'lunch'" v-bind:portions="diet_week[6]['lunch_portions']" v-on:init-swap-recipe="init_swap_recipe" v-on:show-recipe="showRecipe" />
                                                </div>
                                            </div>
                                            <div class="d-flex flex-wrap align-items-center single-meal-item">
                                                <div class="col-3">
                                                    <span>Dinner</span>
                                                </div>
                                                <div class="col-9">
                                                    <mobile-meal-item v-bind:recipe="diet_week[6]['dinner']" v-bind:day_num="6" v-bind:day_time="'dinner'" v-bind:portions="diet_week[6]['dinner_portions']" v-on:init-swap-recipe="init_swap_recipe" v-on:show-recipe="showRecipe" />
                                                </div>
                                            </div>
                                            <div class="d-flex flex-wrap align-items-center single-meal-item">
                                                <div class="col-3">
                                                    <span>Snacks</span>
                                                </div>
                                                <div class="col-9">
                                                    <mobile-meal-item v-bind:recipe="diet_week[6]['snacks']" v-bind:day_num="6" v-bind:day_time="'snacks'" v-bind:portions="diet_week[6]['snacks_portions']" v-on:init-swap-recipe="init_swap_recipe" v-on:show-recipe="showRecipe" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Day meal -->
                                    <div class="single-day py-4">


                                        <div class="col-sm-12 py-3 bg-white mb-3">
                                            <h4 class="mb-0">DIA 7</h4>
                                        </div>
                                        <div class="mobile-meals">
                                            <div class="d-flex flex-wrap align-items-center single-meal-item">
                                                <div class="col-3">
                                                    <span>Breakfast</span>
                                                </div>
                                                <div class="col-9">
                                                    <mobile-meal-item v-bind:recipe="diet_week[7]['breakfast']" v-bind:day_num="7" v-bind:day_time="'breakfast'" v-bind:portions="diet_week[7]['breakfast_portions']" v-on:init-swap-recipe="init_swap_recipe" v-on:show-recipe="showRecipe" />
                                                </div>
                                            </div>
                                            <div class="d-flex flex-wrap align-items-center single-meal-item">
                                                <div class="col-3">
                                                    <span>Lunch</span>
                                                </div>
                                                <div class="col-9">
                                                    <mobile-meal-item v-bind:recipe="diet_week[7]['lunch']" v-bind:day_num="7" v-bind:day_time="'lunch'" v-bind:portions="diet_week[7]['lunch_portions']" v-on:init-swap-recipe="init_swap_recipe" v-on:show-recipe="showRecipe" />
                                                </div>
                                            </div>
                                            <div class="d-flex flex-wrap align-items-center single-meal-item">
                                                <div class="col-3">
                                                    <span>Dinner</span>
                                                </div>
                                                <div class="col-9">
                                                    <mobile-meal-item v-bind:recipe="diet_week[7]['dinner']" v-bind:day_num="7" v-bind:day_time="'dinner'" v-bind:portions="diet_week[7]['dinner_portions']" v-on:init-swap-recipe="init_swap_recipe" v-on:show-recipe="showRecipe" />
                                                </div>
                                            </div>
                                            <div class="d-flex flex-wrap align-items-center single-meal-item">
                                                <div class="col-3">
                                                    <span>Snacks</span>
                                                </div>
                                                <div class="col-9">
                                                    <mobile-meal-item v-bind:recipe="diet_week[7]['snacks']" v-bind:day_num="7" v-bind:day_time="'snacks'" v-bind:portions="diet_week[7]['snacks_portions']" v-on:init-swap-recipe="init_swap_recipe" v-on:show-recipe="showRecipe" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div id="recipes" class="tab-pane" role="tabpanel">

                            <div class="kdb-header d-flex justify-content-between align-items-center flex-wrap px-3 px-lg-4 py-2 bg-white e-sticky">
                                <div class="py-2">
                                    <h4 class="h-logo">Livros de receitas Keto</h4>
                                </div>
                                <div class="py-2 align-items-center d-flex">
                                    <div class="">
                                        <span class="learn-more mr-3 mr-lg-5" data-toggle="modal" data-target="#introduction-modal">
                                            <img src="img/info.svg" alt="">
                                            <span class="d-none d-md-inline-block">
                                                Aprenda como implementar essas receitas em seu plano de refeições cetônicas</span>
                                        </span>
                                    </div>
                                    <div class="h-profile">
                                        <div class="p-img">
                                            <a href="#"><img src="img/avatar.svg" alt="avatar"></a>
                                        </div>
                                        <div class="p-text d-none d-sm-block">
                                            <p>Olá, <a href="">{{ user_profile.first_name }}</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="p-3 p-lg-4">
                                <div class="row recipes-item-wrap">
                                    <div v-for="item in recipe_items" class="col-lg-6 pb-4">
                                        <recipe-item v-bind:item="item" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="faq" class="tab-pane" role="tabpanel">

                            <div class="kdb-height">
                                <div class="kdb-header d-flex justify-content-between align-items-center flex-wrap px-3 px-lg-4 py-2 bg-white e-sticky">
                                    <div class="py-2">
                                        <h4 class="h-logo">FAQ</h4>
                                    </div>
                                    <div class="py-2">
                                        <div class="h-profile">
                                            <div class="p-img">
                                                <a href="#"><img src="img/avatar.svg" alt="avatar"></a>
                                            </div>
                                            <div class="p-text d-none d-sm-block">
                                                <p>Olá, {{ user_profile.first_name  }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-3 p-lg-4">
                                    <div class="row faq-lists">
                                        <div class="col-lg-6" v-for="list in faq_list">
                                            <ul class="faq-list">
                                                <li v-for="item in list">
                                                    <h6 class="faq-title" v-html="item.question"></h6>
                                                    <div class="faq-content" v-html="item.answer"></div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="recipe" class="tab-pane" role="tabpanel">


                            <div class="kdb-header d-flex justify-content-between align-items-center flex-wrap px-3 px-lg-4 py-2 bg-white e-sticky">
                                <div class="py-2">
                                    <a v-on:click="show_plan()" class="h-logo pl-0"><i class="fa fa-arrow-left"></i> My Plan </a>
                                </div>
                                <div class="py-2">
                                    <div class="h-profile">
                                        <div class="p-img">
                                            <img src="img/avatar.svg" alt="avatar">
                                        </div>
                                        <div class="p-text">
                                            <p>Olá, {{ user_profile.first_name }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="p-3 p-lg-4">
                                <div class="tab-content">
                                    <recipe-view v-bind:recipe="recipe" v-bind:portions="recipe_portions" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-3 px-lg-4 py-lg-3">
                        <div class="kdb-copyright row">
                            <div class="col-lg-6 py-1">
                                <p>Copyright 2019 Custom Keto Diet. All rights reserved.</p>
                            </div>
                            <div class="col-lg-6 py-1">
                                <ul class="copyright-menu">
                                    <li><a href="/privacy" target="_blank">Privacy</a></li>
                                    <li><a href="/site/terms" target="_blank">Terms & Conditions</a></li>
                                    <li><a href="/contact">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade keto-modal" role="dialog" id="ingredients-modal">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content p-4">
                <div class="m-header mb-4">
                    <h5>Selecione ou altere os ingredientes alimentares</h5>
                    <span class="close" data-dismiss="modal" aria-label="Close">+</span>
                </div>
                <div class="modal-body p-0">
                    <ul class="nav nav-tabs food-tabs mb-4" id="myTab" role="tablist">
                        <li>
                            <a class="active" data-toggle="tab" href="#meat" id="meat-nav" role="tab">Carnes</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#veggies" role="tab" id="veggies-nav">Vegetais</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#products" role="tab" id="products-nav">Produtos</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="meat" role="tabpanel">
                            <div class="d-flex flex-wrap">
                                <label v-for="ingredient in meat" class="ingredients-check mr-3 mb-4">
                                    <input type="checkbox" change="check_meat()" v-model="ingredients_form[ingredient.slug]['value']">
                                    <span class="ic-title">
                                        <img :src="'img/'+ingredient.slug+'.png'" :alt="ingredient.title">
                                        <span>{{ ingredient.title }}</span>
                                    </span>
                                </label>
                                <label class="ingredients-check mr-3 mb-4">
                                    <input type="checkbox" change="unselect_no_meat()" v-model="ingredients_form['no-meat']['value']">
                                    <span class="ic-title">
                                        <img src="img/no-meat.png" alt="Products">
                                        <span>No meat</span>
                                    </span>
                                </label>
                            </div>
                            <div class="modal-footer border-0 d-block text-right p-0 mt-3">
                                <a class="btn btn-light next-back-link" href="#veggies" data-dest="veggies">Proximo</a>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="veggies" role="tabpanel">
                            <div class="d-flex flex-wrap">
                                <label v-for="ingredient in veggies" class="ingredients-check mr-3 mb-4">
                                    <input type="checkbox" v-model="ingredients_form[ingredient.slug]['value']">
                                    <span class="ic-title">
                                        <img :src="'img/'+ingredient.slug+'.png'" :alt="ingredient.title">
                                        <span>{{ ingredient.title }}</span>
                                    </span>
                                </label>

                            </div>
                            <div class="modal-footer border-0 d-flex justify-content-between p-0 mt-3">
                                <a href="#meat" class="btn btn-light next-back-link">Voltar</a>
                                <a class="btn btn-light next-back-link" href="#products">Proximo</a>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="products" role="tabpanel">
                            <div class="d-flex flex-wrap">
                                <label v-for="ingredient in products" class="ingredients-check mr-3 mb-4">
                                    <input v-if="ingredient.slug == 'cheese' || ingredient.slug == 'cottage_cheese' || ingredient.slug == 'butter'" type="checkbox" class="dairy-checkbox" v-model="ingredients_form[ingredient.slug]['value']" @change="select_no_dairy()">
                                    <input v-else="" type="checkbox" v-model="ingredients_form[ingredient.slug]['value']">
                                    <span class="ic-title">
                                        <img :src="'img/'+ingredient.slug+'.png'" :alt="ingredient.title">
                                        <span>{{ ingredient.title }}</span>
                                    </span>
                                </label>
                                <label class="ingredients-check mr-3 mb-4">
                                    <input type="checkbox" @change="unselect_no_dairy()" v-model="ingredients_form['no-dairy']['value']">
                                    <span class="ic-title">
                                        <img src="img/no-meat.png" alt="Products">
                                        <span>No dairy</span>
                                    </span>
                                </label>
                            </div>
                            <div class="modal-footer border-0 d-flex justify-content-between p-0 mt-3">
                                <span><a class="btn btn-light next-back-link" href="#veggies">Voltar</a></span>
                                <span><a data-dismiss="modal" class="btn btn-gradient">Cancelar</a>
                                    <a v-on:click="saveHandler()" class="btn btn-gradient">Salvar</a></span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="modal fade keto-modal" role="dialog" id="about-plan-modal">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content p-4">
                <div class="m-header mb-2">
                    <h5>Saber mais <span class="d-none d-md-inline-block"> sobre o seu plano</h5>
                    <span class="close" data-dismiss="modal" aria-label="Close">+</span>
                </div>
                <div class="modal-body p-0">
                    en-Us <iframe src="https://player.vimeo.com/video/364615173" width="640" height="360" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                    <!--<iframe src="https://player.vimeo.com/video/364615173" width="640" height="360" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>-->
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade keto-modal" role="dialog" id="info-modal">
        <div class="modal-dialog max-w850 modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <info-view v-bind:info="info" />
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade keto-modal" role="dialog" id="update-confirmation-modal">
        <div class="modal-dialog max-w850 modal-dialog-centered" role="document">
            <div class="modal-content p-4">
                <div class="m-header mb-2 pb-4">
                    <h5>Tem certeza de que deseja alterar esta configuração, pois isso alterará suas refeições durante a semana?</h5>
                    <span class="close" data-dismiss="modal" aria-label="Close">+</span>
                </div>
                <div class="modal-body p-0">
                    <button onclick="if (!window.__cfRLUnblockHandlers) return false; app.confirm_update_user_profile()" data-dismiss="modal" class="btn btn-light" data-cf-modified-8487073e58850e68bc0fda36-="">Yes, update</button>
                    <button onclick="if (!window.__cfRLUnblockHandlers) return false; app.decline_update_user_profile()" data-dismiss="modal" class="btn btn-light" data-cf-modified-8487073e58850e68bc0fda36-="">No, cancel</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade keto-modal" role="dialog" id="ingredients-confirmation-modal">
        <div class="modal-dialog max-w850 modal-dialog-centered" role="document">
            <div class="modal-content p-4">
                <div class="m-header mb-2 pb-4">
                    <span class="icon-warning"></span>
                    <h5>Tem certeza de que deseja alterar os ingredientes, pois isso alterará suas refeições durante a semana?</h5>
                    <span class="close" data-dismiss="modal" aria-label="Close">+</span>
                </div>
                <div class="modal-body p-0">
                    <button onclick="if (!window.__cfRLUnblockHandlers) return false; app.modal_ingredients.saveIngredients()" data-dismiss="modal" class="btn btn-light" data-cf-modified-8487073e58850e68bc0fda36-="">Yes, update</button>
                    <button onclick="if (!window.__cfRLUnblockHandlers) return false; app.modal_ingredients.declineSaveIngredients()" data-dismiss="modal" class="btn btn-light" data-cf-modified-8487073e58850e68bc0fda36-="">No, cancel</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade keto-modal" role="dialog" id="introduction-modal">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content p-4">
                <div class="m-header mb-2">
                    <h5>Como usar nossos livros de receitas</h5>
                    <span class="close" data-dismiss="modal" aria-label="Close">+</span>
                </div>
                <div class="modal-body p-0">
                    <p>Olá, bem-vindo à nossa coleção de livros de receitas de ceto ...</p>

                    <p>O maior desafio que a maioria das pessoas vem a mim sobre a dieta cetônica é que elas sentem falta do chocolate, sobremesas, doces, salgadinhos e doces que estavam acostumadas a comer.</p>

                    <p>Apenas uma refeição açucarada pode expulsá-lo da cetose e arruinar todo o seu trabalho árduo, fazendo com que você se sinta um fracasso e, por fim, desista de sua dieta.</p>

                    <p>É por isso que decidi pegar suas sobremesas, doces, salgadinhos e guloseimas favoritas e convertê-los em receitas amigáveis ao ceto.</p>

                    <p>No total, 11 livros de receitas para queima de gordura contendo mais de 300 das refeições mais populares que as pessoas desejam em uma dieta, como pizza, batata frita, bolo de chocolate, doces, hambúrgueres, biscoitos e donuts.</p>

                    <p>Portanto, se você está se sentindo doce, pode facilmente trocar a refeição do seu plano de refeições personalizado por uma dessas receitas deliciosas, mantendo seu corpo em cetose e forçando-o a queimar gordura como combustível.</p>

                    <p>É muito simples implementar essas receitas em seu plano de alimentação ...</p>

                    <p>Tudo o que você precisa fazer é verificar a quantidade de calorias em 1 porção e trocá-la por uma refeição em seu plano de refeições personalizado com a mesma quantidade de calorias ou semelhante.</p>

                    <p>Por exemplo, se você quiser comer 4 biscoitos cetônicos com calda de chocolate, que contêm 132 calorias por biscoito, isso é um total de 528 calorias.</p>

                    <p>Agora, simplesmente encontre uma refeição em seu plano com um valor calórico semelhante para substituí-la.</p>

                    <p>Isso significa que você permanecerá em cetose, continuará a perder peso e a satisfazer seus desejos de uma só vez :)</p>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade keto-modal" role="dialog" id="filter-modal">
        <div class="modal-dialog max-w850 modal-dialog-centered" role="document">
            <div class="modal-content p-4">
                <div class="m-header mb-2 pb-4 border-bottom d-flex flex-wrap filter-header">
                    <h5>Filtro</h5>
                    <div class="d-flex flex-wrap">
                        <label class="filter-check2 mr-5">
                            <input type="radio" v-model="filter_form.more_variety" v-bind:value="1">
                            <span>Mais variedade</span>
                        </label>
                        <label class="filter-check2">
                            <input type="radio" v-model="filter_form.more_variety" v-bind:value="0">
                            <span>Menos variedade</span>
                        </label>
                    </div>
                    <span class="close" data-dismiss="modal" aria-label="Close">+</span>
                </div>
                <div class="modal-body p-0">
                    <div class="table-responsive">
                        <table class="table filter-table">
                            <tr>
                                <th>Dias</th>
                                <th v-for="n in 7">
                                    <label class="day-check">
                                        <input type="checkbox" disabled="disabled">
                                        <span>DIA {{n}}</span>
                                    </label>
                                </th>
                            </tr>
                            <tr>
                                <td>
                                    <p>Faça todas as refeições da mesma forma que as refeições do dia 1</p>
                                </td>
                                <td v-for="n in 7">
                                    <label class="filter-check">
                                        <input v-if="n > 1" type="checkbox" v-model="filter_form.user_filters[n].same_as_day1" v-bind:value="1">
                                        <span v-if="n > 1"></span>
                                    </label>
                                </td>
                            </tr>
                            <tr v-if="false">
                                <td>
                                    <p>Receitas com menos de 20 minutos</p>
                                </td>
                                <td v-for="n in 7">
                                    <label class="filter-check">
                                        <input type="checkbox" v-model="filter_form.user_filters[n].under_20_mins" v-bind:value="1">
                                        <span></span>
                                    </label>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <p>Pular o café da manhã</p>
                                </td>
                                <td v-for="n in 7">
                                    <label class="filter-check">
                                        <input type="checkbox" v-model="filter_form.user_filters[n].skipped.breakfast" v-bind:value="1">
                                        <span></span>
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Pular o almoço</p>
                                </td>
                                <td v-for="n in 7">
                                    <label class="filter-check">
                                        <input type="checkbox" v-model="filter_form.user_filters[n].skipped.lunch" v-bind:value="1">
                                        <span></span>
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Pular o jantar</p>
                                </td>
                                <td v-for="n in 7">
                                    <label class="filter-check">
                                        <input type="checkbox" v-model="filter_form.user_filters[n].skipped.dinner" v-bind:value="1">
                                        <span></span>
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Pular lanches</p>
                                </td>
                                <td v-for="n in 7">
                                    <label class="filter-check">
                                        <input type="checkbox" v-model="filter_form.user_filters[n].skipped.snacks" v-bind:value="1">
                                        <span></span>
                                    </label>
                                </td>
                            </tr>

                        </table>
                    </div>
                    <div class="modal-footer d-block text-right px-0 pt-4 mt-3">
                        <a data-dismiss="modal" class="btn btn-light mr-2">Cancelar</a>
                        <a v-on:click="saveFilter()" class="btn btn-gradient">Salvar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade keto-modal" role="dialog" id="keto101-modal">
        <div class="modal-dialog max-w850 modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <div class="keto101-modal">
                        <div class="km-img">
                            <img src="img/keto.jpg" alt="">
                        </div>
                        <div class="km-text">
                            <div class="m-header mb-2 pb-4">
                                <h5>O que é o Keto 101</h5>
                                <span class="close" data-dismiss="modal" aria-label="Close">+</span>
                            </div>
                            <div class="">
                                <p>Tudo o que você precisa saber sobre a dieta cetogênica! O que esperar quando você está em cetose e como maximizar seus resultados.</p>
                                <p>Ultrapasse os platôs de perda de gordura, aumente sua capacidade cerebral e tenha quantidades ilimitadas de energia ao manipular seu metabolismo com a dieta cetônica. Tudo o que você precisa saber sobre a dieta cetogênica!</p>
                                <p>O que esperar quando você está em cetose e como maximizar seus resultados. Ultrapasse os platôs de perda de gordura, aumente sua capacidade cerebral e tenha quantidades ilimitadas de energia ao manipular seu metabolismo com a dieta cetônica.</p>
                                <p>Tudo o que você precisa saber sobre a dieta cetogênica! O que esperar quando você está em cetose e como maximizar seus resultados.</p>
                                <p>Ultrapasse os platôs de perda de gordura, aumente sua capacidade cerebral e tenha quantidades ilimitadas de energia ao manipular seu metabolismo com a dieta cetônica.</p>
                            </div>
                            <div class="text-right mt-4">
                                <button data-dismiss="modal" class="btn btn-light">Fechar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="modal fade keto-modal" role="dialog" id="new-recipe-modal">
        <div class="modal-dialog max-w850 modal-dialog-centered" role="document">
            <div class="modal-content p-4">
                <div class="m-header mb-2 pb-4">
                    <h5 v-if="has_recipes">Selecione uma nova receita</h5>
                    <h5 v-else>Não há refeições disponíveis com suas preferências selecionadas, por favor, adicione mais ingredientes usando o botão 'Alterar Ingredientes' para recalcular seu plano de refeições.</h5>
                    <span class="close" data-dismiss="modal" aria-label="Close">+</span>
                </div>
                <div class="modal-body p-0">
                    <div class="row px-2">

                        <recipe-swap-to v-for="recipe in recipes" v-bind:recipe="recipe" v-bind:key="recipe.id" />

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" id="spinner">
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
    <!--Vue Templates-->
    <script type="text/x-template" id="navbar-template">

        <div class="kdb-left-sidebar">
    <span class="sidebar-trigger d-block d-sm-none">
    <i class="fa fa-bars"></i>
    </span>
    <div class="">
        <a href="" class="logo p-2">
            <img src="img/logo.svg" alt="">
        </a>
        <ul class="kdb-left-menu nav nav-tabs menu-scroll" role="tablist">
            <li>
                <a href="#home" class="active" data-toggle="tab" role="tab">
                    <img src="img/home.svg" alt=""> Home                </a>
            </li>
            <li>
                <a href="#plan" id="plan-nav" data-toggle="tab" role="tab">
                    <img src="img/fork.svg" alt=""> Seu plano               </a>
            </li>
            <li>
                <a href="#recipes" data-toggle="tab" role="tab">
                    <img src="img/book.svg" alt=""> Receitas                </a>
            </li>
            <li>
                <a href="#faq" data-toggle="tab" role="tab">
                    <img src="img/faq.svg" alt=""> FAQ                </a>
            </li>
            <li style="display: none">
                <a href="#recipe" id="recipe-nav" data-toggle="tab" role="tab">
                    <img src="img/faq.svg" alt=""> FAQ                </a>
            </li>
        </ul>
    </div>
</div>
</script>

    <script type="text/x-template" id="single-day-template">

        <td>DIA 6</td>
    <td>
        <div class="meal-item">
            <p><a href="" class="m-title">Keto kohlslaw</a></p>
            <a href="" class="m-img">
                <img src="img/m5.jpg" alt="">
            </a>
            <div class="d-flex justify-content-between align-items-center pt-2">
                <span class="cal"><img src="img/fire.svg"> 445 kcal</span>
                <span class="m-recipe"><img src="img/refresh.svg" alt=""> TROQUE ESTA RECEITA</span>
            </div>
        </div>
    </td>
    <td>
        <div class="meal-item">
            <p><a href="" class="m-title">Salmon with Dill Cream Sauce</a></p>
            <a href="" class="m-img">
                <img src="img/m6.jpg" alt="">
            </a>
            <div class="d-flex justify-content-between align-items-center pt-2">
                <span class="cal"><img src="img/fire.svg"> 445 kcal</span>
                <span class="m-recipe"><img src="img/refresh.svg" alt=""> TROQUE ESTA RECEITA</span>
            </div>
        </div>
    </td>
    <td>
        <div class="meal-item">
            <p><a href="" class="m-title">Berry Coconut Oatmeal</a></p>
            <a href="" class="m-img">
                <img src="img/m7.jpg" alt="">
            </a>
            <div class="d-flex justify-content-between align-items-center pt-2">
                <span class="cal"><img src="img/fire.svg"> 445 kcal</span>
                <span class="m-recipe"><img src="img/refresh.svg" alt=""> TROQUE ESTA RECEITA</span>
            </div>
        </div>
    </td>
    <td>
        <div class="meal-item">
            <p><a href="" class="m-title">Keto kohlslaw</a></p>
            <a href="" class="m-img">
                <img src="img/m8.jpg" alt="">
            </a>
            <div class="d-flex justify-content-between align-items-center pt-2">
                <span class="cal"><img src="img/fire.svg"> 445 kcal</span>
                <span class="m-recipe"><img src="img/refresh.svg" alt=""> TROQUE ESTA RECEITA</span>
            </div>
        </div>
    </td>


</script>

    <script type="text/x-template" id="recipe-swap-to-template">

        <div class="col-md-6 p-2">
    <div class="new-recipe">
        <div class="nr-img">
            <a v-on:click="swapRecipe(recipe.id)"><img :src="'/frontend/recipes/300/'+recipe.image" alt=""></a>
        </div>
        <div class="nr-text">
            <h6><a v-on:click="swapRecipe(recipe.id)">{{recipe.title}}</a></h6>
            <span class="cal">{{ recipe.calories }} kcal</span>
            <p><span v-if="recipe.fast_food && recipe.is_fast_food"><img :src="'/frontend/fast_food/avatars/'+recipe.fast_food.icon" height="40px"> </span></p>
        </div>
    </div>
</div>
</script>

    <script type="text/x-template" id="recipe-template">

        <div v-if="recipe">
    <div class=""  >
        <div class="d-flex justify-content-between align-items-center flex-wrap pb-2">
            <ul class="pagination py-1 mr-3">
                <li><a v-on:click="show_plan()">Your plan</a></li>
                <li><a href="#" class="active" v-html="recipe.title"></a></li>
            </ul>
            <!--<div class="py-1">
                <a :href="'/print/recipe/'+recipe.id" class="print-text"><img src="img/download.svg" alt=""> print this recipe</a>
            </div>-->
        </div>
    </div>
    <div class="bg-white p-3 p-lg-4">
        <div class="meal-single-head d-flex flex-wrap">
            <div class="msh-left">
                <div v-if="recipe.video" class="embed-responsive embed-responsive-16by9"><iframe :src="recipe.video" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen allow="autoplay"></iframe></div>
                <img v-else="" :src="'/frontend/recipes/800/'+recipe.image" :alt="recipe.title">
            </div>
            <div class="msh-right">
                <div class="">
                    <h2 v-html="recipe.title"></h2>
                    <div class="meal-meta py-3">
                        <span class="mm-item"><img src="img/fire2.svg" class="mr-2">{{recipe.calories}} kcal</span>
                        <span v-if="recipe.time" class="mm-item"><img src="img/time.svg" class="mr-2">{{ render_time(recipe.minutes, recipe.hours) }}</span>
                        <span v-if="!recipe.time && recipe.minutes" class="mm-item"><img src="img/time.svg" class="mr-2">{{ render_time(recipe.minutes, recipe.hours) }}</span>
                        <span class="mm-item" v-if="recipe.yield != yield"><img src="img/fork2.svg" class="mr-2"> {{recipe.yield}} </span>
                        <span class="mm-item" v-else=""><img src="img/fork2.svg" class="mr-2"> 1 </span>
                        <span v-if="recipe.is_fast_food" class="mm-item"><img :src="'/frontend/fast_food/avatars/'+recipe.fast_food.icon" height="35px" > </span>
                    </div>
                    <p v-if="recipe.yield != yield">This recipe makes {{recipe.yield}} portions (you will eat {{yield}} portion for this meal)</p>
                    <p>The nutritional information for 1 portion of this meal is:</p>
                    <div class="meal-ingredients d-flex flex-wrap">
                        <div class="mi-item">
                            <span class="p-title">protein</span>
                            <span class="p-text">{{recipe.protein}}g</span>
                        </div>
                        <div class="mi-item">
                            <span class="p-title">fats</span>
                            <span class="p-text">{{recipe.fats}}g</span>
                        </div>
                        <div class="mi-item">
                            <span class="p-title">carbs</span>
                            <span class="p-text">{{recipe.carbs}}g</span>
                        </div>
                        <div class="mi-item">
                            <span class="p-title">kcal</span>
                            <span class="p-text">{{recipe.calories}}</span>
                        </div>
                    </div>
                    <a :href="'/print/recipe/'+recipe.id+'?y='+yield" target="_blank" class="btn btn-gradient mt-4">
                        <img src="img/printer.svg" class="mr-1">print recipe </a>
                </div>
            </div>
        </div>
        <div class="row py-5">
            <div class="col-lg-4">
                <div class="">
                    <h5 class="pb-2">Ingredients</h5>
                    <ul class="ingredients-list">
                        <li v-for="ingredient in recipe.ingredients" v-html="render_ingredient(ingredient)">

                        </li>

                    </ul>
                </div>
            </div>
            <div class="col-lg-8">
                <div v-if="recipe.is_fast_food">
                    <h5 class="pb-2">Description</h5>
                    {{ recipe.description }}
                </div>
                <div v-else="" class="">
                    <h5 class="pb-2">Preparation</h5>
                    <ul class="preparation-list border-top">
                        <li v-for="step in recipe.steps" ><div v-html="step.description"></div>
                            <p class="m-img">
                            <span v-if="step.image" class="step-img"><img :src="'/frontend/recipes/300/'+step.image" alt=""></span>
                            </p>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</div>
<div v-else="">
    <div class=""  >
        <div class="d-flex justify-content-between align-items-center flex-wrap pb-2">
            <ul class="pagination py-1 mr-3">
                <li><a v-on:click="show_plan()">Your plan</a></li>
            </ul>
            <div class="py-1">
                <h4>Recipe isn't found :(</h4>
                <div class="row"><p><a v-on:click="show_plan()" > <<< back to meal plan</a></p></div>
            </div>
        </div>
    </div>
</div>
</script>

    <script type="text/x-template" id="meal-item-template">
        <div class="meal-item" v-if="recipe">
    <p class="header"><a v-on:click="$emit('show-recipe',recipe.id, portions)" :portions="portions" class="m-title">
            <span v-html="recipe.title"></span>
        </a></p>
    <a v-on:click="$emit('show-recipe',recipe.id, portions)" class="m-img">
        <span class="meal-item-img"><span></span><img :src="'/frontend/recipes/300/'+recipe.image" alt=""></span>
    </a>
    <div class="d-flex justify-content-between align-items-center pt-2">
        <span class="cal"><img src="img/fire.svg"> {{ calories }} kcal</span>
        <span class="m-recipe" v-on:click="$emit('init-swap-recipe', recipe.id, day_num, day_time, portions, false)">
            <img src="img/refresh.svg" alt=""> TROQUE ESTA RECEITA        </span>
    </div>
    <div class="d-flex justify-content-between align-items-center pt-2">
        <span class="m-recipe" v-on:click="$emit('init-swap-recipe', recipe.id, day_num, day_time, portions, true)">
            <img src="img/icons/burger-icon.png" width="35px" alt="">
            Troca por Keto Fast Food        </span>
    </div>
</div>
<div v-else class="meal-item">
    Skipped</div></script>

    <script type="text/x-template" id="mobile-meal-item-template">


        <div class="meal-item" v-if="recipe">
    <p><a v-on:click="$emit('show-recipe',recipe.id, portions)" class="m-title"><span v-html="recipe.title"></span></a></p>
    <a v-on:click="$emit('show-recipe',recipe.id, portions)" class="m-img">
        <span class="meal-item-img"><img :src="'/frontend/recipes/300/'+recipe.image" alt=""></span>
    </a>
    <div class="d-flex justify-content-between align-items-center pt-2">
        <span class="cal"><img src="img/fire.svg">{{ calories }} kcal</span>
        <span class="m-recipe" v-on:click="$emit('init-swap-recipe', recipe.id, day_num, day_time, portions, false)">
															<img src="img/refresh.svg" alt="">
															TROQUE ESTA RECEITA														</span>
    </div>
    <div class="d-flex justify-content-between align-items-center pt-2">
        <span class="m-recipe" v-on:click="$emit('init-swap-recipe', recipe.id, day_num, day_time, portions, true)">
            <img src="img/icons/burger-icon.png" width="35px" alt="" >
            Troca por Keto Fast Food        </span>
    </div>
</div>
<div class="meal-item" v-else="">
    Skipped</div>

</script>

    <script type="text/x-template" id="info-view-template">

        <div class="keto101-modal">
    <div class="km-text">
        <div class="m-header mb-2 pb-4">
            <h5>{{ info.header }}</h5>
            <span class="close" data-dismiss="modal" aria-label="Close">+</span>
        </div>
        <div class="" v-html="info.content">

        </div>
        <div class="text-right mt-4">
            <button  data-dismiss="modal" class="btn btn-light">Close</button>
        </div>
    </div>
</div>
</script>

    <script type="text/x-template" id="video-block-template">

        <div class="keto-video-block">
    <div class="v-img">
        <div class="v-hover">
            <a :href="item.video_url" class="vid-btn video-popup">
                <i class="fa fa-play"></i>
            </a>
        </div>
        <img :src="item.video" alt="">
    </div>
    <div class="v-text">
        <h6>{{ item.header }}</h6>
        <a :href="item.video_url"
           class="btn-small btn-primary video-popup"><i class="fa fa-play mr-2"></i>watch now</a>
    </div>
</div>
</script>

    <script type="text/x-template" id="recipe-item-template">

        <div  class="recipe-item">
    <div class="r-img">
        <img :src="item.picture" alt="">
    </div>
    <div class="r-text">
        <div class="">
            <h5>{{ item.header }}</h5>
            <div v-html="item.content"></div>
        </div>
        <div class="mt-3">
            <a :href="item.href" class="btn btn-primary">Access now</a>
        </div>
    </div>
</div>
</script>

    <script type="8487073e58850e68bc0fda36-text/javascript">

    </script>
    <!--End Vue Templates-->
    <script src="<?= CONF_URL_BASE; ?>/js/jquery.js" type="8487073e58850e68bc0fda36-text/javascript"></script>
    <script src="<?= CONF_URL_BASE; ?>/dashboard/js/popper.min.js" type="8487073e58850e68bc0fda36-text/javascript"></script>
    <script src="<?= CONF_URL_BASE; ?>/dashboard/js/bootstrap.min.js" type="8487073e58850e68bc0fda36-text/javascript"></script>
    <script src="<?= CONF_URL_BASE; ?>/dashboard/js/validator.min.js" type="8487073e58850e68bc0fda36-text/javascript"></script>
    <script src="<?= CONF_URL_BASE; ?>/dashboard/js/bootstrap-select.min.js" type="8487073e58850e68bc0fda36-text/javascript"></script>
    <script src="<?= CONF_URL_BASE; ?>/dashboard/js/multiple-select.js" type="8487073e58850e68bc0fda36-text/javascript"></script>
    <script src="<?= CONF_URL_BASE; ?>/dashboard/js/dual-list-box.min.js" type="8487073e58850e68bc0fda36-text/javascript"></script>
    <script src="<?= CONF_URL_BASE; ?>/dashboard/js/moment.min.js" type="8487073e58850e68bc0fda36-text/javascript"></script>
    <script src="<?= CONF_URL_BASE; ?>/dashboard/js/daterangepicker.js" type="8487073e58850e68bc0fda36-text/javascript"></script>
    <script src="<?= CONF_URL_BASE; ?>/dashboard/js/bootstrap.typehead.js" type="8487073e58850e68bc0fda36-text/javascript"></script>
    <script src="<?= CONF_URL_BASE; ?>/dashboard/js/tagsinput.js" type="8487073e58850e68bc0fda36-text/javascript"></script>
    <script src="<?= CONF_URL_BASE; ?>/dashboard/js/jquery.maskedinput.js" type="8487073e58850e68bc0fda36-text/javascript"></script>
    <script src="<?= CONF_URL_BASE; ?>/dashboard/js/fastselect.standalone.min.js" type="8487073e58850e68bc0fda36-text/javascript"></script>
    <script src="<?= CONF_URL_BASE; ?>/dashboard/js/fastselect.min.js" type="8487073e58850e68bc0fda36-text/javascript"></script>
    <script src="<?= CONF_URL_BASE; ?>/dashboard/js/footable.min.js" type="8487073e58850e68bc0fda36-text/javascript"></script>
    <script src="<?= CONF_URL_BASE; ?>/dashboard/js/owl.carousel.min.js" type="8487073e58850e68bc0fda36-text/javascript"></script>
    <script src="<?= CONF_URL_BASE; ?>/dashboard/js/jquery.nicescroll.min.js" type="8487073e58850e68bc0fda36-text/javascript"></script>
    <script src="<?= CONF_URL_BASE; ?>/dashboard/js/jquery.magnific-popup.min.js" type="8487073e58850e68bc0fda36-text/javascript"></script>
    <script src="<?= CONF_URL_BASE; ?>/dashboard/js/chosen.jquery.min.js" type="8487073e58850e68bc0fda36-text/javascript"></script>
    <script src="<?= CONF_URL_BASE; ?>/dashboard/js/scripts.js" type="8487073e58850e68bc0fda36-text/javascript"></script>
    <script src="<?= CONF_URL_BASE; ?>/dashboard/js/player.js" type="8487073e58850e68bc0fda36-text/javascript"></script>
    <script src="<?= CONF_URL_BASE; ?>/js/yii.js" type="8487073e58850e68bc0fda36-text/javascript"></script>
    <script src="<?= CONF_URL_BASE; ?>/js/axios.min.js" type="8487073e58850e68bc0fda36-text/javascript"></script>
    <script src="<?= CONF_URL_BASE; ?>/js/vue.min.js" type="8487073e58850e68bc0fda36-text/javascript"></script>
    <script type="8487073e58850e68bc0fda36-module" src="<?= CONF_URL_BASE; ?>/js/app.js"></script>
    <script type="8487073e58850e68bc0fda36-text/javascript">
        jQuery(function($) {

            $(document).ready(function() {
                $(".more").on("click", function() {
                    var dots = $(this).parent().find("#dots");
                    var moreText = $(this).parent().find("#more");

                    if (dots.css("display") === "none") {
                        dots.css("display", "inline");
                        $(this).html("read more +");
                        moreText.css("display", "none");
                    } else {
                        dots.css("display", "none");
                        $(this).html("read less -");
                        moreText.css("display", "inline");
                    }
                })
            })
        });
    </script>
    <script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="8487073e58850e68bc0fda36-|49" defer=""></script>
</body>

</html>