var mysql = require('mysql');

var con = mysql.createConnection({
    host:"localhost",
    user:'root',
    password:'',
    database:'practice'
});

con.connect(function(err){
    if(err) throw err;
    // con.query("SELECT * FROM `emp`",function(err, result, fields){
    con.query("SELECT * FROM `emp` WHERE id=2",function(err, result, fields){
        if(err) throw err;
        console.log(result);
    });
});