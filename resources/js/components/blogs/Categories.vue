<template>
    <div class="dashboard">
        <div class="container-fluid">
            <div class="row">
                    <div class="dashboard-content">
                            <div class="dashboard-header clearfix">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6"><h4>Post a Job</h4></div>
                                    <div class="col-sm-12 col-md-6">
                                        <div class="breadcrumb-nav">
                                            <ul>
                                                <li>
                                                    <a href="">Index</a>
                                                </li>
                                                <li>
                                                    <a href="">Dashboard</a>
                                                </li>
                                                <li class="active">Add Categories</li>
                                            </ul>
                                        </div>
                                    </div>
                                    
                                </div>
                         
                            </div>
                            <div class="submit-address dashboard-list">
                                <form @submit.prevent="submitForm()">
                                        <h2 class="bg-grea-3 heading">Basic Information</h2>
                                        <div class="search-contents-sidebar">
                                            <div class="row pad-20">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <div class="form-group">
                                                        <label>Add Category</label>
                                                        <input v-model="formData.category" type="text" class="input-text" name="category" placeholder="Blog Title"  >
                                                    </div>
                                                </div>                                        
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="post-btn">
                                                        <input type="submit" class="btn btn-md button-theme" value="Add Now">      
                                                    </div>
                                                </div>
                                            </div>
                                    </form>
                            </div>
                        <!--Modal starts here -->
                        
                       
                            <Modal
                                v-model="isModal"
                                title="Title"
                                :loading="loading"
                                @on-ok="asyncOK(editable.id)">
                                 <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label>Add Category</label>
                                        <input  class="col-lg-12" v-model="editable.name" type="text"  name="category" placeholder="Blog Title"  >
                                    </div>
                                </div>  
                            </Modal>
                    </div>
            </div>

            <div class="row">
                <div class="dashboard-content">
                    <div class="content-area5">
                        <div class="dashboard-list">
                            <div class="job-info job-info-2">
                                <table v-if="categories" class="table">
                                    <thead>
                                    <tr>
                                         <th>SNO#</th>
                                        <th>Categories Name</th>
                                        <th>slug</th>
                                        
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    
                                        <tbody>
                                            <tr v-for="(category, index) in categories" :key="index" class="responsive-table">
                                                <td>{{index+1}}</td>
                                                <td>{{category.name}}</td>
                                                 <td>{{category.slug}}</td>
                                              
                                                <td class="actions">
                                                  
                                                    <a @click="showModal(category.id)"><i class="fa fa-pencil"></i></a>
                                                    <a @click="deleteCategory(category.id)"><i class="delete fa fa-trash-o"></i></a>
                                                </td>
                                            </tr>
                                    
                                        </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <p class="sub-banner-2 text-center">© 2020 Theme Vessel. All Rights Reserved.</p>
        </div>
</div>
</template>
<script>
import mixins from '../../mixins/common'
export default {
    mixins:[mixins],
     mounted(){
       
          this.loadCategory()
    },
    data(){
        return{
            categories:[],
            isSucess:false,
            formData:{
                category:'',
            },
            editData:{category:''},
            editable:[],
            isModal: false,
            loading:true,
        }
    },
    methods:{
        async submitForm(){
           if(this.formData.category.trim()== ''){
               this.error('oops','category field is required!')
           }else{
               const response = await this.requestApi('POST', 'category/store/', {name:this.formData.category})
               if(response.status == 200){
                   this.loadCategory()
                   this.success('Great!', 'Category added successfully!')
                   this.formData.category=''
               }else{
                   this.error('Oops!!!', 'Something wrong try again!!!')
                   console.log(response)
               }
           }  
        },
        //deleting 
        async deleteCategory(id){
            const response = await this.requestApi('DELETE','category/destroy/'+id)
            if(response.status==200){
                this.success('Great!','Category deleted successfully')
                this.loadCategory()
            }else{
                this.error('Oops!!', 'Soemething went wrong try again!')
                
            }

        },
       async loadCategory(){
             const response = await this.requestApi('GET', 'category/loads/')
            if(response.status==200){
                console.log(this.categories = response.data)
            }else{
                console.log('something went wrong!')
            }
        },
        async showModal(id){
             this.isModal=true
             const response = await this.requestApi('GET', 'category/edit/'+id)
             if(response.status ==200){
                 this.editable = response.data
                 console.log(response.data)
             }


         },
          asyncOK (id) {
            setTimeout(() => {
                this.isModal = false;
                    }, 2000);
                    console.log(this.editable.name)
                    this.updateData(id)
            },

            async updateData(id){
                const response = await this.requestApi('POST','category/update/'+id,{name:this.editable.name})
                if(response.status == 200){
                    this.loadCategory()
                    this.success('Great!','Category has been updated successfully!')
                }else{
                    this.error('oops','Something wrong!')
                }
            }

            
      
    }

}
</script>