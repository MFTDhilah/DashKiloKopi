import AppForm from '../app-components/Form/AppForm';

Vue.component('kuisioner-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                Nama:  '' ,
                Alamat:  '' ,
                NoWa:  '' ,
                Instagram:  '' ,
                Petanyaan1:  '' ,
                Pertanyaan2:  '' ,
                poto:  '' ,
                
            }
        }
    }

});