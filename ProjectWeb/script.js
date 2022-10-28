/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/ClientSide/javascript.js to edit this template
 */


let selectMenu = document.querySelector("#products");
let heading = document.querySelector(".right h2");
let container = document.querySelector(".product-wrapper");

selectMenu.addEventListener("change", function(){
    let categoryName = this.value;
    heading.innerHTML = this[this.selectedIndex].text;
    
    let http = new XMLHttpRequest();
    http.onload = function(){
        //respuesta exitosa del servidor
        if(this.readyState == 4 && this.status == 200){
            let response = JSON.parse(this.responseText);
            let out = "";
            for(let item of response){
                out += `
                    <div class = "product">
                        <div class = "left">
                            <img src = ${item.imagen} alt="Error al cargar">
                        </div>
                        <div class = "right">
                            <p class = "title">${item.titulo}</p>
                            <p class = "price"> $ ${item.precio}</p>
                            <p class = "plataforma">${item.plataforma}</p>
                            <p class = "categoria">${item.categoria}</p>
                            <p class = "description">${item.descripcion}</p>
                        </div>
                    </div>
                `;
            }
            container.innerHTML = out;
        }
    }
    http.open('POST',"script.php");
    http.setRequestHeader("content-type", "application/x-www-form-urlencoded");
    http.send("plataforma="+categoryName);
});