// import 'axios'
export default {
  data() {
    return {
      picture: {
        picture_description: null,
        image: null,
        cats: []
      },
      error: false,
      success: false,
      loading: false,
    }
  },
  methods: {
    reset() {
      this.picture = {
          picture_description: null,
          image: null
      }
    },
    createPicture(evt) {
      let that = this;
      if (that.loading == true) return;
      that.success = false;
      that.error = false;
      that.loading = true;
      evt.preventDefault();

      const formData = new FormData();
      formData.append('picture_description', that.picture.picture_description);
      formData.append('image', that.picture.image);
      formData.append('cats', that.picture.cats);
      
      axios.post('/api/pictures', formData).then(function (response) {
        that.success = true;
        that.error = false;
        that.loading = false;
        that.reset();
      })
      .catch(function (error) {
        console.log("Cannot create picture", error);
        that.success = false;
        that.error = true;
        that.loading = false;
      });

    },
    changeImage(evt) {
      this.picture.image = evt.target.files[0];
    }
  }
}
