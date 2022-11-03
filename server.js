const express = require('express');
const path = require('path')
const app = express();



app.use(express.static(path.join(__dirname,'static')))


/*app.get('/', function(req,res){

   // res.sendFile(path.join(__dirname,'public','index.html'))
  //  res.send('<h1>hello world!!!</h1>')

})*/








//
const PORT = process.env.PORT || 5000;
app.listen(PORT,function(){ console.log(`server started on ${PORT}`)} )


