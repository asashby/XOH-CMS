@extends('layouts.admin_layout')
@section('title', 'Editar Tip')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1>Tips</h1>
            </div>
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ url('dashboard/tips') }}">Tips</a></li>
                <li class="breadcrumb-item active">Editar Tip</li>
            </ol>
            </div>
        </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
            <div class="card-header">
            <h3 class="card-title">Editar Tip</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger" style="margin-top: 10px;">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>  
                        @endforeach
                    </ul>
                </div>
                @endif
                <form  method="post" action="{{ url('dashboard/tips/edit/'.$tipDetail->id)}}" name="createArticle" id="createArticle" enctype="multipart/form-data">@csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Título</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="tipTitle" value="{{$tipDetail->title}}" placeholder="Ingrese Titulo">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Pretitulo</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="tipSubTitle" value="{{$tipDetail->subtitle}}" placeholder="Ingrese Pretitulo">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Resumen de Artículo</label>
                                <textarea class="form-control" name="tipResume" id="tipResume" placeholder="Ingrese Resumen" style="margin-top: 0px; margin-bottom: 0px; height: 93px;">{{$tipDetail->resume}}</textarea>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputFile">Insertar Imagen</label>
                                <input type="file" class="form-control" onchange="preview_image(event)" name="tipImage" id="tipImage">
                                <img style="margin-top: 10px;"  id="output_image" class="img-fluid"  width=300 src="{{asset($tipDetail->page_image)}}"/>
                                <input type="hidden" name="currentTipImage" value="{{ $tipDetail->page_image }}"> 
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Insertar Imagen para Movil</label>
                                <input type="file" class="form-control" onchange="preview_image2(event)" name="tipMobileImage" id="tipMobileImage">
                                <img style="margin-top: 10px;"  id="output_image2" class="img-fluid"  width=300 src="{{asset($tipDetail->mobile_image)}}"/>
                                <input type="hidden" name="currentTipMobileImage" value="{{ $tipDetail->mobile_image }}"> 
                        </div>
                    </div>
                    <!-- /.col -->
                </div>

            <h5>Contenido del Articulo</h5>
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Descripción</label>
                            <textarea class="form-control textAreaEditor" name="tipContent" id="tipContent" placeholder="Ingrese Descripcion" style="margin-top: 0px; margin-bottom: 0px; height: 93px;">{!! $tipDetail->content!!}</textarea>
                    </div>
                </div>
                <!-- /.form-group -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
            <div class="card-footer">
                <div class="form-actions">
                    <input type="submit" value="Actualizar Tip" class="btn btn-info">
                </div>
            </div>
            </form>
            <!-- /.row -->
            
            </div>
            <!-- /.card-body -->
          
        </div>
        <!-- /.card -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <script type='text/javascript'>
        function preview_image(event) 
        {
            var reader = new FileReader();
            reader.onload = function()
            {
            var output = document.getElementById('output_image');
            output.src = reader.result;
            output.width = 400;
            output.width = 300

            }
            reader.readAsDataURL(event.target.files[0]);
        }
        function preview_image2(event) 
        {
            var reader = new FileReader();
            reader.onload = function()
            {
            var output = document.getElementById('output_image2');
            output.src = reader.result;
            output.width = 400;
            output.width = 300

            }
            reader.readAsDataURL(event.target.files[0]);
        }
        </script>
@endsection


