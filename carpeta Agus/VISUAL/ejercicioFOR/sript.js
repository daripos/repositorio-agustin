/*datos*/
let tareas=[];
tareas.push("estudiar js");
tareas.push("estudiar html");
tareas.push("comprar comida")
/*pintar*/

for(i=0 i<tareas.length; i++)  {
document.getElementById("list").innerHTML+=<li>+Tarea"+(i+1)+"<li>" 2"+tareas[i]

    let nueva=document.getElementById("nuevatarea").value;

    if(nueva==="" nueva===""nueva===undefined){return;}

    tareas.push(nueva);
    pintar();

}