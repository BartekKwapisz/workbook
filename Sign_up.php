<?php include 'header.php' ?>
 <!-- ***** Main Banner Area Start ***** -->
 
        <div id="topbanner">
               
        </div>
        <div id="maindiv" class="flex">
        <section class="section coming-soon login" id="login">
                     
                        <form id="contact" action="php/signUp.php" method="POST">
                              <div class="row">
                                <div class="col-md-12">
                                  <fieldset>
                                    <input name="name" type="text" class="form-control" id="name" placeholder="Full Name" required="">
                                    <input name="email" type="text" class="form-control" id="name" placeholder="Email" required="">
                                    <input name="uid" type="text" class="form-control" id="name" placeholder="Username" required="">
                                    <input name="pwd" type="password" class="form-control" id="name" placeholder="Password" required="">
                                    <input name="pwdrepeat" type="password" class="form-control" id="name" placeholder="Repeat password" required="">
                                  </fieldset>
                                </div>
                                 
                                <div class="col-md-12">
                                  <fieldset>
                                    <button type="submit" id="form-submit" class="button" name="submit">Sign up</button>
                                  </fieldset>
                                </div>
                              </div>
                        </form>
                    
        </section>
        </div> 
  <!-- ***** Main Banner Area End ***** -->
<?php include 'footer.php' ?>
