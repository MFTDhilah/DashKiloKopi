import AppForm from '../app-components/Form/AppForm';

Vue.component('menu-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                title:  '' ,
                slug:  '' ,
                price:  '' ,
                description:  '' ,
                image:  '' ,
                published_at:  '' ,
                enabled:  false ,
                
            }
        }
    }

});