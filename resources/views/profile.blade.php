@include ('layouts.header')

<section class="h-100 mt-5 pt-5">
  
    <div class="container h-100">
        <div class="row justify-content-sm-center h-100">
            <div class="col-xxl-4 col-xl-5 col-lg- col-md-7 col-sm-9">
                <div class="card shadow-lg">
                    <div class="card-body p-5">
                        <img src="/uploads/avatars/{{auth()->user()->avatar}}" style="width: 100px; height: 100px; border-radius:50%; float: right; margin-bottom:10px">
                        <h1 class="fs-4 card-title fw-bold mb-4">Update Profile</h1>
                        <style>
                            .smalltext {
                                font-size: 0.7em !important;
                                display:inline;
                            }
                        </style>
                        <form enctype="multipart/form-data" id="change_password_form" method="POST" action="{{route('update_password')}}">
                            @csrf
                            {{-- <!-- Username -->
                            <div class="mb-3">
                                <label class="text-muted pt-4" :value="__('username')" for="email">Username <div class="smalltext">(Current username: {{auth()->user()->name}})</div></label>
                                <input id="email" type="text" class="form-control" name="email" autofocus="" :value="old('email')" required autofocus>
                            </div> --}}

                            <!-- Email Address -->
                            <div class="mb-3">
                                <label class="mb-2 text-muted" for="email">E-Mail <div class="smalltext"></div></label>
                                <input type="email" disabled = true class="form-control" name = 'email' value="{{auth()->user()->email}}">
                            </div>

                            <!-- Old Password -->
                            <div class="mb-3">
                                <div class="mb-2 w-100">
                                    <label class="text-muted" for="wachtwoord">Old Password</label>
                                </div>
                                <input type="password" class="form-control" name = "password" placeholder="Geef uw oude wachtwoord">
                            </div>

                            <!-- Password -->
                            <div class="mb-3">
                                <div class="mb-2 w-100">
                                    <label class="text-muted" :value="__('Password')"  for="password">New Password</label>
                                </div>
                                <input id="new_password" type="password" class="form-control"  name="new_password" required autocomplete="current-password">
                            </div>

                            <!-- Confirm Password -->
                            <div class="mb-3">
                                <div class="mb-2 w-100">
                                    <label class="text-muted" :value="__('Password')"  for="password">Confirm New Password</label>
                                </div>
                                <input id="confirm_password" type="password" class="form-control" name="confirm_password" required autocomplete="current-password">
                            </div>
                            <div class="text-muted mb-2">Update Profile Picture</div>
                            <input type="file" name="avatar">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">

                            <!-- Submit -->
                            <div class="mt-5 d-flex align-items-center">
                                <button type="submit" class="btn btn-primary ms-auto">
                                    Update
                                </button>
                            </div>
                        </form>
                         <!-- Back to Home -->
                         <div class="mt-2 d-flex align-items-center">
                            <button type="button" onclick="location.href='/'" class="btn btn-secondary ms-auto">
                                Ga Terug
                            </button>
                        </div>
                         {{-- <!-- Back to Home -->
                         <div class="mt-2 d-flex align-items-start">
                            <button type="button" name="destroy" class="btn btn-danger ms-auto">
                                Delete Account
                            </button>
                        </div>
                    </div> --}}
                </div>
                {{-- <div class="text-center mt-5 text-muted">
                    Copyright &copy; 2022 — X2 Gorillas
                </div> --}}
            </div>
        </div>
    </div>
</section>

