<template>
    <div class="container">
        <br>
        
        <h2 class="profile-title">My profile</h2>
        <form @submit.prevent="tabselected==='data' ? actualziardatos() : guardarpassword()" id="perfil-form" class="row">
            <div class="col-sm-12 col-md-4">
                <div class="fonto-seccion">
                    <img class="img-profile" id="imgprev" :src="user.img ? '/storage/'+user.img :'/img/user/user_min.jpg'" alt="user-img">
                    <input type="file" style="opacity:0" name="img" id="assetsFieldHandle" 
                                    class="overflow-hidden position-absolute inputFile" @change="onChange" ref="file" accept=".pdf,.jpg,.jpeg,.png"/>
                                
                                    <label for="assetsFieldHandle" class="block cursor-pointer" v-if="this.filelist == null">
                                    <div class="row flex-column align-items-center">
                                     
                                        <span class="arrastre" >Drag your profile picture here or <strong>upload a photo</strong></span>
                                    </div>
                                    </label>
                    
                </div>
                
            </div>
            <div class="col-sm-12 col-md-8">
                <div class="row">
                    <h2 @click.prevent="seleccionar('data')" class="text-data col-3">Your Data</h2>
                    <h2 @click.prevent="seleccionar('seguridad')" class="text-data col-3">Security</h2>
                </div>
                
                <div class="borderdiv"></div>
                <div v-if="tabselected==='data'" class="row">
                        <div class="form-group col-sm-12 col-md-6 row">
                            <label for="email" class="col-md-12 col-form-label text-inbup">Full Name</label>
                            <div class="col-md-12">
                                <input id="email" type="text" class="form-control input-style-file" name="name" v-model="user.name" placeholder="Full name" required autocomplete="email">
                            </div>
                        </div>
                         <div class="form-group col-sm-12 col-md-6 row">
                            <label for="email" class="col-md-12 col-form-label text-inbup">Email</label>
                            <div class="col-md-12">
                                <input  id="email" type="email" class="form-control input-style-file" name="email" v-model="user.email" placeholder="Email" required autocomplete="email" autofocus>
                            </div>
                        </div>
                </div>
                
                
                <div v-if="tabselected==='seguridad'" class="row">
                     <div class="form-group col-sm-12 col-md-6 row">
                            <label for="email" class="col-md-12 col-form-label text-inbup ">Password</label>
                            <div class="col-md-12">
                                <input 
                                v-model="newcont.password" 
                                type="password"
                                name="password"
                                class="form-control input-style-file" 
                                placeholder="Password" 
                                 >
                            </div>
                        </div>
                </div>
                  <div v-if="tabselected==='seguridad'" class="row">
                        <div class="form-group col-sm-12 col-md-6 row">
                            <label for="email" class="col-md-12 col-form-label text-inbup">New Password</label>
                            <div class="col-md-12">
                                <input 
                                id="email" 
                                type="password"
                                v-model="newcont.newPassword" 
                                class="form-control input-style-file" 
                                placeholder="New Password"
                                name="password"
                                 >
                            </div>
                        </div>
                         <div class="form-group col-sm-12 col-md-6 row">
                            <label for="email" class="col-md-12 col-form-label text-inbup">Confirm new password</label>
                            <div class="col-md-12">
                                <input  
                                id="email" 
                                class="form-control input-style-file"
                                type="password"
                                placeholder="Confirm your password"
                                name="password" 
                                v-model="newcont.confirmPassword"   
                                autofocus>
                            </div>
                        </div>
                </div>
                <div class="row justify-content-center">
                    <input type="submit" class="btn-change" value="Save Changes">
                </div>
            </div>
        </form>

    </div>
</template>

<script>

    export default {
        name:"perfil-component",
        props:['user'],
        data() {
            return {
                lastFile: null,
                filelist: null,
                tabselected:"data",
                newcont:{
                    password:"",
                    newPassword:"",
                    confirmPassword:""
                }
            }
        },
        computed: {
            readURL() {
            var imgprev = document.getElementById('imgprev')
            var input = document.getElementById('assetsFieldHandle')
            var src= "user";
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                imgprev.src=e.target.result;
                
              
                }
                reader.readAsDataURL(input.files[0]);
               
            
             }
               
             return src;
            },
           
        },
        methods: {
            seleccionar(tab){
                this.tabselected=tab;
            },
            onChange() {
            this.filelist = [...this.$refs.file.files];
            this.readURL();
            console.log(this.filelist)
            },
            remove(i) {
            this.filelist.splice(i, 1);
            },
            dragover(event) {
            event.preventDefault();
            // Add some visual fluff to show the user can drop its files
            if (!event.currentTarget.classList.contains('bg-green-300')) {
                event.currentTarget.classList.remove('bg-gray-100');
                event.currentTarget.classList.add('bg-green-300');
            }
            },
            dragleave(event) {
            // Clean up
            event.currentTarget.classList.add('bg-gray-100');
            event.currentTarget.classList.remove('bg-green-300');
            },
            drop(event) {
            event.preventDefault();
            this.$refs.file.files = event.dataTransfer.files;
            this.onChange(); // Trigger the onChange event manually
            // Clean up
            event.currentTarget.classList.add('bg-gray-100');
            event.currentTarget.classList.remove('bg-green-300');
            },
            actualziardatos(){
                    var url = `/home/actualizar-perfil/${this.user.id}`;
                    let formData = new FormData(
                        document.getElementById("perfil-form")
                    );
                    if (this.filelist!=null) {
                        formData.append("img", this.filelist[0]);
                    }
                    formData.append("name", this.user.name);
                    formData.append("email", this.user.email);
                    axios.post(url,formData).then((result) => {
                        
                        window.location.reload();
                    }).catch((err) => {
                        
                    });
            },
             guardarpassword() {
            if (
                this.newcont.password == ""
              ) {
                  toastr.error('El campo "Contraseña" no puede estar vacío');
              
              } else if (
                this.newcont.newPassword !=
                this.newcont.confirmPassword &&
                this.newcont.newPassword != ""
              ) {
                  toastr.error('La confirmación de contraseña no es igual a la contraseña indicada');
              } else {
                let urlprueba = "/home/actualizar-password";
                axios
                  .post(urlprueba, this.newcont)
                  .then((res) => {
                    if (res.status == 200) {
                      if (res.data == "incorrecto") {
                           toastr.error('La contraseña indicada es incorrecta');
                      
                      } else {
                        window.location.reload();
                      }
                    }
                  })
                  .catch((e) => {
                    console.log(e);
                  });
              }
                },
        },
    }
</script>

<style lang="scss" scoped>
.profile-title{
    color:#5F01F5;
    font-size: 20px;
    font-family: 'Rubik';
    font-weight: bold;
}
.fonto-seccion{
    background-color: #F2EDFA;
    height: 200px;
    flex-direction: column;
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 12px;
}
.img-profile{
    height: 90px;
    width: 90px;
    border-radius: 50%;
}
.text-data{
    font-size: 20px;
    font-family: 'Valera';
}
.borderdiv{
    width: 100%;
    height: 1px;
    background-color: #76807988;
}
.text-inbup{
    color: #282e2a83;
}
.text-data{
    margin-top: 10px;
}
.input-style-file{
    height: 42px;
    border-radius: 8px;
}
.btn-change{
    background-color: #30019B;
    border-radius: 10px;
    width: 181px;
    color: #ffffff;
    height: 41px;
    border: none;
}
#inputFile {
/*   display: none; */
  margin-bottom: 25px;
}

#image-holder {
  width: 200px;
  min-width: 200px;
  border: 2px dashed rgba(0,0,0,0.3);
  color: rgba(0,0,0,0.8);
  padding: 10px;
  text-align: center;
}

#image-holder:hover {
  cursor: pointer;
}

#image-holder img {
  width: 200px;
  height: auto;
}
.arrastre{
    font-family: 'Valera';
     max-width:187px;
     color:grey;
     font-size: 16px;
     line-height: 24,34px;
}
.arrastre strong{
     font-family: 'Valera';
     color:#5F01F5;
     font-size: 16px;
     line-height: 24,34px;
}
</style>