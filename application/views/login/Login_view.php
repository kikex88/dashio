 <div id="login-page">
    <div class="container">
      <form class="form-login" action="index.html">
        <h2 class="form-login-heading">Iniciar sesión</h2>
        <div class="login-wrap">
          <input type="text" class="form-control" placeholder="Usuario" autofocus>
          <br>
          <input type="password" class="form-control" placeholder="contraseña">
          <label class="checkbox">
            <span class="pull-right">
            <a data-toggle="modal" href="#"> ¿Olvidaste tu contraseña?</a>
            </span>
            </label>
          <button class="btn btn-theme btn-block" href="#" type="submit"><i class="fa fa-lock"></i> Iniciar sesión</button>
          
        </div>
        <!-- Modal -->
        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Forgot Password ?</h4>
              </div>
              <div class="modal-body">
                <p>Enter your e-mail address below to reset your password.</p>
                <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">
              </div>
              <div class="modal-footer">
                <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                <button class="btn btn-theme" type="button">Submit</button>
              </div>
            </div>
          </div>
        </div>
        <!-- modal -->
      </form>
    </div>
  </div>
