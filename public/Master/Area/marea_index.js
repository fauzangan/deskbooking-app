$('#tabel-master-area').DataTable({
    columnDefs: [
        {
            targets: [0],
            render: function(data, type, row){
                return '<a href="' + '/area/create?id=' + data + '" class="btn btn-icon btn-primary btn-sm">' +
                    '<span>' + '<i class="fa-solid fa-arrow-right">' + '</i>' + '<span>' + '</a>';
            }
        }
    ]
});