@extends('admin.admin_master')
@section('admin')

    <div class="container-xxl">

        <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
            <div class="flex-grow-1">
                <h4 class="fs-18 fw-semibold m-0">Edit Slider</h4>
            </div>
            <div class="text-end">
                <ol class="breadcrumb m-0 py-0">
                    <li class="breadcrumb-item"><a href="{{ route('admin.sliders') }}">Sliders</a></li>
                    <li class="breadcrumb-item active">Edit</li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Edit Slider Data</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.sliders.update', $slider) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label class="form-label">Title</label>
                                <input type="text" name="title" class="form-control" value="{{ old('title', $slider->title) }}">
                                @error('title') <div class="text-danger small">{{ $message }}</div> @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Description</label>
                                <textarea name="description" rows="4" class="form-control">{{ old('description', $slider->description) }}</textarea>
                                @error('description') <div class="text-danger small">{{ $message }}</div> @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Link</label>
                                <input type="text" name="link" class="form-control" value="{{ old('link', $slider->link) }}">
                                @error('link') <div class="text-danger small">{{ $message }}</div> @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Image</label>

                                @if ($slider->image)
                                    <div class="mb-2">
                                        <img src="{{ asset('upload/sliders/' . $slider->image) }}"
    alt="Image" class="avatar-md rounded">
                                    </div>
                                @else
                                    <div class="mb-2">
                                        <span class="text-muted">No Slider Image</span>
                                    </div>
                                @endif

                                <input type="file" name="image" class="form-control">
                                <small class="text-muted">JPG, PNG, or WebP. Max size 2MB.</small>
                                @error('image') <div class="text-danger small">{{ $message }}</div> @enderror
                            </div>

                            <div class="mb-3 form-check">
                                <input type="checkbox" name="published" id="published" class="form-check-input"
                                    value="1" {{ old('published', $slider->published) ? 'checked' : '' }}>
                                <label class="form-check-label" for="published">Published</label>
                            </div>

                            <button type="submit" class="btn btn-primary">Update</button>
                            <a href="{{ route('admin.sliders') }}" class="btn btn-light">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection