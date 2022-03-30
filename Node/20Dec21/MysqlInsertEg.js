var mysql = require('mysql');

var con = mysql.createConnection({
    host:"localhost",
    user:'root',
    password:'',
    database:'practice'
});

con.connect(function(err){
    if(err) throw err;
    
    var sql = "INSERT INTO `emp` (`name`, `mobile`, `city`) VALUES ('Ram', '982950159', 'Mumbai')"
    con.query(sql, function(err, result){
        if(err) throw err;
        console.log("Inserted");
    });
});