// const button = document.querySelector(".button");
const toast = document.querySelector(".toasts");
const closeIcon = document.querySelector(".close");
const progress = document.querySelector(".progress");

let timer1, timer2;

window.onload = function() {
  toast.classList.add("active");
  progress.classList.add("active");

  
  timer1 = setTimeout(() => {
    toast.classList.remove("active");
  }, 10000); //1s = 1000 milliseconds

  timer2 = setTimeout(() => {
    progress.classList.remove("active");
  }, 10000);
};

closeIcon.addEventListener("click", () => {
  toast.classList.remove("active");
  
  setTimeout(() => {
    progress.classList.remove("active");
  }, 300);

  clearTimeout(timer1);
  clearTimeout(timer2);
});


// chat bot

    const userMessage = [
        ["hi","hey","hello"],
        ["sure","yes","no"],
        ["how are you","how is life","how are things","how are you doing","good"],
    
        [
            "your name please",
            "your name",
            "may i know your name",
            "what is your name",
            "what do you call yourself"
        ]
    ];
    
    const botReply = [
        ["Hello!","Hi!","hey!","Hi there!","Bonjour Comment cava"],
        ["okay"],
        [
            "fine ... how are you?",
            "Pretty well, how are you?",
            "Fantastic, how are you?",
            "I am doing greate thank you",
            "Good to know"
        ],
        [
            "Eli warren at your service"
        ]
    ];
    
    const alternative = [
        "Same here,dude.",
        "Ask something else..",
        "hey, i'm listening",
        "hey, i'm not sure on what you are asking me, please be specific!",
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
    
    document.addEventListener("DOMContentLoaded", () =>{
        const inputField = document.getElementById("input");
        inputField.addEventListener("keydown", function(e){
            if(e.code === "Enter"){
                    let input = inputField.value.trim();
                    if(input !== ""){
                        output(input);
                    } 
                    inputField.value= "";
            }
        });
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