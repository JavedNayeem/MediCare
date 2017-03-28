$(document).ready(function() {



});

function details_box(id, drugs_for, drug_class, brand_name, contains, dosage_form, manufacturer, price) {
    //alert(name);
    $( ".product-title" ).text( brand_name );
    $( "#product_drugs_for" ).text( drugs_for );
    $( "#product_drugs_class" ).text( drug_class );
    $( "#product_brand_name" ).text( brand_name );
    $( "#product_contain" ).text( contains );
    $( "#product_dosage_form" ).text( dosage_form );
    $( "#product_manufacturer" ).text( manufacturer );
    $( "#product_price" ).text( price );

}


function runScript(e) {
    if (e.keyCode == 13) {
        var key = document.getElementById("product_serach_input");

        if (key.value != "") {
            window.location.replace("/product?search=" + key.value );
        }
    }
}
