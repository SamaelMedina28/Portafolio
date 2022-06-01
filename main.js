const form =  document.getElementById("form")

form.addEventListener("submit",(e)=>{
    e.preventDefault()
    Swal.fire({
        position: 'top-end',
        icon: 'success',
        title: 'Mensaje enviado',
        showConfirmButton: false,
        timer: 1600
      })
})