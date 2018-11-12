<body>
  <div class="container">
    <div class="pg-content membership">
      <div class="overlay"></div>
      <div class="wrapper">
        <div id="content">
          <div class="sign-in">
            
            <h2 class="title">Login</h2>

            <?php echo form_open('admin/login');?>
            <div class="form-group">
              <input class="form-control" id="userEmail" type="text" name="email">
            </div>

            <div class="form-group">
              <input class="form-control" id="userPassword" type="password" name="password">
            </div>

            <div class="form-group">
              <button type="submit" class="submit-form button">Sign in</button>
              <a  href="<?php echo base_url('admin/register');?>" class="submit-form button">Register Now</a>
              
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
   </div>   
</body>