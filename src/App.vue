<template>
  <HeaderComponent />
  <div class="container app">
    <div class="row">
      <NavBarComponent/>
      <router-view />
    </div>
  </div>
</template>

<script>
import HeaderComponent from "@/components/HeaderComponent.vue";
import NavBarComponent from "./components/NavBarComponent.vue";

export default {
  name: "App",
  components: { HeaderComponent, NavBarComponent },
};
</script>


<style>

.app {
  margin-top: 25px;
}
</style>