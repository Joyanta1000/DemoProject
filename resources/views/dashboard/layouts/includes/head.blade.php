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
<!-- <script src="{{asset('/')}}assets/js/neon-custom.js"></script> -->


<!-- Demo Settings -->
<script src="{{asset('/')}}assets/js/neon-demo.js"></script>

@endif

@if(request()->routeIs('permission.*'))


<script type="text/javascript">
  jQuery(document).ready(function($) {
    var $table3 = jQuery("#table-3");

    var table3 = $table3.DataTable({
      "aLengthMenu": [
        [10, 25, 50, -1],
        [10, 25, 50, "All"]
      ]
    });

    // Initalize Select Dropdown after DataTables is created
    $table3.closest('.dataTables_wrapper').find('select').select2({
      minimumResultsForSearch: -1
    });

    // Setup - add a text input to each footer cell
    $('#table-3 tfoot th').each(function() {
      var title = $('#table-3 thead th').eq($(this).index()).text();
      $(this).html('<input type="text" class="form-control" placeholder="Search ' + title + '" />');
    });

    // Apply the search
    table3.columns().every(function() {
      var that = this;

      $('input', this.footer()).on('keyup change', function() {
        if (that.search() !== this.value) {
          that
            .search(this.value)
            .draw();
        }
      });
    });
  });
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