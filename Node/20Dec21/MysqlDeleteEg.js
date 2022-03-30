var mysql = require('mysql');

var con = mysql.createConnection({
    host:"localhost",
    user:'root',
    password:'',
    database:'practice'
});

con.connect(function(err){
    if(err) throw err;
    
    var sql = "DELETE FROM `emp` WHERE `id` = 2"
    con.query(sql, function(err, result){
        if(err) throw err;
        console.log("Deleted");
    });
});