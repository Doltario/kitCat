
<template>
  <div id="catCreation" class="container">
    <div class="row">
      <div class="col-xs-12">
        <h1>Ajout d'un chat</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-md-6">
        <form @submit.prevent="createCat($event)">
          <label for="name">Nom :</label>
          <input type="text" class="form-control" name="name" v-model="cat.cat_name"/>
          <input type="file" class="form-control-file" name="loofDocument" @change="changeDocument($event)" accept=".pdf, .jpg, .png"/>
          <button type="submit" class="btn btn-primary" :disabled="loading == true">Create</button>
        </form>
        <div v-if="success" class="alert alert-success mt-3">
          Chat ajouté !
        </div>
        <div v-if="error" class="alert alert-danger mt-3">
          Une erreur est survenue
        </div>
      </div>
    </div>
  </div>
</template>

<script lang="text/javascript" src="./catCreation.js"></script>

<style lang="scss" src="./catCreation.scss" ></style>
