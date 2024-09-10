<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
	<meta name="author" content="BRANDTECT">
	<meta name="keywords" content="BRANDTECT, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<title>Sales Made Easy</title>

  
	<!-- core:css -->
	<link rel="stylesheet" href="{{asset('../assets/vendors/core/core.css')}}">
	<!-- endinject -->

	<!-- Plugin css for this page -->
	<link rel="stylesheet" href="{{asset('../assets/vendors/flatpickr/flatpickr.min.css')}}">
	<!-- End plugin css for this page -->

	<!-- inject:css -->
	<link rel="stylesheet" href="{{asset('../assets/fonts/feather-font/css/iconfont.css')}}">
	<link rel="stylesheet" href="{{asset('../assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
	<link rel="stylesheet" href="{{asset('../assets/vendors/datatables.net-bs5/dataTables.bootstrap5.css')}}">

	<!-- endinject -->

  <!-- Layout styles -->  
  <!-- End layout styles -->

  <link rel="shortcut icon" href="{{asset('../assets/images/favicon.png')}}"/>
  {{-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" > --}}

  <!-- core:css -->
	<lnk rel="stylesheet" href="{{asset('../../../assets/vendors/core/core.css')}}i">
  
	<link rel="stylesheet" href="{{asset('../../../assets/vendors/owl.carousel/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{asset('../../../assets/vendors/owl.carousel/owl.theme.default.min.css')}}">
	  <!-- endinject -->
  
	  <!-- Plugin css for this page -->
	  <link rel="stylesheet" href="{{asset('../../../assets/vendors/flatpickr/flatpickr.min.css')}}">
	<link rel="stylesheet"  href="{{asset('../../../assets/vendors/select2/select2.min.css')}}">
  
	  <!-- End plugin css for this page -->
	  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="{{asset('../../../assets/vendors/cropperjs/cropper.min.css')}}">
  <!-- End plugin css for this page -->
  
	  <!-- inject:css -->
	  <link rel="stylesheet" href="{{asset('../../../assets/fonts/feather-font/css/iconfont.css')}}">
	  <link rel="stylesheet" href="{{asset('../../../assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
	  <!-- endinject -->
  
	<!-- Layout styles -->  
	  <link rel="stylesheet" id="themestylesheet" href="{{asset('#')}}" media="print" onload="this.media='all'">
	  
	<!-- End layout styles -->
	<link rel="shortcut icon" href="{{asset('../../../assets/images/logo.png')}}" />


</head>
<body>
			
	<div class="main-wrapper">
		<!-- partial:partials/_sidebar.html -->

        @include('body.sidebar')
		<!-- partial -->
	
		
		@include('body.sidenav')

					
			<!-- partial:partials/_navbar.html -->
	<div class="page-wrapper">
            @include('body.header')

			<!-- partial -->
 

  @yield('admin')


    <!-- partial:partials/_footer.html -->

	  @include('body.footer')
    <!-- partial -->

  
</div>
</div>

<script>
	  /**
   * Preloader
   */
     // Function to select elements
	 const select = (el) => document.querySelector(el);

// Preloader removal logic
let preloader = select('#preloader');
if (preloader) {
	window.addEventListener('load', () => {
		preloader.remove();
	});
}
</script>
	<!-- core:js -->
	<script src="{{asset('../../../assets/vendors/core/core.js')}}"></script>
	<!-- endinject -->

	<!-- Plugin js for this page -->
  <script src="{{asset('../assets/vendors/flatpickr/flatpickr.min.js')}}"></script>
  <script src="{{asset('../assets/vendors/apexcharts/apexcharts.min.js')}}"></script>
  <script src="{{asset('../assets/js/code/code.js')}}"></script>

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

	

	<!-- inject:js -->
	<script src="{{asset('../assets/vendors/feather-icons/feather.min.js')}}"></script>
	<script src="{{asset('../assets/js/template.js')}}"></script>
	<!-- endinject -->

	
	<script src="{{asset('../../../assets/vendors/morris.js/morris.min.js')}}"></script>
	<!-- Custom js for this page -->
    <script src="{{asset('../../../assets/js/morrisjs-dark.js')}}"></script>
	<!-- End custom js for this page -->

    <script src="{{asset('../../../assets/vendors/raphael/raphael.min.js')}}"></script>

	

	<!-- inject:js -->
 <!-- core:js -->
 <script src="{{asset('../assets/vendors/core/core.js')}}"></script>
 <script src="{{asset('../../../assets/js/apexcharts-dark.js')}}"></script>
 <script src="{{asset('../../../assets/js/flatpickr.js')}}"></script>
 <script src="{{asset('../../../assets/vendors/dropify/dist/dropify.min.js')}}"></script>
 <script src="{{asset('../../../assets/js/dropify.js')}}"></script>


 


 <!-- endinject -->

 <!-- Plugin js for this page -->
 <script src="{{asset('../assets/vendors/flatpickr/flatpickr.min.js')}}"></script>
 <script src="{{asset('../../../assets/vendors/apexcharts/apexcharts.min.js')}}"></script>
 <!-- End plugin js for this page -->

 <!-- inject:js -->
 <script src="{{asset('../../../assets/vendors/feather-icons/feather.min.js')}}"></script>
 <script src="{{asset('../assets/js/template.js')}}"></script>
 <script src="{{asset('../../../assets/js/data-table.js')}}"></script>
 	<!-- Plugin js for this page -->
	 <script src="{{asset('../../../assets/vendors/datatables.net/jquery.dataTables.js')}}"></script>
	 <script src="{{asset('../../../assets/vendors/datatables.net-bs5/dataTables.bootstrap5.js')}}"></script>
	 <!-- End plugin js for this page -->
 
<!-- core:js  nnnnnnoted down-->
  <script src="{{asset('../../../assets/vendors/core/core.js')}}"></script>  
<!-- endinject -->

<!-- Plugin js for this page -->
<script src="{{asset('../../../assets/vendors/flatpickr/flatpickr.min.js')}}"></script>
<script src="{{asset('../../../assets/vendors/apexcharts/apexcharts.min.js')}}"></script>
<!-- End plugin js for this page -->

<!-- inject:js -->
<script src="{{asset('../../../assets/vendors/feather-icons/feather.min.js')}}"></script>
<script src="{{asset('../../../assets/js/template.js')}}"></script>
<!-- endinject -->

<!-- Custom js for this page -->
<script id="themescript"src="#"></script>

<!-- End custom js for this page -->

<!-- Plugin js for this page -->
<script src="{{asset('../../../assets/js/sortablejs-light.js')}}"></script>
<!-- End plugin js for this page -->


<!-- Plugin js for this page -->
<script src="{{asset('../../../assets/vendors/cropperjs/cropper.min.js')}}"></script>
<!-- End plugin js for this page -->

	<!-- Custom js for this page -->
<script src="{{asset('../../../assets/js/cropper.js')}}"></script>
<!-- End custom js for this page -->

  <!-- Custom js for this page -->
<script src="{{asset('../../../assets/js/carousel.js')}}"></script>
<script src="{{asset('../../../assets/js/select2.js')}}"></script>

<script src="{{asset('../../../assets/vendors/select2/select2.min.js')}}"></script>

<script src="{{asset('../../../assets/vendors/owl.carousel/owl.carousel.min.js')}}"></script>
	
	<script type="text/javascript" src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js')}}"></script>

<script>
 @if(Session::has('message'))
 var type = "{{ Session::get('alert-type','info') }}"
 switch(type){
    case 'info':
    toastr.info(" {{ Session::get('message') }} ");
    break;

    case 'success':
    toastr.success(" {{ Session::get('message') }} ");
    break;

    case 'warning':
    toastr.warning(" {{ Session::get('message') }} ");
    break;

    case 'error':
    toastr.error(" {{ Session::get('message') }} ");
    break; 
 }
 @endif 
</script>


{{-- this is the java script code to auto change the themesof the page --}}

<script>
	// Function to apply the saved styles and scripts from localStorage
	function applySavedStylesAndScripts() {
		const savedStylesheet = localStorage.getItem('stylesheet');
		const savedScript = localStorage.getItem('script');

		if (savedStylesheet) {
			document.getElementById('themestylesheet').href = savedStylesheet;
		}

		if (savedScript) {
			var newScript = document.createElement('script');
			newScript.src = savedScript;  // Load the saved JS file
			document.body.appendChild(newScript); // Append the new script
		}
	}

	// Call the function to apply saved styles and scripts when the page loads
	applySavedStylesAndScripts();

	document.getElementById('changewhite').onclick = function(event) {
		event.preventDefault(); // Prevent the default action of the link
		
		
		// Change the CSS file
		var link = document.getElementById('themestylesheet');
		link.href = "{{asset('../../../assets/css/demo1/style.css')}}";  // New CSS file
		
		// Save the new CSS file in localStorage
		localStorage.setItem('stylesheet', link.href);

		// Change the JavaScript file
		var script = document.getElementById('themescript');
		var newScriptSrc = "{{asset('../../../assets/js/dashboard-light.js')}}";  // New JS file
		var newScript = document.createElement('script');
		newScript.src = newScriptSrc;  // Set the new JS file source
		
		// Save the new script in localStorage
		localStorage.setItem('script', newScriptSrc);

		document.body.appendChild(newScript); // Append the new script
		
		// Remove the old script
		document.body.removeChild(script);
	};


	document.getElementById('changedark').onclick = function(event) {
		event.preventDefault(); // Prevent the default action of the link
		
		
		// Change the CSS file
		var link = document.getElementById('themestylesheet');
		link.href = "{{asset('../../../assets/css/demo2/style.css')}}";  // New CSS file
		
		// Save the new CSS file in localStorage
		localStorage.setItem('stylesheet', link.href);

		// Change the JavaScript file
		var script = document.getElementById('themescript');
		var newScriptSrc = "{{asset('../../../assets/js/dashboard-dark.js')}}";  // New JS file
		var newScript = document.createElement('script');
		newScript.src = newScriptSrc;  // Set the new JS file source
		
		// Save the new script in localStorage
		localStorage.setItem('script', newScriptSrc);

		document.body.appendChild(newScript); // Append the new script
		
		// Remove the old script
		document.body.removeChild(script);





		
	};
</script>
{{-- end of script --}}
</body>
</html>    