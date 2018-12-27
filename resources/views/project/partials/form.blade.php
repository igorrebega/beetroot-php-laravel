@csrf

<div class="form-group">
    <label for="title">Title</label>
    <input type="text" name="title" class="form-control {{$errors->has('title') ? 'is-invalid' : ''}}"
           id="title" placeholder="Enter title" value="{{old('title') ?? $project->title}}">
    @if($errors->has('title'))
        <div class="invalid-feedback">
            {{$errors->get('title')[0]}}
        </div>
    @endif
</div>

<div class="form-group">
    <label for="user_id">User</label>
    <select class="form-control {{$errors->has('user_id') ? 'is-invalid' : ''}}" id="user_id" name="user_id">
        @foreach($users as $user)
            <option value="{{$user->id}}" {{$project->user_id == $user->id ? 'selected' : ''}}>{{$user->name}}</option>
        @endforeach
    </select>

    {{--<input type="text" name="title" class="form-control {{$errors->has('title') ? 'is-invalid' : ''}}"--}}
    {{--id="title" placeholder="Enter title" value="{{old('title') ?? $project->title}}">--}}
    @if($errors->has('user_id'))
        <div class="invalid-feedback">
            {{$errors->get('user_id')[0]}}
        </div>
    @endif
</div>

<div class="form-group">
    <label for="description">Description</label>
    <textarea name="description"
              id="description"
              class="form-control {{$errors->has('description') ? 'is-invalid' : ''}}"
    >{{old('description') ?? $project->description}}</textarea>
    @if($errors->has('description'))
        <div class="invalid-feedback">
            {{$errors->get('description')[0]}}
        </div>
    @endif
</div>