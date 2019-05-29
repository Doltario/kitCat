
<template>
  <div id="home">
    <ul id="container-cats">
      <li class="cat-bloc"  v-for="cat in cats">
        {{cat}}
        <!-- <img class="cat-img" :src="cat.min"> -->
        <h2>{{ cat.cat_name }}</h2>
      </li>
    </ul>

    <b-pagination
      v-model="currentPage"
      :total-rows="rows"
      :per-page="perPage"
      aria-controls="my-table"
    ></b-pagination>

    <b-list-group
      id="container-cats"
      :items="cats"
      :per-page="perPage"
      :current-page="currentPage"
      small
    >

  </b-list-group>


  </div>
</template>

<script lang="text/javascript" src="./home.js"></script>

<style lang="scss" src="./home.scss" ></style>
