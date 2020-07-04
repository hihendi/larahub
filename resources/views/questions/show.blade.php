@extends('layouts.master')



@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Show Question</h1>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card shadow">
                    <h4 class="card-header">{{ $question->title }}</h4>
                    <div class="card-body">
                        <p class="card-text">{{ $question->content }}</p>
                    </div>
                    <div class="card-footer text-muted">
                        <div class="row">
                            <div class="col-md-6">
                                Created At : <strong>{{ $question->created_at }}</strong>
                            </div>
                            <div class="col-md-6">
                                <button type="button" data-toggle="modal" class="btn btn-sm btn-warning float-sm-right"
                                    data-target="#editModal"><i class="fas fa-pencil-alt"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



</section>

<div class="modal" id="editModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Question</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('question.update', $question->id)}}" method="post">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" value="{{$question->title}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="content">Content</label>
                        <input type="text" name="content" value="{{$question->content}}" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /.content -->



@endsection