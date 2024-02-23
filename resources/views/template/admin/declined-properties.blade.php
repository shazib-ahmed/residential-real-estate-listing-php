@extends('layouts.dashboard.admin')
@section('title')
    {{ 'Declined Properties' }}
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Declined Properties</h1>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Properties</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Thumb</th>
                                        <th>Title</th>
                                        <th>Price</th>
                                        <th>Created by</th>
                                        <th>User</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($properties as $property)
                                        <tr>
                                            <td>
                                                {{ $loop->index + 1 }}
                                            </td>
                                            <td>
                                                <img src="{{ asset('assets/image/property') . '/' . $property->thumb }}"
                                                    alt="" style="max-width: 70px;">
                                            </td>
                                            <td>
                                                {{ $property->title }}
                                            </td>
                                            <td>
                                                ${{ $property->price }}
                                            </td>
                                            <td>
                                                {{ $property->user->name }}
                                            </td>
                                            <td>{{ $property->post_by }}</td>
                                            <td>{{ $property->created_at->format('m/d/y h:i A') }}</td>
                                            <td>{{ $property->status }}</td>
                                            <td>
                                                <a href="{{ route('admin.properties.edit', ['id' => $property->id]) }}"
                                                    style="margin-right: 15px; color: #0c4b36">
                                                    <i class="fas fa-pen" aria-hidden="true"></i>
                                                </a>
                                                <a href="{{ route('admin.properties.delete', ['id' => $property->id]) }}"
                                                    style="color: #0c4b36">
                                                    <i class="fas fa-trash" aria-hidden="true"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="7" class="text-center">No properties found</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
