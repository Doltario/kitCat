
<template>
  <div id="home">
    <ul id="container-cats">
      <li class="cat-bloc"  v-for="cat in cats">
        <img class="cat-img" :src="cat.min">
        <h2>{{ cat.cat_name }}</h2>
      </li>
    </ul>
  </div>
</template>

<script lang="text/javascript" src="./home.js"></script>

<style lang="scss" src="./home.scss" ></style>
