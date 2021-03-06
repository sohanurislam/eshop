@extends('backend.layouts.master')

@section('title', 'Category Create')

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Categories</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary float-left">Edit</h6>
            <a class="btn btn-primary float-right" href="{{ route('categories.index') }}">List</a>
        </div>
        <div class="card-body">

            @include('backend.layouts.elements.errors')

{{--            <form action="{{ route('categories.update', [$category->id]) }}" method="post">--}}
{{--                @csrf--}}
{{--                @method('put')--}}

                {!! Form::model($category,[
              'route' => ['categories.update',$category->id],
              'method'=>'put'
                ]) !!}

                @include('backend.categories.form')
                <button type="submit" class="btn btn-primary">Submit</button>
{{--            </form>--}}
            {!! Form::close() !!}
        </div>
    </div>
@endsection

@push('js')
    <script>
        // alert('Creating category')
    </script>
@endpush
