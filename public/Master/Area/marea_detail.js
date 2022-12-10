let objDataArea;
let deskStatus = [
    "available", "unavailable"
];
let counter = 1;
let iterationName = 0;
let iterationSelect = 0;
let areaId;
var urlParams = new URLSearchParams(window.location.search);
if (urlParams != "") {
    areaId = encodeURI(urlParams.get("id")).replace(/%20/g, "+");
} else {
    areaId = null;
}

const dt = $("#table_marea").DataTable({
    paging: false,
    searching: false,
    info: false,
    dom: 'Bfrtip',
    buttons: [
        'colvis',
        'excel',
        'print'
    ],
    language: {
        emptyTable: "",
        zeroRecords: "",
    },
    columns: [
        {
            data: null,
            render: function (data, type, row) {
                return '<button id="deleteRow" type="button" class="btn btn-danger">Delete</button>';
            },
        },
        {
            data: null,
            render: function (data, type, row) {
                let html = '<input id = "txtdeskname_' + iterationName + '" type="text" value="' + row.txtdeskname + '"   class="form-control form-control-solid"/>';
                // html += '<input id = "intareadetailid_' + iterationName + '" type="text" value="' + row.intareadetailid + '"   class="form-control form-control-solid" hidden/>';
                // html += '<input id = "bitactive_' + iterationName + '" type="text" value="' + row.bitactive + '"   class="form-control form-control-solid" hidden/>'
                return html;
            },
        },
        {
            data: null,
            render: function (data, type, row) {
                let html = "";
                for (let x = 0; x < deskStatus.length; x++) {
                    if (row.txtstatus == deskStatus[x]) {
                        html += "<option value='" + deskStatus[x] + "' selected>" + deskStatus[x] + "</option>";
                    } else {
                        html += "<option value='" + deskStatus[x] + "'>" + deskStatus[x] + "</option>";
                    }
                }
                return (
                    '<select id = "select_' + iterationSelect + '" value="' + row.txtstatus + '" class="select form-select form-select-solid">' + html + "</select>"
                );
            },
        },
    ],
});

$(document).ready(function () {});

$("#addRow").on("click", function () {
    let temp = {};
    // temp.id = "0";
    // temp.intareadetailid = "";
    temp.txtdeskname = "";
    temp.txtstatus = "";
    // temp.bitactive = true

    dt.row.add(temp).draw(false);
    counter++;
    iterationName++;
    iterationSelect++;
});

dt.on("click", "#deleteRow", function () {
    dt.row($(this).parents("tr")).remove().draw(false);
});

document.getElementById("layout").addEventListener("change", function () {
    readURL(this);
});

const getAreaDetail = () => {
    $.ajax({
        url: base_path + "/Area/GetDataById",
        type: "post",
        /*async: false,*/
        data: {
            id: areaId,
        },
        datatype: "json",
        success: function (result) {
            objDataArea = result.data;
            MappingDataArea();
        },
    });
};

const MappingDataArea = () => {
    $("#intareaheaderid").val(objDataArea.intareaheaderid);
    $("#txtareaname").val(objDataArea.txtareaname);
    $("#imageResult").attr("src", objDataArea.txtfilename);
    redrawTable();
};

const createArea = () => {
    const form = $("#form-area").serialize();
    const formdata = new FormData(document.getElementById("form-area"));
    if ($("#layout").val() != "") {
        $.ajax({
            url: "/area",
            type: "POST",
            data: formdata ? formdata : form,
            cache: false,
            contentType: false,
            processData: false,
            success: function (result) {
                alert(result.success)
            },
        });
    }
};

const redrawTable = () => {
    dt.clear();
    for (var i = 0; i < objDataArea.mareadetails.length; i++) {
        dt.row.add(objDataArea.mareadetails[i]);
        counter++;
        iterationName++;
        iterationSelect++;
    }
    dt.draw(false);
};

function MappingDropdownStatus() {
    let txt = "";
    for (let i = 0; i < deskStatus.length; i++) {
        txt += "<option value='" + deskStatus[i] + "'>" + deskStatus[i] + "</option>";
    }
    for (let i = 0; i < counter; i++) {
        document.getElementById("select_" + i).innerHTML = txt;
    }
}

const readURL = (input) => {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $("#imageResult").attr("src", e.target.result);
        };
        reader.readAsDataURL(input.files[0]);
    }
};

const BackToIndex = () => {
    window.location = "/area";
};
