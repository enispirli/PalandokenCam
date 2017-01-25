/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function () {

    $("#summernoteUrunAciklama").summernote({
        dialogsInBody: true,
        dialogsFade: true,
        height: 600, // set editor height
        minHeight: 600, // set minimum height of editor
        maxHeight: null, // set maximum height of editor
        focus: true
                // Add fade effect on dialogs

                // set focus to editable area after initializing summernote
    });
    $("#urunEkleButton").click(function () {
        var markupStr = $("#summernoteUrunAciklama").summernote('code');
        if (markupStr == "<p><br></p>") {
            $("#urunAciklama").val("");
        } else {
            $("#urunAciklama").val(markupStr);
        }
    });
    
    if($("#iletisim").val()) {
        var val = $("#iletisim").val();
        $("#summernoteIletisimIcerik").summernote("code", val);
    }
    $("#summernoteIletisimIcerik").summernote({
        dialogsInBody: true,
        dialogsFade: true,
        height: 400, // set editor height
        minHeight: 400, // set minimum height of editor
        maxHeight: null, // set maximum height of editor
        focus: true
    });
    $("#iletisimKaydetButton").click(function () {
        var markupStr = $("#summernoteIletisimIcerik").summernote('code');
        if (markupStr == "<p><br></p>") {
            $("#iletisim").val("");
        } else {
            $("#iletisim").val(markupStr);
        }
    });
    


});