<?php 
include('include/my_profile.php');
?>
<br>
<div id="msg"></div> 
<div style="margin-left: 25%; margin-bottom:2.5%; width:50%; border:1px solid gray; padding:10px;">
<form action="profile_add.php" method="post" id="profile_form" name="profile_form" enctype="multipart/form-data" >

    <div class="row">
        <div class="col-md-4">
        <?php
                include('connection/db.php');
                $email = $_SESSION['email'];
                $query=mysqli_query($conn,"select * from profiles where email='{$_SESSION['email']}'");
                $total = mysqli_num_rows($query);                
                if($total>0){ ?>
                  <?php  while ($row=mysqli_fetch_array($query)){ ?>
                    <img src="<?php echo "files/" . $row['img'] ?>" class="img-thumbnail" width="200" height="200">  
                   <?php } ?>
               <?php } else { ?>
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/7e/Circle-icons-profile.svg/2048px-Circle-icons-profile.svg.png" class="img-circle dropdown-toggle" type="button" data-toggle="dropdwown"alt="" width="200" height="200">
              <?php } ?>
        </div>
        <div class="col-md-6">
        <input type="file" name="file" class="form-control" >
        </div>     
    </div>
    <br>

<div style="margin-left: 25%;">
    <div class="row">
        <div class="col-md-6">
            <td>Enter Your Name:</td>
        </div>
        <div class="col-md-6">
            <td><input type="text" name="name" id="name" placeholder="Enter Your Name..." class="form-group"></td>
        </div>    
    </div>
    <div class="row">
        <div class="col-md-6">
            <td>Enter Your DOB:</td>
        </div>
        <div class="col-md-6">
            <td><input type="date" name="dob" id="dob" placeholder="Enter Your DOB..." class="form-group"></td>
        </div>  
    </div>
    <div class="row">
        <div class="col-md-6">
            <td>Enter Your Mobile Number:</td>
        </div>
        <div class="col-md-6">
            <td><input type="text" name="mobile_number" id="mobile_number" placeholder="Enter Your Number..." class="form-group"></td>
        </div>       
    </div>   
    <div class="row">
        <div class="col-md-6">
            <td>Enter Your Email:</td>
        </div>
        <div class="col-md-6">
            <td><input type="text" name="email" id="email" value="<?php echo $_SESSION['email'] ?>"  placeholder="Enter Your Email..." class="form-group"></td>
        </div>       
    </div>
</div>

    <div class="form-group">
        <input type="submit" id="submit" name="submit" class="btn btn-success" value="Submit">
    </div>

 </form>
</div >
		
  <section class="ftco-section-parallax">
      <div class="parallax-img d-flex align-items-center">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
              <h2>Subcribe to our Newsletter</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
              <div class="row d-flex justify-content-center mt-4 mb-4">
                <div class="col-md-8">
                  <form action="#" class="subscribe-form">
                    <div class="form-group d-flex">
                      <input type="text" class="form-control" placeholder="Enter email address">
                      <input type="submit" value="Subscribe" class="submit px-3">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

<?php

include('include/footer.php')
?>  


<script>

$(document).ready(function(){
    $("#submit").click(function(){
           var data = $("#profile_form").serialize();
            $.ajax({
                type:"POST",
                url: "profile_add.php",
                data: data,
                success: function(data){
                 $("#msg").html(data);
        }
            });
    })
})

</script>