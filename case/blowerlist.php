<!DOCTYPE html>
<html>
<head>
  <title>View List | Blower</title>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
</head>
<body>
<table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
<thead>
  <tr>
    <th>Id</th>
  <!-- <th>Company</th> -->
  <th>Created Date</th>
  <th>Category</th>
  <th>Association</th>
  <th>Place</th>
  <th>MonetaryValue</th>
   <th>Action</th>
  </tr>
</thead>
</table>
<script type="text/javascript">
   
jQuery(document).ready(function() {

   $('#kt_table_1').DataTable({
      lengthChange: true,
      ajax: {
          url: "https://5d1b152edd81710014e8825d.mockapi.io/fixnix/whistle",
          dataSrc: ''
      },
      columns: [
          { data: "tipNo"}, 
          { data: "createdAt"}, 
          { data: "category" }, 
          { data: "association"},
            { data: "place"},
              { data: "monetaryValue"},
              {data:"rando"}
             
      ],
      select: true
   });
});

</script>
</body>
</html>