function myFunction(imgs) {
   var expandImg = document.getElementById("expandedImg");
   var imgText = document.getElementById("imgtext");
   expandImg.src = imgs.src;
   imgText.innerHTML = imgs.alt;
   expandImg.parentElement.style.display = "block";
}


function alapAdatokBeallitFormon() {
   var xhr = new XMLHttpRequest();
   xhr.open("POST", "Controller/formFeldolgozo_alapadat.php");
   xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
   xhr.onreadystatechange = function () {
      if (xhr.readyState == 4 && xhr.status == 200) {
         console.log(JSON.parse(xhr.responseText)[0]);
         var elemek = JSON.parse(xhr.responseText)[0];
         document.getElementById("email").value = elemek["email"];
         document.getElementById("vnev").value = elemek["vnev"];
         document.getElementById("knev").value = elemek["knev"];
         document.getElementById("unev").value = elemek["unev"];
         document.getElementById("orszag").value = elemek["orszag"];
         document.getElementById("telepules").value = elemek["telepules"];
         document.getElementById("irsz").value = elemek["irsz"];
         document.getElementById("szuletesidatum").value = elemek["szuletesidatum"];
      }
   };
   xhr.send("muvelet=lekeres");
}

function alapAdatokMentFormrol() {
   const formElement = document.querySelector("#form_alapadatok");
   const request = new XMLHttpRequest();
   request.open("POST", "Controller/formFeldolgozo_alapadat.php");
   request.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
   var data = "muvelet=mentes";
   data += "&email=" + document.getElementById("email").value;
   data += "&vnev=" + document.getElementById("vnev").value;
   data += "&knev=" + document.getElementById("knev").value;
   data += "&unev=" + document.getElementById("unev").value;
   data += "&orszag=" + document.getElementById("orszag").value;
   data += "&telepules=" + document.getElementById("telepules").value;
   data += "&irsz=" + document.getElementById("irsz").value;
   data += "&szuletesidatum=" + document.getElementById("szuletesidatum").value;
   //console.log(data);
   request.send(data);
   request.onload = function () {
      console.log(request.responseText);
      alert(request.responseText);
   }
}

function masodlagosAdatokBeallitFormon() {
   var xhr = new XMLHttpRequest();
   xhr.open("POST", "Controller/formFeldolgozo_masodlagosadatok.php");
   xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
   xhr.onreadystatechange = function () {
      if (xhr.readyState == 4 && xhr.status == 200) {
         console.log(JSON.parse(xhr.responseText)[0]);
         var elemek = JSON.parse(xhr.responseText)[0];
         //console.log(elemek);
         document.getElementById("allampolgarsag").value = elemek["allampolgarsag"];
         document.getElementById("bemutatkozas").value = elemek["bemutatkozas"];
      }
   };
   xhr.send("muvelet=lekeres");
}

function masodlagosAdatokMentFormrol() {
   const formElement = document.querySelector("#form_masodlagosadatok");
   const request = new XMLHttpRequest();
   request.open("POST", "Controller/formFeldolgozo_masodlagosadatok.php");
   request.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
   var data = "muvelet=mentes";
   data += "&allampolgarsag=" + document.getElementById("allampolgarsag").value;
   data += "&bemutatkozas=" + document.getElementById("bemutatkozas").value;
   //console.log(data);
   request.send(data);
   request.onload = function () {
      console.log(request.responseText);
      alert(request.responseText);
   }
}


function jelszoAdatokBeallitFormon() {
   document.getElementById("password_regi").value = "";
   document.getElementById("password_uj").value = "";
   document.getElementById("password_uj2").value = "";
}


function jelszoAdatokMentFormrol() {

   var regiJelszo = document.getElementById("password_regi").value
   var ujJelszo = document.getElementById("password_uj").value
   var ujJelszo2 = document.getElementById("password_uj2").value
   if (ujJelszo == ujJelszo2) {
      if (ujJelszo.length > 7) {
         const formElement = document.querySelector("#form_jelszoAdatok");
         const request = new XMLHttpRequest();
         request.open("POST", "Controller/formFeldolgozo_jelszocsere.php");
         request.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
         //console.log("itt2");
         var data = "muvelet=mentes";
         data += "&regijelszo=" + regiJelszo;
         data += "&ujjelszo=" + ujJelszo;
         console.log(data);
         request.send(data);
         request.onload = function () {
            console.log(request.responseText);
            //alert(request.responseText);
         }
         jelszoAdatokBeallitFormon();
      }
      else {
         alert("Nem felel meg az elöírásnak a jelszó!");
      }
   }
   else {
      alert("Nem egyezik meg az uj jelszo és a megerősítése!");
   }
}

function Login() {
   const formElement = document.querySelector("#loginForm");
   const request = new XMLHttpRequest();
   request.open("POST", "Controller/formFeldolgozo_Login.php");
   request.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

   var data = "email=" + document.getElementById("email").value
   data += "&jelszo=" + document.getElementById("jelszo").value
   console.log(data);
   request.send(data);
   request.onload = function () {
      console.log(request.responseText);
      //alert(request.responseText);
   }
}


function regisztracioFormrol() 
{
   var jelszo = document.getElementById("jelszo").value
   var jelszo2 = document.getElementById("jelszo2").value
   if (jelszo == jelszo2) 
   {
      if (jelszo.length > 7) 
      {
         const formElement = document.querySelector("#form_regisztraciosAdatok");
         const request = new XMLHttpRequest();
         request.open("POST", "Controller/formFeldolgozo_alapadat.php");
         request.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
         var data = "muvelet=mentes";
         data += "&email=" + document.getElementById("email").value;
         data += "&jelszo=" + document.getElementById("jelszo").value;
         data += "&vnev=" + document.getElementById("vnev").value;
         data += "&knev=" + document.getElementById("knev").value;
         data += "&unev=" + document.getElementById("unev").value;
         data += "&orszag=" + document.getElementById("orszag").value;
         data += "&telepules=" + document.getElementById("telepules").value;
         data += "&irsz=" + document.getElementById("irsz").value;
         data += "&szuletesidatum=" + document.getElementById("szuletesidatum").value;
         //console.log(data);
         request.send(data);
         request.onload = function () {
            console.log(request.responseText);
            alert(request.responseText);
         }
      }
      else {
         alert("Nem felel meg az elöírásnak a jelszó!");
      }
   }
   else {
      alert("Nem egyezik meg az uj jelszo és a megerősítése!");
   }

}