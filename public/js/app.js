var button = document.getElementById("addNewGenre");
var form = document.getElementById("newGenreForm");

button.addEventListener("click", function() {
    if(form.style.display === 'block') {
        form.style.display = 'none';
   }else {
        form.style.display = 'block';
    }
});

