<template>
    <a class="btn btn-danger" @click="eliminar">Eliminar</a>
</template>

<script>
    export default {
        props: ['id'],
        methods: {
            eliminar() {
                let that = this;
                swal({
                  title: "¿Estás seguro?",
                  text: "No se podrá recuperar el artículo",
                  type: "warning",
                  showCancelButton: true,
                  confirmButtonColor: "#DD6B55",
                  confirmButtonText: "Si, estoy seguro",
                  closeOnConfirm: true
                },
                function(){
                  that.deleteRequest();
                });
            },
            deleteRequest(){
                axios.delete('/articulos/' + this.id).then(data => location.reload());
            }
        }
    }
</script>