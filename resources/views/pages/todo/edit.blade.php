<form action="{{ route('todo.update', $task -> id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="input-group">
                        <input class="form-control" name="title" value="{{$task->title}}" type="text" placeholder="ENTER STUDENT"name="name" aria-label="default input example">
                        <button class="btn btn-success">Update</button>
                    </div>
                </form>