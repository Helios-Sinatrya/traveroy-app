<x-app-layouts>
    <div class="container" style="height: 100vh;">
        <div class="row">
            <div class="col-md-8 offset-md-2 font-outfit pt-5">
                <h1 class="font-bold text-center mb-4">Register</h1>
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="wrapper mb-3">
                        <label for="name-input form-label">Full Name</label>
                        <input type="text" class="form-control" id="name-input" value="{{ old('name') }}" name="name">
                        @error('name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="wrapper mb-3">
                        <label for="email-input form-label">Email</label>
                        <input type="email" class="form-control" id="email-input" value="{{ old('email') }}" name="email">
                        @error('email')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="wrapper mb-3">
                        <label for="phone-input form-label">Phone Number</label>
                        <input type="number" minlength="9" maxlength="13" class="form-control" id="phone-input" value="{{ old('phone') }}" name="phone">
                        @error('phone')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="wrapper mb-3">
                        <label for="pass-input form-label">Password</label>
                        <input type="password" class="form-control" id="pass-input" value="{{ old('password') }}" name="password">
                        @error('password')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="wrapper mb-3">
                        <label for="pass-input form-label">Confirm Password</label>
                        <input type="password" class="form-control mb-3" id="pass-input" value="{{ old('password_confirmation') }}" name="password_confirmation">
                        @error('conf_password')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="btn-wrapper d-flex flex-column mb-5">
                        <button type="submit" name="submit" class="btn btn-primary mx-auto login-btn">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layouts>