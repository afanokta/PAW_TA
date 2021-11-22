    $('#bar').click(function() {
      $(this).toggleClass('open');
      $('#page-content-wrapper ,#sidebar-wrapper').toggleClass('toggled');

    });

function active() {
  var title = document.title;
  var title = title.split(" ");
  var titlePages = title[2];
  var element = document.getElementById(titlePages);
  element.classList.add("active");
}
console.log(document.title);
active();