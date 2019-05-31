import 'axios'

export default {
  data() {
    return {
      cats : []
    }
  },
  methods: {
    getCatsFromApi (pageIndex) {
      return new Promise((resolve, reject) => {
        let url = '/api/cats';
        if (pageIndex) {
          url += `?page=${pageIndex}`
        }
        axios.get(url).then((result) => {
          resolve(result.data);
        }, (err) => {
          console.log('Cannot get cat', err);
          reject(err);
        });
      });
    }
  }
