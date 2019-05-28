
<template>
  <div id="home">
<div id="header">
</div>
<div id="header-title">
<h1> kitCat </h1>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec dolor libero, congue quis lacus vel, sodales sollicitudin ipsum.</p>
</div>
    <ul id="container-cats">
      <li class="cat-bloc"  v-for="cat in cats">
        <img class="cat-img" :src="cat.min">
        <h2>{{ cat.name }}</h2>

      </li>
    </ul>
  </div>
</template>

<script lang="text/javascript" src="./home.js"></script>

<style lang="scss" src="./home.scss" ></style>
