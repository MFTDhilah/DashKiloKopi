<div class="form-group row align-items-center" :class="{'has-danger': errors.has('Nama'), 'has-success': fields.Nama && fields.Nama.valid }">
    <label for="Nama" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.kuisioner.columns.Nama') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.Nama" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('Nama'), 'form-control-success': fields.Nama && fields.Nama.valid}" id="Nama" name="Nama" placeholder="{{ trans('admin.kuisioner.columns.Nama') }}">
        <div v-if="errors.has('Nama')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('Nama') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('Alamat'), 'has-success': fields.Alamat && fields.Alamat.valid }">
    <label for="Alamat" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.kuisioner.columns.Alamat') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.Alamat" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('Alamat'), 'form-control-success': fields.Alamat && fields.Alamat.valid}" id="Alamat" name="Alamat" placeholder="{{ trans('admin.kuisioner.columns.Alamat') }}">
        <div v-if="errors.has('Alamat')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('Alamat') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('NoWa'), 'has-success': fields.NoWa && fields.NoWa.valid }">
    <label for="NoWa" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.kuisioner.columns.NoWa') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.NoWa" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('NoWa'), 'form-control-success': fields.NoWa && fields.NoWa.valid}" id="NoWa" name="NoWa" placeholder="{{ trans('admin.kuisioner.columns.NoWa') }}">
        <div v-if="errors.has('NoWa')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('NoWa') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('Instagram'), 'has-success': fields.Instagram && fields.Instagram.valid }">
    <label for="Instagram" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.kuisioner.columns.Instagram') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.Instagram" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('Instagram'), 'form-control-success': fields.Instagram && fields.Instagram.valid}" id="Instagram" name="Instagram" placeholder="{{ trans('admin.kuisioner.columns.Instagram') }}">
        <div v-if="errors.has('Instagram')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('Instagram') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('Petanyaan1'), 'has-success': fields.Petanyaan1 && fields.Petanyaan1.valid }">
    <label for="Petanyaan1" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.kuisioner.columns.Petanyaan1') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.Petanyaan1" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('Petanyaan1'), 'form-control-success': fields.Petanyaan1 && fields.Petanyaan1.valid}" id="Petanyaan1" name="Petanyaan1" placeholder="{{ trans('admin.kuisioner.columns.Petanyaan1') }}">
        <div v-if="errors.has('Petanyaan1')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('Petanyaan1') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('Pertanyaan2'), 'has-success': fields.Pertanyaan2 && fields.Pertanyaan2.valid }">
    <label for="Pertanyaan2" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.kuisioner.columns.Pertanyaan2') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.Pertanyaan2" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('Pertanyaan2'), 'form-control-success': fields.Pertanyaan2 && fields.Pertanyaan2.valid}" id="Pertanyaan2" name="Pertanyaan2" placeholder="{{ trans('admin.kuisioner.columns.Pertanyaan2') }}">
        <div v-if="errors.has('Pertanyaan2')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('Pertanyaan2') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('poto'), 'has-success': fields.poto && fields.poto.valid }">
    <label for="poto" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.menu.columns.poto') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <div>
            <wysiwyg v-model="form.poto" v-validate="'required'" id="poto" name="poto" :config="mediaWysiwygConfig"></wysiwyg>
        </div>
        <div v-if="errors.has('poto')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('poto') }}</div>
    </div>
</div>



