<div class="container-fluid">
    <div style="margin-right:0px;margin-left:0px;" class="row">

      <div class="col-xs-12 col-sm-12 col-md-12 profile-top">

        <div class="dashboard-profile-display">

            <div class="col-xs-5 col-sm-3 col-md-2 img-display">

                <?php
                    if (empty($user_data['profile_image']) === false) { ?>
                        <img class="img-responsive img-thumbnail  profile-pix" src="<?=$user_data['profile_image'];?>" alt="" />
                <?php
                    }elseif (empty($user_data['profile_image']) === true) { ?>
                              <img class="img-responsive img-thumbnail  profile-pix" src="http://placehold.it/200x150?text=No+Image" alt="Upload an image" />
                <?php
                    }
                ?>
                <h6>http://www.smashjob.ng/<?=$user_data['username'];?></h6>
            </div>

            <div class="dashboard-details col-xs-6 col-sm-6 col-md-8">
                <h3><?php echo strtoupper($user_data['last_name'] . " " . $user_data['first_name']); ?></h3>
                <label id="email-label" for="">Email:</label><br>
                <h6 class="info"><?php echo strtolower($user_data['email']); ?><br></h6>
                <label id="phone-label" for="">Phone:</label><br>
                <h6 class="info"><?php echo $user_data['mobile']; ?></h6><br>
            </div>

        </div>



      </div>


    </div>
</div>
