<!DOCTYPE html>
<html lang="en" dir="ltr">
  <?php
    include('blog-header.php');
    include('config/db_connect.php');
    include('config/db_comment-2.php');
  ?>

  <div class="fluid-container" id="browse">
    <br /><br /><br /><br /> <br /><br />
    <div class="container">
      <div class="col-10 mx-auto" style="padding: 0px 0px 15px 0px; margin: 0;">
          <a class = "return" href="blog.php">< Return to site</a>
          <a class = "return" href="browseblogs.php" style="float: right;"> All Posts</a>
      </div>
    </div>
    <div class="container fonts">
      <div class="row">
         <div class="col-10 mx-auto blog-box" style="border-top-left-radius: 10px; border-top-right-radius: 10px;">
            <h1><strong>Valve Launches Battle Pass 2020</strong></h1>
            <small>By Azis Agantal on May 25, 2020, 10:13 PM</small>
            <br/><br/><br/>
            <figure>
              <img class="sub-img-blog" src="assets/bp.jpg" alt="bp">
              <figcaption class="center"><small>Image from Valve</small></figcaption>
            </figure>
            <br/>
            <p>After a long wait, Valve released The International 10 Battle Pass today. They added numerous features like guilds, battle gauntlet, and bounty killing bonuses. The most notable rewards awaiting you would be the Pudge and Anti-Mage Personas, and the three Arcana items for Wraith King, Queen of Pain, and Windranger. However, these rewards are not easy to acquire, especially when you are starting from a level one battle pass. Even after playing 3-5 games every day for three months, you would likely be able to reach at most 200 levels. To acquire the first arcana item, you would need to make it to level 375. It may be a marketing strategy for Valve to entice their customers to buy more levels. Yet, there is nothing to lose if you don't want to experience some new cosmetics, animations, and effects since Valve offers Dota 2 as free to play. </p>
            <p>Despite the competition being delayed next year, it is indefinite as to when the battle pass ends. With sheer determination, you may be able to reach breakeven if you capitalize on the features that offer battle points.</p>
            <p>For me, the Guild system is the most exciting feature in the new battle pass update. It lets you earn rewards for yourself by completing contracts or with your guild members by finishing guild challenges collectively. What I like most about Guilds is the tag name being shown during in-game matches that distinguishes itself from others. It also offers rewards by leveling up your guild through queuing matches that earn Guild points.  </p>
            <br />
            <div class="share">
                  <a href="#"><i class="fab fa-facebook-square fa-2x" style="color:#3b5998;"></i></a>
                  <a href="#"><i class="fab fa-twitter-square fa-2x" style="color: #00acee;"></i></a>
                  <a href="#"><i class="fab fa-linkedin fa-2x" style="color: #0e76a8;"></i></a>
                  <a href="#blogcomments"><i class="far fa-comment left fa-2x icon"></i></a>
                  <a href=""><i class="far fa-envelope left fa-2x icon"></i></a>
            </div>
            <br />
              <p><strong>Tags:</strong> #Battlepass2020 #Arcana #Guilds</p>
          </div>
      </div>

      <div class="row">
                <div class="col-10 mx-auto blog-box-2" id="commentbox" style="border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
                      <form  action="#commentbox" method="post">
                            <h2 id="blogcomments">Comments (<?php echo htmlspecialchars($count); ?>)</h2>
                            <br/>
                            <?php  foreach($infos as $info) {?>
                                <div class="row">
                                  <div class="col-1 center" style="padding: 0;">
                                       <i class="fas fa-user-alt fa-3x"></i>
                                  </div>
                                  <div class="col-11" style="padding-left: 5px;">
                                      <strong style="display: block;"><?php echo htmlspecialchars($info['Name']); ?></strong>
                                      <p style="display: block; margin: 0;"><?php echo htmlspecialchars($info['Comment']); ?></p>
                                      <small><?php echo htmlspecialchars($info['curtime']); ?></small>
                                  </div>
                                </div>
                                <br />
                            <?php } ?>
                            <div class="form-group col-6 mr-auto" style="padding: 0;">
                                <h3 style="padding-bottom: 10px;">Add a Comment</h3>
                                <input class="form-control" class="form-control" type="text" name="your_name" maxlength="30" placeholder="Enter your name" value= "<?php echo htmlspecialchars($name); ?>">
                                <div>
                                  <small style="color: red;"> <?php echo $errors['name']; ?></small>
                                </div>
                            </div>

                            <div class="form-group">
                                <textarea class="form-control" name="your_comment"  maxlength="230" placeholder="Write comment.."  rows="3" cols="100" value= "<?php echo htmlspecialchars($comment); ?>"></textarea>
                                <div>
                                  <small style="color: red;"><?php echo $errors['comment']; ?></small>
                                </div>
                            </div>
                            <input type="submit" name="submit" value="Post Comment" class="btn btn-primary">
                      </form>
                </div>

      </div>
    </div>


    <br/><br/><br/>

      <div class="container-fluid ftr">
          <div class="container">
            <br /><br />
            <div class="row ">
                <div class="col-12 center" id="space">
                   <a class="soc soc-1" href="https://www.facebook.com/azis.agantal"><i class="fab fa-facebook fa-2x"></i></a>
                   <a class="soc soc-2" href="https://www.instagram.com/azis_agantal/?hl=en"><i class="fab fa-instagram fa-2x"></i></a>
                   <a class="soc soc-3" href="https://twitter.com/AgantalAzis"><i class="fab fa-twitter fa-2x"></i></a>
                   <a class="soc soc-4" href="https://github.com/agantal864"><i class="fab fa-github fa-2x"></i></a>
                </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12 center white">
               <p style="padding: 0.5vw; font-size: 0.9rem;">&copy; Azis Agantal. Hook Them. All rights reserved.</p>
            </div>
          </div>
          <div class="row">
              <div class="col-12 center white">
                <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                    <input type="hidden" name="cmd" value="_donations" />
                    <input type="hidden" name="business" value="aamagantal@gmail.com" />
                    <input type="hidden" name="currency_code" value="PHP" />
                    <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_SM.gif" border="0" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Donate with PayPal button" />
                    <img alt="" border="0" src="https://www.paypal.com/en_PH/i/scr/pixel.gif" width="1" height="1" />
                </form>
              </div>
          </div>
      </div>
    </div>

    <?php include('components/scripts.php') ?>

  </body>
</html>
