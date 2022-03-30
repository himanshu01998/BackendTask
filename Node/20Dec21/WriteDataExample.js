var file = require('fs');

file.writeFile('input.txt','new data to be checked', function(err){
    if(err){
        return console.error(err)
    }
    else{
        console.log("Data written success")
    }

    file.readFile('input.txt', function(err, data){
        if(err){
            return console.error(err)
        }
        else{
            console.log("Data:"+data.toString())
        }
    });
});
