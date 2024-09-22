@extends('Layout.Layout')
@section('main-content')
    <div class="container">
        <!-- Title -->
        <div class="row heading-bg">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h5 class="txt-dark">Add Destination</h5>
            </div>
            <!-- Breadcrumb -->
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                    <li><a href="{{route('pages.dashboard')}}">Dashboard</a></li>
                    <li><a href="{{ route('Admin.Destination') }}"><span>Destinations</span></a></li>
                    <li class="active"><span>Add Destination</span></li>
                </ol>
            </div>
            <!-- /Breadcrumb -->
        </div>
        <!-- /Title -->

        <!-- Row -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default card-view">
                    <div class="panel-wrapper collapse in">
                        <div class="panel-body pt-0">
                            <div class="form-wrap">
                                <form action="{{ route('Add.Destination.Post') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <h6 class="txt-dark flex flex-middle  capitalize-font"><i
                                            class="font-20 txt-grey zmdi zmdi-info-outline mr-10"></i>Destination Details
                                    </h6>
                                    <hr class="light-grey-hr" />
                                    <div class="row">

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="control-label mb-10">User</label>
                                                <select class="form-control form-select" name="user_id">
                                                    <option value="">Select User</option>
                                                    @foreach ($users as $user)
                                                        <option value="{{ $user->id }}">
                                                            {{ $user->FirstName . ' ' . $user->LastName }} </option>
                                                    @endforeach
                                                </select>
                                                @error('user_id')
                                                    <span class="text-danger fw-bold">
                                                        {{ $message }}
                                                        <span>
                                                        @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="control-label mb-10">Destination name</label>
                                                <input type="text" id="DestinationName" name="DestinationName"
                                                    class="form-control" placeholder="Mazar-e-Quaid"
                                                    value="{{ old('DestinationName') }}">
                                                @error('DestinationName')
                                                    <span class="text-danger fw-bold">
                                                        {{ $message }}
                                                        <span>
                                                        @enderror
                                            </div>
                                        </div>
                                        <!--/span-->
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="control-label mb-10">Destination Location</label>
                                                <input type="text" id="destination_location" name="destination_location"
                                                    class="form-control" placeholder="Karachi, Sindh, Pakistan"
                                                    value="{{ old('destination_location') }}">
                                                @error('destination_location')
                                                    <span class="text-danger fw-bold">
                                                        {{ $message }}
                                                        <span>
                                                        @enderror
                                            </div>
                                        </div>


                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="destination_description" class="control-label mb-10">Destination
                                                    Description</label>
                                                <textarea name="destination_description" id="destination_description" class="form-control" cols="30" rows="10"
                                                    placeholder="Please Give Breif Description About The Destination">{{ old('destination_description') }}"</textarea>
                                                @error('destination_description')
                                                    <span class="text-danger fw-bold">
                                                        {{ $message }}
                                                        <span>
                                                        @enderror
                                            </div>
                                        </div>
                                        <!--/span-->

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="image" class="control-label mb-10">
                                                    <img src="https://developers.elementor.com/docs/assets/img/elementor-placeholder-image.png"
                                                        alt="placeholder-image" style="width: 100%">
                                                </label>
                                                <div style="display: none">
                                                    <input type="file" id="image" name="destinationImage">
                                                </div>
                                                <div class="text-center bg-orange"
                                                    style="width: 100%; padding: 10px; color: white;">
                                                    Upload Image
                                                </div>

                                                @error('destinationImage')
                                                    <span class="text-danger fw-bold">
                                                        {{ $message }}
                                                        <span>
                                                        @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="image1" class="control-label mb-10">
                                                    <img src="https://developers.elementor.com/docs/assets/img/elementor-placeholder-image.png"
                                                        alt="placeholder-image1" style="width: 100%">
                                                </label>
                                                <div style="display: none">
                                                    <input type="file" id="image1" name="destinationImage1">
                                                </div>
                                                <div class="text-center bg-orange"
                                                    style="width: 100%; padding: 10px; color: white;">
                                                    Upload Image
                                                </div>
                                                @error('destinationImage1')
                                                    <span class="text-danger fw-bold">
                                                        {{ $message }}
                                                        <span>
                                                        @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="image2" class="control-label mb-10">
                                                    <img src="https://developers.elementor.com/docs/assets/img/elementor-placeholder-image.png"
                                                        alt="placeholder-image" style="width: 100%">
                                                </label>
                                                <div style="display: none">
                                                    <input type="file" id="image2" name="destinationImage2">
                                                </div>
                                                <div class="text-center bg-orange"
                                                    style="width: 100%; padding: 10px; color: white;">
                                                    Upload Image
                                                </div>
                                                @error('destinationImage2')
                                                    <span class="text-danger fw-bold">
                                                        {{ $message }}
                                                        <span>
                                                        @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="image3" class="control-label mb-10">
                                                    <img src="https://developers.elementor.com/docs/assets/img/elementor-placeholder-image.png"
                                                        alt="placeholder-image" style="width: 100%">
                                                </label>
                                                <div style="display: none">
                                                    <input type="file" id="image3" name="destinationImage3">
                                                </div>
                                                <div class="text-center bg-orange"
                                                    style="width: 100%; padding: 10px; color: white;">
                                                    Upload Image
                                                </div>
                                                @error('destinationImage3')
                                                    <span class="text-danger fw-bold">
                                                        {{ $message }}
                                                        <span>
                                                        @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-actions">
                                        <button class="btn btn-orange btn-icon left-icon mr-10 pull-left" id="AddBtn">
                                            <i class="fa fa-check"></i> <span>Add Destination</span></button>
                                        <button type="button" class="btn btn-default pull-left">Cancel</button>
                                        <div class="clearfix"></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Row -->

    </div>
@endsection
@section('addition-scripts')
    <script>
        $(document).ready(function() {
            // Array of image IDs
            const imageInputs = ['#image', '#image1', '#image2', '#image3'];

            // Function to load images from localStorage (if available)
            function loadImagesFromLocalStorage() {
                imageInputs.forEach(function(inputId) {
                    const storedImage = localStorage.getItem(inputId);
                    if (storedImage) {
                        $(`label[for="${inputId.substring(1)}"]`).find('img').attr('src', storedImage);
                    }
                });
            }

            // Load stored images on page load
            loadImagesFromLocalStorage();

            // Loop through each image input
            imageInputs.forEach(function(inputId) {
                // Handle image upload preview and store in localStorage
                $(inputId).on('change', function(event) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        // Update the img src and store the image data in localStorage
                        const imgData = e.target.result;
                        localStorage.setItem(inputId, imgData); // Store image in localStorage
                        $(`label[for="${inputId.substring(1)}"]`).find('img').attr('src',
                            imgData);
                    };
                    reader.readAsDataURL(event.target.files[0]);
                });

                // Trigger the file input when the "Upload Image" div is clicked
                $(`label[for="${inputId.substring(1)}"]`).next().click(function() {
                    $(inputId).click();
                });
            });

            // Handle form submission: Attach the localStorage image data to the file input before submitting
            $('form').on('submit', function(event) {
                imageInputs.forEach(function(inputId) {
                    const storedImage = localStorage.getItem(inputId);
                    if (storedImage) {
                        // Convert the stored base64 image back to a Blob file
                        const blob = base64ToFile(storedImage,
                            'image.jpg'); // You can change the filename as needed

                        // Create a new DataTransfer object to mimic user file input
                        const dataTransfer = new DataTransfer();
                        dataTransfer.items.add(blob);

                        // Set the file input files property to the Blob file
                        $(inputId)[0].files = dataTransfer.files;
                    }
                });
            });

            // Clear localStorage on successful form submission
            // $('form').on('submit', function() {
            //     imageInputs.forEach(function(inputId) {
            //         localStorage.removeItem(inputId); // Clear stored images
            //     });
            // });

            // Helper function to convert base64 to a Blob (file-like) object
            function base64ToFile(base64String, fileName) {
                const arr = base64String.split(',');
                const mime = arr[0].match(/:(.*?);/)[1];
                const bstr = atob(arr[1]);
                let n = bstr.length;
                const u8arr = new Uint8Array(n);
                while (n--) {
                    u8arr[n] = bstr.charCodeAt(n);
                }
                return new File([u8arr], fileName, {
                    type: mime
                });
            }
        });
    </script>
@endsection
