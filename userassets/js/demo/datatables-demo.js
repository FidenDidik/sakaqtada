// Call the dataTables jQuery plugin
/* $(document).ready(function() {
  $('#dataTable').DataTable();
}); */

$(document).ready(function() {
  $('#dataTable').DataTable( {
      "lengthMenu": [[5, 25, 50, -1], [5, 25, 50, "All"]]
  } );
} );