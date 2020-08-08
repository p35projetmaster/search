<!DOCTYPE html>
<html lang="en">

@include('admin.layout.header')

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

  @include('admin.layout.sidebar')

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        @include('admin.layout.topbar')
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          
           <div class="container mt-5 text-center">
           <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary"> Admine</h6>
            </div>
            <div class="card-body">
            <form class="user" onSubmit="validate();">
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input name="name" type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="First Name">
                  </div>
                  <div class="col-sm-6">
                    <input name="prenom" type="text" class="form-control form-control-user" id="exampleLastName" placeholder="Last Name">
                  </div>
                </div>
                <div class="form-group">
                  <input name="email" type="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email Address">
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                  </div>
                  <div class="col-sm-6">
                    <input name="password_confirmation" type="password" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Repeat Password">
                  </div>
                </div>
              
<hr>
<div class="custom-control custom-checkbox rows col-sm-3">
    <input class="custom-control-input" name="permission[]" id="customCheck1" type="checkbox">
    <label class="m-0 font-weight-bold text-primary custom-control-label" for="customCheck1">Web master</label>
</div>
   <hr>
<div class="form-group row">
<div class="custom-control custom-checkbox rows col-sm-3">
    <input class="custom-control-input" name="permission[]" id="customCheck2" type="checkbox">
    <label class="custom-control-label" for="customCheck2">Importation</label>
</div>
<div class="custom-control custom-checkbox rows col-sm-3">
    <input class="custom-control-input" name="permission[]" id="customCheck3" type="checkbox">
    <label class="custom-control-label" for="customCheck3">Annonnces</label>
</div>
<div class="custom-control custom-checkbox rows col-sm-3">
    <input class="custom-control-input" name="permission[]" id="customCheck4" type="checkbox">
    <label class="custom-control-label" for="customCheck4">Archive</label>
</div>
<div class="custom-control custom-checkbox rows col-sm-3">
    <input class="custom-control-input" name="permission[]" id="customCheck5" type="checkbox">
    <label class="custom-control-label" for="customCheck5">supression placard</label>
</div>
</div>
<hr>
<div class="form-group row">
<div class="custom-control custom-checkbox rows col-sm-6">
    <input class="custom-control-input" name="permission[]" id="customCheck6" type="checkbox">
    <label class="custom-control-label" for="customCheck6">Abonnées</label>
</div>
<div class="custom-control custom-checkbox rows col-sm-6">
    <input class="custom-control-input" name="permission[]" id="customCheck7" type="checkbox">
    <label class="custom-control-label" for="customCheck7">Demandes</label>
</div>
</div>
<hr>
                  <button class="btn btn-primary btn-user btn-block" type="submit" onclick="validate();">Register Account</button>
                <hr>
              </form>
            
            <div class="card-body">
  
            </div>      
            </div>
          </div>

    </div>
  


        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->


  @include('admin.layout.footer')

</body>

</html>
<script type="text/javascript">
  $('#customCheck1').change(function(e) {
  if (e.currentTarget.checked) {
  $('.rows').find('input[type="checkbox"]').prop('checked', true);
} else {
    $('.rows').find('input[type="checkbox"]').prop('checked', false);
  }
});

  function validate() {
   var a = document.getElementById("exampleInputPassword").value;
   var b = document.getElementById("exampleRepeatPassword").value;
   if (a!=b) alert("Les mots de passe ne correspondent pas.");
   else {
     alert("Les mots de passe correspondent.");
     document.f.submit();
  }
}


</script>