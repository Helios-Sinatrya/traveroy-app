<x-app-layouts>
    <div class="container" style="height: 90vh;">
        <div class="row">
            <div class="col-md-8 offset-md-2 font-outfit pt-5">
                <h1 class="font-bold text-center mb-4">Register</h1>
                <form action="">
                    @csrf
                    <label for="name-input form-label">Name</label>
                    <input type="text" class="form-control mb-3" id="name-input" name="name">
                    <label for="email-input form-label">Email</label>
                    <input type="email" class="form-control mb-3" id="email-input" name="email">
                    <label for="pass-input form-label">Password</label>
                    <input type="password" class="form-control mb-3" id="pass-input" name="password">
                    <label for="pass-input form-label">Confirm Password</label>
                    <input type="password" class="form-control mb-3" id="pass-input" name="conf_password">
                    <div class="btn-wrapper d-flex flex-column">
                        <button type="submit" name="submit" class="btn btn-primary mx-auto login-btn">Register</button>
                        <p class="mx-auto mt-2">Or</p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layouts>