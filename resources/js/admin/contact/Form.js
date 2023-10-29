import AppForm from '../app-components/Form/AppForm';

Vue.component('contact-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                telepon:  '' ,
                alamat:  '' ,
                jam_operasional:  '' ,
                published_at:  '' ,
                enabled:  false ,
                
            }
        }
    }

});