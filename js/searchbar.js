$('#close').click(function(){
$(this).parent().toggleClass('closed');
  $(this).prev().focus();
});

setTimeout(function() {
  $('#close').click();
}, 100);

setTimeout(function() {
  $('#close').click();
}, 1500);



function search_story() {

    let input = document.getElementById('searchbar').value;
    input=input.toLowerCase();
    let x = document.getElementsByClassName('stories');


    for (i = 0; i < x.length; i++) {

        if (!x[i].innerHTML.toLowerCase().includes(input)) {
            x[i].style.display="none";
            x[i].style.visibility="inherit";
        }
        else {
            x[i].style.display="inline";
            x[i].style.visibility="visible";
        }
    }
}
