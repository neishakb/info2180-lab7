window.onload = ()=>{
    
    let lookup = document.getElementById("lookup");
    let country = document.getElementById("country");
    let loookup_city = document.getElementById("lookup_city");
    let a  ='';
    loookup_city.addEventListener("click",function(){
        a = "cities"
    })
    lookup.addEventListener("click", function(){
        let httpRequest = new XMLHttpRequest();
        let url = "https://70a654ad9e1c468bb610e94ecd515dac.vfs.cloud9.us-east-1.amazonaws.com/info2180-lab7/world.php?country="+ country.value + "&context="+a ;
        
        //httpRequest.onreadystatechange = function();
        
        httpRequest.onreadystatechange = function() {
            if (httpRequest.readyState === XMLHttpRequest.DONE) {
                if (httpRequest.status === 200) {
                    let response = httpRequest.responseText;
                    //alert(response)
                    document.getElementById("result").innerHTML=response;
                } else {
                    alert('There was a problem with the request.');
                }
            }
        }
        
        
        httpRequest.open('GET', url);
        httpRequest.send();
        
    });
        
        
    }
    
    
    
    
    
    
    
    
