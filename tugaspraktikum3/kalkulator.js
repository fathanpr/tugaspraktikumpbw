let outputScreen = document.getElementById("output-screen");
let button1 = document.getElementById("hapus");
let button2 = document.getElementById("samadengan");

function display(num){  //Function mengambil data dari nilai pada display input
    outputScreen.value += num;
}
function hasil(){   //Function =/hasil 
    try{
        outputScreen.value = eval(outputScreen.value); //Eval buat eksekusi argumen dari outputScreen(inputan)
    }
    catch(err)
    {
        outputScreen.value = "Error!"; //menyatakan error kalo argumen nya tidak bisa di eksekusi (misal 2 simbol)
        button1.disabled = true;
        button2.disabled = true;
    }
}
const Clear = () => {
    outputScreen.value = ""; //untuk mengclear inputan kembali ke nilai placeholder
    button1.disabled = false;
    button2.disabled = false;
}
const del = () => {
    outputScreen.value = outputScreen.value.slice(0,-1); //mengurangi jumlah karakter dari outputscreen (mengembalikan elemen dalam array sebagai object)
}