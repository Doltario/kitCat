
<template>
  <div id="catCreation" class="container">
    <div class="row">
      <div class="col-xs-12">
        <h1>Ajout d'une photo</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-md-6">
        <form @submit.prevent="createPicture($event)">
          <label for="name">Description :</label>
          <textarea type="text" class="form-control" name="name" v-model="picture.description"/>
          <input type="file" class="form-control-file" name="loofDocument" @change="changeImage($event)" accept=".jpg, .png, .jpeg, .gif"/>
          <button type="submit" class="btn btn-primary" :disabled="loading == true">Ajouter</button>
        </form>
        <div v-if="success" class="alert alert-success mt-3">
          Photo ajouté !
        </div>
        <div v-if="error" class="alert alert-danger mt-3">
          Une erreur est survenue
        </div>
      </div>
    </div>
  </div>
</template>

<script lang="text/javascript" src="./pictureCreation.js"></script>

<style lang="scss" src="./pictureCreation.scss" ></style>
