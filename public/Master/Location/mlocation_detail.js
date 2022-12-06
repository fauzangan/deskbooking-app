let idLocation
let objData
const urlParam = new URLSearchParams(window.location.search)
if(urlParam != ""){
    idLocation = encodeURI(urlParam.get('id'))
}
else{
    idLocation = null
}

$(document).ready(() => {
    if(idLocation != null){
        getDatabyId()
    }
    else{
        getAllData()
    }
})

const getAllData = () => {
    $.ajax({
        url: "/Location/getAllData",
        type: "get",
        datatype: "json",
        success: (res) => {
            if(res.sukses){
                objData = res.data
                MappingAllData()
            }
            else{
                console.log("Data Kosong")
            }
        }
    })
}

const getDatabyId = (id) => {
    $.ajax({
        url: "/Location/getDataById",
        type: "post",
        data: {
            id: id
        },
        datatype: "json",
        success: (res) => {
            if(res.sukses){
                objData = res.data
                MappingAllData()
                MappingDataById()
            }
            else{
                console.log("Data Kosong")
            }
        }
    })
}

const MappingAllData = () => {
    let txt = "";
    for (let i = 0; i < objData.length; i++){
        txt += '<option value="' + objData[i].intSiteId + '" selected>' + objData[i].txtSiteName + "</option>"
    }
    txt += "<option value='' selected disabled>Select Site</option>"
    $("site").html(txt)
}

const MappingDataById = () => {
    $("#locationid").val(objData.intlocationid)
    $("#txtlocationname").val(objData.txtlocationname)
    $("#bitactive").prop('checked', objData.bitactive)
}