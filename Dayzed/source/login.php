<?php
  $title = "Log In";
  include("header.php");
 ?>

    <main class="page-main">
      <section class="pagination pagination--login">
        <div class="pagination__wrapper">
          <h1 class="pagination__title">Log In</h1>

          <ul class="pagination__list">
            <li>
              <a href="index.php">Home</a>
            </li>
            <li>
              <a href="login.php">Log In</a>
            </li>
          </ul>
        </div>
      </section>

      <section class="user">
        <div class="user__wrapper">
          <form class="user__form" action="#" method="post">
            <div class="user__fields">
              <input class="user__input" type="email" id="email" name="email" placeholder="Email" required>
              <label class="visually-hidden" for="email">Email</label>

              <input class="user__input" type="password" id="password" name="password" placeholder="Password" required>
              <label class="visually-hidden" for="password">Password</label>
            </div>

            <p class="user__forgot">
              <a href="forgot.php">Forgot password?</a>
            </p>

            <button class="user__login button button-yellow" type="submit" name="login">Log In</button>

            <p class="user__signup">
              <span>Don’t have an account?</span>
              <a class="user__orange" href="signup.php">Sign Up</a>
            </p>
          </form>

          <div class="or">
            <p class="or__text">or</p>

            <ul class="or__social">
              <li class="or__item">
                <a class="or__link or__link--facebook button" href="#">
                  <svg class="or__icon or__icon--facebook" width="21" height="21" viewBox="0 0 96.124 96.123" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <path d="M72.089,0.02L59.624,0C45.62,0,36.57,9.285,36.57,23.656v10.907H24.037c-1.083,0-1.96,0.878-1.96,1.961v15.803
                      c0,1.083,0.878,1.96,1.96,1.96h12.533v39.876c0,1.083,0.877,1.96,1.96,1.96h16.352c1.083,0,1.96-0.878,1.96-1.96V54.287h14.654
                      c1.083,0,1.96-0.877,1.96-1.96l0.006-15.803c0-0.52-0.207-1.018-0.574-1.386c-0.367-0.368-0.867-0.575-1.387-0.575H56.842v-9.246
                      c0-4.444,1.059-6.7,6.848-6.7l8.397-0.003c1.082,0,1.959-0.878,1.959-1.96V1.98C74.046,0.899,73.17,0.022,72.089,0.02z"/>
                  </svg>

                  <h3 class="or__title">Log in with Facebook</h3>
                </a>
              </li>

              <li class="or__item">
                <a class="or__link or__link--google button" href="#">
                  <svg class="or__icon or__icon--google" width="30" height="30" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512">
                    <polygon points="448,224 448,160 416,160 416,224 352,224 352,256 416,256 416,320 448,320 448,256 512,256 512,224 		"/>

                    <path d="M160,224v64h90.528c-13.216,37.248-48.8,64-90.528,64c-52.928,0-96-43.072-96-96c0-52.928,43.072-96,96-96
                      c22.944,0,45.024,8.224,62.176,23.168l42.048-48.256C235.424,109.824,198.432,96,160,96C71.776,96,0,167.776,0,256
                      s71.776,160,160,160s160-71.776,160-160v-32H160z"/>
                  </svg>

                  <h3 class="or__title">Log in with Google</h3>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </section>
    </main>

<?php
  include("footer.php");
 ?>
