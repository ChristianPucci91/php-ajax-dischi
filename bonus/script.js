// apro istanza vue
var app = new Vue({
  el: '#root',
  data: {
    albums: [],
    value:''
  },
  mounted: function () {
    axios.get('data.php')
      .then(res => {
        this.albums = res.data;
        console.log(this.albums);
    });
  }
  //eseguo chiamata axios e copio nell'array albums
})
