import 'axios'

export default {
  data() {
    return {
      currentPageIndex: null,
      totalPage: null,
      prevPageIndex: null,
      nextPageIndex: null,
      pictures: []
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
    loadCatsData (pageIndex) { // felix@TODO: Move page into a standalone component
      this.getCatsFromApi(pageIndex).then((result) => {
          this.currentPageIndex = result.meta.current_page;
          this.totalPage = result.meta.last_page;
          if (result.links.prev) {
            this.prevPageIndex = result.links.prev.split("?page=")[1];
          }
          if (result.links.next) {
            this.nextPageIndex = result.links.next.split("?page=")[1];
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
