@extends('layouts.admindash')

@section('content')
    <div class="content" style="margin-top: 1rem; margin-left: 18rem">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Account Profile</h3>
            </div>
        </div>
        <div class="container mt-3">
            <div class="row">
                <div class="col-3">
                    <div class="card" style="width: 18rem">
                        <div class="card-body">
                            <div class="d-flex justify-content-center align-items-center flex-column">
                                <div class="avatar avatar-2xl">
                                    <img src="{{ asset('img/back.jpg') }}" alt="Avatar" class="rounded-circle"
                                        style="width: 80px">
                                </div>
                                <h5 class="mt-3">{{ auth()->user()->name }}</h5>
                                <p class="text-small">{{ auth()->user()->level }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col px-0">
                    <div class="card" style="width: 37rem; margin-left: 5rem">
                        <div class="card-body">
                            <div class="form-group mb-4">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" name="name" id="name" class="form-control"
                                    placeholder="Your Name" value="{{ auth()->user()->name }}">
                            </div>
                            <div class="form-group mb-4">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" name="email" id="email" class="form-control"
                                    placeholder="Your Email" value="{{ auth()->user()->email }}">
                            </div>
                            <div class="form-group mb-4">
                                <label for="phone" class="form-label">Username</label>
                                <input type="text" name="phone" id="phone" class="form-control"
                                    placeholder="Your Phone" value="{{ auth()->user()->username }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    </div>
@endsection
