<template>
  <div id="pictures">
    <div class="container">
      <div class="cards-container">
        <div class="card" style="width: 18rem;" v-for="picture in pictures">
          <img class="card-img-top" :src="'/storage/...'" alt="">
          <div class="card-body">
            <p class="card-text">
              {{ picture.description }}
            </p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
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

<script lang="text/javascript" src="./pictures.js"></script>

<style lang="scss" src="./pictures.scss" ></style>
