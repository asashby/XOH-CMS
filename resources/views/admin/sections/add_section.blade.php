@extends('layouts.admin_layout')
@section('title', 'Agregar Menu Navegacion')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1 class="m-0 text-dark">Secciones</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ url('dashboard/sections') }}">Secciones</a></li>
                <li class="breadcrumb-item active">Agregar Seccion</li>
            </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Agregar Sección</h3>
              </div>
              <!-- /.card-header -->
              
              @if ($errors->any())
              <div class="alert alert-danger" style="margin-top: 10px;">
                <ul>
                    @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>  
                    @endforeach
                </ul>
              </div>
              @endif

              <!-- form start -->
              <form role="form" method="post" action="{{ url('/dashboard/section/create')}}"  name="addSection" id="addSection" enctype="multipart/form-data">@csrf
                <div class="card-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Nombre Sección</label>
                      <input type="text" class="form-control" placeholder="Ingrese Nombre" id="sectionName" name="sectionName" >
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Descripción</label>
                      <textarea class="form-control textAreaEditorSection" rows="3" name="sectionDescription" id="sectionDescription" placeholder="Ingrese Descripcion" style="margin-top: 0px; margin-bottom: 0px; height: 93px;"></textarea>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputFile">Insertar Banner Principal</label>
                          <input type="file" class="form-control" onchange="preview_image(event)" name="sectionImage" id="sectionImage">
                          <img style="margin-top: 10px;" id="output_image"/>
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Agregar</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    <!-- /.content -->
    </div>
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
      </script>
@endsection