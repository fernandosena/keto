Vue.component('nav-sidebar', {
    template: '#navbar-template',
    data() {
        return {}
    },
    methods: {}
});

Vue.component('info-view',
    {
        props: ['info'],
        template: '#info-view-template',
        data() {
            return {}
        },
        methods: {}
    });


Vue.component('video-block',
    {
        props: ['item'],
        template: '#video-block-template',
        data() {
            return {}
        },
        methods: {}
    });

Vue.component('recipe-item',
    {
        props: ['item'],
        template: '#recipe-item-template',
        data() {
            return {}
        },
        methods: {}
    });


Vue.component('meal-item',
    {
        props: ['recipe', 'weekid', 'day_num', 'day_time','portions'],
        template: '#meal-item-template ',
        methods: {
            showRecipe: function (id) {
                app.showRecipe(id);
            }
        },
        computed: {
            calories: function () {
                if(this.portions && this.portions > 1){
                    return  this.recipe.calories * this.portions
                }
                return  this.recipe.calories

            }
        }
    });

Vue.component('mobile-meal-item',
    {
        props: ['recipe', 'weekid','day_num', 'day_time','portions'],
        template: '#mobile-meal-item-template ',
        methods: {
            showRecipe: function (id) {
                app.showRecipe(id);
            }
        },
        computed: {
            calories: function () {
                if(this.portions && this.portions > 1){
                    return  this.recipe.calories * this.portions
                }
                return  this.recipe.calories

            }
        }
    });

Vue.component('daily-diet',
    {
        props: [],
        template: '#single-day-template ',
        methods: {}
    });
Vue.component('recipe-swap-to',
    {
        props: ['recipe'],
        template: '#recipe-swap-to-template',
        methods: {
            swapRecipe: function (newId) {
                $('#spinner').show(400);
                api_request.post('swap-recipe-json', {
                    'newId': newId,
                    'oldId': window.app.recipe_to_swap_id,
                    'weekId': window.app.week_num,
                    'day_num': window.app.recipe_to_swap_day_num,
                    'day_time': window.app.recipe_to_swap_day_time,
                }).then(
                    response => {
                        if (response.data.success) {
                            window.app.getDietWeek(window.app.week_num);
                        } else {
                            $('#spinner').hide(400);
                        }
                        $('#new-recipe-modal').modal('hide');
                    }
                ).catch(function (error) {
                    $('#spinner').hide(400);
                })
            }
        }
    });

Vue.component('recipe-view', {
    props: ['recipe','portions'],
    template: '#recipe-template',
    methods: {
        render_time: function (min, hr) {
            var time_str = '';
            if (hr) {
                time_str += hr + ' hr '
            }
            if (min) {
                time_str += min + ' min '
            }
            return time_str;
        },
        render_ingredient(ingredient) {
            var str = '';
            if(ingredient.quantity) {
                str += ingredient.quantity +" ";
            }
            if(ingredient.measurement) {
                str += ingredient.measurement + " ";
            }
            if(ingredient.food_name){
                str += ingredient.food_name;
            }
            if (ingredient.description) {
                str += " (" + ingredient.description + ")"
            }
            return str;
        },
        render_step(step) {

        },
        show_plan: function () {
            window.app.show_plan();
        }
    },
    computed: {
        yield : function () {
            console.log('compute portions = '+this.portions)
            if(this.portions && this.portions > 1){
                return this.portions
            }
            return 1;
        },
        link : function () {
            return '/print/recipe/'+recipe.id+"/y="+this.yield;
            if(2 > 1){
                console.log( '/print/recipe/'+recipe.id+"/y="+this.yield);

            }else{
                console.log( '/print/recipe/'+recipe.id+"/y="+this.yield);
                return '/print/recipe/'+recipe.id;
            }

        }
    }
});

window.app = new Vue({
    el: '#dashboard-area',
    data: {
        user: keto_user,
        user_profile: keto_user_profile,
        diet_week: diet_week,
        week_num: 1,
        recipe: null,
        recipe_portions: null,
        jwt_token: jwt_token,
        video_items: video_items,
        faq_list: faq_list,
        ingredients_list: ingredients_list,
        suppliments_list: suppliments_list,
        recipe_to_swap_id: null,
        recipe_to_swap_portions: null,
        recipe_to_swap_day_num: null,
        recipe_to_swap_day_time: null,
        profile_data: profile_data,
        recipe_items: recipe_items,
        input_current_weight_is_shown: false,
        input_target_weight_is_shown: false,
        input_height_is_shown: false,
        input_activity_level_is_shown: false,
        daily_calories_is_shown: false,
        day_times:['breakfast', 'lunch','dinner','snacks'],
        form: {
            profile_id: keto_user_profile.id,
            current_weight: profile_data.current_weight,
            target_weight: profile_data.target_weight,
            height: profile_data.height,
            height_ft: profile_data.height_ft,
            height_in: profile_data.height_in,
            activity_level: profile_data.activity_level_val,
            daily_calories: profile_data.daily_calories
        },
        ingredient_form: {}
    },
    computed: {
        weight_unit: function () {
            if (this.profile_data.imperial_metric) {
                return 'lbs'
            } else {
                return 'kg'
            }
        }
    },
    mounted: function () {
        // `this` points to the vm instance
        $('#loading-screen').hide(500);
    },
    methods: {
        toggle_weight_input: function () {
            this.input_current_weight_is_shown = !this.input_current_weight_is_shown;
        },
        toggle_target_weight_input: function () {
            this.input_target_weight_is_shown = !this.input_target_weight_is_shown;
        },
        toggle_height_input: function () {
            this.input_height_is_shown = !this.input_height_is_shown;
        },
        toggle_activity_level_input: function () {
            this.input_activity_level_is_shown = !this.input_activity_level_is_shown;
        },
        toggle_daily_calories_input: function () {
            this.daily_calories_is_shown = !this.daily_calories_is_shown;
        },
        update_user_profile: function () {
            var data_is_modified =
                this.form.current_weight !== this.profile_data.current_weight||
                this.form.target_weight !== this.profile_data.target_weight ||
                this.form.height !== this.profile_data.height ||
                this.form.height_ft !== this.profile_data.height_ft ||
                this.form.height_in !== this.profile_data.height_in ||
                this.form.activity_level !== this.profile_data.activity_level_val ||
                this.form.daily_calories !== this.profile_data.daily_calories;
            if(data_is_modified){
                $('#update-confirmation-modal').modal('show');
            }else{
                this.hideSettingsInputs()
            }
        },
        confirm_update_user_profile: function () {
            this.hideSettingsInputs();
            this.updateUserProfile(keto_user_profile.id, this.form)

        },
        decline_update_user_profile: function () {
            this.hideSettingsInputs();
        },
        hideSettingsInputs:  function(){
            this.input_current_weight_is_shown = false;
            this.input_target_weight_is_shown = false;
            this.input_height_is_shown = false;
            this.input_activity_level_is_shown = false;
            this.daily_calories_is_shown = false;
        },
        init_swap_recipe: function (id, day_num, day_time, portions, fast_food) {
            console.log(fast_food);
            $('#spinner').show(400);
            this.recipe_to_swap_id = id;
            this.recipe_to_swap_day_time = day_time;
            this.recipe_to_swap_day_num = day_num;
            this.recipe_to_swap_portions = portions;
            var url = fast_food === true ? 'swap-recipe-fast-food-init/' : 'swap-recipe-init/';
            console.log(url);
            api_request.get(url + id + '/'+portions).then(
                response => {
                    app.modal_swap.recipes = response.data;
                    $('#new-recipe-modal').modal('show');
                    $('#spinner').hide(400);
                }
            ).catch(function (error) {
                $('#spinner').hide(400);
            })

        },
        show_plan: function () {
            $('#plan-nav').tab('show');
            this.recipe = null
        },
        show_info: function (subject) {
            app.modal_info.info = infoblocks[subject];
            $('#info-modal').modal('show');
        },
        showRecipe: function (id , pp) {
            $('#spinner').show(400);
            this.recipe_portions = pp;
           // console.log('set portions '+pp + ' recipe id '+ id);
            api_request.get('recipe/' + id+ '?portions='+pp).then(
                response => {
                    if (response.data.success) {
                        this.recipe = response.data.recipe;
                    }
                    $('#recipe-nav').tab('show')
                    $('#spinner').hide(400);
                }
            ).catch(function (error) {
                $('#spinner').hide(400);
            })


        }

    }
});

window.api_request = axios.create({
    baseURL: '/api/v2/',
    headers: {
        Authorization: 'Bearer ' + jwt_token
    }
});

window.app.getDietWeek = function (week) {
    $('#spinner').show(400);
    api_request('get-week-diets/' + week).then(
        response => {
            app.diet_week = response.data;
            $('#spinner').hide(400);
        }
    ).catch(function (error) {
        $('#spinner').hide(400);
    })
}

function arrayRemove(arr, value) {

    return arr.filter(function(ele){
        return ele != value;
    });

}

window.app.updateUserProfile = function (id, data) {
    $('#spinner').show(400);
    api_request.post('users-data/' + id, data).then(
        response => {
            if (response.data.success) {
                window.app.profile_data = response.data.profile_data;
                this.getDietWeek(window.app.week_num);
            } else {
                $('#spinner').hide(400);
            }

        }
    ).catch(function (error) {
        $('#spinner').hide(400);
    })
}

window.app.modal_ingredients = new Vue({
    el: '#ingredients-modal',
    data: {
        meat: meat_list,
        veggies: veggies_list,
        products: products_list,
        ingredients_form: users_ingredients
    },
    methods: {
        saveHandler: function (){
            $('#ingredients-confirmation-modal').modal('show');
        },
        saveIngredients: function () {
            $('#ingredients-confirmation-modal').modal('hide');
            $('#spinner').show(400);
            api_request.post('users-ingredients', this.ingredients_form).then(
                response => {
                    if (response.data.success) {
                        window.app.getDietWeek(window.app.week_num);
                    } else {
                        $('#spinner').hide(400);
                    }
                    $('#ingredients-modal').modal('hide');
                }
            ).catch(function (error) {
                $('#spinner').hide(400);
            })
        },
        declineSaveIngredients: function () {
            $('#ingredients-confirmation-modal').modal('hide');
            $('#ingredients-modal').modal('hide');
        },
        check_meat: function () {

            if(this.ingredients_form['no-meat'].value === true) {
                this.ingredients_form['no-meat'].value = false;
            }
        },
        unselect_no_meat: function () {
            if(this.ingredients_form['no-meat'].value === true) {

                this.ingredients_form['chicken'].value=false;
                this.ingredients_form['pork'].value=false;
                this.ingredients_form['beef'].value=false;
                this.ingredients_form['fish'].value=false;
                this.ingredients_form['bacon'].value=false;
            }
        },
        select_no_dairy: function () {

            if(this.ingredients_form['no-dairy'].value === true) {
                this.ingredients_form['no-dairy'].value = false;
            }
        },
        unselect_no_dairy: function () {
            if(this.ingredients_form['no-dairy'].value === true) {

                this.ingredients_form['cheese'].value=false;
                this.ingredients_form['butter'].value=false;
                this.ingredients_form['cottage_cheese'].value=false;
            }
        }
    }
})

window.app.modal_filter = new Vue({
    el: '#filter-modal',
    data: {
        filter_form: {
            more_variety: keto_user_profile.more_variety,
            user_filters: user_filters
        },
    },
    methods: {
        saveFilter: function () {
            $('#spinner').show(400);
            api_request.post('users-filter', this.filter_form).then(
                response => {
                    if (response.data.success) {
                        console.log('get diet for a week #' + window.app.week_num)
                        window.app.getDietWeek(window.app.week_num);
                    } else {
                        $('#spinner').hide(400);
                    }
                    $('#filter-modal').modal('hide');
                }
            ).catch(function (error) {
                $('#spinner').hide(400);
            })
        }
    }
})

window.app.modal_swap = new Vue({
    el: '#new-recipe-modal',
    data: {
        recipes: [],
        old_id: null
    },
    computed: {
        has_recipes: function () {
            return this.recipes.length > 0;
        }
    },
    methods: {}
})

window.app.modal_info = new Vue(
    {
        el: '#info-modal',
        data: {
            info: {
                'header': 'weight',
                'content': '<p>bla bla bla </p>'
            },
        }
    }
)