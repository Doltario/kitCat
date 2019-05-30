// import 'axios'
export default {
  data() {
    return {
      cat: {
        cat_name: null,
        loof_document: null
      },
      error: false,
      success: false,
      loading: false,
    }
  },
  methods: {
    reset() {
      this.cat = {
          cat_name: null,
          loof_document: null
      }
    },
    createCat(evt) {
      let that = this;
      if (that.loading == true) return;
      that.success = false;
      that.error = false;
      that.loading = true;
      evt.preventDefault();

      const formData = new FormData();
      formData.append('cat_name', that.cat.cat_name);
      formData.append('loof_document', that.cat.loof_document);
      
      axios.post('/api/cats', formData).then(function (response) {
        that.success = true;
        that.error = false;
        that.loading = false;
        that.reset();
      })
      .catch(function (error) {
        console.log("Cannot create cat", error);
        that.success = false;
        that.error = true;
        that.loading = false;
      });

    },
    changeDocument(evt) {
      this.cat.loof_document = evt.target.files[0];
    }
  }
}
