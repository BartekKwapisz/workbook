<?php include 'header.php' ?>
 <!-- ***** Main Banner Area Start ***** -->
 
        <div id="topbanner">
               
        </div>
        <div id="maindiv" class="flex">
        <section class="section coming-soon login" id="login">
                        <form id="contact" action="php/logIn.php" method="POST">
                              <div class="row">
                                <div class="col-md-12">
                                  <fieldset>
                                    <input name="uid" type="text" class="form-control" id="name" placeholder="Username/email" required="">
                                    <input name="pwd" type="password" class="form-control" id="name" placeholder="Password" required="">
                                  </fieldset>
                                </div>
                                 
                                <div class="col-md-12">
                                  <fieldset>
                                    <button type="submit" id="form-submit" class="button" name="submit">Log in</button>
                                  </fieldset> 
                                </div>
                              </div>
                        </form>
                        <form action="php/logOut.php" method="POST">  
                              <button type="submit" id="form-submit" class="button" name="submit">Log out</button>
                        </form>
                         
                    
        </section>
        </div> 
  <!-- ***** Main Banner Area End ***** -->
<?php include 'footer.php' ?>
