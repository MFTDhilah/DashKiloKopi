import AppForm from '../app-components/Form/AppForm';

Vue.component('promo-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                title:  '' ,
                slug:  '' ,
                description:  '' ,
                image:  '' ,
                published_at:  '' ,
                enabled:  false ,
                
            }
        }
    }

});