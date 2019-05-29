import 'axios'

export default {
  data() {
    return {
      currentPageIndex: null,
      totalPage: null,
      prevPageIndex: null,
      nextPageIndex: null,
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
    },
    loadCatsData (pageIndex) {
      this.getCatsFromApi(pageIndex).then((result) => {
          this.currentPageIndex = result.current_page;
          this.totalPage = result.last_page;
          if (result.prev_page_url) {
            this.prevPageIndex = result.prev_page_url.split("?page=")[1];
          }
          if (result.next_page_url) {
            this.nextPageIndex = result.next_page_url.split("?page=")[1];
          }
          this.cats = result.data;
      }, (err) => {
          console.log('Cannot get cat from api', err);
      })
    }
  },
  created() {
    this.loadCatsData();
  }
}
