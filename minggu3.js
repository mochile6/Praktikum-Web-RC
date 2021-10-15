/* fahri setiawan 
    119140193 
    PENWEB RC
*/

function faktorial() {
    let angka = document.getElementById("Angka").value;
    const nomor = angka;

    for  ( let i =  angka-1; i > 1 ; i-- ){
        angka = angka * i ;
    }
    console.log(angka)
    let hasil = document.getElementById("hasil");
    hasil.innerHTML = `The faktorial of ${nomor} adalah ${angka} ` ;
}

function Gantiwarna(value) {
    document.body.style.backgroundColor = value;
    
    if (value == "black") {
        document.body.style.color = "white"
    }else {
        document.body.style.color = "black"
    }
}

function GantiCuaca(value) {
    let Today = document.getElementById("Cuaca");

    if ( value == "sunny" ){
        Today.innerHTML = " It is a nice and " + value + " outside today , Wear shorts! Go to The beach , or the park , and get an ice cream " ;
    }
    else if ( value == "raining" ){
        Today.innerHTML = " it is a  " + value + " outside today , Wear warn clothes! dont go to the park , and stay at home then make some hot chocolate";
        
    }
    else if ( value == "freezing" ){
        Today.innerHTML = " it is a  " + value + " outside today , Wear warn clothes! make sure your body are warm , and use termometer for checking the ghost, is him around or not";
        
    }
}