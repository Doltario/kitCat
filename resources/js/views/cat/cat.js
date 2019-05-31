import 'axios'

export default {
  data() {
    return {
      cats : {
        'cat_name': null,
        'cat_loof_document_url': null,
      }
    }
  },
  methods: {
    getCatFromApi() {
      let that = this;
      return new Promise((resolve, reject) => {
        const url = `/api/cats/${that.cat.id}`;
        axios.get(url).then((result) => {
          resolve(result.data);
        }, (err) => {
          console.log('Cannot get cat', err);
          reject(err);
        });
      });
    },
    created() {
      let that = this;
      that.getCatFromApi().then( (result) => {
         that.cat_name = result.data.cat_name
      }, (err) => {
        that.error = true
      });
    }
  }
}
