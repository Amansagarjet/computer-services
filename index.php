  <?php 
     require_once'includes/lov_header.php';
     require_once'includes/init.php';
     $qry = "SELECT id,description,image_url,status from contain WHERE status='Y' LIMIT 13,6";
     $text_qry="SELECT id,tittle,description,status FROM contain WHERE id<4;";
     $image="SELECT id,tittle,image_url,status FROM contain WHERE id<=10 LIMIT 4,10";
     $image_text_qry="SELECT id,tittle,description,image_url from contain WHERE  status='Y' AND id>=11 LIMIT 2";
     $res = mysqli_query($con,$qry);
     $banner_count=mysqli_num_rows($res);
     $text_con = mysqli_query($con,$text_qry);
     $image_con = mysqli_query($con,$image);
     $res_image_text = mysqli_query($con,$image_text_qry);

    
?>
<style>
  @media only screen and (max-width:480px)  { 

    .mar_screen{
      padding-left:20px;
      padding-right:20px;

    }

  }

  @media only screen and (min-width : 1224px) {
    .mar_screen{
      padding-left:150px;
      padding-right:150px;

    }
}
</style>


                  <!--Body start Here -->
        
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <?php for($i=0;$i<$banner_count;$i++){ 
        if($i==0){?>
      <li data-target="#myCarousel" data-slide-to="<?php echo $i; ?>" class="active"></li>
    <?php }else{ ?>
      <li data-target="#myCarousel" data-slide-to="<?php echo $i; ?>"></li>
    <?php } }?>
      </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
     
          <?php
                $count=0;
                 while($cor = mysqli_fetch_array($res)){ 
                  if($count==0){ ?>
                     <div class="item active">
                  <?php }else{ ?>
                   <div class="item">

                  <?php }?>
                      <img src="assets/home/<?php echo $cor['image_url']; ?>" alt="<?php echo $cor['description']; ?>" style="width:100%;">
                
         </div>
        

        <?php $count++; } ?>
      
      </div>







    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
    <!-- Website Body Start Here -->
        <br>
                <center><h2><u>Welcome To You.!</u> </h2></center>

        <br>
        <br>
        <br>
        <br>

        <!-- About Text -->
        <div class="mar_screen" >
              <div class="row">  
                <?php 
                $counter=0;
                while($text = mysqli_fetch_array($text_con)){ 
                  if($counter%2==0 && $counter!=0){
                  ?>
                </div>
                  <div class="row">  

                  <?php } ?> 
                  <div class="col-md-6">                  
                    
                        <h3><?php echo $text['tittle']; ?></h3>
                        <p><?php echo $text['description']; ?></p>
                    
                  </div>

                  

                  <?php $counter++; } ?>
                  
                </div>
                <br>

             
            <?php 
            $counter =0;
            while($row_img = mysqli_fetch_array($image_con)){ ?>
            <img src="assets/home/<?php echo $row_img['image_url'] ?>" style="padding-left: 0px;">
            <?php if($counter==0){ ?>
              <br><br><br>
            <?php }$counter++; ?>
           <?php } ?>
           
        
        <br>
        <br>
        <br>
            <center><div>
                <h1 style="font-size: 35px;">We Provide</h1>
                <h2>HIGH PERFORMANCE SERVICE</h2>
            </center></div>
        <br>
        <br>
        <br>
    
            
                <div class=" container">
                    <div class="row">
                        
                            <?php

                            $counts=1;
                            
                            while($last = mysqli_fetch_array($res_image_text)){  
                              if($counts%2==0){
                                
                             ?><br>
                             <div class="row" ">
                              <div class="col-md-6" style="padding-right: 20px; padding-left: 50px;" >
                                <h4 style="font-weight: bold; text-align: justify;"><?php echo $last['tittle'];?></h4>
                                <p style="text-align: justify; padding-right:50px; "><?php echo $last['description'];?></p>

                              </div>
                              <div class="col-md-6">
                                  <img src="assets/home/<?php echo $last['image_url'];?>" style="padding-left: 30px;">

                              </div>
                            </div>

                      <?php }else{ ?>
                        <br>
                        <div class="row">
                        <div class="col-md-6">
                                  <img src="assets/home/<?php echo $last['image_url'];?>" style="padding-left: 35px;">

                              </div>

                          <div class="col-md-6">
                            <br>
                                <h4 style="text-align: justify; font-weight: bold;padding-left: 30px;"><?php echo $last['tittle'];?></h4>
                                <p style="text-align: justify; padding-left: 30px;padding-right:70px; "><?php echo $last['description'];?></p>

                              </div>
                              </div>

                              <?php } ?>
                              

                              <?php $counts++; } ?>
                    </div>

                </div>

            
        
    
        <br>
      

        <!-- Website Body Close -->

                    <?php require_once 'includes/lov_footer.php'; ?>

                    </body>

    </html>