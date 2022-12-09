$('#tabel-master-location').DataTable({
    columnDefs: [
        {
            targets: [0],
            render: function(data, type, row){
                return '<a href="' + '/location/detail?id=' + data + '" class="btn btn-icon btn-primary btn-sm">' +
                    '<span>' + '<i class="fa-solid fa-arrow-right">' + '</i>' + '<span>' + '</a>';
            }
        },
        {
            targets: [3],
            render: function(data, type, row){
                return '<input type="checkbox" checked disabled/>'
            }
        }
    ]
});