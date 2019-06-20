const mongoose=require("mongoose")
mongoose.set('debug',true);
mongoose.connect("todolist2DB"
  // "mongodb://localhost:27017/todolist2"
,{useNewUrlParser:true})

mongoose.Promise=Promise;
module.exports.Todo=require('./todo')
