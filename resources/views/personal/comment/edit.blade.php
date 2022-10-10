@extends('personal.layouts.main')
@section('content')
<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Комментарий</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Комментарий</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <form action="{{route('personal.comment.update', $comment->id) }}" method="POST" class="col-4">
              @csrf
              @method('PATCH')
              <div class="form-group">
                <textarea class="" cols="60" rows="10" style="resize: none;" name="message">{{$comment->message}}</textarea>
                @error('message')
                <div class="text-danger">Поле обязательное для заполнения</div>
                @enderror
              </div>
              <input type="submit" class="btn btn-primary" value="Обновить">
            </form>
        </div>
        <!-- /.row -->

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

@endsection

