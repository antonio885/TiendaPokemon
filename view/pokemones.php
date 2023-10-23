<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../view/assets/css/bootstrap.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" />

</head>

<body onload="traerInfo()" style="background-image:url(../view/assets/img/pokemon-in-the-wild.png) ; background-size: cover; ">
   <div class="container-fluid mt-3 " >
    <div class="row align-content-center text-uppercase  ">
    <div class="row d-flex justify-content-center align-content-center"  id="asa"></div>
    
</div>
</div>

</body>

</html>
<script>
  // let descripcionPoke = []
  
    function traerInfo() {
       
        return new Promise(Response => {
            let urlDetalles = localStorage.urlDetalles
            fetch(urlDetalles)
                .then((response) => response.json())
                .then((data) => {
                    
              //     let  localizacion = data.location_area_encounters
              //   fetch(localizacion) 
              //     .then( Response.json())
              //   })  
              //   .then(descripcionPoke =>{
              //  localidadpoke = descripcionPoke
               
             
                    document.getElementById("asa").innerHTML = `<div class="card " style="width: 21rem; background-color:#FE0000 ;  ">
  <img src=" ${data.sprites.other["official-artwork"].front_default}" style="background-image: url(../view/assets/img/desktop-wallpaper-pokeball-background-live-pokeball-pokebola.jpg); background-size: cover; background-position: center; " class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title text-white text-center fs-2">${data.name}</h5>
    <p class="card-text fw-semibold text-white text-center">numero: ${data.order}</p>
  </div>
  <ul class="list-group list-group-flush rounded  ">
    <li class="list-group-item fw-semibold fs-5 bg-info ">Peso: ${(data.weight * 0.1).toFixed(1)+"kg"} </li>
    <li class="list-group-item fw-semibold fs-5 bg-info">Altura: ${(data.height * 0.1).toFixed(1)+ "cm"}</li>
    <li id= "hp${data.name}" class="list-group-item fw-semibold fs-5 bg-info"></li>
    <li id="ataque${data.name}" class="list-group-item fw-semibold fs-5 bg-info ">A third item</li>
    <li id="defensa${data.name}" class="list-group-item fw-semibold fs-5 bg-info">A third item</li>
    <li id="velocidad${data.name}" class="list-group-item fw-semibold fs-5 bg-info">A third item</li>
    <li id="defensaSpec${data.name}" class="list-group-item fw-semibold fs-5 bg-info">A third item</li>
    <li id="ataqueSpec${data.name}" class="list-group-item fw-semibold fs-5 bg-info">A third item</li>
   
   

</div>`
                    // document.getElementById("nombre").innerHTML = 
                    //  document.getElementById("imagenpoke").src =  data.sprites.other["official-artwork"].front_default
                    let hp = data.stats[0].base_stat
                    let attack = data.stats[1].base_stat
                    let defense = data.stats[2].base_stat
                    let speed = data.stats[5].base_stat
                    let ataqSpecial = data.stats[3].base_stat
                    let defeSpecial = data.stats[4].base_stat
                  
                   
        
           

document.getElementById(`hp${data.name}`).innerHTML = `hp: ${hp}` 
document.getElementById(`ataque${data.name}`).innerHTML = `ataque: ${attack}` 
document.getElementById(`defensa${data.name}`).innerHTML = `defensa: ${defense}`   
document.getElementById(`velocidad${data.name}`).innerHTML = `velocidad: ${speed}`  
document.getElementById(`defensaSpec${data.name}`).innerHTML = `Defensa Especial: ${speed}`  
document.getElementById(`ataqueSpec${data.name}`).innerHTML = `ataque especial: ${ataqSpecial}` 
  
                })
               
        })
      
    }
  
</script>