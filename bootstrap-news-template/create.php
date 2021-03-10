<?php include('header.php'); ?>
        
        <!-- Contact Start -->
        <div class="contact">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <div class="contact-form">
                            <form action='model/create' method='post' enctype='multipart/form-data'>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control" placeholder="Your Name" name='name' required/>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="email" class="form-control" placeholder="Your Email" name='email' required/>
                                    </div>
                                    
                                    
                                    
                                </div>
                                <div class="form-group">
                                    <input type="text" required name='title' class="form-control" placeholder="Post Title" />
                                </div>
                                
                                <div class="form-group col-md-6">
                                        <select required class="form-control" name='cat'>
                                            <option value=''>select category</option>
                                            <option value='sports'>Sports</option>
                                            <option value='entertainment'>Entertainment</option>
                                        </select>
                                    </div>
                                    
                                    <div class="form-group col-md-6">
                                       <input type='file' name='file' placeholder='choose file' class='form-control'/>
                                    </div>
                                <div class="form-group">
                                    <textarea class="form-control" rows="5" placeholder="Content" name='content' required></textarea>
                                </div>
                                <div><button class="btn" type="submit" name='sub'>SUBMIT POST</button></div>
                            </form>
                        </div>
                    </div>
                   <!-- <div class="col-md-4">
                        <div class="contact-info">
                            <h3>Get in Touch</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. In condimentum quam ac mi viverra dictum. In efficitur ipsum diam, at dignissim lorem tempor in. Vivamus tempor hendrerit finibus.
                            </p>
                            <h4><i class="fa fa-map-marker"></i>123 News Street, NY, USA</h4>
                            <h4><i class="fa fa-envelope"></i>info@example.com</h4>
                            <h4><i class="fa fa-phone"></i>+123-456-7890</h4>
                            <div class="social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                                <a href=""><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>-->
                </div>
            </div>
        </div>
        <!-- Contact End -->
                                       
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
        
   <?php include('footer.php'); ?>