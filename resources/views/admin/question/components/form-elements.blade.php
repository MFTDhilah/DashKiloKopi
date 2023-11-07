<div class="form-group row align-items-center" :class="{'has-danger': errors.has('pertanyaan'), 'has-success': fields.pertanyaan && fields.pertanyaan.valid }">
    <label for="pertanyaan" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.question.columns.pertanyaan') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.pertanyaan" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('pertanyaan'), 'form-control-success': fields.pertanyaan && fields.pertanyaan.valid}" id="pertanyaan" name="pertanyaan" placeholder="{{ trans('admin.question.columns.pertanyaan') }}">
        <div v-if="errors.has('pertanyaan')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('pertanyaan') }}</div>
    </div>
</div>


<div class="form-check row" :class="{'has-danger': errors.has('enabled'), 'has-success': fields.enabled && fields.enabled.valid }">
    <div class="ml-md-auto" :class="isFormLocalized ? 'col-md-8' : 'col-md-10'">
        <input class="form-check-input" id="enabled" type="checkbox" v-model="form.enabled" v-validate="''" data-vv-name="enabled"  name="enabled_fake_element">
        <label class="form-check-label" for="enabled">
            {{ trans('admin.question.columns.enabled') }}
        </label>
        <input type="hidden" name="enabled" :value="form.enabled">
        <div v-if="errors.has('enabled')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('enabled') }}</div>
    </div>
</div>


