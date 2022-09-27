<?php include 'header.php' ?>
 <!-- ***** Main Banner Area Start ***** -->
 
        <div id="topbanner">
               
        </div>
        <div id="maindiv" class="flex">
        <section class="section coming-soon" data-section="section3">
                           
                        <form id="contact" action="" method="POST" name="search">
                              <div class="row">
                                <div class="col-md-12">
                                  <fieldset>
                                    <input name="search" type="text" class="form-control" id="name" placeholder="Search" required="">
                                  </fieldset>
                                </div>
                                 
                                <div class="col-md-12">
                                  <fieldset>
                                    <button type="submit" id="form-submit" class="button" name="submit-search">Search</button>
                                  </fieldset>
                                </div>
                              </div>
                        </form>

                        <table id="customers">
                          <tr>
                            <th>Job title</th>
                            <th>Country</th>
                            <th>Salary</th>
                          </tr>
                              <?php 
                                        include_once 'php/dbh.inc.php';
                                        $sql="SELECT * FROM workers;";
                                        $result = mysqli_query($conn, $sql);
                                        $queryResults = mysqli_num_rows($result);
                                        if ($queryResults > 0){
                                          while ($row=mysqli_fetch_assoc($result)){
                                            echo "<tr>
                                                    <td>".$row['title']."</td>
                                                    <td>".$row['country']."</td>
                                                    <td>".$row['salary']."</td>
                                            </tr>";
                                          }
                                        }
                              ?>
                        </table>

                        <form action="php/delete.inc.php" method="POST" >
                            <button type="submit" name="submit" id="delete">delete</button>
                        </form> 
 
                        <div style="color:white;"> 
                                <?php   
                                      /*unset($_POST["submit-search"]);*/
                                      if(isset($_POST["submit-search"])){ 
                                        
                                          $search = mysqli_real_escape_string($conn, $_POST['search']);
                                          $sql = "SELECT * FROM workers WHERE title LIKE '%$search%' OR salary LIKE '%$search%' OR country LIKE '%$search%'";
                                          $result = mysqli_query($conn, $sql);
                                          $queryResults = mysqli_num_rows($result);
                                          if($queryResults > 0) {
                                              while($row = mysqli_fetch_assoc($result)) {
                                                  echo "<div>
                                                  <p>".$row['title']." ".$row['salary']." ".$row['country']."</p>
                                                  </div>";
                                              }
                                          } else {
                                              echo "<div><p>there are no results matching your search</div></p>";
                                              
                                          } 
                                      }
                                ?>
                        </div>
                       
                    
        </section>
        </div> 
  <!-- ***** Main Banner Area End ***** -->
<?php include 'footer.php' ?>
