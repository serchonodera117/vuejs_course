    //data, methods, props, mounted, created, watch, destroyed
    const myApp={
        data(){
            return{
                usuario:'fi',
                correo:'',
                clave:'',
                nombre:'serch'

            }
        },
        methods:{
            llamadaAlHijo(){
                this.$refs.menuComponent.saludarFromHijo(this.nombre)
            }
        }
    }
    let theApp=Vue.createApp(myApp)