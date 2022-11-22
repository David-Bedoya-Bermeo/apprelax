<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Hotel Dashboard Template</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('mainEmpleado/img/favicon.png')}}">
    <link rel="stylesheet" href="{{ asset('mainEmpleado/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('mainEmpleado/plugins/fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{ asset('mainEmpleado/plugins/fontawesome/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('mainEmpleado/css/feathericon.min.css')}}">
    <link rel="stylesheet" href="{{ asset('mainEmpleado/plugins/morris/morris.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('mainEmpleado/css/bootstrap-datetimepicker.min.css')}}">
    <link rel="stylesheet" href="{{ asset('mainEmpleado/css/style.css')}}">
</head>

<body>
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="page-header mt-5">
                <div class="row">
                    <div class="col">
                        <h3 class="page-title">Perfil</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Contraseña</a></li>
                            <li class="breadcrumb-item active">Profile</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="profile-header">
                        <div class="row align-items-center">
                            <div class="col-auto profile-image">
                                <a href="#"> <img class="rounded-circle" alt="User Image"
                                        src="{{ asset('uploads/avatars')}}/{{ Auth::user()->avatar}}"> </a>
                            </div>
                            <div class="col ml-md-n2 profile-user-info">
                                <h4 class="user-name mb-3">{{ Auth::user()->name }}</h4>
                                <h6 class="text-muted mt-1">Manager</h6>
                                <div class="user-Location mt-1"><i class="fas fa-map-marker-alt"></i> Florida,
                                    United States</div>
                                <div class="about-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                    do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                            </div>
                            <div class="col-auto profile-btn"> <a href="" class="btn btn-primary">
                                    Message
                                </a> <a href="edit-profile.html" class="btn btn-primary">
                                    Edit
                                </a> </div>
                        </div>
                    </div>
                </div>
                <div class="profile-menu">
                    <ul class="nav nav-tabs nav-tabs-solid">
                        <li class="nav-item"> <a class="nav-link active" data-toggle="tab"
                                href="#per_details_tab">About</a> </li>
                        <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#password_tab">Password</a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content profile-tab-cont">
                    <div class="tab-pane fade show active" id="per_details_tab">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title d-flex justify-content-between">
                                            <span>Personal Details</span>
                                            <a class="edit-link" data-toggle="modal" href="#edit_personal_details"><i
                                                    class="fa fa-edit mr-1"></i>Edit</a>
                                        </h5>
                                        <div class="row mt-5">
                                            <p class="col-sm-3 text-sm-right mb-0 mb-sm-3">Name</p>
                                            <p class="col-sm-9">David Alvarez</p>
                                        </div>
                                        <div class="row">
                                            <p class="col-sm-3 text-sm-right mb-0 mb-sm-3">Date of Birth</p>
                                            <p class="col-sm-9">24 Jul 1983</p>
                                        </div>
                                        <div class="row">
                                            <p class="col-sm-3 text-sm-right mb-0 mb-sm-3">Email ID </p>
                                            <p class="col-sm-9"><a href="/cdn-cgi/l/email-protection"
                                                    class="__cf_email__"
                                                    data-cfemail="caaeabbca3aeaba6bcabb8afb08aafb2aba7baa6afe4a9a5a7">[email&#160;protected]</a>
                                            </p>
                                        </div>
                                        <div class="row">
                                            <p class="col-sm-3 text-sm-right mb-0 mb-sm-3">Mobile</p>
                                            <p class="col-sm-9">305-310-5857</p>
                                        </div>
                                        <div class="row">
                                            <p class="col-sm-3 text-sm-right mb-0">Address</p>
                                            <p class="col-sm-9 mb-0">4663 Agriculture Lane,
                                                <br> Miami,
                                                <br> Florida - 33165,
                                                <br> United States.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade" id="edit_personal_details" aria-hidden="true" role="dialog">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Personal Details</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close"> <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form>
                                                    <div class="row form-row">
                                                        <div class="col-12 col-sm-6">
                                                            <div class="form-group">
                                                                <label>First Name</label>
                                                                <input type="text" class="form-control" value="John">
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-6">
                                                            <div class="form-group">
                                                                <label>Last Name</label>
                                                                <input type="text" class="form-control" value="Doe">
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label>Date of Birth</label>
                                                                <div class="cal-icon">
                                                                    <input type="text" class="form-control"
                                                                        value="24-07-1983">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-6">
                                                            <div class="form-group">
                                                                <label>Email ID</label>
                                                                <input type="email" class="form-control"
                                                                    value="johndoe@example.com">
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-6">
                                                            <div class="form-group">
                                                                <label>Mobile</label>
                                                                <input type="text" value="+1 202-555-0125"
                                                                    class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <h5 class="form-title"><span>Address</span></h5>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label>Address</label>
                                                                <input type="text" class="form-control"
                                                                    value="4663 Agriculture Lane">
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-6">
                                                            <div class="form-group">
                                                                <label>City</label>
                                                                <input type="text" class="form-control" value="Miami">
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-6">
                                                            <div class="form-group">
                                                                <label>State</label>
                                                                <input type="text" class="form-control" value="Florida">
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-6">
                                                            <div class="form-group">
                                                                <label>Zip Code</label>
                                                                <input type="text" class="form-control" value="22434">
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-6">
                                                            <div class="form-group">
                                                                <label>Country</label>
                                                                <input type="text" class="form-control"
                                                                    value="United States">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary btn-block">Save
                                                        Changes</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title d-flex justify-content-between">
                                            <span>Personal Details</span>
                                            <a class="edit-link" data-toggle="modal" href="#edit_personal_details"><i
                                                    class="fa fa-edit mr-1"></i>Edit</a>
                                        </h5>
                                        <div class="row mt-5">
                                            <p class="col-sm-3 text-sm-right mb-0 mb-sm-3">Name</p>
                                            <p class="col-sm-9">David Alvarez</p>
                                        </div>
                                        <div class="row">
                                            <p class="col-sm-3 text-sm-right mb-0 mb-sm-3">Date of Birth</p>
                                            <p class="col-sm-9">24 Jul 1983</p>
                                        </div>
                                        <div class="row">
                                            <p class="col-sm-3 text-sm-right mb-0 mb-sm-3">Email ID </p>
                                            <p class="col-sm-9"><a href="/cdn-cgi/l/email-protection"
                                                    class="__cf_email__"
                                                    data-cfemail="385c594e515c59544e594a5d42785d40595548545d165b5755">[email&#160;protected]</a>
                                            </p>
                                        </div>
                                        <div class="row">
                                            <p class="col-sm-3 text-sm-right mb-0 mb-sm-3">Mobile</p>
                                            <p class="col-sm-9">305-310-5857</p>
                                        </div>
                                        <div class="row">
                                            <p class="col-sm-3 text-sm-right mb-0">Address</p>
                                            <p class="col-sm-9 mb-0">4663 Agriculture Lane,
                                                <br> Miami,
                                                <br> Florida - 33165,
                                                <br> United States.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade" id="edit_personal_details1" aria-hidden="true" role="dialog">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Personal Details</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close"> <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form>
                                                    <div class="row form-row">
                                                        <div class="col-12 col-sm-6">
                                                            <div class="form-group">
                                                                <label>First Name</label>
                                                                <input type="text" class="form-control" value="John">
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-6">
                                                            <div class="form-group">
                                                                <label>Last Name</label>
                                                                <input type="text" class="form-control" value="Doe">
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label>Date of Birth</label>
                                                                <div class="cal-icon">
                                                                    <input type="text" class="form-control"
                                                                        value="24-07-1983">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-6">
                                                            <div class="form-group">
                                                                <label>Email ID</label>
                                                                <input type="email" class="form-control"
                                                                    value="johndoe@example.com">
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-6">
                                                            <div class="form-group">
                                                                <label>Mobile</label>
                                                                <input type="text" value="+1 202-555-0125"
                                                                    class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <h5 class="form-title"><span>Address</span></h5>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label>Address</label>
                                                                <input type="text" class="form-control"
                                                                    value="4663 Agriculture Lane">
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-6">
                                                            <div class="form-group">
                                                                <label>City</label>
                                                                <input type="text" class="form-control" value="Miami">
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-6">
                                                            <div class="form-group">
                                                                <label>State</label>
                                                                <input type="text" class="form-control" value="Florida">
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-6">
                                                            <div class="form-group">
                                                                <label>Zip Code</label>
                                                                <input type="text" class="form-control" value="22434">
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-6">
                                                            <div class="form-group">
                                                                <label>Country</label>
                                                                <input type="text" class="form-control"
                                                                    value="United States">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary btn-block">Save
                                                        Changes</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="password_tab" class="tab-pane fade">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Change Password</h5>
                                <div class="row">
                                    <div class="col-md-10 col-lg-6">
                                        <form>
                                            <div class="form-group">
                                                <label>Old Password</label>
                                                <label for="password_actual">Clave Actual</label>
                                                <input type="password" name="password_actual"
                                                    class="form-control @error('password_actual') is-invalid @enderror"
                                                    required>
                                                @error('password_actual')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <div class="form-group mt-3">
                                                    <label for="new_password ">Nueva Clave</label>
                                                    <input type="password" name="password"
                                                        class="form-control @error('password') is-invalid @enderror"
                                                        required>
                                                    @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="confirm_password">Confirmar nueva Clave</label>
                                                    <input type="password" name="confirm_password"
                                                        class="form-control @error('confirm_password') is-invalid @enderror"
                                                        required>
                                                    @error('confirm_password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                                <button type="submit" class="btn btn-primary" id="formSubmit">Guardar
                                                    Cambios</button>
                                                <a href="/home" class="btn btn-secondary">Cancelar</a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

    <script src="{{ asset('mainEmpleado/js/jquery-3.5.1.min.js')}}"></script>
    <script src="{{ asset('mainEmpleado/js/popper.min.js')}}"></script>
    <script src="{{ asset('mainEmpleado/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('mainEmpleado/js/moment.min.js')}}"></script>
    <script src="{{ asset('mainEmpleado/js/select2.min.js')}}"></script>
    <script src="{{ asset('mainEmpleado/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
    <script src="{{ asset('mainEmpleado/js/bootstrap-datetimepicker.min.js')}}"></script>
    <script src="{{ asset('mainEmpleado/js/script.js')}}"></script>
</body>
@endsection