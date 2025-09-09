function sendToWhatsapp(){
    let result = confirm("Do you want to send this?");
    let number = "+2349013831886";
    


    if(result){
        let name = document.getElementById('name').value;
        let email = document.getElementById('email').value;
        let message = document.getElementById('message').value;
        var url = "https://wa.me/" + number + "?text="
        + "My name is : " +name+ "%0a"
        + "and this is my email : " +email+ "%0a"
        + "I want to tell you that : " +message+ "%0a%0a";
        window.open(url, '_blank').focus();
    }else{
        window.location.href= "index.html";
    }
    
}