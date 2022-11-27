/*efecto de transicion de menu de navegacion*/
window.addEventListener("scroll", function(){              
    var header = document.querySelector("header");          
     header.classList.toggle("abajo", window.scrollY>0);
 })
            //lo que hace es crear un nuevo evento cuando el usuario este navegando(scroll), 
            //despues se crea una variable llamada header y selecciono la etiqueta de mi html llamada header,
            //despues creo una clase llamada abajo para darle los estilos para activar ete efecto y cuando el usuario navegue y baje se acticara el efecto.
/*-------------------------------------------------------------------------------*/

window.addEventListener('load', () => {

    setTimeout(carga, 2000);

    function carga(){
        document.getElementById('loader').className = 'hide';
 
        document.getElementById('contenido').className = '';
    }

}) 






/* let login = function(){
    
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    })
        
        Toast.fire({
        icon: 'success',
        title: 'Signed in successfully'
        })
} */


