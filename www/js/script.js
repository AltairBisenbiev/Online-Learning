 $(document).ready(function(){
  var signup=$("#signup");
  signup.click(function(){
    var name=$("#name");
    var surname=$("#surname");
    var grade=$("#grade");
    var letter=$("#letter");
    var email=$("#email");
    var password=$("#password");
    var password1=$("#password1");
    var field = password.val();
    var mnlen = 8;
    var mxlen = 15;
    var elem = document.getElementById('error');
    if (name.val()==""){
      elem.innerHTML = 'Enter your Name.';
    }
    else if (surname.val()==""){
      elem.innerHTML = 'Enter your Surname.';
    }
    else if (email.val()==""){
      elem.innerHTML = 'Enter your email.';
    }
    else if (password.val()==""){
      elem.innerHTML = 'Enter your password';
    }
    else if (field.length < 8 || field.length > 15){
      elem.innerHTML = 'Password must be at least 8 and no more than 15 characters.';
    }
    else if(password1.val()!=password.val()){
     elem.innerHTML = 'Your second password is different than first.';
    }
    else{
    $.ajax({
      url:"signup.php",
      type:"POST",
      data:{name:name.val(),surname:surname.val(),grade:grade.val(),letter:letter.val(),email:email.val(),password:password.val()},
      success: function(data){ 
        if (data==0) {
          elem.innerHTML='You have successfully registered yourself';
          window.location.href = "index.php";
        }
        if(data==1){
          elem.innerHTML='This e-mail is already taken. Please use different one.';
        }
        }
    })
    } 
  });
////////////////////////////////////////////////////////////////////////////////

var signin=$("#signin");
  signin.click(function(){              
    var mail=$("#mail");
    var pass=$("#pass");  
      $.ajax({
        url:"signin.php",
        type:"POST",
        data:{mail:mail.val(),pass:pass.val()},
        success: function(data){ 
          if (data==0) {
            window.location.href = "index.php";
          }
          if(data==1){
         alert("Your password or username is incorrect");
          }
        }
    })     
  });
////////////////////////////////////////\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
   $(".variants").change(function(){
    var id=$(".variants");

    $.ajax({
      type:"POST",
      data:{link:id.val()},
      url:"ajax_variant.php",
      success:function(data){
        $(".ajax_variant").html(data);
      }
    });
     } );
   /////////////////////////////////
    $(".test_html_edit").change(function(){
    var id=$(".test_html_edit");
    $.ajax({
      type:"POST",
      data:{link_edit:id.val()},
      url:"test_html_edit_ajax.php",
      success:function(data){
       $(".test_html_edit_ajax").html(data);       
      }
    });
     } );
   /////////////////////////////////
    $(".test_java_edit").change(function(){
    var id=$(".test_java_edit");
    $.ajax({
      type:"POST",
      data:{link_edit:id.val()},
      url:"test_java_edit_ajax.php",
      success:function(data){
       $(".test_java_edit_ajax").html(data);       
      }
    });
     } );
   /////////////////////////////////
    $(".test_cdb_edit").change(function(){
    var id=$(".test_cdb_edit");
    $.ajax({
      type:"POST",
      data:{link_edit:id.val()},
      url:"test_cdb_edit_ajax.php",
      success:function(data){
       $(".test_cdb_edit_ajax").html(data);       
      }
    });
     } );
   /////////////////////////////////
  ////////////////////////////////////////\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
   $(".variants_for_del").change(function(){
    var id=$(".variants_for_del");

    $.ajax({
      type:"POST",
      data:{link:id.val()},
      url:"ajax_variant_del.php",
      success:function(data){
        $(".ajax_variant_del").html(data);
      }
    });
     } );
   /////////////////////////////////

   ////////////////////////////////////////\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
   $(".test_html_delete").change(function(){
    var id=$(".test_html_delete");

    $.ajax({
      type:"POST",
      data:{link:id.val()},
      url:"test_html_delete_ajax.php",
      success:function(data){
        $(".test_html_delete_ajax").html(data);
      }
    });
     } );
   /////////////////////////////////
   $(".test_java_delete").change(function(){
    var id=$(".test_java_delete");

    $.ajax({
      type:"POST",
      data:{link:id.val()},
      url:"test_java_delete_ajax.php",
      success:function(data){
        $(".test_java_delete_ajax").html(data);
      }
    });
     } );
   /////////////////////////////////
  /////////////////////////////////
   $(".test_cdb_delete").change(function(){
    var id=$(".test_cdb_delete");

    $.ajax({
      type:"POST",
      data:{link:id.val()},
      url:"test_cdb_delete_ajax.php",
      success:function(data){
        $(".test_cdb_delete_ajax").html(data);
      }
    });
     } );
   /////////////////////////////////

////////////////////////////////////////////////////////////////////////////////

var i = 3; 
var j = 2;
var addAnswer=$("#addAnswer");
var vars=["0","a","b","c","d","e","f","g","h","i"];
addAnswer.click(function(){
  if(i<9){
  document.getElementById('form_inner').innerHTML = document.getElementById('form_inner').innerHTML +
"<div class='form-group' id='ans"+j+"'><label for='question'>Variant "+
vars[i].toUpperCase()+"</label><input class='form-control' type='text' name='answer_"+i+
"'  aria-describdy='help3' required> <small id='help3' class='form-text text-muted'>Enter the text of answer for Variant "+
vars[i].toUpperCase()+"</small><input type='hidden' name='variant_"+i+"' value='"+vars[i].toUpperCase()+"'/> </div>"; 
    document.getElementById('form_inner2').innerHTML = document.getElementById('form_inner2').innerHTML +
    "<label class='mycontainer' id='ans"+j+"'>"+vars[i].toUpperCase() +"<input type='radio' name='answer' value='"+i+"'><span class='mycheckmark'></span></label>";

i++;
j++;
}else alert("You can't add more than 8 answers ")
});

var remAnswer=$("#remAnswer");
var ans="ans";
var ansId;
remAnswer.click(function(){
if(i>3){
  j=j-1;
  ansId=ans+j;
  document.getElementById(ansId).outerHTML = "";
  document.getElementById(ansId).outerHTML = "";
  i=i-1;
}
});

////////////////////////////////////////////////////////////////////////////////
var formsubmit=$("#formsubmit");
  formsubmit.click(function(){         
    var emailsubmit=$("#emailsubmit");
    var namesubmit=$("#namesubmit"); 
    var messagesubmit=$("#messagesubmit"); 
    var eler = document.getElementById('msgerror');
    if (namesubmit.val() == ""){
      eler.innerHTML = 'Enter your Full Name';
    }
    else if (emailsubmit.val() ==""){
      eler.innerHTML = 'Enter your Email';
    }  
    else if (messagesubmit.val() == ""){
      eler.innerHTML = 'Enter your message';
    }
    else{
      $.ajax({
        url:"message.php",
        type:"POST",
        data:{name:namesubmit.val(),email:emailsubmit.val(),message:messagesubmit.val()},
        success: function(data){ 
          if (data==0) {
           alert("Message submitted");
          }
          if(data==1){
         alert("Error");
          }
        }
     })
    }
  });
//////////////////////////////////////////////////////////////////////
$("#dataTable").dataTable();
$("#user_list_table").dataTable();
////////////////////////////////////////////////////////////////////////////////
 
});

