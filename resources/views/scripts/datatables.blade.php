{{-- FYI: Datatables do not support colspan or rowpan --}}

<script type="text/javascript" src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>

<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>







<script type="text/javascript">
    $(document).ready(function() {
        $('.data-table').dataTable({
            "paging": true,
            "lengthChange": true,
			"filter":     true,
			"length":     true,
  			"processing": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": true,
            "dom": 'Bfrtip',
            "sPaginationType": "full_numbers",
			"buttons": [
            'excel', 'pdf', 'print'
        ],
            'aoColumnDefs': [{
                'bSortable': false,
                'searchable': false,
                'aTargets': ['no-search'],
                'bTargets': ['no-sort']
            }]
        });
    });
</script>