<?php
    require_once('include/functions/main.php');
    $title = "Application";
    require('include/layout/header.php');
    require('include/layout/profile-header.php');

    not_logged_in_redirect();

    if (isset($_POST['back'])) {
        redirect('jobseeker-dashboard.php');
    }

 ?>

<?php

    if (isset($_GET['application']) && $_GET['application'] === "success") { ?>

      <section class="application-form">

          <div class="row">

            <div class="col-sm-2"></div>

            <div style="background-color:white;" class="col-md-8 application-success">

                <h4 class="job-title-application-sent text-center">Application successful</h4>
                <h4 class="success text-center"> Congratulation, <?=$user_data['first_name'];?> your application was successful. </h4>

                <h5>Please note that smashjob does not guaranty the success of your application as we cannot influence the employers' recruitment policy. </h5>

                <form class="" action="" method="post">
                    <button type="submit" Class="btn btn-primary pull-right" name="back">Back to dashboard</button>
                </form>

            </div>

            <div class="col-sm-2"></div>

          </div>

      </section>
<?php

    }else {


      $id = $_GET['job'];
      $jobs = getPresentJob($id);
      $jobseeker_id = htmlentities(strip_tags(trim(addslashes($user_data['id']))));
      $employer_id = htmlentities(strip_tags(trim(addslashes($jobs[0]['employer']))));
      $job_id = htmlentities(strip_tags(trim(addslashes($id))));

      if (isset($_POST['submit-application'])) {
          // $allowed   = array('pdf' , 'doc' ,'docx');
          // echo $file_name = $_FILES['cv']['name'];
          // $file_ext = explode('.' , $file_name);
          // echo $file_ext = strtolower(end($file_ext));
          // echo $file_path = "img/cv/" . substr(md5(time()), 0 , 10) . "." . $file_ext;
          // move_uploaded_file($file_temp,$file_path);
          // echo $cv = htmlentities(strip_tags(trim(addslashes($_POST['cv']))));
          // echo $about = htmlentities(strip_tags(trim(addslashes($_POST['about']))));

          $jobseeker_id = htmlentities(strip_tags(addslashes(trim($user_data['id']))));
          $job_id = htmlentities(strip_tags(addslashes(trim($jobs[0]['id']))));
          $cv = htmlentities(strip_tags(addslashes(trim($user_data['cv']))));
          $date_applied = date('d/m/Y');
          $additional_info = htmlentities(strip_tags(addslashes(trim($_POST['additional_info']))));

          if (applyForJob ($jobseeker_id ,  $job_id, $cv, $date_applied, $additional_info)) {

              redirect('apply.php?application=success');

          }
          else {

              redirect('apply.php?application=failed');

          }
      }

   ?>

      <section ng-hide="apply === 1" class="job-application-section">
         <div class="row">
             <div class="col-md-2"></div>
             <div style="background-color:white;" class="col-md-8">
               <h4 class="job-title-application text-center">JOB ADVERT</h4>
                 <div class="row">
                     <h5>Company: <br>
                         <small><?=$jobs[0]['employer']?></small>
                     </h5>
                 </div>
                 <div class="row">
                     <h5>Job Title: <br>
                         <small><?=$jobs[0]['title']?></small>
                     </h5>
                 </div>
                 <div class="row">
                     <h5>Job Description: <br>
                         <small><?=$jobs[0]['description']?></small>
                     </h5>
                 </div>
                 <div class="row">
                     <h5>Qualification:  <br>
                         <small><?=$jobs[0]['qualification']?></small>
                     </h5>
                 </div>
                 <div class="row">
                     <h5>Experience:  <br>
                       <small><?=$jobs[0]['experience']?></small>
                     </h5>
                 </div>
                 <div class="row">
                     <h5>Job category:  <br>
                         <small><?=$jobs[0]['category']?></small>
                     </h5>
                 </div>
                 <div class="row">
                     <h5>Job Type:  <br>
                         <small><?=$jobs[0]['type']?></small>
                     </h5>
                 </div>
                 <div class="row">
                     <h5>Job Location:  <br>
                         <small><?=$jobs[0]['location']?></small>
                     </h5>
                 </div>
                 <div class="row">
                     <h5>Application Deadline:  <br>
                         <small><?=$jobs[0]['deadline']?></small>
                     </h5>
                 </div>
                 <div class="row button-row">
                   <div class="col-md-6">
                     <form class="" action="" method="post">
                         <button type="submit" class="btn btn-primary pull-left" name="back">Back</button>
                     </form>
                   </div>
                   <div class="col-md-6">
                     <button type="submit" ng-click="apply = 1" class="btn btn-primary pull-right" name="apply">Apply</button>
                   </div>
                 </div>
             </div>
             <div class="col-md-2"></div>
         </div>
      </section>

      <section ng-show="apply === 1" class="application-form" ng-cloak="">

         <div class="col-sm-2"></div>

         <div class="row">
           <div style="padding:0px;" class="col-sm-8">
             <form style="background-color:white;" id="application-form" class="application-form form-group" action="" method="post">

               <h4 class="job-title-application-sent text-center">You are applying for the job of <?php echo " " . $jobs[0]['title'] . " " ?>. A copy of your resume will be attached to this application and sent to <?=$jobs[0]['employer']?>. Click submit to complete application</h4>

               <div class="form-row row">
                 <div class="col-sm-4">
                   <label for="">Surname</label>
                   <input type="text" name="surname" value="<?=$user_data['last_name'];?>" class="form-control">
                 </div>
                 <div class="col-sm-4">
                   <label for="">Firstname</label>
                   <input type="text" name="first_name" value="<?=$user_data['first_name'];?>" class="form-control">
                 </div>
                 <div class="col-sm-4">
                   <label for="">Middlename</label>
                   <input type="text" name="middle_name" value="<?=$user_data['middle_name'];?>" class="form-control">
                 </div>
               </div>

               <div class="form-row row">
                 <div class="col-sm-4">
                   <label for="">Email</label>
                   <input type="text" name="email" value="<?=$user_data['email'];?>" class="form-control">
                 </div>
                 <div class="col-sm-4">
                   <label for="">Mobile no</label>
                   <input type="text" name="mobile" value="<?=$user_data['mobile'];?>" class="form-control">
                 </div>
                 <div class="col-sm-4">
                   <label for="">Middlename</label>
                   <input type="text" name="sex" value="<?=$user_data['sex'];?>" class="form-control">
                 </div>
               </div>

               <div class="form-row row">
                 <div class="col-sm-12">
                   <span id="cv-span">Your resume with filename <?=$user_data['cv']?> will be attached to your application</span>
                   <button id="cv-upload" type="button" name="cv">Attach an updated resume</button><small class="cv-optional">(optional)</small>
                 </div>
               </div>

               <div class="form-row row">
                 <div class="col-sm-12">
                   <label for="">Additional Information</label>
                   <textarea name="additional_info" rows="8" cols="40" class="form-control"></textarea>
                 </div>
               </div>

               <div class="form-row row">
                 <div class="col-md-6">
                   <form class="" action="" method="post">
                       <button type="submit" class="btn btn-primary pull-left" name="back">Back</button>
                   </form>
                 </div>
                 <div class="col-md-6">
                     <button type="submit" name="submit-application" class="btn btn-primary pull-right">Submit</button>
                 </div>
               </div>

             </form>
           </div>
         </div>

         <div class="col-sm-2"></div>

      </section>

<?php
    }
?>


<?php
    require('include/layout/page-header-footer.php');
    require('include/layout/footer.php');
?>
