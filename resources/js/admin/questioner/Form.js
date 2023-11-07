import AppForm from '../app-components/Form/AppForm';

Vue.component('questioner-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                pertanyaan:  '' ,
                published_at:  '' ,
                enabled:  false ,
                
            }
        }
    }

});