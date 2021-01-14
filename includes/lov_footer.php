<!-- Website Footer Start -->
<?php 
    
    $qry="SELECT * FROM footer WHERE status='Y'";
    $res=mysqli_query($con,$qry);
    $row = mysqli_fetch_all($res);
#    var_dump($row);

?>


                    <style type="text/css">
                        .footer {
                            color: #eeeeee;
                        }
                        
                        a>span {
                            color: #eeeeee;
                            padding: 5px;
                        }
                        
                        a > span:hover {
                            color: blue;
                        }
                    </style>

                    <div class="footer" style="background:#616161;padding-top:15px">
                        <div class="container-fluid">
                            <div class="col-lg-4">
                                <div class="widget" style="padding-left:20px;">
                                    
                                    <h4 class="widgetheading">Get in touch with us : </h4>
                                 
                                    <address>
							     <?php echo $row[0][2]; ?>
								    
						</address>

                                </div>
                            </div>
                            <div class="col-md-1"></div>
                            <div class="col-lg-3" style="padding-left:35px">
                                
                                <h4>Contact us:</h4>
                                <p>
                                    <i class="fa fa-phone"></i><?php echo $row[1][2];?>
                                    <br>
                                    
                                    <i class="fa fa-envelope"></i>&nbsp;<?php echo $row[2][2];?>
                                
                                </p>
                            </div>
                            <div class="col-md-1"></div>
                            <div class="col-lg-3" style="margin-left:-20px">
                                <ul class="">
                                    
                                    <h4 class="">Social Links:</h4>
                                    <a href="<?php echo $row[3][2];?>" title="Facebook" target="_blank"><span class='fa fa-facebook-square' style="font-size:30px;"></span></a>
                                    <a href="<?php echo $row[4][2];?>" title="Instagram" target="_blank"><span class='fa fa-instagram' style="font-size:30px;"></span></a>
                                    <a href="<?php echo $row[5][2];?>" title="Linkedin" target="_blank"><span class='fa fa-linkedin' style="font-size:30px;"></span></a>
                                    <a href="<?php echo $row[6][2];?>" title="youtube" target="_blank"><span class='fa fa-youtube' style="font-size:30px;"></span></a>
                                
                                </ul>
                            </div>
                        </div>

                        <div style="padding:10px;background:#424242">
                            <center><i class='fa fa-copyright'></i>&nbsp;Developed By Aman sagar</center>
                        </div>
                    </div>
                    <!--Footer End-->