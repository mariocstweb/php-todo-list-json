const endpoint = 'http://localhost/Boolean/php-todo-list-json/api/';
const {createApp} = Vue;
const app = createApp ({
  name:"Todo List",
  data: () =>({
    tasks:[]
  }),
  created(){
    axios.get(endpoint).then(res => {
      this.tasks = res.data;
    })
  }

})

app.mount('#app')