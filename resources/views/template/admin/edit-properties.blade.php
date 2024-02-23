@extends('layouts.dashboard.admin')
@section('title')
    {{ 'Edit property' }}
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"></h1>
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
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header" style="background: #0c4b36">
                            <h3 class="card-title">Edit properties</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="POST" action="{{ route('admin.properties.update', ['id' => $property->id]) }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" id="title" name="title"
                                        placeholder="Enter title" required value="{{ $property->title }}" />
                                </div>
                                <div class="form-group">
                                    <label for="room">Room</label>
                                    <input type="text" class="form-control" id="room" name="room" placeholder="5"
                                        required value="{{ $property->room }}" />
                                </div>
                                <div class="form-group">
                                    <label for="location">Location</label>
                                    <input type="text" class="form-control" id="location" name="location"
                                        placeholder="Enter location" required value="{{ $property->location }}" />
                                </div>
                                <div class="form-group">
                                    <label for="price">Price</label>
                                    <input type="text" class="form-control" id="price" name="price"
                                        placeholder="Enter price" required value="{{ $property->price }}" />
                                </div>
                                <div class="form-group">
                                    <label for="classification">Classification</label>
                                    <select class="form-control" style="width: 100%;" name="classification" required>
                                        <option>Select Classification</option>
                                        <option value="Appartment"
                                            {{ $property->classification === 'Appartment' ? 'selected' : '' }}>Apartment
                                        </option>
                                        <option value="Villa"
                                            {{ $property->classification === 'Villa' ? 'selected' : '' }}>Villa</option>
                                        <option value="Land" {{ $property->classification === 'Land' ? 'selected' : '' }}>
                                            Land</option>
                                    </select>

                                </div>
                                <div class="form-group">
                                    <label for="type">Type</label>
                                    <select class="form-control" style="width: 100%;" name="type" required>
                                        <option>Select Type</option>
                                        <option value="Ready" {{ $property->type === 'Ready' ? 'selected' : '' }}>Ready
                                        </option>
                                        <option value="Under Contruction"
                                            {{ $property->type === 'Under Contruction' ? 'selected' : '' }}>Under
                                            Construction</option>
                                    </select>

                                </div>
                                <div class="form-group">
                                    <label for="dev_name">Developer name</label>
                                    <input type="text" class="form-control" id="dev_name" name="dev_name"
                                        placeholder="Enter developer name" required value="{{ $property->dev_name }}" />
                                </div>
                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <select class="form-control" style="width: 100%;" name="status" required>
                                        <option>Select Status</option>
                                        <option value="Approved" {{ $property->status === 'Approved' ? 'selected' : '' }}>
                                            Approved</option>
                                        <option value="Pending" {{ $property->status === 'Pending' ? 'selected' : '' }}>
                                            Pending</option>
                                        <option value="Declined" {{ $property->status === 'Declined' ? 'selected' : '' }}>
                                            Declined</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="thumb">Thumbnail</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="thumb" name="thumb"
                                                accept="image/png, image/jpeg" />
                                            <label class="custom-file-label" for="thumb">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="slider1">Slider thumb1</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="slider1" name="slider1"
                                                accept="image/png, image/jpeg" />
                                            <label class="custom-file-label" for="slider1">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="slider2">Slider thumb2</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="slider2"
                                                name="slider2" accept="image/png, image/jpeg" />
                                            <label class="custom-file-label" for="slider2">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="slider3">Slider thumb3</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="slider3"
                                                name="slider3" accept="image/png, image/jpeg" />
                                            <label class="custom-file-label" for="slider3">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="slider4">Slider thumb4</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="slider4"
                                                name="slider4" accept="image/png, image/jpeg" />
                                            <label class="custom-file-label" for="slider4">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea id="summernote" name="description">{{ $property->description }}</textarea>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary"
                                    style="background: #0c4b36">Submit</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
                <!--/.col (left) -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection

@section('script')
    <!-- jQuery -->
    <script src="{{ asset('dashboard/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('dashboard/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('dashboard/dist/js/adminlte.min.js') }}"></script>
    <!-- Summernote -->
    <script src="{{ asset('dashboard/plugins/summernote/summernote-bs4.min.js') }}"></script>
    <!-- CodeMirror -->
    <script src="{{ asset('dashboard/plugins/codemirror/codemirror.js') }}"></script>
    <script src="{{ asset('dashboard/plugins/codemirror/mode/css/css.js') }}"></script>
    <script src="{{ asset('dashboard/plugins/codemirror/mode/xml/xml.js') }}"></script>
    <script src="{{ asset('dashboard/plugins/codemirror/mode/htmlmixed/htmlmixed.js') }}"></script>
    <script src="{{ asset('dashboard/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('dashboard/dist/js/demo.js') }}"></script>
    <!-- Page specific script -->
    <script>
        $(function() {
            // Summernote
            $('#summernote').summernote()

            // CodeMirror
            CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
                mode: "htmlmixed",
                theme: "monokai"
            });
        })
    </script>
    <script>
        $(function() {
            bsCustomFileInput.init();
        });
    </script>
@endsection
