@extends('admin.admin_master')
@section('admin')
    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->

    <!-- Start Content-->
    <div class="container-xxl">

        <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
            <div class="flex-grow-1">
                <h4 class="fs-18 fw-semibold m-0">Testimonials</h4>
            </div>

            <div class="text-end">
                <ol class="breadcrumb m-0 py-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                    <li class="breadcrumb-item active">Testimonials</li>
                </ol>
            </div>
        </div>

        <!-- Datatables  -->
        <div class="row">
            <div class="col-12">
                <div class="card">

                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="card-title mb-0">Testimonials Data</h5>
                        <div class="d-flex gap-2">
                            <form action="{{ route('testimonials') }}" method="GET" class="d-flex">
                                <input type="text" name="search" class="form-control form-control-sm"
                                    placeholder="Search testimonials..." value="{{ request('search') }}">
                                <button type="submit" class="btn btn-outline-secondary btn-sm ms-2">Search</button>
                            </form>
                            <a href="{{ route('testimonials.create') }}" class="btn btn-primary btn-sm">
                                <i class="ri-add-line align-middle me-1"></i> Add Testimonial
                            </a>
                        </div>
                    </div>

                    <!-- end card header -->

                    <div class="card-body">
                        <table id="testimonials-table" class="table table-bordered dt-responsive table-responsive nowrap">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Photo</th>
                                    <th>Message</th>
                                    <th>Status</th>
                                    <th>Created at</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($testimonials as $testimonial)
                                    <tr>
                                        <td>{{ $testimonial->name }}</td>
                                        <td>{{ $testimonial->position }}</td>
                                        <td>
                                            @if ($testimonial->photo)
                                                <img src="{{ asset('upload/testimonials/' . $testimonial->photo) }}"
                                                    alt="Photo" class="avatar-md rounded-circle">
                                            @else
                                                <span class="text-muted">No photo</span>
                                            @endif
                                        </td>
                                        <td>{{ $testimonial->message }}</td>
                                        <td>
                                            @if ($testimonial->published)
                                                <span class="badge rounded-pill text-bg-success">Published</span>
                                            @else
                                                <span class="badge rounded-pill text-bg-warning">Draft</span>
                                            @endif
                                        </td>
                                        <td>{{ $testimonial->created_at->format('M d, Y') }}</td>
                                        <td>
                                            <div class="d-flex gap-2">
                                                <a href="{{ route('testimonials.edit', $testimonial->id) }}"
                                                    class="btn btn-outline-primary btn-sm">
                                                    Edit
                                                </a>
                                                <form action="{{ route('testimonials.destroy', $testimonial->id) }}"
                                                    method="POST"
                                                    onsubmit="return confirm('Are you sure you want to delete this testimonial?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-outline-danger btn-sm" id="delete">
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
                            {{ $testimonials->links('pagination::bootstrap-5') }}
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div> <!-- content -->
    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->
@endsection
