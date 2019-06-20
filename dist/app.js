const express=require("express"),
 app=express()

 const bodyParser=require("body-parser")
 app.use(bodyParser.urlencoded({extended:true}))
var routes=require('./routes/todos')

app.use(express.static(__dirname+'/views'))
app.use(express.static(__dirname+'/public'))
app.get('/',(req,res)=>{
  res.sendFile("index.html")
})


app.use('/api/todos',routes);

app.listen(process.env.PORT||3000,(req,res)=>{
  console.log("server started!");
})
