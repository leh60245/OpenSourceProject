const express = require('express')
const http = require('http')
const fs = require('fs')
const app = express()
const server = http.createServer(app)
const io = require('socket.io')(server)


app.use(express.static('src'));

app.get('/', function(req, res){
    fs.readFile('./src/index.html', (err, data) => {
        if(err) throw err;
        res.writeHead(200,{
            'Content-Type' : 'text/html'
        })
        .write(data)
        .end();
    });
});

io.sockets.on('connection', function(socket){
    socket.on('newUserConnect', function(name){
        socket.name = name;

        var message = name + '님이 접속하였습니다.'

        io.sockets.emit('updateMessage', {
            name : 'SERVER',
            message : message
        });
    });

    socket.on('disconnect', function(){
        var message = socket.name + '님이 퇴장했습니다';
        socket.broadcast.emit('updateMessage',{
            name : 'SERVER',
            message : message
        });
    });
    socket.on('sendMessage', function(data){
        data.name = socket.name;
        io.sockets.emit('updateMessage', data);
    });
});


var port = process.env.PORT || 3000;
server.listen(port, function(){
    console.log('서버를 실행하고 있습니다...'); //정상 작동하면 서버창에 이렇게 뜰 것임.
});
