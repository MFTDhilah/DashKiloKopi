<div class="form-group row align-items-center" :class="{'has-danger': errors.has('judul'), 'has-success': fields.judul && fields.judul.valid }">
    <label for="judul" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.about.columns.judul') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.judul" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('judul'), 'form-control-success': fields.judul && fields.judul.valid}" id="judul" name="judul" placeholder="{{ trans('admin.about.columns.judul') }}">
        <div v-if="errors.has('judul')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('judul') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('isi'), 'has-success': fields.isi && fields.isi.valid }">
    <label for="isi" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.about.columns.isi') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.isi" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('isi'), 'form-control-success': fields.isi && fields.isi.valid}" id="isi" name="isi" placeholder="{{ trans('admin.about.columns.isi') }}">
        <div v-if="errors.has('isi')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('isi') }}</div>
    </div>
</div>


<div class="form-check row" :class="{'has-danger': errors.has('enabled'), 'has-success': fields.enabled && fields.enabled.valid }">
    <div class="ml-md-auto" :class="isFormLocalized ? 'col-md-8' : 'col-md-10'">
        <input class="form-check-input" id="enabled" type="checkbox" v-model="form.enabled" v-validate="''" data-vv-name="enabled"  name="enabled_fake_element">
        <label class="form-check-label" for="enabled">
            {{ trans('admin.about.columns.enabled') }}
        </label>
        <input type="hidden" name="enabled" :value="form.enabled">
        <div v-if="errors.has('enabled')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('enabled') }}</div>
    </div>
</div>


