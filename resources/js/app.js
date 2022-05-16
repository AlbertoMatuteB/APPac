require('./bootstrap');

document.onkeydown = function () {
    console.log("yes");
    if (window.event.keyCode == '13') {
        document.form.submit();
    }
}