<!DOCTYPE html>
<html lang="en" dir="ltr">
  <?php
    include('blog-header.php');
    include('config/db_connect.php');
    include('config/db_comment.php');
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
         <div class="col-10 mx-auto blog-box">
            <h1><strong>TNC Predator Bagged a Win in China</strong></h1>
            <small>By Azis Agantal on September 20, 2019, 6:33 AM</small>
            <br/><br/><br/>
            <figure>
              <img class="sub-img-blog" src="assets/tnc.jpg" alt="tnc">
              <figcaption class="center"><small>Fig.1 - Trulli, Puglia, Italy.</small></figcaption>
            </figure>
            <br/>
            <p>While VAC bans aren't the focus of today's story, they do demonstrate Valve's no-nonsense approach to cheating and misbehavior in its games. Recently, this approach was further displayed when Valve opted to launch a wave of bans against "abusive" DOTA 2 players. The ban waves, among other things, were unveiled in a September 17 announcement post published by the DOTA 2 team, which has since been removed (and subsequently preserved thanks to an archive).</p>
            <p>The first ban wave affected players with "exceptionally low" behavior scores, and the second impacted those who bought or sold Steam accounts for the purposes of gaining a higher or lower matchmaking rank in DOTA 2</p>
            <p>Other bans were dished out as well, for reasons that primarily relate (but are not limited to) cheating the matchmaking system. For example, some users would queue for one role but play another, which can rob a team of a much-needed support or tank hero.</p>
            <br />
            <div class="share">
                  <a href="#"><i class="fab fa-facebook-square fa-2x" style="color:#3b5998;"></i></a>
                  <a href="#"><i class="fab fa-twitter-square fa-2x" style="color: #00acee;"></i></a>
                  <a href="#"><i class="fab fa-linkedin fa-2x" style="color: #0e76a8;"></i></a>
                  <a href="#blogcomments"><i class="far fa-comment left fa-2x icon"></i></a>
                  <a href=""><i class="far fa-envelope left fa-2x icon"></i></a>
            </div>
            <br />
              <p><strong>Tags:</strong> #16teams #OneChampion #RoadtoTI</p>
          </div>
      </div>

      <div class="row">
                <div class="col-10 mx-auto blog-box-2" id="commentbox">
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
