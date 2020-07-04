@extends('layouts.master')

@push('style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">

@endpush

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Question</h1>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">

    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="card shadow">
                    <div class="card-body">
                        <form action="{{route('question.store')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title" class="form-control" placeholder="Type...">
                            </div>

                            <div class="form-group">
                                <label for="content">Content</label>
                                <input type="text" name="content" class="form-control" placeholder="Type..."
                                    class="form-group">
                            </div>
                            <button type="submit" class="btn btn-sm btn-block btn-primary">Save</button>

                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example1" class="table table-bordered table-striped" width="100%"
                                collspacing="0">
                                <thead>
                                    <tr class=" table-primary">
                                        <th>No</th>
                                        <th>Title</th>
                                        <th></th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $no = 1;
                                    @endphp
                                    @forelse ($questions as $question)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $question->title }}</td>
                                        <td>
                                            <a href="{{ route('question.show', $question->id) }}"
                                                class="btn btn-sm btn-primary"><i class="fa fa-eye"></i></a>
                                            <form action="{{route('question.destroy', $question->id)}}" method="post"
                                                class="d-inline">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-sm btn-danger"><i
                                                        class="fa fa-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                    @empty
                                    <td colspan="3" class="text-center">Not Data Found</td>
                                    @endforelse
                                </tbody>

                            </table>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
    </div>

</section>
<!-- /.content -->



@endsection

@push('script')
<script src="{{asset('backend/plugins/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('backend/plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
<script>
    $(function () {
    $("#example1").DataTable();
  });
</script>
@endpush