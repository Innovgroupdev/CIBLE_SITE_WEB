function readURL(input, viewer) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#' + viewer).attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

$("#customFileEg1").change(function () {
    console.log("hello")
    readURL(this, 'viewer');
});

$("#customFile2").change(function () {
    console.log("hello")
    readURL(this, 'viewer');
});

