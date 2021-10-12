<template>
    <div>
       <form @submit="formSubmit">
            <div class="form-group mb-0">
                <button v-if="show" class="search-button button-theme">Apply Now</button>
                <h5 v-else class="alert alert-success text-center">Application Sent Successfully</h5>
            </div>
   
           
       </form>


        
    </div>
 
</template>
<script>
    export default{
        props: ['jobid'],
        mounted(){
            console.log('component mounted')
        },
        data(){
            
            return{
                'show':true
            }

        },
        methods:{
            formSubmit(e){
                e.preventDefault();
                axios.post('/application/'+ this.jobid,{

                }).then((response) => {
                    this.show=false
                    
                }).catch((error) => {
                    alert('Something went wrong');
                    
                })
            }
        }
    }
</script>