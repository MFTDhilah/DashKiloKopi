@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.menu.actions.edit', ['name' => $menu->id]))

@section('body')

    <div class="container-xl">

            <menu-form
                :action="'{{ $menu->resource_url }}'"
                :data="{{ $menu->toJson() }}"
                v-cloak
                inline-template>
            
                <form class="form-horizontal form-edit" method="post" @submit.prevent="onSubmit" :action="action" novalidate>
                @csrf
                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <div class="card-header">
                                    <i class="fa fa-pencil"></i> {{ trans('admin.menu.actions.edit', ['name' => $menu->id]) }}
                                </div>
                                <div class="card-body">
                                    @include('admin.menu.components.form-elements')
                                </div>
                            </div>
                        </div>

                    </div>
                    
                    <button type="submit" class="btn btn-primary fixed-cta-button button-save" :disabled="submiting">
                        <i class="fa" :class="submiting ? 'fa-spinner' : 'fa-save'"></i>
                        {{ trans('brackets/admin-ui::admin.btn.save') }}
                    </button>

                    <button type="submit" style="display: none" class="btn btn-success fixed-cta-button button-saved" :disabled="submiting" :class="">
                        <i class="fa" :class="submiting ? 'fa-spinner' : 'fa-check'"></i>
                        <span>{{ trans('brackets/admin-ui::admin.btn.saved') }}</span>
                    </button>
                     
                </form>

        </menu-form>

    
</div>

@endsection