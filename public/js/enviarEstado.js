function Send(){
    let valor_estado = $("#valor_estado").val();
    let data1={"valor_estado":valor_estado};
    const key = "djfe3jrb3jvir93ehcnejknx#$^$U*)$2y$10$e8EZmZvqASfZx4UYSnhfuuVSZ/IbbKu8YqNKuMAQC/5NEPJqP.DC.";
    $.ajax({
      url:"../api/estadoR/add",
      method:"post",
      contentType: "application/json",
      data:JSON.stringify(data1),
      headers:{'x_api_key':key},
    success:function(data){
        let resultado = data['Estado'];
        if(resultado=="Exitoso"){
          const Toast = Swal.mixin({
              toast: true,
              position: 'top-end',
              showConfirmButton: false,
              timer: 1300,
              timerProgressBar: true,
              didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
                
              },
              willClose: () => {
                location.reload();
              }
              
            })

            Toast.fire({
              icon: 'success',
              title: data['Estado']+'!'+' '+data['Descripcion']
            })

            $("#btnRegistrar").prop('hidden', true);

       



        }else{  
          const Toast = Swal.mixin({
              toast: true,
              position: 'top-end',
              showConfirmButton: false,
              timer: 1300,
              timerProgressBar: true,
              didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
              }
            })

            Toast.fire({
              icon: 'error',
              title: data['Estado']+'!'+' '+data['Descripcion']
            })
           

            

        }
     

    }
    
    
  });
  }

 



