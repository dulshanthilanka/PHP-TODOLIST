@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="page-title">Students</h1>
            </div>
            <div class="col-lg-12">
                <form action="{{ route('todo.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="input-group">
                        <input class="form-control" type="text" placeholder="ENTER STUDENT"name="name" aria-label="default input example">
                        <button class="btn btn-success">Submit</button>
                    </div>
                </form>
            </div>
            <div class="col-lg-12">
                <div class="">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Status</th>
                                <th scope="col">Function</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tasks as $key => $task)
                            <tr>
                                <th scope="row">{{ $key + 1 }}</th>
                                <td>{{ $task->name }}</td>
                                <td>{{ $task->status }}</td>
                                <td>
                                    <a href="{{ route('todo.delete',$task->id ) }}" class="btn btn-danger">DELETE</a>
                                    <a href="javascript:void(0)" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop">UPDATE</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

 <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Task Edit</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" id="taskEditContent">
        <h1>modal</h1>
      </div>
    </div>
  </div>
</div>

@endsection

@push('css')
<style>
    .page-title {
        padding-top: 10vh;
        font-size: 5rem;
        color: black;
    }

    .input-group {
        display: flex;
        align-items: center;
    }

    .input-group input {
        flex: 1;
    }

    .input-group button {
        margin-left: 10px;
    }
</style>
@endpush
