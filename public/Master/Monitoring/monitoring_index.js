$('#tabel-monitoring').DataTable({
    columnDefs: [
        {
            targets: [5],
            render: function(data, type, row){
                if(data == 'reserved'){
                    return '<span class="badge bg-primary">' + data + '</span>'
                }
                else if(data == 'checkin'){
                    return '<span class="badge bg-secondary">' + data + '</span>'
                }
                else if(data == 'checkout'){
                    return '<span class="badge bg-success">' + data + '</span>'
                }
                else{
                    return '<span class="badge bg-danger">' + data + '</span>'
                }
            }
        }
    ]
});