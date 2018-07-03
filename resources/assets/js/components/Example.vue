<template>
    <div class="container">
        <p class="mt-3">
            Llena el formulario y déjanos un mensaje, nos pondremos en contacto contigo
        </p>
        <form @submit.prevent="validate">
            <div class="contacts__line">
                <div class="form-group">
                    <input class="form-control" type="text" placeholder="Nombre Completo" v-model="nombre">
                </div>
                <div class="form-group">
                    <input class="form-control" type="text" placeholder="Email" v-model="email">
                </div>
            </div>
            <div class="form-group">
                <textarea class="form-control" placeholder="Mensaje" name="mess" cols="30" rows="10" v-model="mensaje"></textarea>
            </div>
            <div class="form-group">
                <input class="btn btn-success" type="submit" value="Enviar" v-show="enviar">
            </div>
        </form>
    </div>
</template>



<script>
    export default {
        data() {
            return {
                nombre: '',
                email: '',
                mensaje: '',
                enviar: true
            }
        },
        methods: {
            validate() {
                if (this.nombre != '' && this.email != '' && this.mensaje != '') {
                    this.enviarMail()
                }
                else {
                    swal("Llena todos los campos");
                }
            },

            enviarMail() {
                this.enviar = false;
                axios.post('/enviarMail', {
                    nombre: this.nombre,
                    email: this.email,
                    mensaje: this.mensaje
                }).then(data => {
                    swal("Mensaje enviado, nos pondremos en contacto contigo");
                    this.nombre = '';
                    this.email = '';
                    this.mensaje = '';
                    this.enviar = true;
                }, error => {
                    swal('Ups, algo salió mal, inténtalo de nuevo')
                    this.enviar = true;
                });
            }
        }
    }
</script>
