export default {

  data(){
      return{
        Grid: false,
        Line: true

      }

  },
  methods:{

    //show either line or grid
    showGrid(){
        this.Grid = true;
        this.Line = false
        
    },
     showLine(){
        this.Grid = false;
        this.Line = true
       
    },

  
    //dynamic request API using async and await 
   async requestApi(method, url, dataForm){
      try {
       return await axios({
          method: method,
          url: url,
          data: dataForm
        });
        
      } catch (error) {
        return console.log(error)
        
      }
    },

    //notification alert functions down below  
  
      info (title, message) {
          this.$Notice.info({
              title: title,
              desc: message
          });
          
      },
      success (title, message, top) {
          this.$Notice.success({
              title: title,
              desc: message,
              top: 100,
          });
       
         
      },
      warning (title, message) {
          this.$Notice.warning({
              title: title,
              desc: message
          });
      },
      error (title, message) {
          this.$Notice.error({
              title: title,
              desc: message
          });
      }
  

  }

}