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
    language: {
        emptyTable: "",
        zeroRecords: "",
    }
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
