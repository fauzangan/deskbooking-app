$('#tabel_home').DataTable({
    paging: false,
    searching: false,
    info: false,
    language: {
        emptyTable: "",
        zeroRecords: "",
    },
    columnDefs: [
        {
            targets: [5],
            render: function(data, type, row){
                return '<span class="badge bg-primary">' + data + '</span>'
            }
        }
    ]
});

const openModal = () => {
    $("#modalReservation").modal("show");
}

const closePopup = () => {
    $("#modalReservation").modal("hide");
}