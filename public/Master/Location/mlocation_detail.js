let idLocation
let objData
let objDataById
const urlParam = new URLSearchParams(window.location.search)
if(urlParam != ""){
    idLocation = encodeURI(urlParam.get('id'))
}
else{
    idLocation = null
}

$(document).ready(() => {
    getAllData()
    if(idLocation != null){
        getDatabyId()
    }
})

const getAllData = () => {
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: "/site/getalldata",
        type: "POST",
        data:{
            // _token:'{{ csrf_token() }}'
        },
        dataType: "json",
        success: (res) => {
            objData = res.data
            MappingSiteToDropdown()
            // if(res.sukses){
            //     objData = res.data
            //     console.log(objData)
            //     MappingSiteToDropdown()
            // }
            // else{
            //     console.log("Data Kosong")
            // }
        }
    })
}

const getDatabyId = () => {
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: "/location/getdatabyid",
        type: "post",
        data: {
            id: idLocation
        },
        dataType: "json",
        success: (res) => {
            console.log(res)
                objDataById = res.data
                MappingSiteToDropdownEdit()
                MappingDataById()
        }
    })
}

const MappingSiteToDropdown = () => {
    let txt = "";
    for (let i = 0; i < objData.length; i++){
        txt += '<option value="' + objData[i].intsiteid + '" selected>' + objData[i].txtsitename + "</option>"
    }
    txt += "<option value='' selected disabled>Select Site</option>"
    document.getElementById("intsiteid").innerHTML = txt
}

const MappingSiteToDropdownEdit = () => {
    let txt = ""
    for (let i = 0; i < objData.length; i++){
        if(objDataById.intsiteid == objData[i].intsiteid){
            txt += '<option value="' + objData[i].intsiteid + '" selected>' + objData[i].txtsitename + "</option>"
        }
        else{
            txt += '<option value="' + objData[i].intsiteid + '">' + objData[i].txtsitename + "</option>"
        }
    }
    $("#intsiteid").html(txt)
}

const MappingDataById = () => {
    $("#intlocationid").val(objDataById.intlocationid)
    $("#txtlocationname").val(objDataById.txtlocationname)
    $("#bitactive").prop('checked', objDataById.bitactive)
}

const createObject = () => {
    let result = {}
    if(idLocation == null){
        result.intsiteid = $("#intsiteid").val()
        result.txtlocationname = $("#txtlocationname").val()
    }
    else{
        result.intsiteid = $("#intsiteid").val()
        result.intlocationid = $("#intlocationid").val()
        result.txtlocationname = $("#txtlocationname").val()
        result.bitactive = $("#bitactive").val()
    }
    return result
}

const CreateLocation = () => {
    let resultForm = createObject()
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: "/location/createlocation",
        type: "post",
        data: resultForm,
        dataType: "json",
        success: (res) => {
            alert(res.success)
            window.location = "/location"
        }
    })
}

const UpdateLocation = () => {
    // let resultForm = createObject()
    
    let id = $("#intlocationid").val()
    let site = $("#intsiteid").val()
    let location = $("#txtlocationname").val()
    let active = $("#bitactive").val()
    if(active == "on"){
        active = 1
    }
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: "/location/updatelocation/" + idLocation,
        type: "PUT",
        data: {
            location: location
        },
        dataType: "json",
        success: (res) => {
            alert(res.success)
            window.location = "/location"
        }
    })
}

const BackToIndex = () => {
    window.location = "/location"
}