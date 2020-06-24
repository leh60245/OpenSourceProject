'use strict';

var socket = io()



socket.on('connect', function(){
    var name = prompt('이름을 입력해주세요.', '');
    while(!name) {
        var name = prompt('이름을 입력해주세요.', '');
    }
    socket.emit('newUserConnect', name);
});

var chatWindow = document.getElementById('chatWindow')

socket.on('updateMessage', function(data){
    if(data.name === 'SERVER'){ //메시지를 보내는 주체가 server인 경우
        var infoEl= document.getElementById('info');
        infoEl.innerHTML = data.message;

        setTimeout(() => { //서버가 전달하는 메시지를 1초 뒤에 지우자
            info.innerText = '';
        }, 1000);

    }else{ // 유저들의 메시지의 경우
        var chatMessageEl = drawChatMessage(data);
        chatWindow.appendChild(chatMessageEl);
    }
});

function drawChatMessage(data){ //data에는 사용자 이름과 텍스트가 담겨 있음. 이 함수로 채팅창에 텍스트를 올릴 것임.
    var wrap = document.createElement('p');
    var message = document.createElement('span');
    var name = document.createElement('span');

    name.innerText = data.name;
    message.innerText = data.message;

    name.classList.add('output__user__name');
    message.classList.add('output__user__message');
    wrap.classList.add('output__user');

    wrap.dataset.id = socket.id;

    wrap.appendChild(name);
    wrap.appendChild(message);

    return wrap;
}


var sendButton = document.getElementById('chatMessageSendBtn');
var chatInput = document.getElementById('chatInput');

sendButton.addEventListener('click', function(){ //전송 버튼을 눌렀을 때 실행될 함수
    var message = chatInput.value;

    if(!message) return false; //빈 메시지는 보내지면 안 된다!

    socket.emit('sendMessage', { //하지만 그 이외 경우라면 채팅창에 올라와야 한다!
        message
    });

    chatInput.value = '';
});



