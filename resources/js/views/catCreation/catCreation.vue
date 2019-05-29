
<template>
  <div id="catCreation">
    <form @submit.prevent="createCat($event)">
      <label for="name">Nom :</label>
      <input type="text" class="form-control" name="name" v-model="cat.cat_name"/>
      <button type="submit" class="btn btn-primary">Create</button>
    </form>

    <div v-if="success" class="alert alert-success mt-3">
      Chat ajouté !
    </div>
    <a href="/#/"> Voir tous les chats </a>
  </div>
</template>

<script lang="text/javascript" src="./catCreation.js"></script>

<style lang="scss" src="./catCreation.scss" ></style>
