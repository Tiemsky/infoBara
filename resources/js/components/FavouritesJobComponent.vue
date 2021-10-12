<template>
    <div>
    
            <div class="form-group fg-2">
                <button v-if="show" @click.prevent="unsaved()" class="search-button sj-btn btn-outline">Unsaved</button>
                 <button v-else @click.prevent="save()" class="search-button sj-btn btn-outline">save Job</button>
                
            </div>


        
    </div>
 
</template>
<script>
    export default{
        props: ['jobid','favourited'],
       
        data(){
            
            return{
                'show':true
            }

        },
         mounted(){
             this.show = this.isJobSavedChecker? true:false
           
        },
        computed:{
            isJobSavedChecker(){
                return this.favourited
            }


        },
        methods:{
            save(){
                axios.post('/save/'+ this.jobid,{}).then((response) => {
                    this.show=true 
                    
                }).catch((error) => {
                    alert('Something went wrong');
                    console.log(error);
                    
                });
             
          
        },
        unsaved(){
              axios.post('/unsaved/'+ this.jobid).then((response) => {
                    this.show=false 
                    
                }).catch((error) => {
                    alert('Something went wrong');
                    
                })
        }
        
    }
    }
</script>