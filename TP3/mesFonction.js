
const write = document.querySelector("#chaine");
const read = document.querySelector("#resultat");


write.addEventListener("keyup", () => {
  let name = [...write.value];
  read.value = name.reverse().join("");
});

const arobase = document.querySelector('#myInput')

arobase.addEventListener("keyup", ()=>{

  let chaine = [...arobase.value];

  if (chaine.includes("@")){
    arobase.classList.add("contenueCorrect")
    arobase.classList.remove("contenueErrone")
  }else{
    arobase.classList.add("contenueErrone")
    arobase.classList.remove("contenueCorrect")
  }
})

const pwd1 = document.querySelector("#ps1");
const pwd2 = document.querySelector("#psd2");
const pwd = document.querySelectorAll(".pwd")

pwd.forEach((element)=>{
  element.addEventListener("keyup",()=>{
    if(pwd1.value == pwd2.value){
      pwd1.classList.add("contenueCorrect");
      pwd2.classList.add("contenueCorrect");
      pwd1.classList.remove("contenueErrone");
      pwd2.classList.remove("contenueErrone");
    }else{
      pwd1.classList.remove("contenueCorrect");
      pwd2.classList.remove("contenueCorrect");
      pwd1.classList.add("contenueErrone");
      pwd2.classList.add("contenueErrone");
    }
  })
})