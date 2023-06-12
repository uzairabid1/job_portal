<?php
  include('include/header.php');
  include('include/sidebar.php');
?>
<?php
include('connection/db.php');
$edit=$_GET['edit'];
$query=mysqli_query($conn,"select * from all_jobs where job_id='$edit'");
while($row=mysqli_fetch_array($query)){
$title=$row['job_title'];
$des=$row['des'];
$country=$row['country'];
$state=$row['state'];
$city=$row['city'];
}


?>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
        <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="job_create.php">All Job list</a></li>
    <li class="breadcrumb-item"><a href="#">Edit Job</a></li>
  
  </ol>
</nav>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
          <h1 class="h2">Edit Job</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
               
              </div>
              <!-- <a class="btn btn-primary" href="add_customer.php">Add Customer</a> -->
            </div>
          </div>
          <div style="width:60%; margin-left:20%; background-color: #E5E8E8;">
           
          
            <form action="" method="post" style="margin:3%; padding:3%;" name="job_form" id ="job_form">
              <div id="msg"></div> 
                <div class="form-group">
                    <label for="Job title">Job Title</label>
                    <input type="text" value="<?php echo $title; ?>" name="job_title" id="job_title" class="form-control" placeholder="Enter Job title">
                </div>
                <div class="form-group">
                    <label for="Description">Enter Description</label>
                    <textarea name="Description" id="Description" class='form-control' cols="30" rows="10"><?php echo $des; ?> </textarea>                    
                </div>   
                <input type="hidden" name="id" id="id" value="<?php  echo $_GET['edit'];?>">
                <div class="form-group">
  <label for="countryId">Country</label>
  <select name="country" class="countries form-control" value=<?php echo $country;?> id="countryId">
    <option value="">Select Country</option>
  </select>
</div>

<div class="form-group">
  <label for="stateId">State</label>
  <select name="state" class="states form-control" value=<?php echo $state;?> id="stateId">
    <option value="">Select State</option>
  </select>
</div>

<div class="form-group">
  <label for="cityId">City</label>
  <select name="city" class="cities form-control" value=<?php echo $city;?> id="cityId">
    <option value="">Select City</option>
  </select>
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
      var job_title = $("#job_title").val();
      var countryId = $("#countryId").val();
      var stateId = $("#stateId").val();
      var cityId= $("#cityId").val();
      if(job_title==''){
            alert('Please enter job_title');
            return false;
        }
        if(description==''){
            alert('Please enter description');
            return false;
        }
        if(countryId==''){
            alert('Please enter country');
            return false;
        }
        if(stateId==''){
            alert('Please enter state');
            return false;
        }
        if(cityId==''){
            alert('Please enter city');
            return false;
        }
     
      var data = $("#job_form").serialize();

     
      
    });
  });

 </script>
    
<script>    
  const countriesSelect = document.getElementById('countryId');
  const statesSelect = document.getElementById('stateId');
  const citiesSelect = document.getElementById('cityId');

  // Populate countries dropdown
  const countries = [
    {
      "name": "Pakistan",
      "states": [
        {
          "name": "Punjab",
          "cities": ["Lahore", "Faisalabad", "Rawalpindi"]
        },
        {
          "name": "Sindh",
          "cities": ["Karachi", "Hyderabad", "Sukkur"]
        },
        {
          "name": "Khyber Pakhtunkhwa",
          "cities": ["Peshawar", "Abbottabad", "Mardan"]
        }
      ]
    },
    {
      "name": "Australia",
      "states": [
        {
          "name": "New South Wales",
          "cities": ["Sydney", "Newcastle", "Wollongong"]
        },
        {
          "name": "Victoria",
          "cities": ["Melbourne", "Geelong", "Ballarat"]
        },
        {
          "name": "Queensland",
          "cities": ["Brisbane", "Gold Coast", "Cairns"]
        }
      ]
    },
    {
      "name": "India",
      "states": [
        {
          "name": "Maharashtra",
          "cities": ["Mumbai", "Pune", "Nagpur"]
        },
        {
          "name": "Delhi",
          "cities": ["New Delhi", "Gurgaon", "Noida"]
        },
        {
          "name": "Karnataka",
          "cities": ["Bengaluru", "Mysore", "Hubli"]
        }
      ]
    }
  ];

  countries.forEach(country => {
    const option = document.createElement('option');
    option.value = country.name;
    option.textContent = country.name;
    countriesSelect.appendChild(option);
  });

  // Handle country selection change
  countriesSelect.addEventListener('change', () => {
    const selectedCountry = countries.find(country => country.name === countriesSelect.value);
    const states = selectedCountry ? selectedCountry.states : [];

    // Clear states dropdown
    statesSelect.innerHTML = '<option value="">Select State</option>';
    // Clear cities dropdown
    citiesSelect.innerHTML = '<option value="">Select City</option>';

    // Populate states dropdown
    states.forEach(state => {
      const option = document.createElement('option');
      option.value = state.name;
      option.textContent = state.name;
      statesSelect.appendChild(option);
    });
  });

  // Handle state selection change
  statesSelect.addEventListener('change', () => {
   
    const selectedCountry = countries.find(country => country.name === countriesSelect.value);
    const selectedState = selectedCountry ? selectedCountry.states.find(state => state.name === statesSelect.value) : null;
    const cities = selectedState ? selectedState.cities : [];

    // Clear cities dropdown
    citiesSelect.innerHTML = '<option value="">Select City</option>';

    // Populate cities dropdown
    cities.forEach(city => {
      const option = document.createElement('option');
      option.value = city;
      option.textContent = city;
      citiesSelect.appendChild(option);
    });
  });
</script>
  </body>
</html>
<?php
include('connection/db.php');
if(isset($_POST['submit'])){
    $id=$_POST['id'];
    $job_title=$_POST['job_title'];
    $Description=$_POST['Description'];
    $country=$_POST['country'];
    // $password = rtrim($password," ");
    $state=$_POST['state'];
    $city=$_POST['city'];

    $query1=mysqli_query($conn,"update all_jobs set job_title='$job_title',des='$Description',country='$country',state='$state',city='$city' where job_id='$id'");
    if($query1){
        echo "<script> alert('Record has been successfully Updated!!!')</script>";
    }
    else{
        echo "<script> alert('some error please try again!!!')</script>";
    }
}

?>