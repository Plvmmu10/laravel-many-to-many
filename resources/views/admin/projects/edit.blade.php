@extends('layouts.admin')

@section('content')
    <div class="container d-flex justify-content-center">
        <div class="w-50 text-white mt-5">
            <form action="{{ route('admin.projects.update', $project->slug) }}" method="POST">
                @csrf
                @method('PUT')
                {{-- Name --}}
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $project->name }}">
                    <div id="nameText" class="form-text text-white">Change your project name</div>
                </div>

                {{-- Image --}}
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="text" class="form-control" id="image" name="image" value="{{ $project->image }}">
                    <div id="imageText" class="form-text text-white">Change your project image</div>
                </div>

                {{-- Name --}}
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea type="text" class="form-control" id="description" name="description" value="{{ $project->description }}">{{ $project->description }}</textarea>
                    <div id="descriptionText" class="form-text text-white">Change your project description</div>
                </div>

                <button type="submit" class="btn btn-outline-primary">Edit</button>
                <button type="reset" class="btn btn-outline-danger">Reset</button>
                <button class="btn btn-outline-success">
                    <a href="{{ route('admin.projects.show', $project->slug) }}" class="text-decoration-none text-white">Go
                        Back</a>
                </button>
            </form>
        </div>

    </div>

    <script src="//js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
    <script type="text/javascript">
        bkLib.onDomLoaded(nicEditors.allTextAreas);
    </script>
@endsection
