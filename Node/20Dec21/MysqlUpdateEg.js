var mysql = require('mysql');

var con = mysql.createConnection({
    host:"localhost",
    user:'root',
    password:'',
    database:'practice'
});

con.connect(function(err){
    if(err) throw err;
    
    var sql = "UPDATE `emp` SET `name` = 'Hemant', `mobile` = '78288059156 ', `city` = 'Agra ' WHERE `id` = 2"
    con.query(sql, function(err, result){
        if(err) throw err;
        console.log("Updated");
    });
});