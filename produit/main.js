function verif(){
    let code = document.getElementById("code").value;
    let nom = document.getElementById("nom").value;
    let prix = document.getElementById("prix").value;
    let q=document.getElementById("q").value;
    if(vf(code) == false || code.length <3){
        document.getElementById("e1").innerHTML = "le code de produit est faux.";
        document.getElementById("e2").innerHTML = "";
        document.getElementById("e3").innerHTML ="";
        document.getElementById("e4").innerHTML ="";
        return false;
    }else if(vf(nom) == false || nom.length == 0 ){
        document.getElementById("e2").innerHTML = "le nom de produit est faux.";
        document.getElementById("e1").innerHTML = "";
        document.getElementById("e3").innerHTML = "";
        document.getElementById("e4").innerHTML ="";
        return false;
    }else if(isNaN(prix)==true || prix == "0" || prix ==""){
        document.getElementById("e3").innerHTML = "le prix de produit est faux.";
        document.getElementById("e1").innerHTML = "";
        document.getElementById("e2").innerHTML = "";
        document.getElementById("e4").innerHTML ="";
        return false;
    }else if(Number(q)<=0){
        document.getElementById("e3").innerHTML = "";
        document.getElementById("e1").innerHTML = "";
        document.getElementById("e2").innerHTML = "";
        document.getElementById("e4").innerHTML ="enti b mo5k tw !!!!!!!!";
        return false;
    }

}
function vf(a){
    let nc = 0;
    let nn = 0 ; 
    let vr = a.toUpperCase();
    for(let i = 0 ; i<vr.length; i++){
        if(("A"<=vr.charAt(i) && vr.charAt(i)<="Z")){
            nc = nc+1;
        }else if (("0"<=vr.charAt(i) && vr.charAt(i)<="9")){
            nn = nn+1
        }
    }
    if(nn!=0 && nc!=0 && (nn+nc) == vr.length){
        return true;
    }else{
        return false;
    }
}