window.onload = function() {
    const toasts = document.querySelectorAll(".toasts");

    toasts.forEach((toast) => {
        const closeIcon = toast.querySelector(".close");
        const progress = toast.querySelector(".progress");

        // Show toast
        toast.classList.add("active");
        progress.classList.add("active");

        // Hide toast after 10 seconds
        setTimeout(() => {
            toast.classList.remove("active");
            progress.classList.remove("active");
        }, 10000);

        // Close toast manually
        if (closeIcon) {
            closeIcon.addEventListener("click", () => {
                console.log("Close icon clicked!"); // Check if this logs
                toast.classList.remove("active");
                progress.classList.remove("active");
            });
        }
        
    });
};



// chat bot
const userMessage = [
    ["salut", "coucou", "bonjour"],
    ["bien sûr", "oui", "non"],
    ["comment ça va", "comment va la vie", "comment ça se passe", "comment vas-tu", "bien"],
    ["votre nom s'il vous plaît", "votre nom", "puis-je connaître votre nom", "quel est votre nom", "comment vous appelez-vous"]
];

const botReply = [
    ["Bonjour Coucou!", "Salut Coucou!", "Bonjour Coucou!", "Salut là!", "Bonjour, comment ça va"],
    ["d'accord"],
    ["bien... et toi ?", "Plutôt bien, et toi ?", "Fantastique, et toi ?", "Je vais très bien merci", "Bon à savoir"],
    ["Eli Warren à votre service"]
];

const alternative = [
        "Pareil ici, mec.",
        "Demande autre chose..",
        "Hé, je t'écoute",
        "Hé, je ne suis pas sûr de ce que tu me demandes, sois plus précis s'il te plaît !"
];
    
    const synth = window.speechSynthesis;
    
    function voiceControl(string){
        let u = new SpeechSynthesisUtterance(string);
        u.lang = "fr-FR";
        u.voice = speechSynthesis.getVoices().find(voice => voice.lang.startsWith("fr"))
        u.text = string;
        u.volume = 1;
        u.rate = 1;
        u.pitch = 1;
        synth.speak(u);
    }

    function sendMessage(){
        const inputField = document.getElementById("input");
        let input = inputField.value.trim();
        if(input !== ""){
            output(input);
        } 
        inputField.value= "";
    }
    
 document.addEventListener("DOMContentLoaded", () => { 
    const inputField = document.getElementById("input");

    // Check if inputField exists before adding event listener
    if (inputField) {
        inputField.addEventListener("keydown", function(e) {
            if (e.code === "Enter") {
                let input = inputField.value.trim();
                if (input !== "") {
                    output(input); // Call your output function here
                } 
                inputField.value = ""; // Clear the input field
            }
        });
    } else {
        console.error("Input field with ID 'input' not found.");
    }
});   
    
    function output(input){
        let product;
    
        let text = input.toLowerCase().replace(/[^\w\s\d]/gi, "");
    
        text = text
            .replace(/[\W_]/g, " ")
            .replace(/ a /g, " ")
            .replace(/i feel /g, " ")
            .replace(/whats/g, "whatis")
            .replace(/please/g, "")
            .replace(/ please/g, "")
            .trim();
    
            let comparedText = compare(userMessage, botReply, text);
            product = comparedText
            ?comparedText
            :alternative[Math.floor(Math.random() * alternative.length)];
            addChat(input,product);
    
    }
    
    function compare(triggerArray, replyArray, string){
        let item;
        let items;
        for (let x = 0; x < triggerArray.length; x++){
            for (let y = 0; y < replyArray.length; y++){
                if (triggerArray[x][y] === string){
                    items = replyArray[x];
                    item = items[Math.floor(Math.random() * items.length)];
                }
            }
        }
        //containMessageCheck(string);
        if(item) return item;
        else return containMessageCheck(string);
    }
    
    function containMessageCheck(string){
        let expectedReply= [
            [
                "Good Bye, dude",
                "Bye see you",
                "Dude,Bye. Take care of yourself"
            ],
            [
                "Goodnight","dude","Have a sound sleep","Sweet dreams"
            ]
        ];
    
        let expectedMessage= [
            [
                "bye",
                "tc",
                "take care"
            ],
            [
                "Goodnight","night"
            ]
        ];
    
        let item;
    
        for(let x = 0; x < expectedMessage.length; x++){
            if (expectedMessage[x].includes(string)){
                let items = expectedReply[x];
                item = items[Math.floor(Math.random() * items.length)];
            }
        }
        return item;
    }
    function addChat(input, product){
        const mainDiv = document.getElementById("message-section");

        let userDiv = document.createElement("div");
        userDiv.id = "user";
        userDiv.classList.add("message");        
        userDiv.innerHTML =`<i class="fas fa-user img2"></i> <span id="user-response">${input}</span>`;
        mainDiv.appendChild(userDiv);
    
    
        let botDiv = document.createElement("div");
        botDiv.id = "bot";
        botDiv.classList.add("message");
        botDiv.innerHTML = `<img src="images/logo1.jpeg" alt="" class="img"><span id="bot-response">${product}</span>`;
        mainDiv.appendChild(botDiv);
    
        var scroll = document.getElementById("message-section");
        scroll.scrollTop = scroll.scrollHeight;
        voiceControl(product);
    }

    // const chatBox = document.querySelector('#card');

    // chatBox.onmouseenter = () =>{
    //     console.log('here');
    //     window.scrollTo({
    //         top: 0,
    //         bahevior: 'smooth'
    //     });
    //     chatBox.classList.add('active');
    //   }

    //   chatBox.onmouseleave = () =>{
    //     chatBox.classList.remove('active');
    //   }

    //   if(!chatBox.classList.contains('active')){//if active class not contains in chatbox then scroll to bttom
    //     scrollToBottom();
    //    }
      
    //   function scrollToBottom(){
    //     chatBox.scrollTop = chatBox.scrollHeight;
    //   }