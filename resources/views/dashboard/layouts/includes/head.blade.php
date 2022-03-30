<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="description" content="Neon Admin Panel" />
<meta name="author" content="" />

<link rel="icon" href="{{asset('/')}}assets/images/favicon.ico">

<title>Neon | Dashboard</title>

<link rel="stylesheet" href="{{asset('/')}}assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css">
<link rel="stylesheet" href="{{asset('/')}}assets/css/font-icons/entypo/css/entypo.css">
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">
<link rel="stylesheet" href="{{asset('/')}}assets/css/bootstrap.css">
<link rel="stylesheet" href="{{asset('/')}}assets/css/neon-core.css">
<link rel="stylesheet" href="{{asset('/')}}assets/css/neon-theme.css">
<link rel="stylesheet" href="{{asset('/')}}assets/css/neon-forms.css">
<link rel="stylesheet" href="{{asset('/')}}assets/css/custom.css">

<script src="{{asset('/')}}assets/js/jquery-1.11.3.min.js"></script>

<!-- extra -->
@if(request()->routeIs('role.*'))
<link rel="stylesheet" href="{{asset('/')}}assets/js/select2/select2-bootstrap.css">
	<link rel="stylesheet" href="{{asset('/')}}assets/js/select2/select2.css">
	<link rel="stylesheet" href="{{asset('/')}}assets/js/selectboxit/jquery.selectBoxIt.css">
	<link rel="stylesheet" href="{{asset('/')}}assets/js/daterangepicker/daterangepicker-bs3.css">
	<link rel="stylesheet" href="{{asset('/')}}assets/js/icheck/skins/minimal/_all.css">
	<link rel="stylesheet" href="{{asset('/')}}assets/js/icheck/skins/square/_all.css">
	<link rel="stylesheet" href="{{asset('/')}}assets/js/icheck/skins/flat/_all.css">
	<link rel="stylesheet" href="{{asset('/')}}assets/js/icheck/skins/futurico/futurico.css">
	<link rel="stylesheet" href="{{asset('/')}}assets/js/icheck/skins/polaris/polaris.css">

	<!-- Bottom scripts (common) -->
	<script src="{{asset('/')}}assets/js/gsap/TweenMax.min.js"></script>
	<script src="{{asset('/')}}assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
	<script src="{{asset('/')}}assets/js/bootstrap.js"></script>
	<script src="{{asset('/')}}assets/js/joinable.js"></script>
	<script src="{{asset('/')}}assets/js/resizeable.js"></script>
	<script src="{{asset('/')}}assets/js/neon-api.js"></script>


	<!-- Imported scripts on this page -->
	<script src="{{asset('/')}}assets/js/select2/select2.min.js"></script>
	<script src="{{asset('/')}}assets/js/bootstrap-tagsinput.min.js"></script>
	<script src="{{asset('/')}}assets/js/typeahead.min.js"></script>
	<script src="{{asset('/')}}assets/js/selectboxit/jquery.selectBoxIt.min.js"></script>
	<script src="{{asset('/')}}assets/js/bootstrap-datepicker.js"></script>
	<script src="{{asset('/')}}assets/js/bootstrap-timepicker.min.js"></script>
	<script src="{{asset('/')}}assets/js/bootstrap-colorpicker.min.js"></script>
	<script src="{{asset('/')}}assets/js/moment.min.js"></script>
	<script src="{{asset('/')}}assets/js/daterangepicker/daterangepicker.js"></script>
	<script src="{{asset('/')}}assets/js/jquery.multi-select.js"></script>
	<script src="{{asset('/')}}assets/js/icheck/icheck.min.js"></script>
	<script src="{{asset('/')}}assets/js/neon-chat.js"></script>


	<!-- JavaScripts initializations and stuff -->
	<script src="{{asset('/')}}assets/js/neon-custom.js"></script>


	<!-- Demo Settings -->
	<script src="{{asset('/')}}assets/js/neon-demo.js"></script>

  @endif

  @if(request()->routeIs('permission.*'))

  <style>  
 @import url('https://fonts.googleapis.com/css?family=Montserrat:400,500');  
/* body {  
  font-family: 'Montserrat', sans-serif;  
  text-align: center;  
}  
body{  
  background-color: rgb(63,72,83);  
  font-family: sans-serif;  
  color: rgb(220,220,220);  
  overflow-x: hidden;  
}   */
tr:first-child { color: #FB667A; } 
tr:nth-child() { color: #FFB74D; }
td:hover {  
  color: purple;  
  font-weight: bold;   
  transition-delay: 0s;  
    transition-duration: 0.4s;  
    transition-property: all;  
  transition-timing-function: line;  
}  
h1 {  
  position: relative;  
  padding: 0;  
  margin: 10;  
  font-family: "Raleway", sans-serif;  
 font-weight: 400;  
  font-size: 40px;  
  color: white;  
  -webkit-transition: all 0.4s ease 0s;  
  -o-transition: all 0.4s ease 0s;  
  transition: all 0.4s ease 0s;   
}  
.table {  
  width: 100%;  
  thead {  
    th {  
      padding: 10px 10px;  
      background: #00adee;  
      font-size: 25px;  
      text-transform: uppercase;  
      vertical-align: top;  
      color: #1D4A5A;  
      font-weight: normal;  
      text-align: left;  
    }  
  }  
  tbody {  
    tr {  
      td {  
        padding: 10px;  
        background: #f2f2f2;  
        font-size: 14px;
        color: black;
      }  
    }  
  }  
}  
.add {  
  outline: none;  
  background: none;  
  border: none;  
}  
.edit {  
  outline: none;  
  background: none;  
  border: none;  
}  
.save {  
  outline: none;  
  background: none;  
  border: none;  
}  
.delete {  
  outline: none;  
  background: none;  
  border: none;  
}  
.edit {  
  padding: 5px 10px;  
  cursor: pointer;  
}  
.save {  
  padding: 5px 10px;  
  cursor: pointer;  
}  
.delete {  
  padding: 5px 10px;  
  cursor: pointer;  
}  
.add {  
  float: right;  
  background: transparent;  
  border: 1px solid  black;  
  color: black;  
  font-size: 13px;  
  padding: 0;  
  padding: 3px 5px;  
  cursor: pointer;  
  &:hover {  
    background: #ffffff;  
    color: #00adee;;  
  }  
}  
.save {  
  display: none;  
  background: #32AD60;  
  color: #ffffff;  
  &:hover {  
    background: darken(#32AD60, 10%);  
  }  
}  
.edit {  
  background: #2199e8;  
  color: #ffffff;  
  &:hover {  
    background: darken(#2199e8, 10%);  
  }  
}  
.delete {  
  background: #EC5840;  
  color: #ffffff;  
   &:hover {  
    background: darken(#EC5840, 10%);  
  }  
}  
</style> 

  <script type="text/javascript">
		jQuery( document ).ready( function( $ ) {
			var $table3 = jQuery("#table-3");
			
			var table3 = $table3.DataTable( {
				"aLengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]]
			} );
			
			// Initalize Select Dropdown after DataTables is created
			$table3.closest( '.dataTables_wrapper' ).find( 'select' ).select2( {
				minimumResultsForSearch: -1
			});
			
			// Setup - add a text input to each footer cell
			$( '#table-3 tfoot th' ).each( function () {
				var title = $('#table-3 thead th').eq( $(this).index() ).text();
				$(this).html( '<input type="text" class="form-control" placeholder="Search ' + title + '" />' );
			} );
			
			// Apply the search
			table3.columns().every( function () {
				var that = this;
			
				$( 'input', this.footer() ).on( 'keyup change', function () {
					if ( that.search() !== this.value ) {
						that
							.search( this.value )
							.draw();
					}
				} );
			} );
		} );
		</script>

<link rel="stylesheet" href="{{asset('/')}}assets/js/datatables/datatables.css">
	<link rel="stylesheet" href="{{asset('/')}}assets/js/select2/select2-bootstrap.css">
	<link rel="stylesheet" href="{{asset('/')}}assets/js/select2/select2.css">

	<!-- Bottom scripts (common) -->



	<!-- Imported scripts on this page -->
	<script src="{{asset('/')}}assets/js/datatables/datatables.js"></script>
	<script src="{{asset('/')}}assets/js/select2/select2.min.js"></script>


	<!-- JavaScripts initializations and stuff -->



	<!-- Demo Settings -->


  @endif

  <!-- extra -->

<!--[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
 <![endif]-->
