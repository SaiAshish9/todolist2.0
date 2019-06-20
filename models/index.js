const mongoose=require("mongoose")
mongoose.set('debug',true);
mongoose.connect("mongodb+srv://Sai_99:shirdisai@cluster0-4bk2v.mongodb.net/todolist2DB"
  // "mongodb://localhost:27017/todolist2"
,{useNewUrlParser:true})

mongoose.Promise=Promise;
module.exports.Todo=require('./todo')
