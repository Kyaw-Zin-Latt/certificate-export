@extends("layouts.app")

@section("head")

    <style>
        .profile-img {
            width: 50px;
        }
        .card-icon {
            padding: 20px;
            border-radius: 50%;
        }
        .card-icon-size {
            font-size: 30px;
        }
    </style>

@endsection

@section("content")
    <div class="container">
        <div class="row">
            <div class="col-12 mt-3">
                <div class="d-flex align-items-center justify-content-between v-spacer">
                    <div class="d-flex align-items-center">
                        <div class="mr-2">
                            <img src="https://graph.facebook.com/v3.3/612272920194383/picture?type=normal" class="rounded-circle profile-img" alt="">
                        </div>
                        <div class="">
                            <p class="mb-0 font-weight-bold">Kyaw Zin Latt</p>
                            <small class="text-email-small my-0">aZYYSUea@fbmail.com</small>
                        </div>
                    </div>
                    <div class="">
                        <div class="site-menu dropdown">
                            <button class="btn btn-outline-info btn-lg dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bars mr-0 mr-md-2"></i> <span class="d-none d-md-inline">Menu</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item text-theme" href="https://mms-it.com/student/dashboard">
                                    <i class="fas fa-home fa-fw mr-2"></i> Dashboard
                                </a>
                                <a class="dropdown-item" href="https://mms-it.com/student/request-certificate">
                                    <i class="fas fa-box fa-fw mr-2"></i> Certificate ထုတ်ယူရန်
                                </a>
                                <a class="dropdown-item" href="https://mms-it.com/student/list">
                                    <i class="fas fa-file-alt fa-fw mr-2"></i> အောင်မြင်ပြီး Certificate
                                </a>


                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                    <i class="fas fa-lock-open fa-fw mr-2"></i> Logout
                                </a>
                            </div>
                        </div>
                        <form id="logout-form" action="https://mms-it.com/logout" class="d-none" method="POST">
                            <input type="hidden" name="_token" value="bEDgsosN7CWz7VflFR8f8i9MvXkIkNgSpfWrMxh0"></form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4 mb-3">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route("dashboard") }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Library</li>
                    </ol>
                </nav>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
