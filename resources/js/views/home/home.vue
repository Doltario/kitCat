
<template>
  <div id="home">
    <ul id="container-cats">
      <li class="cat-block" v-for="cat in cats">
        {{cat}}
        <!-- <img class="cat-img" :src="cat.min"> -->
        <h2>{{ cat.cat_name }}</h2>
      </li>
    </ul>

    <nav aria-label="Page navigation example">
      <ul class="pagination">
        <li class="page-item">
          <a class="page-link" @click="loadCatsData(prevPageIndex)">Previous</a>
        </li>
        <li class="page-item" v-for="pageIndex in totalPage" :class="{'active': currentPageIndex == pageIndex}">
          <a class="page-link" @click="loadCatsData(pageIndex)">{{ pageIndex }}</a>
        </li>
        <li class="page-item">
          <a class="page-link" @click="loadCatsData(nextPageIndex)">Next</a>
        </li>
      </ul>
    </nav>



  </div>
</template>

<script lang="text/javascript" src="./home.js"></script>

<style lang="scss" src="./home.scss" ></style>
