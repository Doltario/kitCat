// import 'axios'

export default {
  data() {
    return {
      cat: {
        cat_name:null,
      },
      errors: {},
      success: false,
      loaded: true,
    }
  },
  methods: {
    createCat(e) {
      const vm = this;
      if (vm.loaded) {
        vm.loaded = false;
        vm.success = false;
        vm.errors = {};
        e.preventDefault();
        axios.post('/api/cats', vm.cat)
        .then(function (response) {
          console.log("succes");
          vm.success = true;
        })
        .catch(function (error) {
          console.log("error");
          vm.success = false;
        });
      }
    }
  }
}
