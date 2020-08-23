var server     = require('http').createServer(),
    io         = require('socket.io')(server),
    // logger     = require('winston'),
    port       = 1337;

// Logger config
// logger.remove(logger.transports.Console);
// logger.add(logger.transports.Console, { colorize: true, timestamp: true });
// logger.info('SocketIO > listening on port ' + port);

io.on('connection', function (socket){
    var nb = 0;

    // logger.info('SocketIO > Connected socket ' + socket.id);

    socket.on('broadcast', function (message) {
        ++nb;
        // logger.info('ElephantIO broadcast > ' + JSON.stringify(message));

        // send to all connected clients
        io.sockets.emit("broadcast", message);
    });

    // socket.on('listen', function(data){
    //     console.log('client connected');
    
    //     // Example 1: send broadcast for all clients ID 'user'
    //     io.emit('user', {name: 'Marcelo Aires'});
    
    //     // Example 2: send broadcast for all clients ID 'user2'
    //     io.emit('user2', 1);
    //   });

    socket.on('disconnect', function () {
        // logger.info('SocketIO : Received ' + nb + ' messages');
        // logger.info('SocketIO > Disconnected socket ' + socket.id);
    });
});

server.listen(port);