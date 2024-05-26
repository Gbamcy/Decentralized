@extends('layouts.app-front')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>
                            Upload single/multiple images
                            <a href="{{url('gallery')}}" class="btn btn-danger float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <label class="text-md-center">Drag and Drop Multiple Images (JPG, JPEG, PNG, .webp)</label>

                        <form class="w-px-500 p-3 p-md-3" class="dropzone" id="myDragAndDropUploader" action="{{url('gallery/upload')}}" method="post" enctype="multipart/form-data" >
                            @if ($errors->any())
                                <div class="notification is-danger is-light">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            @csrf
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Title</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="title" value="{{old('title')}}" placeholder="Title" @error('title') is-invalid @enderror>
                                    @error('title')
                                    <span class="invalid-feedback" role="alert">
                                                   <strong>{{ $message }}</strong>
                                                </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Message</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control @error('description') is-invalid @enderror" placeholder="message" id="exampleFormControlTextarea1" rows="3" name=" description"></textarea>
                                    @error('description')
                                    <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $message }}</strong>
                                                </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">image</label>
                                <div class="col-sm-9">
                                    <input type="file" class="form-control" name="image" @error('image') is-invalid @enderror>
                                </div>
                                @error('image')
                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                @enderror
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label"></label>
                                <div class="col-sm-9">
                                    <button type="submit" class="btn btn-secondary btn-block text-white">Submit</button>
                                </div>
                            </div>
                        </form>


                    </div>

                </div>

            </div>

        </div>

    </div>

@endsection

@section('scripts')
    <script type="text/javascript">

        var maxFilesizeVal = 12;
        var maxFilesVal = 10;

        // Note that the name "myDragAndDropUploader" is the camelized id of the form.
        Dropzone.options.myDragAndDropUploader = {

            paramName:"file",
            maxFilesize: maxFilesizeVal, // MB
            maxFiles: maxFilesVal,
            resizeQuality: 1.0,
            acceptedFiles: ".jpeg,.jpg,.png,.webp",
            addRemoveLinks: false,
            timeout: 60000,
            dictDefaultMessage: "Drop your files here or click to upload",
            dictFallbackMessage: "Your browser doesn't support drag and drop file uploads.",
            dictFileTooBig: "File is too big. Max filesize: "+maxFilesizeVal+"MB.",
            dictInvalidFileType: "Invalid file type. Only JPG, JPEG, webp PNG files are allowed.",
            dictMaxFilesExceeded: "You can only upload up to "+maxFilesVal+" files.",
            maxfilesexceeded: function(file) {
                this.removeFile(file);
                // this.removeAllFiles();
            },
            sending: function (file, xhr, formData) {
                $('#message').text('Image Uploading...');
            },
            success: function (file, response) {
                $('#message').text(response.success);
                console.log(response.success);
                console.log(response);
            },
            error: function (file, response) {
                $('#message').text('Something Went Wrong! '+response);
                console.log(response);
                return false;
            }
        };
    </script>

@endsection
