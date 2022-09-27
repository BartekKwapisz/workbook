<?php include 'header.php' ?>
 <!-- ***** Main Banner Area Start ***** -->
 
        <div id="topbanner">
               
        </div>
        <div id="maindiv" class="flex">
        <section class="section coming-soon" data-section="section3">
                           
                        <form id="contact" action="php/insertJob.php" method="POST">
                              <div class="row">
                                <div class="col-md-12">
                                  <fieldset>
                                    <input name="title" placeholder="title" type="text" class="form-control" id="title" required="">
                                  </fieldset>
                                </div>
                                <div class="col-md-12">
                                  <fieldset>
                                    <input name="country" type="text" class="form-control" id="country" placeholder="country" required="">
                                  </fieldset>
                                </div>
                                <div class="col-md-12">
                                  <fieldset>
                                    <input name="salary" type="text" class="form-control" id="salary" placeholder="salary" required="">
                                  </fieldset>
                                </div>
                                <div class="col-md-12">
                                  <fieldset>
                                    <button type="submit" id="form-submit" class="button">Add</button>
                                  </fieldset>
                                </div>
                              </div>
                            </form>
                    
          </section>
          </div> 
  <!-- ***** Main Banner Area End ***** -->
<?php include 'footer.php' ?>
