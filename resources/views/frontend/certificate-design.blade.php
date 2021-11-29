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
        .card-status {
            cursor: pointer;
            transition: 0.5s;
        }
        .card-status:active {
            transform: scale(0.9);
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
                            <img src="{{ Auth::user()->photo }}" class="rounded-circle profile-img" alt="">
                        </div>
                        <div class="">
                            <p class="mb-0 font-weight-bold text-capitalize">{{ Auth::user()->name }}</p>
                            <small class="text-email-small my-0">{{ Auth::user()->github_id }}</small>
                        </div>
                    </div>
                    <div class="">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
                                Dropdown button
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <form action="{{ route("logout") }}" class="dropdown-item" style="cursor: pointer" method="post">
                                    @csrf
                                    <button>Logout</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row my-3">
           <div class="col-12">
               <nav aria-label="breadcrumb">
                   <ol class="breadcrumb">
                       <li class="breadcrumb-item"><a href="{{ route("dashboard") }}">Home</a></li>
                       <li class="breadcrumb-item active" aria-current="page">Certificate Designs</li>
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
