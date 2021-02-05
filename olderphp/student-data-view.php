<?php
include('databaseunder.php');
session_start();
?>
<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title></title>
  <!-- sweetalert2 cdn link started -->
  <script
src="https://code.jquery.com/jquery-3.5.1.min.js"
integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
  <!-- sweetalert2 cdn link end -->
  <!-- data tables css -->
  <link rel="stylesheet" href="//cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
  <!-- CSS only -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-lg-12 m-auto">
        <div class="card text-center">
          <div class="card-header bg-success mb-2">
            Student Data Control
          </div>
          <span class="text-danger text-capitalize">
            <?php
            if (isset($_SESSION['ID'])) {
                ?>
              <style type="text/css">
                #name{
                  border: 1px solid red;
                }
              </style>
              <?php
              echo $_SESSION['ID'];
                unset($_SESSION['ID']);
            }
             ?>
          </span>
          <table class="table " id="myTable" >
            <thead class="thead-dark">
              <tr>

                <th scope="col">SL</th>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Father's Name</th>
                <th scope="col">Mother's Name</th>
                <th scope="col">Gender</th>
                <th scope="col">E-mail</th>
                <th scope="col">Phone</th>
                <th scope="col">Control and action</th>

              </tr>
            </thead>
            <tbody>
              <?php
              $select="SELECT * FROM admission WHERE status=1";
              $query=mysqli_query($database, $select);

              foreach ($query as $key => $admission) {
                  ?>
                <tr>
                  <th scope="row"><?php echo $key+1 ?></th>
                  <td><?php echo $admission['ID']; ?></td>
                  <td><?php echo $admission['Name']; ?></td>
                  <td><?php echo $admission['Father_Name']; ?></td>
                  <td><?php  echo $admission['Mother_Name']; ?></td>
                  <td><?php  echo $admission['Gender']; ?></td>
                  <td><?php echo $admission['Phone_NO']; ?></td>
                  <td><?php echo $admission['E_Mail']; ?></td>
                  <td>
                    <a href="student-data-edit.php?ID=<?php echo $admission['ID'] ?>" class="btn btn-primary">Edit</a>
                    <a href="student-data-delete.php?ID=<?php echo $admission['ID'] ?>" class="btn btn-danger" id="click">Delete</a>


                  </td>
                </tr>

                <?php
              }
               ?>



            </tbody>
          </table>



          <div class="card-footer text-light bg-dark">
            Copyright2020
          </div>
          <!-- table deleted data -->
          <div class="card-header bg-success mb-2 " >
            Student deleted data
          </div>
          <table class="table " id="myTable1" >
            <thead class="thead-dark">
              <tr>

                <th scope="col">SL</th>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Father's Name</th>
                <th scope="col">Mother's Name</th>
                <th scope="col">Gender</th>
                <th scope="col">E-mail</th>
                <th scope="col">Phone</th>
                <th scope="col">Control and action</th>

              </tr>
            </thead>
            <tbody>
              <?php
              $select="SELECT * FROM admission WHERE status=2";
              $query=mysqli_query($database, $select);

              foreach ($query as $key => $admission) {
                  ?>
                <tr>
                  <th scope="row"><?php echo $key+1 ?></th>
                  <td><?php echo $admission['ID']; ?></td>
                  <td><?php echo $admission['Name']; ?></td>
                  <td><?php echo $admission['Father_Name']; ?></td>
                  <td><?php  echo $admission['Mother_Name']; ?></td>
                  <td><?php  echo $admission['Gender']; ?></td>
                  <td><?php echo $admission['Phone_NO']; ?></td>
                  <td><?php echo $admission['E_Mail']; ?></td>
                  <td>
                    <a href="student-data-edit.php" class="btn btn-primary">Restore</a>

                    <a href="student-data-delete.php?ID=<?php echo $admission['ID'] ?>" class="btn btn-danger">P Delete</a>


                  </td>
                </tr>

                <?php
              }
               ?>



            </tbody>
          </table>
        </div>

      </div>

    </div>

  </div>
  <!-- JS, Popper.js, and jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <!-- datatables table javascript  link-->
  <script src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js" ></script>
  <!-- sweet alert java script link-->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <!-- data tables javascript -->
  <script type="text/javascript">
  $(document).ready( function () {
    $('#myTable,#myTable1').DataTable();
    } );

  </script>
    <!-- sweet alert java script started-->
    <script>
    $('#click').on('click',function(){
      Swal.fire({
  title: 'Are you sure?',
  text: "You won't be able to revert this!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.value) {
    Swal.fire(
      'Deleted!',
      'Your file has been deleted.',
      'success'
    )
  }
})

    })

    </script>


    <!-- sweet alert java script end-->


</body>

</html>
