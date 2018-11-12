<div class="container">

  <div class="pg-content membership">
    <div class="overlay"></div>
    <div class="wrapper">
      <div id="content">
        <h2 class="title">Register</h2>

        <div class="registration corporate" style="display:block;">
          <?php echo form_open('admin/data');?>
            <ul class="form-list">
              <li class="half">
                <div class="form-field">
                  <label class="half">Batch</label>
                  <a class="view-detail" href="javascript:void(0)" rel="corporate">View Details</a>
                  <div class="select-field">
                    <select id="membershipID" name="batch">
                      <option value="">--Select a Batch-- </option>
                      <option value="MORNING">MORNING</option>
                      <option value="AFTERNOON">AFTERNOON</option>
                      <option value="EVENING">EVENING</option>
                    </select>
                  </div>

                </div>
              </li>
              <li class="half">
                <div class="form-field">
                  <label>First Name</label>
                  <input type="text" class="text fullName" name="firstName" id="fullName" />
                </div>
              </li>
              <li class="half">
                <div class="form-field">
                  <label>Last Name</label>
                  <input type="text" class="text" name="lastName" id="userMobile" />
                </div>
              </li>
              <li class="half">
                <div class="form-field">
                  <label>Login Email</label>
                  <input type="email" class="text userEmail" name="email" id="userEmail" />
                </div>
              </li>
              <li class="half">
                <div class="form-field">
                  <label>Phone no</label>
                  <input type="text" class="text userEmail" name="phoneNum" id="userEmail" />
                </div>
              </li>
              <li class="half">
                <div class="form-field">
                  <label>Password</label>
                  <input type="password" class="text" name="password" id="userPassCorporate" />
                </div>
              </li>
              <li class="half">
                <div class="form-field">
                  <label>Confirm Password</label>
                  <input type="password" class="text" name="confirm_password" id="userCPassCorporate" />
                </div>
              </li>
              <li class="half">
                <div class="form-field">
                  <label class="half">State</label>

                  <div class="select-field">
                    <select id="stateIDCorporate" name="state">
                      <option value="">--Select State-- </option>
                      <option value="Telangana">Telangana</option>
                      <option value="Maharashtra">Maharashtra</option>
                      <option value="Karnataka">Karnataka</option>
                    </select>
                  </div>

                </div>
              </li>
              <li class="half">
                <div class="form-field">

                  <div class="chkbox"><input type="checkbox" name="isOnlinePayment" id="isOnlinePayment" value="1" /><span>Pay
                      Now</span></div>
                </div>
              </li>
              <li class="half">

                <ul class="mx-list mx-group" title="checkbox" id="isAgreeTerms">
                  <li>
                    <div class="chkbox center">
                      <input type="checkbox" checked name="isAgreeTerms" id="isAgreeTerms" /><span>I agree to the <a
                          href="" target="_blank">Terms & conditions</a></span>
                    </div>
                  </li>
                </ul>

              </li>
              <li>
                <div class="form-field">

                  <input type="submit" name="signupSubmit" value="Sign Up" class="submit-form button" />
                </div>
            </ul>
          </form>
        </div>
       </form>
        <div class="payment-section" style="display:none"></div>
      </div>
    </div>
  </div>
</div>
</div>