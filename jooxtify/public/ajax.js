
// var a = document.getElementsByClassName('play');
var con = document.getElementById('setplay');

function play(id,lagu, penyanyi) {
    console.log(id);
    console.log(lagu);
    console.log(penyanyi);

    var ajax = new XMLHttpRequest();
    ajax.onreadystatechange = ()=>{
        if(ajax.readyState == 4 && ajax.status==200){
            con.innerHTML = ajax.responseText;
        }
    }

    ajax.open("GET",'/play?nilai='+id+'&judul='+lagu+'&penyanyi='+penyanyi,true);
    ajax.send();
}

    var a = document.getElementById('search');
    var content = document.getElementById('container');
    
    a.addEventListener("keyup",()=>{
        
        var hxr = new XMLHttpRequest();
    
        hxr.onreadystatechange = ()=>{
            if(hxr.readyState == 4 && hxr.status==200){
                content.innerHTML = hxr.responseText;
                // console.log('ok');
            }
        }
        try{
            hxr.open("GET",'/search?nilai='+a.value,true);
        }catch(e){
            console.log(e);
        }
        hxr.send();
    
    });
    
    

// });
