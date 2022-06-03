const form =  document.getElementById("form")
const button = document.getElementsByClassName("select")
const hidden = document.getElementById("check")
form.addEventListener("submit",(e)=>{
    Swal.fire({
        position: 'top-end',
        icon: 'success',
        title: 'Mensaje enviado',
        showConfirmButton: false,
        timer: 1600
      })
})
for (let index = 0; index < button.length; index++) {
  const element = button[index];
  console.log(element)
  element.addEventListener("click",()=>{
    hidden.checked = false
  })
}
