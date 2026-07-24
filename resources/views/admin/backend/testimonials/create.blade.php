@extends('admin.admin_master')
@section('admin')

    <!-- Start Content-->
    <div class="container-xxl">

        <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
            <div class="flex-grow-1">
                <h4 class="fs-18 fw-semibold m-0">Add Testimonial</h4>
            </div>
            <div class="text-end">
                <ol class="breadcrumb m-0 py-0">
                    <li class="breadcrumb-item"><a href="{{ route('testimonials') }}">Testimonials</a></li>
                    <li class="breadcrumb-item active">Create</li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Add Testimonial</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('testimonials.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                                @error('name') <div class="text-danger small">{{ $message }}</div> @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Position</label>
                                <input type="text" name="position" class="form-control" value="{{ old('position') }}">
                                @error('position') <div class="text-danger small">{{ $message }}</div> @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Message</label>
                                <textarea name="message" rows="4" class="form-control">{{ old('message') }}</textarea>
                                @error('message') <div class="text-danger small">{{ $message }}</div> @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Photo</label>
                                <input type="file" name="photo" class="form-control">
                                 <small class="text-muted">JPG, PNG, or WebP. Max size 2MB. Recommended: square image, at least 300x300px.</small>
                                @error('photo') <div class="text-danger small">{{ $message }}</div> @enderror
                            </div>

                            <div class="mb-3 form-check">
                                <input type="checkbox" name="published" id="published" class="form-check-input"
                                    value="1" {{ old('published') ? 'checked' : '' }}>
                                <label class="form-check-label" for="published">Published</label>
                            </div>

                            <button type="submit" class="btn btn-primary">Save</button>
                            <a href="{{ route('testimonials') }}" class="btn btn-light">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection