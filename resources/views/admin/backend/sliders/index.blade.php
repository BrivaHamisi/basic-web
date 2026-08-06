@extends('admin.admin_master')
@section('admin')

    <div class="container-xxl">

        <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
            <div class="flex-grow-1">
                <h4 class="fs-18 fw-semibold m-0">Sliders</h4>
            </div>

            <div class="text-end">
                <ol class="breadcrumb m-0 py-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                    <li class="breadcrumb-item active">Sliders</li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">

                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="card-title mb-0">Sliders Data</h5>
                        <div class="d-flex gap-2">
                            <form action="{{ route('admin.sliders') }}" method="GET" class="d-flex">
                                <input type="text" name="search" class="form-control form-control-sm"
                                    placeholder="Search sliders..." value="{{ request('search') }}">
                                <button type="submit" class="btn btn-outline-secondary btn-sm ms-2">Search</button>
                            </form>
                            <a href="{{ route('admin.sliders.create') }}" class="btn btn-primary btn-sm">
                                <i class="ri-add-line align-middle me-1"></i> Add Slider
                            </a>
                        </div>
                    </div>

                    <div class="card-body">
                        <table id="sliders-table" class="table table-bordered dt-responsive table-responsive nowrap">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Image</th>
                                    <th>Description</th>
                                    <th>Link</th>
                                    <th>Status</th>
                                    <th>Created at</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($sliders as $slider)
                                    <tr>
                                        <td>{{ $slider->title }}</td>
                                        <td>
                                            @if ($slider->image)
                                                <img src="{{ asset('upload/sliders/' . $slider->image) }}"
    alt="Slider Image" class="avatar-md rounded">
                                            @else
                                                <span class="text-muted">No image</span>
                                            @endif
                                        </td>
                                        <td>{{ \Illuminate\Support\Str::limit($slider->description, 60) }}</td>
                                        <td>{{ $slider->link }}</td>
                                        <td>
                                            @if ($slider->published)
                                                <span class="badge rounded-pill text-bg-success">Published</span>
                                            @else
                                                <span class="badge rounded-pill text-bg-warning">Draft</span>
                                            @endif
                                        </td>
                                        <td>{{ $slider->created_at->format('M d, Y') }}</td>
                                        <td>
                                            <div class="d-flex gap-2">
                                                <a href="{{ route('admin.sliders.edit', $slider->id) }}"
                                                    class="btn btn-outline-primary btn-sm">
                                                    Edit
                                                </a>
                                                <form action="{{ route('admin.sliders.destroy', $slider->id) }}"
                                                    method="POST"
                                                    onsubmit="return confirm('Are you sure you want to delete this slider?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-outline-danger btn-sm">
                                                        Delete
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                        <div class="mt-3">
                            {{ $sliders->links('pagination::bootstrap-5') }}
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
@endsection