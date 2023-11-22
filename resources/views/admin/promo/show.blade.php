@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.admin-user.actions.view'))

@section('body')

  <div class="container-xl">

               <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
              <li class="text-capitalize">{{ $error }}</li>
              @endforeach
            </ul>
          </div>
          @endif
          @if(session('msg'))
          <div class="alert alert-info alert-sm alert-dismissible">{{session('msg')}}</div>
          @endif
          <div class="col-md-10">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <div class="card-body">                    
                  @if(session('msg'))
                  <div class="alert alert-info alert-sm alert-dismissible">{{session('msg')}}</div>
                  @endif
                            
                  <div class="row">
                    <div class="col-md-12">
                      <strong>Name: </strong> {{$promo->title}}
                      <br>
                      <br>
                      <strong>Image </strong><br>
                      {!! $promo->image !!}
                    </div>
                  </div>                     
                  <div class="row">
                    <div class="col-md-12">
                      
                      <br>
                      <strong>Description: </strong><br>
                      {!! $promo->description !!}
                    </div>
                  </div>                      
                </div>                                                      
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->

  </div>

    
@endsection