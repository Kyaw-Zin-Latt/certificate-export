@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row min-vh-100 justify-content-center align-items-center">
            <div class="col-12 col-md-8 col-lg-6">
                <div class="card shadow">
                    <div class="card-body py-5">

                        <div class="text-center">
                            <div class="px-5 pb-4 w-75 m-auto">
                                <img src="https://mms-it.com/s/img/login.svg" class="w-100" alt="">
                            </div>
                            <h4 class="mb-3 font-weight-bold">Welcome Student</h4>
                            <p class="mx-0 mx-md-5 mb-4 mm-beauty">
                                MMS IT ရဲ့ Student Panel ကို ဆက်လက်အသုံးပြုနိုင်ရန် Facebook ဖြင့် Login ဝင်ပေးပါ
                            </p>
                            <div class="">
                                <a href="https://mms-it.com/auth/facebook" class="btn btn-primary">Login with Facebook</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
