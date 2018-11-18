$(".sidebar-elements li.parent").click( function () {
   let i =  $(".sidebar-elements li.parent").index(this);
    sessionStorage.setItem('current_meun_index', i);
});
let currentMenuIndex = sessionStorage.getItem('current_meun_index');
$(".sidebar-elements li.parent").eq(currentMenuIndex).addClass('open');