var database={
    "menu":{
        "dropdown":{
            "value":{
                "Terpopuler":["#1"],
                "Terbaru":["#2"],
                "Rekomendasi":["#3"]
            }
        },
        "link":{
            "value":{
                "Home":["#1"],
                "Handpone":["#2"],
                "Soft-case":["#3"],
                "Headset":["#4"],
                "Charger":["#5"]                           
            }
        },
    }
};

// database.menu.dropdown.value.forEach(el=>{
//     alert(el);
// })

var menu_dropdown_temp="";

var menu_dropdown_key=Object.keys(database.menu.dropdown.value);

// alert(menu_dropdown_key.length);

for(x=0;x<menu_dropdown_key.length;x++){

    // alert(menu_dropdown_key[x]);
    // alert(database.menu.dropdown.value[menu_dropdown_key[x]]);

    menu_dropdown_temp+='<a class="dropdown-item" href="'+database.menu.dropdown.value[menu_dropdown_key[x]]+'">' +menu_dropdown_key[x]+'</a>';
}

$('#menu_dropdown').html(menu_dropdown_temp);
// for(x=0;x<database.menu.dropdown.value.length;x++){
    
// alert(database.menu.dropdown.value[x])

    // menu_dropdown_temp+='<a class="dropdown-item" href="#">' +database.menu.dropdown.value[x]+'</a>';
// }

//  =====================link menu

var menu_link_temp="";

var menu_link_key=Object.keys(database.menu.link.value);

for(x=0;x<menu_link_key.length;x++){

    menu_link_temp+=`<li class="nav-item">
    <a class="nav-link" href="`+database.menu.link.value[menu_link_key[x]]+`">`+menu_link_key[x]+`</a>
    <li>`;

}

$('#menu_link').append(menu_link_temp);