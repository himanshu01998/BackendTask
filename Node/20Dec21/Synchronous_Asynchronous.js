var fs = require('fs');

// // Asynchronous Approach
// fs.readFile('input.txt', function(err,data){
//     if(err){
//         return console.error(err);
//     }
//     else{
//         console.log("Asynchronous: "+data.toString());
//     }
// });

// Synchronous Approach

var data = fs.readFileSync('input.txt');
console.log("Synchronous: "+data.toString());
