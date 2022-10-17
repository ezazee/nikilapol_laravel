<!DOCTYPE html>
<html lang="en">
<head>
  @include('master.meta')
  @include('master.head-css')
  @include('master.root')
</head>
<body>
   <div class="preloader">
      <div class="preloader-body">
        <div class="cssload-container">
          <div class="cssload-speeding-wheel"></div>
        </div>
      </div>
    </div>
    <div class="page">

     <!-- Header -->
      @include('master.navbar')
      <!-- End Header -->




       <!-- Banner CTA -->
  @include('master.cta')
  <!-- End Banner CTA -->

        <!-- Footer -->
        @include('master.footer')
        <!-- Akhir Footer -->
    <div class="snackbars" id="form-output-global"></div>
    @include('master.scripts')
</body>
</html>