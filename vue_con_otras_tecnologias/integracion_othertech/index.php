<html>
<div id="div-app">
        {{frutas}}
    </div>

<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script>
        //data, methods, props, mounted, created, watch, destroyed
        const myApp={
            data(){
                return{
                    frutas:["manzana","pera","uva"]
                }
            }
        }
        let mountedApp=Vue.createApp(myApp).mount('#div-app')
    </script>

</html>