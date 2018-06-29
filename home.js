function save_details(){


var name = document.getElementById('txt_name').value;
var course = document.getElementById('txt_course').value;
var birthday = document.getElementById('txt_dof').value;
var marks = document.getElementById('txt_marks').value;



$.ajax({  
    type: 'POST',
    url: 'home_db.php',
    data: {
        'request_ID':'1',
        'name':name,
        'course':course,
        'birthday':birthday,
        'marks':marks

    },
    success: function(response) {

           alert(response);
          var data = $.parseJSON(response); 
         alert(data.msg);
         location.reload();
        //console.log(response.msg);
    },
    error:function(response){
        console.log('error'+response);
    }
});    

}


function search_details(){

    var name = document.getElementById('txt_name').value;

    $.ajax({

        type: 'POST',
        url: 'home_db.php',
        data: {
            'request_ID':'2',
            'name':name
        },
        success: function(response) {
           
                    
                     var data = $.parseJSON(response); 
                    //  alert(data.course);
                   
                    if(data.msg !="No result found") { 
                    var course = data.course;
                    var birthday = data.dob;
                    var name = data.name;
                    var marks = data.marks;
                    var id = data.id;
                     
                    
                      $('#txt_course').val(course);
                      $('#txt_dof').val(birthday);
                      $('#txt_name').val(name);
                      $('#txt_marks').val(marks);
                      $('#s_id').val(id);

                    }

                    else{
                        alert(data.msg);
                    }
                      
                     
                },
                error:function(response){
                    console.log('error');
                }

    })
}


function update_details(){

    var id =document.getElementById('s_id').value;

    if(id=='')
        { alert('No record found to update')
        }
    else
    {
        
        var name = document.getElementById('txt_name').value;
        var course = document.getElementById('txt_course').value;
        var birthday = document.getElementById('txt_dof').value;
        var marks = document.getElementById('txt_marks').value;
        var id =document.getElementById('s_id').value;
    $.ajax({
        
                type: 'POST',
                url: 'home_db.php',
                data: {
                    'request_ID':'3',
                    'id':id,
                    'name':name,
                    'course':course,
                    'birthday':birthday,
                    'marks':marks
                },
                success: function(response) {
                   
                            
                             var data = $.parseJSON(response); 
                             alert(data.msg);

                            },
                error:function(response){
                
                    console.log('error');
                            }
            
                })



            } 

}


function delete_details(){

    var id =document.getElementById('s_id').value;
    
        if(id=='')
            { alert('No record found to update')
            }
        else
        {

            $.ajax({
                
                        type: 'POST',
                        url: 'home_db.php',
                        data: {
                            'request_ID':'4',
                            'id':id,
                            
                        },
                        success: function(response) {
                           
                                    
                                     var data = $.parseJSON(response); 
                                     alert(data.msg);
        
                                    },
                        error:function(response){
                            console.log('error');
                        }
        
            })



        } 

}


function report_details(){

    var id =document.getElementById('s_id').value;
    
        if(id=='')
            { alert('No record found to view Report')
            }
        else
            {
                window.open('report.php?id='+id) ;   
               
            }    


}