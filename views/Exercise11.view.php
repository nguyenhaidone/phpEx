<!-- <?php echo "Bai 3" ?> -->

<div class="container">
   <div class="navbar-center navbar-style">
    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
    </svg>
        <p class="lead">
            Login with Facebook
        </p>
   </div>
   <div class="main-content">
   <div class="left-content">
       <label for="login" class="label-login">
           Login
       </label>
    <form>
        <div class="form-group">
            <label for="exampleInputEmail1">Username</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Your username ...">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Your password ...">
        </div>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Remenber me</label>
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>
   </div>
   <div class="right-content">
       <label for="login" class="label-login">
           Signup for New Account?
       </label>
    <form>
        <div class="form-group">
            <label for="exampleInputEmail1">User name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Your username ...">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">User Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" require placeholder="Your email ...">
        </div>
        <div class="form-group">
            <div class="title">
                <label for="exampleFormControlSelect1">Select Title</label>
                <select class="form-control" id="exampleFormControlSelect1">
                    <option>Mr.</option>
                    <option>Mrs.</option>
                    <option>Other</option>
                </select>
            </div>
            <div class="full-name">
                <label for="exampleInputPassword1">Full name</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Your fullname ...">
            </div>
        </div>
        <label for="login" class="label-login">
           Company detail
       </label>
        <div class="form-group">
            <label for="exampleInputEmail1">Company name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" require>
        </div>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">I am agree with registration.</label>
        </div>
        <button type="submit" class="btn btn-primary">Register</button>
    </form>
   </div>
   </div>
</div> 