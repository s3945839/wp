function changePage ()
{
    var menu = document.getElementById("menu");
    let url = menu.value;
    if (url != "") {
        location.href = url;
    }
}



function submitGalleryPage ()
{
    document.getElementById("galleryForm").submit();
}