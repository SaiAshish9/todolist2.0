const mongoose=require("mongoose")


var Schema=new mongoose.Schema({
name:{
  type:String,
required:'Name cannot be blank'
},
  completed:{
  type:Boolean,
  default:false
},
created_date:{
  type:Date,
  default:Date.now
}
})


var Todo=mongoose.model('Todo',Schema)
module.exports=Todo;
