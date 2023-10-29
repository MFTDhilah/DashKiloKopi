<div class="form-group row align-items-center" :class="{'has-danger': errors.has('telepon'), 'has-success': fields.telepon && fields.telepon.valid }">
    <label for="telepon" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.contact.columns.telepon') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.telepon" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('telepon'), 'form-control-success': fields.telepon && fields.telepon.valid}" id="telepon" name="telepon" placeholder="{{ trans('admin.contact.columns.telepon') }}">
        <div v-if="errors.has('telepon')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('telepon') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('alamat'), 'has-success': fields.alamat && fields.alamat.valid }">
    <label for="alamat" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.contact.columns.alamat') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.alamat" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('alamat'), 'form-control-success': fields.alamat && fields.alamat.valid}" id="alamat" name="alamat" placeholder="{{ trans('admin.contact.columns.alamat') }}">
        <div v-if="errors.has('alamat')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('alamat') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('jam_operasional'), 'has-success': fields.jam_operasional && fields.jam_operasional.valid }">
    <label for="jam_operasional" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.contact.columns.jam_operasional') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.jam_operasional" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('jam_operasional'), 'form-control-success': fields.jam_operasional && fields.jam_operasional.valid}" id="jam_operasional" name="jam_operasional" placeholder="{{ trans('admin.contact.columns.jam_operasional') }}">
        <div v-if="errors.has('jam_operasional')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('jam_operasional') }}</div>
    </div>
</div>


<div class="form-check row" :class="{'has-danger': errors.has('enabled'), 'has-success': fields.enabled && fields.enabled.valid }">
    <div class="ml-md-auto" :class="isFormLocalized ? 'col-md-8' : 'col-md-10'">
        <input class="form-check-input" id="enabled" type="checkbox" v-model="form.enabled" v-validate="''" data-vv-name="enabled"  name="enabled_fake_element">
        <label class="form-check-label" for="enabled">
            {{ trans('admin.contact.columns.enabled') }}
        </label>
        <input type="hidden" name="enabled" :value="form.enabled">
        <div v-if="errors.has('enabled')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('enabled') }}</div>
    </div>
</div>


