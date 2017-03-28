$(document).ready(function() {

    var table = document.getElementsByTagName("table")[0];
    var tbody = table.getElementsByTagName("tbody")[0];
    tbody.onclick = function (e) {
        e = e || window.event;
        var data = [];
        var target = e.srcElement || e.target;
        while (target && target.nodeName !== "TR") {
            target = target.parentNode;
        }
        if (target) {
            var cells = target.getElementsByTagName("td");
            for (var i = 0; i < cells.length; i++) {
                data.push(cells[i].innerHTML);
            }
        }
        alert(data);
    };






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