<?php
  include('include/header.php');
  include('include/sidebar.php');
?>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
        <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="category.php">Add Category</a></li>
    <li class="breadcrumb-item"><a href="#">Add Category</a></li>
  
  </ol>
</nav>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
          <h1 class="h2">Category</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
               
              </div>
              <!-- <a class="btn btn-primary" href="add_customer.php">Add Customer</a> -->
            </div>
          </div>
          <div style="width:60%; margin-left:20%; background-color: #E5E8E8;">
           
          
            <form action="" method="post" style="margin:3%; padding:3%;" name="Company_form" id ="Company_form">
              <div id="msg"></div> 
                <div class="form-group">
                    <label for="Company Name">Category Name</label>
                    <input type="text" name="category" id="category" class="form-control" placeholder="Enter Category Name">
                </div>
                <div class="form-group">
                    <label for="Description">Enter Description</label>
                    <textarea name="Description" id="Description" class='form-control' cols="30" rows="10"></textarea>                    
                </div>                  
                <div class="form-group">                   
                    <input type="submit" class="btn btn-block btn-success" placeholder="Save" name="submit" id="submit">
                </div>
            </form>
          </div>

          <canvas class="my-4" id="myChart" width="900" height="380"></canvas>

          
          <div class="table-responsive">
           
          </div>
        </main>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>
 <!-- datatables plugin -->
 <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
 <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
 <script>
    $(document).ready(function () {
    $('#example').DataTable();
});
 </script>

 <script>

  $(document).ready(function(){
    $("#submit").click(function(){
      var description = $("#Description").val();
      var category = $("#category").val();
      if(category==''){
            alert('Please enter category name');
            return false;
        }
        if(description==''){
            alert('Please enter description');
            return false;
        }
     
      var data = $("#Company_form").serialize();

      $.ajax({
        type:"POST",
        url: "category_add.php",
        data: data,
        success: function(data){
           alert(data);
        }
      });
      
    });
  });

 </script>
    
  </body>
</html>
