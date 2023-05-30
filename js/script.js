const navbar = document.getElementsByTagName('nav')[0];
window.addEventListener('scroll',function(){
    console.log(window.scrollY);
    if (window.scrollY > 1) {
        navbar.classList.replace('bg-transparent', 'nav-color');
        
    }else if(this.window.scrollY <=0){
        navbar.classList.replace('nav-color', 'bg-transparent')
    }

})


// Kasus ke-2
function textAreaActivate() {

    const textarea = document.querySelector("#textarea")
    const textp = document.querySelector("#text1")
    const self = document.querySelector("#edit-btn")
    const other = document.querySelector("#save-btn")

    // Menampilakn textarea
    textarea.style.display = "";
    textp.style.display = "none";

    // Memindahkan innerText
    textarea.value = textp.innerText;

    // Disable Button
    self.style.display = "none";
    other.style.display = "";
    
}

function setValue(){
    const textarea = document.querySelector("#textarea")
    const textp = document.querySelector("#text1")
    const self = document.querySelector("#save-btn")
    const other = document.querySelector("#edit-btn")

    // Menghilangkan textarea
    textarea.style.display = "none";
    textp.style.display = "";

    // Memindahkan innerText
    textp.innerText = textarea.value;

    // Disable Button
    self.style.display = "none";
    other.style.display = "";

}

// Kasus ke-3
const form = document.querySelector("#myForm");
const btn1 = document.querySelector("#btn-send");

function toString(event) {
    event.preventDefault();

    const nama = document.querySelector("#formNama").value;
    const email = document.querySelector("#formEmail").value;
    const komentar = document.querySelector("#formComment").value;
    const output = document.querySelector("#output-form");
    const oKomentar = document.querySelector("#output-komentar");

    oKomentar.innerHTML = komentar;
    output.innerText = "Terimakasih kepada " + nama + " (" + email + ") " + "sudah memberikan komentar!";
}

form.addEventListener('submit', toString);
