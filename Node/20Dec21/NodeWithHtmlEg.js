var http = require('http');
http.createServer(function (req, res) {
// Send the HTTP header 
   // HTTP Status: 200 : OK
   // Content Type: text/plain
    res.writeHead(200, {'Content-Type': 'text/html'});


// Send the response body as "Hello World"
    res.end('Hello World!');  // Console will print the message
}).listen(8080);
