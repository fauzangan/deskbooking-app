

document.getElementById("layout").addEventListener("change", function () {
    readURL(this);
})
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#imageResult')
                .attr('src', e.target.result);
        };
        reader.readAsDataURL(input.files[0]);
    }
}

const BackToIndex = () => {
    window.location = "/area"
}