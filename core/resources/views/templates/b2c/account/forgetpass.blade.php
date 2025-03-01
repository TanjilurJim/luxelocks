@extends('Template::layouts.master')
@section('content')


    <style>
        .form-control:focus {
            box-shadow: none;
            border-color: transparent;
            border-bottom: 2px solid #7B0405;
            outline: none;
        }

        .form-group label {
            font-weight: bold;
        }

        .main {
            background-color: #d1d1d1;
        }

        .btn-maroon {
            /* Normal State: Gradient from maroon to the same maroon color */
            background: linear-gradient(to right, #7B0405, #7B0405);
            color: #fff !important;
            border: none;
            transition: background 0.3s ease;
        }

        .btn-maroon:hover {
            /* Hover State: Slightly different second stop for a left-to-right transition */
            background: linear-gradient(to right, #9B0506, #7B0405);
        }

        .custom-file-maroon input[type="file"] {
            /* Hide the text color if desired so only the custom button shows */
            color: #555;
            cursor: pointer;
        }

        /* WebKit browsers (older Safari, older Chrome) */
        .custom-file-maroon input[type="file"]::-webkit-file-upload-button {
            background: linear-gradient(to right, #7B0405, #7B0405);
            color: #fff;
            border: none;
            padding: 0.5rem 1rem;
            border-radius: 4px;
            transition: background 0.3s ease;
            cursor: pointer;
        }

        .custom-file-maroon input[type="file"]::-webkit-file-upload-button:hover {
            background: linear-gradient(to right, #9B0506, #7B0405);
        }

        /* Modern browsers (Firefox, new Chrome, Edge, Safari 14+) */
        .custom-file-maroon input[type="file"]::file-selector-button {
            background: linear-gradient(to right, #7B0405, #7B0405);
            color: #fff;
            border: none;
            padding: 0.5rem 1rem;
            border-radius: 4px;
            transition: background 0.3s ease;
            cursor: pointer;
        }

        .custom-file-maroon input[type="file"]::file-selector-button:hover {
            background: linear-gradient(to right, #9B0506, #7B0405);
        }

        /* #districtSelect,
    #areaSelect {
    background-color: #7B0405; /* The closed select's background */
        /* color: #fff;               The closed select's text color */


        #districtSelect option,
        #areaSelect option {
            background-color: #7B0405;
            /* The option list items when opened */
            color: #fff;
            /* White text */
        }

        .form-control,
        .form-control-file,
        select.form-control,
        textarea.form-control {
            color: #000 !important;
            /* Force black text */
        }

        /* Also ensure placeholders are black if desired */
        .form-control::placeholder {
            color: #000 !important;
        }

        .form-control:-ms-input-placeholder {
            /* Internet Explorer 10-11 */
            color: #000 !important;
        }

        .form-control::-ms-input-placeholder {
            /* Microsoft Edge */
            color: #000 !important;
        }

        .forget-password {
            /* Default link styling */
            color: #000 !important;
            Black text text-decoration: none;
            /* Remove underline if desired */
            transition: color 0.3s ease;
            /* Smooth transition */
        }

        .forget-password:hover {
            color: #7B0405 !important;
            /* Maroon hover color */
            text-decoration: underline;
            /* Underline on hover */
        }
    </style>
    <main class="main">
<br><br>
        <!-- forget Section -->
        <div class="d-flex align-items-center justify-content-center" >
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-5">
                        <div class="card shadow p-4">
                            <div class="card-body">
                                <div class="heading mb-4 text-center">
                                    <h2 class="title">Forget Password</h2>
                                </div>

                                <form action="#" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="forget-email">Email Address <span
                                                class="required text-danger">*</span></label>
                                        <input type="email" class="form-control" id="forget-email"
                                            placeholder="Enter your email" required />
                                    </div>

                                    

                                    <div class="form-footer d-flex justify-content-between align-items-center mb-3">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="remember-me" />
                                            <label class="custom-control-label" for="remember-me">Remember me</label>
                                        </div>
                                        <a href="#" style="color: #000; text-decoration: none;"
                                            onmouseover="this.style.color='#7B0405'; this.style.textDecoration='underline';"
                                            onmouseout="this.style.color='#000'; this.style.textDecoration='none';">
                                            Back to Login?
                                        </a>
                                    </div>

                                    <button type="submit" class="btn btn-block btn-lg btn-maroon mt-3">Reset</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection