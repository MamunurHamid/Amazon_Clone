

// document.getElementById('down-list').addEventListener('click',function()
// {
//     document.getElementById('hidden').style.display='block'
   
// })

document.getElementById('down-list').addEventListener('click', function() {
    console.log("hiiii");
    document.getElementById('hidden').style.display = "block";
    document.getElementById('up-list').style.display = "block";
    document.getElementById('down-list').style.display = "none";
});

document.getElementById('up-list').addEventListener('click', function() {
    document.getElementById('hidden').style.display = "none";
    document.getElementById('up-list').style.display = "none";
    document.getElementById('down-list').style.display = "block";
});


