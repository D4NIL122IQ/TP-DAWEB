const tirage = document.querySelector(".tirage") 
const choix = document.querySelector("#saisie")
const btn = document.querySelector("#btn")
const score = document.querySelector(".score")
let sco = 0;

function verifier(random) {
    if (random == choix.value){
        return true
    }else{
        return false
    }
}

function jouer() {
    if(choix.value == ""){
        alert("il faut choisir un number")
    }else{
    let random =Math.floor(Math.random()*6)+1
    tirage.innerHTML = "<h3> le nombre generer est : "
    tirage.innerHTML +=  random + "</h3>"
    if(verifier(random) == true){
        sco +=1;
        score.innerHTML = "<h3> Score : "+sco.toFixed(1)+"</h3>"
        score.classList.add("vert")
        score.classList.remove("rouge")
    }else{
        sco -= 0.1;
        score.innerHTML = "<h3> Score : "+ sco.toFixed(1) +"</h3>"
        score.classList.remove("vert")
        score.classList.add("rouge")
    }
    }
}

btn.addEventListener("click" ,jouer)