function update(obj,id) {
  console.log('func works');
  var date = new Date(obj.innerHTML);
  var today = new Date();
  var age = (today - date) / (1000 * 60 * 60 * 24 * 365.25);
  age = Math.floor(age);
  if(age >= 0){
    $.ajax ({
      url:"/user_profiles/"+id,
      type:"PUT",
      data:{'id':id,'dob':obj.innerHTML},
      success: function() {
        $(".alert").show();
        //updating the age
        $("#"+id).html(age);
      }
    });
  }
  else {
    $("#msg_content").html("Enter a valid date!");
    $(".alert").show();
  }
}
