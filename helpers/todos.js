const  db=require('../models')
exports.getTodos=(req,res)=>{
db.Todo.find()
.then((todos)=>{
  res.json(todos)
})
.catch((err)=>{
  res.send(err)
})
}

exports.createTodo=(req,res)=>{
db.Todo.create(req.body)
.then((todo)=>{
  res.status(201).json(todo)
})
.catch((err)=>{
  res.send(err)
})
}

exports.getTodo=(req,res)=>{
db.Todo.findById(req.params.body)
.then((todos)=>{
  res.json(todos)
})
.catch((err)=>{
  res.send(err)
})
}



exports.updateTodo=(req,res)=>{
db.Todo.findOneAndUpdate({_id:req.params.todoId},req.body,{new:true})
.then((todos)=>{
  res.json(todos)
})
.catch((err)=>{
  res.send(err)
})
}


exports.deleteTodo=(req,res)=>{
db.Todo.remove({_id:req.params.todoId})
.then(()=>{
  res.json({message:"deleted!"})
})
.catch((err)=>{
  res.send(err)
})
}
