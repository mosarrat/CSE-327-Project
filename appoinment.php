<?php include('partials-front/menu.php');?> 
    
    <?php
    //check id
    if(isset($_GET['service_id']))
    {
        //get id
        $service_id = $_GET['service_id'];
        //get category title based on category id
        $query = "select * from service where Id='$service_id'";
        //executation
        $result = mysqli_query($con,$query);
        //count row
        $rows = mysqli_num_rows($result);
        if($rows==1)
        {            
            //get data from database
            $row = mysqli_fetch_assoc($result);
            $service_title = $row['Title'];
            $price = $row['Price'];
            $discription = $row['Description'];
            $image_name = $row['Image_Name'];
        
        }
        else
        {
            //go to homepage
            header("location:index.php");
        }

    }
    else
    {
        //go to homepage
        header("location:index.php");
    }
?>


    <!--service-search section starts here-->
    <section class="service-search">
        <div class="Container">
            <h2 class="text-center text-white">Fill this form to confirm your Appoinment.</h2>
            <form action="#" class="order">
                <fieldset>
                    <legend><b> Selected Service</b></legend>
                     <div class="top-service-img">
                     <?php
                         
                         if($image_name==" ")
                         {
                          echo "<div class='error'>Image unavailable</div>";
                         }
                         else
                         {
                           ?>
                              <img src="images/service/<?php echo $image_name?>"  alt=" home clean and pest control" class="img-responsive img-curve">
                           
                           <?php
                         }
                      ?>
                     </div>
                     <div class="top-service-desc">
                        <h4><?php echo $service_title;?></h4>
                        <p class="service-price"><?php echo $price;?></p>
                        <div class="order-lebel"><b>Date And Time</b></div>
                         <input type="datetime-local" name="Date And Time"class="input-responsive" required>
                     </div>
                </fieldset>
                
                <fieldset>
                    <legend><b>Area Above 1500sq.ft.</b></legend>
                     <div class="top-service-img">
                     <?php
                         
                         if($image_name==" ")
                         {
                          echo "<div class='error'>Image unavailable</div>";
                         }
                         else
                         {
                           ?>
                              <img src="images/service/<?php echo $image_name?>"  alt=" home clean and pest control" class="img-responsive img-curve">
                           
                           <?php
                         }
                      ?>
                     </div>
                     <div class="top-service-desc">
                        <h4>Additional Amount Require</h4>
                        <p class="service-price">
                        <label for="exampleInputActive">1600-2000sp.ft.</label>
                        <input type="radio" name="active" value="Yes"> 500 <br>
                        <label for="exampleInputActive">2100-2500sp.ft.</label>
                        <input type="radio" name="active" value="Yes"> 1000 <br>
                        <label for="exampleInputActive">2600-3000sp.ft.</label>
                        <input type="radio" name="active" value="Yes"> 1500 <br>
                        <label for="exampleInputActive">Above</label>
                        <input type="radio" name="active" value="Yes"> 2000
                        </p>
                </fieldset>

                <fieldset>
                    <legend> <b>Appoinment Details</b></legend>
                    <div class="order-label">Full Name</div>
                    <input type="text" name="full-name" placeholder="E.g. MS Kabir" class="input-responsive" required>

                    <div class="order-label">Phone Number</div>
                    <input type="tel" name="contact" placeholder="E.g. 018xxxxxxx" class="input-responsive" required>

                    <div class="order-label">Email</div>
                    <input type="email" name="email" placeholder="E.g. vi@mskabir.com" class="input-responsive" required>

                    <div class="order-label">Address</div>
                    <textarea name="address" rows="10" placeholder="E.g. Street, City, Country" class="input-responsive" required></textarea>

                    <input type="submit" name="submit" value="Confirm Appoinment" class="btn btn-primary">
                    
                </fieldset>
            </form>
             













        </div>
    </section>
    <!--service-search section starts here-->



<?php include('partials-front/footer.php');?>