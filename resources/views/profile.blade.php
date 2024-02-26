@extends('layouts.dash')

@section('content')
    <div class="container-fluid" style="margin-left: 300px">
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last mb-5">
                            <h3>Account Profile</h3>
                        </div>
                    </div>
                    <section class="section">
                        <div class="row">
                            <div class="col-3">
                                <div class="card ms-5" style="width: 30rem">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-center align-items-center flex-column">
                                            <div class="avatar avatar-2xl">
                                                <img src="{{ asset('img/back.jpg') }}" alt="Avatar" class="rounded-circle"
                                                    style="width: 120px">
                                            </div>
                                            <h3 class="mt-3">{{ auth()->user()->name }}</h3>
                                            <p class="text-small">{{ auth()->user()->level }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card" style="width: 56rem; margin-left: 5rem">
                                    <div class="card-body">
                                        <form action="#" method="get">
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
                                            <div class="form-group mb-4">
                                                <label for="birthday" class="form-label">Birthday</label>
                                                <input type="date" name="birthday" id="birthday" class="form-control"
                                                    placeholder="Your Birthday">
                                            </div>
                                            <div class="form-group mb-4">
                                                <label for="gender" class="form-label">Gender</label>
                                                <select name="gender" id="gender" class="form-control">
                                                    <option value="male">Male</option>
                                                    <option value="female">Female</option>
                                                </select>
                                            </div>
                                            <div class="form-group mb-4">
                                                <button type="submit" class="btn btn-primary">Save Changes</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
            </script>
        </div>
    @endsection
