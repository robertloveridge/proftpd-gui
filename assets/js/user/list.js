$(function() {
    if ($.fn.dataTable.isDataTable( '#manage_users_table' )) {
        table = $('#manage_users_table').DataTable();
    } else {
        table = $('#manage_users_table').DataTable({
            "order": [],
            "columnDefs": [
                { "targets": [0], "width": "10%" },
                { "targets": [1,2,3], "width": "40%" },
                { className: "text-center", "targets": [0,1,2,3] },
            ],
            "ajax": '/datatable/user/list_all',
            "pageLength": 10
        });
    }
});
