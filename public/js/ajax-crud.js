function update(obj,id) {
  console.log('func works');
  $.ajax ({
    url:"/user_profiles/"+id,
    type:"PUT",
    data:{'id':id,'age':obj.innerHTML}
  });
}
