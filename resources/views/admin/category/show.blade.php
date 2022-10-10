@extends('admin.layouts.main')
@section('content')
<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6 d-flex">
            <h1 class="m-0">{{$category->title}} </h1>
            <a href="{{route('admin.category.edit', $category->id)}}"><i class="fas fa-pencil-alt ml-3 mr-2 mt-2 text-success" style="font-size: 16px;"></i></a>
            <form action="{{route('admin.category.delete', $category->id)}}" method="POST">
              @csrf
              @method('DELETE')
              <button type="submit" class="border-0 bg-transparent mt-1">
                <i class="fas fa-trash text-danger" role="button"></i>
              </button>
            </form>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('admin.main.index')}}">Главная</a></li>
              <li class="breadcrumb-item"><a href="{{route('admin.category.index')}}">Категории</a></li>
              <li class="breadcrumb-item active">Просмотр категории</li>
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
          <div class="col-6">
            <div class="card">

            <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <tbody>
                    <tr>
                      <td>ID</td>
                      <td>{{$category->ID}}</td>
                    </tr>
                    <tr>
                      <td>Название</td>
                      <td>{{$category->title}}</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>

          
          <!-- ./col -->
        </div>
        <!-- /.row -->

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

@endsection

