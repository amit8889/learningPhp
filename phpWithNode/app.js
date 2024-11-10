var express = require('express');
var app = express();
const path = require('path')

// must specify options hash even if no options provided!
var phpExpress = require('php-express')({
  binPath: '/opt/homebrew/bin/php'
});

// set view engine to php-express
app.set('views', './public/views');
app.engine('php', phpExpress.engine);
app.set('view engine', 'php');

// routing all .php file to php-express
app.all(/.+\.php$/, phpExpress.router);

app.get("/test",(req,res)=>{
   res.status(200).json({
    success:true,
    message:"Server is healthy!"
   })
})

// set static file rendering
//app.use(express.static('public'));
 app.use(express.static(path.join(__dirname,'./public')));
app.get("*",(req,res)=>{
    res.sendFile(path.resolve(__dirname,'./index.html'))
})
module.exports = app