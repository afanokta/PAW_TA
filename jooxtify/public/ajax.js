
// var a = document.getElementById('search');
// var con = document.getElementById('setplay');
// function play(id) {
// //   console.log("HELOO");
//     var ajax = new XMLHttpRequest();
//     ajax.onreadystatechange = ()=>{
//         if(ajax.readyState == 4 && ajax.status==200){
//             con.innerHTML = ajax.responseText;
//         }
//     }

//     ajax.open("GET",'/play?nilai='+id);
//     ajax.send();
// }

// a.addEventListener("keyup",()=>{


    var a = document.getElementById('search');
    var con = document.getElementById('container');
    
    a.addEventListener("keyup",()=>{
        
        var ajax = new XMLHttpRequest();
    
        ajax.onreadystatechange = ()=>{
            if(ajax.readyState == 4 && ajax.status==200){
                con.innerHTML = ajax.responseText;
            }
        }
    
        ajax.open("GET",'/search?nilai='+a.value);
        ajax.send();
    
    });
    
    
    

// });
