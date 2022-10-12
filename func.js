
function loadlink(){
    $('#refresh').load('results.php',function () {
        // $(this).unwrap();
    });
}

loadlink(); 
setInterval(function(){
    loadlink() 
}, 1500);


