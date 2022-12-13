$('#tabel_reservasi').DataTable({
    paging: false,
    searching: false,
    info: false,
    language: {
        emptyTable: "",
        zeroRecords: "",
    },
    columnDefs: [
        // {
        //     targets: [0],
        //     render: function(data, type, row){
        //         return '<button type="button" id="' + data + '" class="btn btn-icon btn-primary" onclick="openModal()">' + '<span>' + '<i class="fas fa-arrow-right">' + '</i>' + '<span>' + '</button>';
        //     }
        // },
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