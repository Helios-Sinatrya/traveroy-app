<div class="modal fade" id="LoginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Login</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="">
                    @csrf
                    <label for="email-input form-label">Email</label>
                    <input type="email" class="form-control mb-3" id="email-input">
                    <label for="pass-input form-label">Password</label>
                    <input type="password" class="form-control mb-3" id="pass-input">
                    <div class="btn-wrapper d-flex flex-column">
                        <button type="submit" name="submit" class="btn btn-primary mx-auto login-btn">Login</button>
                        <p class="mx-auto mt-2">Or</p>
                    </div>
                    <p>Don't have an account? <a href="/register">Register Here</a></p>
                </form>
            </div>
        </div>
    </div>
</div>
  