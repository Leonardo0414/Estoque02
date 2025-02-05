<footer class="main-footer">
    <div class="float-right d-none d-sm-inline">
        LP TECH
    </div>
    <strong>Copyright &copy; <?=date('Y')?> <a>LP TECH</a>.</strong>Todos os Direitos Reservados.
</footer>
</div>

<!-- SCRIPTS -->
<script src="<?=base_url('AdminLTE/plugins/jquery/jquery.min.js')?>"></script>
<script src="<?=base_url('AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
<!-- DATATABLES PLUGINS -->
<script src="<?=base_url('AdminLTE/plugins/datatables/jquery.dataTables.min.js')?>"></script>
<script src="<?=base_url('AdminLTE/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')?>"></script>
<script src="<?=base_url('AdminLTE/plugins/datatables-responsive/js/dataTables.responsive.min.js')?>"></script>
<script src="<?=base_url('AdminLTE/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')?>"></script>
<script src="<?=base_url('AdminLTE/plugins/datatables-buttons/js/dataTables.buttons.min.js')?>"></script>
<script src="<?=base_url('AdminLTE/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')?>"></script>
<script src="<?=base_url('AdminLTE/plugins/jszip/jszip.min.js')?>"></script>
<script src="<?=base_url('AdminLTE/plugins/pdfmake/pdfmake.min.js')?>"></script>
<script src="<?=base_url('AdminLTE/plugins/pdfmake/vfs_fonts.js')?>"></script>
<script src="<?=base_url('AdminLTE/plugins/datatables-buttons/js/buttons.html5.min.js')?>"></script>
<script src="<?=base_url('AdminLTE/plugins/datatables-buttons/js/buttons.print.min.js')?>"></script>
<script src="<?=base_url('AdminLTE/plugins/datatables-buttons/js/buttons.colvis.min.js')?>"></script>
<script src="<?=base_url('AdminLTE/dist/js/adminlte.min.js')?>"></script>
<!--BOTOES DE IMPRESSAO-->
<script>
$(function () {
    $("#example1").DataTable({
        "responsive": true, 
        "lengthChange": false, 
        "autoWidth": false,
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.24/i18n/Portuguese-Brasil.json"
        },
         "dom": 'Bfrtip', 
        "buttons": [
            {
                extend: 'copy',
                text: 'Copiar'
            },
            {
                extend: 'csv',
                text: 'CSV'
            },
            {
                extend: 'excel',
                text: 'Excel'
            },
            {
                extend: 'pdf',
                text: 'PDF'
            },
            {
                extend: 'print',
                text: 'Imprimir'
            },
            {
                extend: 'colvis',
                text: 'Colunas'
            }
        ]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
});
</script>
</body>
</html>