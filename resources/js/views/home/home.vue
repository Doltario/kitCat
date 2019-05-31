<template>
  <div id="home">
    <div class="container">
      <div class="cards-container">
        <div class="card" v-for="cat in cats">
          <img class="card-img-top" :src="'/storage/'+cat.loof_document.loof_document_url" v-if="cat.loof_document">
          <div class="card-body">
            <h5 class="card-title">{{ cat.cat_name }}</h5>
            <p class="card-text">
              Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
            <router-link to="/cat.id" class="btn btn-primary">Go to Foo</router-link>

          </div>
        </div>
        <div class="spacer"></div>
      </div>

      <nav>
        <ul class="pagination">
          <li class="page-item" @click="loadCatsData(prevPageIndex)" :class="{ 'disabled': currentPageIndex == 1 }">
            <a class="page-link">Previous</a>
          </li>
          <li class="page-item" v-for="pageIndex in totalPage" :class="{ 'active': currentPageIndex == pageIndex }">
            <a class="page-link" @click="loadCatsData(pageIndex)">{{ pageIndex }}</a>
          </li>
          <li class="page-item" @click="loadCatsData(nextPageIndex)" :class="{ 'disabled': currentPageIndex == totalPage }">
            <a class="page-link">Next</a>
          </li>
        </ul>
      </nav>
    </div>
  </div>
</template>

<script lang="text/javascript" src="./home.js"></script>

<style lang="scss" src="./home.scss" ></style>
