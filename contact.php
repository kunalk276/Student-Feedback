<?php 
include('dbconfig.php');
extract($_POST);
if(isset($save))
{

mysqli_query($conn,"insert into contact values('','$n','$m','$e','$msg',now())");
	
$err="<font color='green'>Admin Will Contact you soon</font>";	

}

?>

        <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                
                <ol class="breadcrumb">
                    
                    </li>
                   
                </ol>
            </div>
        </div>
        <!-- /.row -->

        
       
    <div class="col-md-8">
        <h3><font color="#00FF33">Contact us</font></h3>
        <form name="sentMessage" method="post" id="contactForm" >
            <?php echo @$err; ?>

            <!-- Name Field -->
            <div class="control-group form-group">
                <div class="controls">
                    <label>Name:</label>
                    <input type="text" class="form-control" name="n" required 
                           pattern="[A-Za-z\s]+" 
                           title="Only letters and spaces are allowed" 
                           data-validation-required-message="Please enter your name.">
                    <p class="help-block"></p>
                </div>
            </div>

            <!-- Mobile Number Field -->
            <div class="control-group form-group">
                <div class="controls">
                    <label>Mobile Number:</label>
                    <input type="tel" class="form-control" name="m" required 
                           pattern="^\d{10}$" 
                           title="Please enter a valid 10-digit mobile number" 
                           data-validation-required-message="Please enter your phone number.">
                </div>
            </div>

            <!-- Email Field -->
            <div class="control-group form-group">
                <div class="controls">
                    <label>Email Address:</label>
                    <input type="email" class="form-control" name="e" required 
                           data-validation-required-message="Please enter your email address.">
                </div>
            </div>

            <!-- Message Field -->
            <div class="control-group form-group">
                <div class="controls">
                    <label>Message:</label>
                    <textarea rows="10" name="msg" cols="100" class="form-control" id="message" required 
                              maxlength="999" style="resize:none" 
                              data-validation-required-message="Please enter your message"></textarea>
                </div>
            </div>

            <div id="success"></div> <!-- For success/fail messages -->
            <button type="submit" name="save" class="btn btn-primary">Send Message</button>
            <h1></h1>
        </form>
    </div>

			<div class="col-md-4" style="margin-top:30px">
                <h3>Contact Details</h3>
                <p>
                    Academic Block<br>Admin Dept, Asm IBMR 411029<br>
                </p>
                <p><i class="fa fa-phone"></i> 
                    <abbr title="Phone">P</abbr>: (123) 983456</p>
                <p><i class="fa fa-envelope-o"></i> 
                    <abbr title="Email">E</abbr>: <a href="mailto:name@example.com">admin@asmedu.in</a>
                </p>
                <p><i class="fa fa-clock-o"></i> 
                    <abbr title="Hours">H</abbr>: Monday - Sunday: 8:00 AM to 7:00 PM</p>
                <ul class="list-unstyled list-inline list-social-icons">
                    <li>
                        <a href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-linkedin-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-twitter-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-google-plus-square fa-2x"></i></a>
                    </li>
                </ul>
            </div>
        </div>

        </div>
        
            <!-- Contact Details Column -->
            
        <!-- /.row -->

        <!-- Contact Form -->
        <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
        <!-- /.row -->

    <br/><br/>
    
    </div>
    <!-- /.container -->
