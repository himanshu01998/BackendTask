const http = require('http');
const requestListener = (req, res) =>{
    console.log("Request is incoming");

    const resposeData = {
        message: "Hello!, Welcome",
        articleData:{
            articleName: "JSON in Node.js",
            category: "NodeJS",
            status: "Published"
        },
        endMessage: "This is JSON Node tutorial"
    }
    const jsonContent = JSON.stringify(resposeData['articleData']);
    res.end(jsonContent);
};
const server = http.createServer(requestListener);
server.listen(3600, 'localhost', function(){
    console.log("Server is on port:3600")
})