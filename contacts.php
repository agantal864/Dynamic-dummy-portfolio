<!DOCTYPE html>
<html lang="en" dir="ltr">

       <?php include("components/header.php"); ?>
       <br /><br /><br />
       <div class="container" id="my_form" data-aos="fade-up">
         <form class="" action="index.html" method="post">

              <fieldset>
                <legend>Contact Info</legend>
                <p>Are you ready to discuss your content marketing needs? Contact me via email at aamagantal@gmail.com or using the form below to find out how I can help your business.</p>

                <br />

                <label>Name *</label>
                <div class="row">
                  <div class="col">
                    <input type="text" class="form-control" placeholder="Enter your first name">
                     <small class="form-text text-muted">&nbsp; First name</small>
                  </div>
                  <div class="col">

                    <input type="text" class="form-control" placeholder="Enter your last name">
                    <small class="form-text text-muted">&nbsp; Last name</small>
                  </div>
                </div>

                <br />  <br />

                <div class="row">
                  <div class="col">
                    <label for="email">Email address *</label>
                    <input type="email" class="form-control" placeholder="Enter your email">
                  </div>
                  <div class="col">
                    <label for="phone_number">Phone number</label>
                    <input  type="telephone" class="form-control" placeholder="Enter your phone number">
                  </div>
                </div>

                <br /> <br />

               <div class="form-group">
                 <label for="subject">Subject *</label>
                 <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter subject">
              </div>

              <br />

              <div class="form-group">
                <label for="message">Message *</label>
                <textarea class="form-control" id="your_message" rows="5" placeholder="Enter your message"></textarea>
              </div>

              <br />
              <button type="submit" class="btn btn-info" style="letter-spacing: 0.1em;">Submit</button>
              <br /> <br />
            </fieldset>

         </form>
       </div>
        <br/><br/><br/><br/>
       <?php include("components/footer.php"); ?>
</html>
